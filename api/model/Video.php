<?php
//Matt
class Video {
    public $video_id;
    public $user_id;
    public $youtube_id;
    public $start_lat;
    public $start_long;
    public $title;
    public $description;
    public $geo_data;
    public $video_rating;
    public $date_posted;
    public $length;
    public $category;   
    
    function getVideo_id() {
        return $this->video_id;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getYoutube_id() {
        return $this->youtube_id;
    }

    function getStart_lat() {
        return $this->start_lat;
    }

    function getStart_long() {
        return $this->start_long;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getGeo_data() {
        return $this->geo_data;
    }

    function getVideo_rating() {
        return $this->video_rating;
    }

    function getDate_posted() {
        return $this->date_posted;
    }

    function getLength() {
        return $this->length;
    }

    function getCategory() {
        return $this->category;
    }

    function setVideo_id($video_id) {
        $this->video_id = $video_id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setYoutube_id($youtube_id) {
        $this->youtube_id = $youtube_id;
    }

    function setStart_lat($start_lat) {
        $this->start_lat = $start_lat;
    }

    function setStart_long($start_long) {
        $this->start_long = $start_long;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setGeo_data($geo_data) {
        $this->geo_data = $geo_data;
    }

    function setVideo_rating($video_rating) {
        $this->video_rating = $video_rating;
    }

    function setDate_posted($date_posted) {
        $this->date_posted = $date_posted;
    }

    function setLength($length) {
        $this->length = $length;
    }

    function setCategory($category) {
        $this->category = $category;
    }


}
//End Matt 