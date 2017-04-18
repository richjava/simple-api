<?php
//Start Matt
class CategoryMapper {

    private function __construct() {
        
    }

    public static function map(Category $category, array $properties) {
        if (array_key_exists('category_id', $properties)) {
            $category->setCategory_id($properties['category_id']);
        }

        if (array_key_exists('category_name', $properties)) {
            $category->setCategory_name($properties['category_name']);
        }

    }

}
//End Matt
