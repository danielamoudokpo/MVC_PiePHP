<?php

class UserController{

    public $db;

    public function __construct($args=[]){
        $this->db = $args['db'];
    }   
    // user/index
    public function indexAction($db){
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
        
        echo "UserController/userpageAction<br /> ";
    }

    public function addAction(){
        // add  
        
        echo "UserController/addAction<br /> ";
    }
}
