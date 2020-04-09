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
        $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES,'UTF-8');
        echo $new;
        // var_dump($_POST);
        // extract($_POST);
        $params = new Core\Request ;
        $params->getQueryParams() ;
        // var_dump($params);  
        $user = new UserModel($params,"users");
        // $user->update();
    }
}
