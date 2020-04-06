<?php


class UserController extends Core\Controller   {
    public function __construct(){

        $this->db = Core\Database::getConnection();
    }   
    // user/index
    public function indexAction(){
       
        $rqt = "SELECT email from users ";

        $send = $this->db->prepare($rqt);

        $send->execute();

        $row = $send->fetchAll(PDO::FETCH_OBJ);
            foreach ($row as $value) {
                 print_r ($value).'<br />';
            }
        echo "UserController/indexAction<br />";
    }
    // user/userpage
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
}
