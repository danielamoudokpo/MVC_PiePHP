<?php
// require ("Database.php");

// namespace Controller; 

// var_dump($host);

// use Core\Controller;

// use Core\Database;

class UserController extends Core\Database {
    // public static $db;
    public static $r;
    public static $p;
    // var_dump($db);
    public function __construct(){
        // $db = static::getConnection();
        self::$r = self::$host;
    }   
    // user/index
    public function indexAction(){
        $db = Core\Database::getConnection();

        // display all user email
        $rqt = "SELECT email from users ";

        $send = $db->prepare($rqt);

        $send->execute();

        $row = $send->fetchAll(PDO::FETCH_OBJ);

       print_r($row);     
            foreach ($row as $value) {
                // echo $value.'<br />';
            }
        echo "UserController/indexAction<br />";
    }
    // user/userpage
    public function userpageAction(){
        // display one user in particulair  
 
        echo self::$r;

        // echo "UserController/userpageAction<br /> ";
    }

    public function addAction(){
        // add  
        // echo "ddd";
        $this->render("register");

          }
}
