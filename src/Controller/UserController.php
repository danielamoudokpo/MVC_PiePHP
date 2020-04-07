<?php
// namespace Controller;

class UserController extends Core\Controller {
    public function __construct(){

        $this->db = Core\Database::getConnection();
    }   
    // user/index
    public function indexAction(){       
    
        $all = new UserModel($_POST);
        $all->read(); 
    }
    public function userpageAction(){
        
        // display one user in particulair  
        echo'userpage';
    }

    public function addAction(){
        // add  
        echo "ddd";
    }
        
    public function registerAction(){ 

        $this->render("register"); 
    }

    public function createAction(){
        // var_dump($_POST);
        // extract($_POST);
        $user = new UserModel($_POST);
        $user->create();
    }
}
