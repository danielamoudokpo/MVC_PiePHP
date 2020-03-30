<?php
namespace Core;

class Router
    {
       
    private static $routes ;
    public static function connect($url,$route)
    {
        self::$routes[$url] = $route ;

        // var_dump($routes);

        // var_dump($route);
        
    }

    public static function get($url){

        // var_dump($_SERVER['REQUEST_URI']);
         var_dump($routes);
        // var_dump($url);
        $a = explode('/',$url);
        $class = $a[2];
        // var_dump($class);

        if (array_key_existes($class,self::$routes)) {

            return true;

        }else{
            return false;
        }

        

        // retourne un tableau associatif contenant
        // - le controller a instancier
        // - la methode du controller a appeler
    }

}
