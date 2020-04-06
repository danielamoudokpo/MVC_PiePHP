<?php

class UserModel 
{
    
    private $email;
    private $password;

    public function __construct($args=[]){
        // $this->db = $args['db'];
        $this->email = $args['email'];
        $this->password = $args['password'];

        $this->db = Core\Database::getConnection();

    }

    public function register_user(){
        $rqt = "INSERT INTO users (email,password) 
                values (:mail,:pd)";
        $send = $this->db->prepare($rqt);
        $send->bindParam(":mail",$this->email);
        $send->bindParam(":pd",$this->password);

        $send->execute();
    }

}








