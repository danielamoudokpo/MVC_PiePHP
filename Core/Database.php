<?php
// namespace Core;

// class Database{

//     public $host;
//     public $database;
//     public $username;
//     public $password;

//     public function __constuct(){

//         $this->host = $host;
//         $this->database = $database;
//         $this->username = $username;
//         $this->password = $password;

//     }

//     public function connection($host ,$database ,$username ,$password ){
                      
//             var_dump($host);
//             var_dump($database);
//             var_dump($username);
//             var_dump($password);

//             $db = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8', $username,$password);

//             return $db;
        
       

//     }
    

// }
// $host = "localhost";
// $database = "MVC_PiePHP";
// $username = "root";
// $password = "daniel2014";

// $f = new Database ();
// $f->connection($host ,$database ,$username ,$password);



$host = "localhost";
$database = "MVC_PiePHP";
$username = "root";
$password = "daniel2014";

$db = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8', $username,$password);