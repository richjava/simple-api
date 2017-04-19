<?php

//Matt
class VideoDao extends Dao {

    private $db = null;

    public function __destruct() {
        // close db connection
        $this->db = null;
    }

    //Function to find video by ID
    public function getVideoById($id, $db) {
        //Initialise SQL
        $sql = 'SELECT * FROM videos WHERE video_id = :id';
        //Query the DB using the above Prepared Statement
        $statement = $db->prepare($sql);
        //bind id to prepared statement
        $statement->bindParam(':id', $id);
        //Execute prepared statement
        $statement->execute();
        //Fetch Result as assoc array
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        //if video not found return null
        if ($result === FALSE) {
            return null;
        }
        //If the video is found, map the returned array to an instance of a $video object
        else {
            $video = new Video;
            VideoMapper::map($video, $result);
            return $video;
        }
    }

    //Function to find all videos by ID
    public function getVideosByUserId($id, $db) {
        //Initialise SQL
        $sql = 'SELECT * FROM videos WHERE user_id = :id';
        //Query the DB using the above Prepared Statement
        $statement = $db->prepare($sql);
        //bind id to prepared statement
        $statement->bindParam(':id', $id);
        //Execute prepared statement
        $statement->execute();
        //Fetch Result as assoc array
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //if videos not found return null
        if ($result === FALSE) {
            return null;
        }
        //Map each array to a video object and return the result
        $videos = array();
        foreach ($result as $row) {
            $video = new Video;
            VideoMapper::map($video, $row);
            $videos[] = $row;
        }
        return $videos;
    }

}

//End Matt 