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
        $videos = array();
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
            //Standardising returned data
            $videos[] = $video;
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

    //Function to find all videos by lat, long  bounds
    public function getVideosByLatLong($swLat, $swLong, $neLat, $neLong, $db) {
//        var_dump($swLat, $swLong, $neLat, $neLong, $db);
        //Initialise SQL        
        $sql = 'SELECT * FROM videos WHERE
        (CASE WHEN :swLatOne < :neLatOne       
            THEN start_lat BETWEEN :swLatTwo AND :neLatTwo
            ELSE start_lat BETWEEN :neLatThree AND :swLatThree
        END) 
        AND
        (CASE WHEN :swLongOne < :neLongOne
            THEN start_long BETWEEN :swLongTwo AND :neLongTwo
            ELSE start_long BETWEEN :neLongThree AND :swLongThree
        END)';
        //Query the DB using the above Prepared Statement
        $statement = $db->prepare($sql);
        //bind lat long parameters to prepared statement, each value needs to be bound individually as bindParam will only bind the value to the first match. PDO::PARAM_INT needs to be specified as otherwise they get bound as strings and matching logic will fail        
        $statement->bindParam(':swLatOne', $swLat, PDO::PARAM_INT);
        $statement->bindParam(':neLatOne', $neLat, PDO::PARAM_INT);
        $statement->bindParam(':swLatTwo', $swLat, PDO::PARAM_INT);
        $statement->bindParam(':neLatTwo', $neLat, PDO::PARAM_INT);
        $statement->bindParam(':neLatThree', $neLat, PDO::PARAM_INT);
        $statement->bindParam(':swLatThree', $swLat, PDO::PARAM_INT);
        $statement->bindParam(':swLongOne', $swLong, PDO::PARAM_INT);
        $statement->bindParam(':neLongOne', $neLong, PDO::PARAM_INT);
        $statement->bindParam(':swLongTwo', $swLong, PDO::PARAM_INT);
        $statement->bindParam(':neLongTwo', $neLong, PDO::PARAM_INT);
        $statement->bindParam(':neLongThree', $neLong, PDO::PARAM_INT);
        $statement->bindParam(':swLongThree', $swLong, PDO::PARAM_INT);

        //Execute prepared statement
        $statement->execute();
        //Fetch Result as assoc array
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
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

    function getVideosBySearchTerm($search_term, $db) {
        //Init SQL
        $sql = 'SELECT * from videos WHERE title LIKE %:search_term% OR description LIKE %:search_term% OR category LIKE %:search_term%';
        
        //Query the DB using the above Prepared Statement
        $statement = $db->prepare($sql);
        $statement->bindParam(':search_term', $search_term, PDO::PARAM_STR);     
        
        //Execute prepared statement
        $statement->execute();
        //Fetch Result as assoc array
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);        
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