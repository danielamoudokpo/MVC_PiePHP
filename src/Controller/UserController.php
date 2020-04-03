<?php


// namespace Controller; 

// use Core\Controller;

class UserController  {
    // public static $db;
    public static $r;
    public static $p;
    // var_dump($db);
    public function __construct(){
        $this->db = Core\Database::getConnection();
        // self::$r = self::$host;
         self::$r = Core\Database::$host;
    }   
    // user/index
    public function indexAction(){
       
        $rqt = "SELECT email from users ";

        $send = $this->db->prepare($rqt);

        $send->execute();

        $row = $send->fetchAll(PDO::FETCH_OBJ);

    //    print_r($row);     
            foreach ($row as $value) {
                 print_r ($value).'<br />';
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
        // $this->render("register");

          }
        
    public function regiterAction(){
            // add  
            // echo "ddd";
        $this->render("register");
    
              }
}
