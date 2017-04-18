<?php

//Start Matt
class Tag_VideoMapper {

    private function __construct() {
        
    }

    public static function map(Tag_Video $tag_video, array $properties) {
        if (array_key_exists('tag_video_id', $properties)) {
            $tag_video->setTag_video_id($properties['tag_video_id']);
        }

        if (array_key_exists('video_id', $properties)) {
            $tag_video->setVideo_id($properties['video_id']);
        }
        if (array_key_exists('tag_id', $properties)) {
            $tag_video->setTag_id($properties['tag_id']);
        }
    }

}

//End Matt
