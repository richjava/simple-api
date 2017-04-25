<?php
//Matt
class Video_Like {
    public $video_like_id;
    public $user_id;
    public $video_id;
    
    function getVideo_like_id() {
        return $this->video_like_id;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getVideo_id() {
        return $this->video_id;
    }

    function setVideo_like_id($video_like_id) {
        $this->video_like_id = $video_like_id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setVideo_id($video_id) {
        $this->video_id = $video_id;
    }


}
//End Matt 