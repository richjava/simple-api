<?php
//Matt 
class Comment {
    public $comment_id;
    public $user_id;
    public $video_id;
    public $parent_id;
    public $comment_string;
    public $time;
    public $comment_rating;
    
    function getComment_id() {
        return $this->comment_id;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getVideo_id() {
        return $this->video_id;
    }

    function getParent_id() {
        return $this->parent_id;
    }

    function getTime() {
        return $this->time;
    }

    function getComment_rating() {
        return $this->comment_rating;
    }

    function setComment_id($comment_id) {
        $this->comment_id = $comment_id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setVideo_id($video_id) {
        $this->video_id = $video_id;
    }

    function setParent_id($parent_id) {
        $this->parent_id = $parent_id;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setComment_rating($comment_rating) {
        $this->comment_rating = $comment_rating;
    }
    
    function getComment_string() {
        return $this->comment_string;
    }

    function setComment_string($comment_string) {
        $this->comment_string = $comment_string;
    }



}
//End Matt 