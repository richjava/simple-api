<?php
//Matt 
class Tag {
    public $tagId;
    public $tag_string;
    public $tag_metaphone;
    
    function getTagId() {
        return $this->tagId;
    }

    function getTag_string() {
        return $this->tag_string;
    }

    function getTag_metaphone() {
        return $this->tag_metaphone;
    }

    function setTagId($tagId) {
        $this->tagId = $tagId;
    }

    function setTag_string($tag_string) {
        $this->tag_string = $tag_string;
    }

    function setTag_metaphone($tag_metaphone) {
        $this->tag_metaphone = $tag_metaphone;
    }


}
//End Matt 