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
        $sql = 'SELECT * FROM video WHERE VideoId =' . $id;
        //Query the DB using the above SQL
        $result = $this->query($sql)->fetch();
        //if clinic not found return null
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

}

//End Matt 