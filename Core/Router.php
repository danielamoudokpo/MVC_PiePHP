<?php
namespace Core;

class Router
    {      
        private static $routes ;
        public static function connect($url,$route)
        {

            self::$routes[$url] = $route ;
            // var_dump(self::$routes);   
        }

    public static function get($url){

        if (array_key_exists($url, self::$routes)) {

            return self::$routes[$url];

        }else{

            return null;
        }
   
    }
        // var_dump(self::$routes);   
        // var_dump($_SERVER['REQUEST_URI']);  

        // $link = ($_SERVER['REQUEST_URI']);
        //  foreach(self::$routes as $key => $value){
        //     //   print_r( $key);
        //       $tab = explode("/",$key);
        //         // print_r($tab);
        //         foreach ($tab as $k => $v) {
        //             //  print_r($v);
        //             $r = "/{([^}]+)}/";
        //             // print_r($r);
        //             if (preg_match($r,$v)) {

        //                 // var_dump($link);
        //                 $l = explode("/",$link);
        //                 var_dump($l);
        //                 var_dump($l[3]); 
        //             }
                    
        //          }
                //  array_shift($match);
                //  var_dump($match);
         
        // var_dump(self::$routes);
        public function call(){

        }
    
       
    }

