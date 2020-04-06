<?php
namespace Core ;
// use Router;
// use Core\Database;

class Core 
{
public $db;

public function __construct($args=[]){
    
    require_once ("src/routes.php"); 
}

public function run ()
        {
   
            $tab = explode('/',$_SERVER['REQUEST_URI']);
            $class = ucfirst($tab[2]).'Controller';
            //static
            if (($routes = Router::get('/'.$tab[2]))) {
                echo "custom route found<br />";
                $class_static = ucfirst($routes['controller']).'Controller';
                $method_static = $routes['action'].'Action';
                $controller = new $class_static;
                $controller->$method_static();

            // dynamic
            } 
            else if(class_exists($class)){ 
                $controller = new $class();
                $method = $tab[3].'Action'; 
                if (method_exists($controller,$method) === false) {
                    $method = 'indexAction';
                    $controller->$method();
                }
                else{ 
                   
                    $controller = new $class();
                    $controller->$method();
                }
            }
            else{
                echo "404";
                // header('HTTP/1.1 404 Not Found');
                exit;
            }

        }
}



// var_dump($db);

