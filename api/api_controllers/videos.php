<?php

/**
 * API for Videos.
 */
//Start Matt
class VideosApi {

    /**
     * Get all items or an item by id.
     * HTTP method: GET
     * Endpoints:  api/videos/Id
     * @param int $id
     */
    function get($id = null) {
        if ($id) {
            //Get video from db
            $videoDao = new VideoDao;
            //Establish DB connection
            $db = $videoDao->getDb();
            //Get video by Id
            $video = $videoDao->getVideoById($id, $db);
            echo json_encode($video);
        }
    }

//    /**
//     * Update an item.
//     * HTTP method: GET
//     * Endpoint: api/items/[itemId]
//     * @param int $id
//     */
//    function put($id) {
//        //simulating getting item from db for update
//        parse_str(file_get_contents("php://input"), $post_vars);
//        $name = $post_vars['name'];
//        $item = array('name' => 'Item name', 'userId' => 3);
//        $item['name'] = $name;
//        echo json_encode($item);
//    }
//
//    /**
//     * Create a new item.
//     * HTTP method: POST
//     * Endpoint: api/items
//     */
//    function post() {
//        //simulating inserting item into db
//        $name = $_POST['name'];
//        $userId = $_POST['userId'];
//        $item = array('name' => $name, 'userId' => $userId);
//        echo json_encode($item);
//    }
//
//    /**
//     * Delete an item.
//     * HTTP method: DELETE
//     * Endpoint: api/items/[itemId]
//     * @param int $id
//     */
//    function delete($id) {
//        //simulating deleting item from db
//        $item = array('name' => 'Item name');
//        echo json_encode($item);
//    }
//
//    /**
//     * Get all videos for a user.
//     * HTTP method: GET
//     * Endpoint: api/users/videos/id
//     * @param int $id
//     */
    function users_videos($id) {
        //Get video from db
        $videoDao = new VideoDao;
        //Establish DB connection
        $db = $videoDao->getDb();
        //Get video by Id
        $videos = $videoDao->getVideosByUserId($id, $db);
        echo json_encode($videos);
    }
//     * Get all videos by lat long coordinates.
//     * HTTP method: GET
//     * Endpoint: api/latlong/videos/swLat/swLong/neLat/neLong
//     * @param float $swLat float $swLong float $neLat float $neLong  
//     */

    function latlong_videos($swLat, $swLong ,$neLat , $neLong) {
        //Get video from db
        $videoDao = new VideoDao;
        //Establish DB connection
        $db = $videoDao->getDb();
        //parameters need to be specified as doubles as otherwise the get passed as strings causing logic errors
        $swLat = (double) $swLat;
        $swLong = (double) $swLong;
        $neLat = (double) $neLat;
        $neLong = (double) $neLong;
        //Query the databse
        $videos = $videoDao->getVideosByLatLong($swLat, $swLong ,$neLat , $neLong, $db);
        echo json_encode($videos);
    }

}

//End Matt