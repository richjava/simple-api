<?php
//Start Matt
class VideoMapper {

    private function __construct() {
        
    }

    public static function map(Video $video, array $properties) {
        if (array_key_exists('video_id', $properties)) {
            $video->setVideo_id($properties['video_id']);
        }

        if (array_key_exists('user_id', $properties)) {
            $video->setUser_id($properties['user_id']);
        }
        if (array_key_exists('youtube_id', $properties)) {
            $video->setYoutube_id($properties['youtube_id']);
        }

        if (array_key_exists('start_lat', $properties)) {
            $video->setStart_lat($properties['start_lat']);
        }
        if (array_key_exists('start_long', $properties)) {
            $video->setStart_long($properties['start_long']);
        }
        if (array_key_exists('title', $properties)) {
            $video->setTitle($properties['title']);
        }
        if (array_key_exists('description', $properties)) {
            $video->setDescription($properties['description']);
        }
        if (array_key_exists('geo_data', $properties)) {
            $video->setGeo_data($properties['geo_data']);
        }
        if (array_key_exists('video_rating', $properties)) {
            $video->setVideo_rating($properties['video_rating']);
        }
        if (array_key_exists('date_posted', $properties)) {
            $video->setDate_posted($properties['date_posted']);
        }
        if (array_key_exists('length', $properties)) {
            $video->setLength($properties['length']);
        }
        if (array_key_exists('category', $properties)) {
            $video->setCategory($properties['category']);
        }
    }

}
//End Matt
