<?php
header('Access-Control-Allow-Origin: http://localhost:8383');
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
        if(!empty($requestParts[2])){
            //e.g http://www.example.com/users/12345/items
            include('entities/' . $requestParts[2] . '.php');
            $className = ucfirst($requestParts[2]) . 'Api';
            $methodName = $requestParts[0] . '_' . $requestParts[2];
            $param = $requestParts[1];
        }else{
            //e.g http://www.example.com/items/12345
            include('entities/' . $requestParts[0] . '.php');
            $className = ucfirst($requestParts[0]) . 'Api';
            $methodName = strtolower($_SERVER['REQUEST_METHOD']);
            $param = !empty($requestParts[1]) ? $requestParts[1] : null;  
        }             
        $obj = new $className();
        call_user_func(array($obj, $methodName), $param);
    }

}

$api = new Api();
$api->bootstrap();
