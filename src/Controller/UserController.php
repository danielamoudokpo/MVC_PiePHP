<?php
// namespace Controller;

class UserController extends \Core\Controller {
    public function __construct(){

        $this->db = \Core\Database::getConnection();
        $this->request = new \Core\Request;
    }   
    // user/index
    public function indexAction(){       
    
        $all = new \Model\UserModel($_POST);
        // $all->read(); 
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

        $params = $this->request->getQueryParams();
        // $r = ['WHERE'=>'id = 8'];
        $user = new \Model\UserModel($params);
        // $res = $user->find();
        // $user->create();
        // $user->email_exit_check($email);
        // var_dump($res);

       

    }
}
