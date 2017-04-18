<?php
//Matt
class Tag_Video {
    public $tag_video_id;
    public $video_id;
    public $tag_id;
    

    function getVideo_id() {
        return $this->video_id;
    }

    function getTag_id() {
        return $this->tag_id;
    }

    function setVideo_id($video_id) {
        $this->video_id = $video_id;
    }

    function setTag_id($tag_id) {
        $this->tag_id = $tag_id;
    }
    
    function getTag_video_id() {
        return $this->tag_video_id;
    }

    function setTag_video_id($tag_video_id) {
        $this->tag_video_id = $tag_video_id;
    }
}
//End Matt 