<?php

//Start Matt
class Video_LikeMapper {

    private function __construct() {
        
    }

    public static function map(Video_Like $video_like, array $properties) {
        if (array_key_exists('video_like_id', $properties)) {
            $video_like->setVideo_like_id($properties['video_like_id']);
        }

        if (array_key_exists('user_id', $properties)) {
            $video_like->setUser_id($properties['user_id']);
        }
        if (array_key_exists('video_id', $properties)) {
            $video_like->setVideo_id($properties['video_id']);
        }
    }

}

//End Matt
