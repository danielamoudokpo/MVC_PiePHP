<?php
// namespace Model;


class UserModel extends Core\Entity
{
    
    // public $email;
    // public $password;
    public $args; 

    // public function __construct($args){
    //     $this->db = Core\Database::getConnection();
    //     // $this->args = $args;
      
    //     $this->email = $args['email'];
    //     $this->password = $args['password'];
    // }

    // public function __construct($args=[]){
    //     // $this->db = $args['db'];
    //     $this->email = $args['email'];
    //     $this->password = $args['password'];
       
    // }

    public function create(){

        $rqt = "INSERT INTO users (email,password) 
                values (:mail,:pd)";
        $send = $this->db->prepare($rqt);
        $send->bindParam(":mail",$this->email);
        $send->bindParam(":pd",$this->password);

        $send->execute();
    }

    public function read(){

        $rqt = "SELECT email from users ";
        $send = $this->db->prepare($rqt);
        $send->execute();
        $row = $send->fetchAll(PDO::FETCH_ASSOC);
            foreach ($row as $value) {
                 print_r ($value).'<br />';
            }
        // select email from users where id = 1;
    }

    public function update(){

    }

    public function delete(){

    }

}








