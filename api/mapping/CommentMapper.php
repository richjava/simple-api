<?php

//Start Matt
class CommentMapper {

    private function __construct() {
        
    }

    public static function map(Comment $comment, array $properties) {
        if (array_key_exists('comment_id', $properties)) {
            $comment->setComment_id($properties['comment_id']);
        }

        if (array_key_exists('user_id', $properties)) {
            $comment->setUser_id($properties['user_id']);
        }
        if (array_key_exists('video_id', $properties)) {
            $comment->setVideo_id($properties['video_id']);
        }

        if (array_key_exists('parent_id', $properties)) {
            $comment->setParent_id($properties['parent_id']);
        }
        if (array_key_exists('comment_string', $properties)) {
            $comment->setComment_string($properties['comment_string']);
        }
        
        if (array_key_exists('time', $properties)) {
            $comment->setTime($properties['time']);
        }
        if (array_key_exists('comment_rating', $properties)) {
            $comment->setComment_rating($properties['comment_rating']);
        }
    }

}

//End Matt
