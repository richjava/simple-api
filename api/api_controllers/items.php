<?php

/**
 * API for Items.
 */
class ItemsApi {

    /**
     * Get all items or an item by id.
     * HTTP method: GET
     * Endpoints:  api/items or api/items/[itemId]
     * @param int $id
     */
    function get($id = null) {
        if ($id) {
            //simulating getting item from db
            $item = (object) array('name' => 'Item name', 'userId' => 1);
            echo json_encode($item);
        } else {
            //simulating getting items from db
            $item1 = (object) array('name' => 'Item 1 name', 'userId' => 1);
            $item2 = (object) array('name' => 'Item 2 name', 'userId' => 2);
            $items = array($item1, $item2);
            echo json_encode($items);
        }
    }


    /**
     * Update an item.
     * HTTP method: GET
     * Endpoint: api/items/[itemId]
     * @param int $id
     */
    function put($id) {
        //simulating getting item from db for update
        parse_str(file_get_contents("php://input"), $post_vars);
        $name = $post_vars['name'];
        $item = array('name' => 'Item name', 'userId' => 3);
        $item['name'] = $name;
        echo json_encode($item);
    }

    /**
     * Create a new item.
     * HTTP method: POST
     * Endpoint: api/items
     */
    function post() {
        //simulating inserting item into db
        $name = $_POST['name'];
        $userId = $_POST['userId'];
        $item = array('name' => $name, 'userId' => $userId);
        echo json_encode($item);
    }

    /**
     * Delete an item.
     * HTTP method: DELETE
     * Endpoint: api/items/[itemId]
     * @param int $id
     */
    function delete($id) {
        //simulating deleting item from db
        $item = array('name' => 'Item name');
        echo json_encode($item);
    }

    /**
     * Get all items for a user.
     * HTTP method: GET
     * Endpoint: api/users/[userId]/items
     * @param int $id
     */
    function users_items($id) {
        //simulating getting items from db
        $item1 = (object) array('name' => 'Item 1 name', 'userId' => $id);
        $item2 = (object) array('name' => 'Item 2 name', 'userId' => $id);
        $items = array($item1, $item2);
        echo json_encode($items);
    }

}
