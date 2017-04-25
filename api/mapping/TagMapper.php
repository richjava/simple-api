<?php

//Start Matt
class TagMapper {

    private function __construct() {
        
    }

    public static function map(Tag $tag, array $properties) {
        if (array_key_exists('tag_id', $properties)) {
            $tag->setTagId($properties['tag_id']);
        }

        if (array_key_exists('tag_string', $properties)) {
            $tag->setTag_string($properties['tag_string']);
        }
        if (array_key_exists('tag_metaphone', $properties)) {
            $tag->setTag_metaphone($properties['tag_metaphone']);
        }
    }

}

//End Matt
