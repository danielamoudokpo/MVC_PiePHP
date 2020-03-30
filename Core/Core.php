<?php
namespace Core ;

// use Router;

class Core extends Router
{

public $db;

public function __construct($args=[]){
    
    require_once ("src/routes.php");

    $this->$db = $args['db'];
 
}

public function run ($db)
        {
    // echo __CLASS__ . " [ OK ]" .'<br>' ;
    // echo $_SERVER['REQUEST_URI'];    
    $tab = explode('/',$_SERVER['REQUEST_URI']);
    $class = ucfirst($tab[2]).'Controller';
    $method = $tab[3].'Action';

    //static

    if (($routes = Router::get($_SERVER['REQUEST_URI'])) != null) {
        echo "custome roote found<br />";

        var_dump($routes);

        // var_dump($routes);
    }

    // dynamic
     if(class_exists($class) === true){  

        $controller = new $class();
        if (method_exists($controller,$method) === false) {
            $method = 'indexAction';
            // var_dump($class,$method); 
            $controller->$method($db);
        }
        else{ 
            // var_dump($class,$method);
            $controller = new $class();
            $controller->$method($db);
        
         }
    }else{
        echo "404";
        header("HTTP/1.0 404 Not Found");
    }

        }
}

