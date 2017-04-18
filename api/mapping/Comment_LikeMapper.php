<?php

//Start Matt
class Comment_LikeMapper {

    private function __construct() {
        
    }

    public static function map(Comment_Like $comment_like, array $properties) {
        if (array_key_exists('comment_like_id', $properties)) {
            $comment_like->setComment_like_id($properties['comment_like_id']);
        }

        if (array_key_exists('user_id', $properties)) {
            $comment_like->setUser_id($properties['user_id']);
        }
        if (array_key_exists('comment_id', $properties)) {
            $comment_like->setComment_id($properties['comment_id']);
        }
    }

}

//End Matt
