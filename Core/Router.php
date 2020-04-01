<?php
namespace Core;

class Router
    {      
    private static $routes ;
    public static function connect($url,$route)
    {
        self::$routes[$url] = $route ;
        // var_dump($route);   
    }

    public static function get($url){
        //  var_dump($route); 
        if (array_key_exists($url, self::$routes)) {

            return self::$routes[$url];

        }else{

            return null;
        }
    }

}
