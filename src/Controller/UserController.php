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

        $obj = new Core\Request;
        $params = $obj->getQueryParams();
        // $email ="test@gmailr.com";
        // var_dump(($params));
        $r = ['WHERE'=>'id = 3'];
        $user = new UserModel($r);
        // $user->email_exit_check($email);
      
        $res = $user->find();

        // var_dump($res);

    }
}
