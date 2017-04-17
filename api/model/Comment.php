<?php
//Matt 
class Comment {
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


}
//End Matt 