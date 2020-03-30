<?php
namespace Core ;

// use Router;

class Core 
{

public $db;

public function __construct($args=[]){
    
    require_once ("src/routes.php");

    $this->$db = $args['db'];
 
}

public function run ($db)
        {
   
            $tab = explode('/',$_SERVER['REQUEST_URI']);
            $class = ucfirst($tab[2]).'Controller';
            $method = $tab[3].'Action';

            //static
            if (($routes = Router::get('/'.$tab[2])) != null) {
                echo "custome route found<br />";
                $class = ucfirst($routes['controller']).'Controller';
                $method = $routes['action'].'Action';
                $controller = new $class;
                $controller->$method;
            }
            // dynamic
             if(class_exists($class) === true){  
                $controller = new $class();
                if (method_exists($controller,$method) === false) {
                    $method = 'indexAction';
                    $controller->$method($db);
                }
                else{ 
                    $controller = new $class();
                    $controller->$method($db);
                }
            }
            else{
                echo "404";
                // header('HTTP/1.1 404 Not Found');
                exit;
            }

        }
}

