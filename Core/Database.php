<?php
namespace Core;  

class Database{
    // public $db;
    public static $host = "localhost";
    public static $database= "MVC_PiePHP";
    public static $username= "root";
    public static $password= "daniel2014";

    public function __construct(){

        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

    }

    public  function getConnection(){

            $db = new \PDO('mysql:host='.self::$host.';dbname='.self::$database.';charset=utf8', self::$username,self::$password);


            return $db;  
              
    } 
}

// $f = new Database();
// $f->getConnection();



//  $host = "localhost";
// $database = "MVC_PiePHP";
// $username = "root";
// $password = "daniel2014";

// $db = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8', $username,$password);