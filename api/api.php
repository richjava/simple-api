<?php

header('Access-Control-Allow-Origin: http://[::1]');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

//below allows access to all
//header('Access-Control-Allow-Origin: *');
/*
 * API front controller.
 */
class Api {

    /**
     * Wire the incoming request to the API methods.
     */
    function bootstrap() {
        $requestParts = explode('/', $_GET['request']);
        $params = array();
        if (!empty($requestParts[2])) {
            //e.g. http://www.example.com/users/items/12345            
            include('api_controllers/' . $requestParts[1] . '.php');
            $className = ucfirst($requestParts[1]) . 'Api';
            $methodName = $requestParts[0] . '_' . $requestParts[1];
            //Create an array of parameters (Parameters will always be located after [2] in the $_GET array
            for ($i = 2; $i < (sizeof($requestParts)); $i++) {
                $params[] = $requestParts[$i];
            }
        } else {
            //e.g http://www.example.com/items/12345
            include('api_controllers/' . $requestParts[0] . '.php');
            $className = ucfirst($requestParts[0]) . 'Api';
            $methodName = strtolower($_SERVER['REQUEST_METHOD']);
            $params[] = (!empty($requestParts[1]) ? $requestParts[1] : null);
        }
        $obj = new $className();
        call_user_func_array(array($obj, $methodName), $params);
    }

//    System config
    public function init() {
        //Load required classes
        spl_autoload_register(array($this, 'loadClass'));
    }

    //Class loading function (called in init)
    public function loadClass($name) {
        //array of classes to be laoded
        $classes = array(
            'Category' => 'model/Category.php',
            'Comment' => 'model/Comemnt.php',
            'Comment_like' => 'model/Comment_like.php',
            'Tag' => 'model/Tag.php',
            'User' => 'model/User.php',
            'Video' => 'model/Video.php',
            'Video_Like' => 'model/Video_Like.php',
            'CategoryDao' => 'dao/CategoryDao.php',
            'CommentDao' => 'dao/ComemntDao.php',
            'Comment_likeDao' => 'dao/Comment_likeDao.php',
            'Dao' => 'dao/Dao.php',
            'TagDao' => 'dao/TagDao.php',
            'UserDao' => 'dao/UserDao.php',
            'VideoDao' => 'dao/VideoDao.php',
            'Video_LikeDao' => 'dao/Video_LikeDao.php',
            'CategoryMapper' => 'mapping/CategoryMapper.php',
            'CommentMapper' => 'mapping/ComemntMapper.php',
            'Comment_likeMapper' => 'mapping/Comment_likeMapper.php',
            'TagMapper' => 'mapping/TagMapper.php',
            'UserMapper' => 'mapping/UserMapper.php',
            'VideoMapper' => 'mapping/VideoMapper.php',
            'Video_LikeMapper' => 'mapping/Video_LikeMapper.php',
        );
        //Exception handler if class not found
        if (!array_key_exists($name, $classes)) {
            die('Class"' . $name . '"not found.');
        }
        require_once $classes[$name];
    }

    //Function to get the controller directory
    private function getController($page) {
        return self::PAGE_DIR . $this->module . '/' . $page . '-controller.php';
    }

    //Function to check if the requested page has a controller
    private function hasController($page) {
        return file_exists($this->getController($page));
    }

}

$api = new Api();
$api->init();
$api->bootstrap();

