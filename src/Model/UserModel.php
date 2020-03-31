<?php

class UserModel
{
    public $db;
    public $email;
    public $password;

    public function __construct($args=[]){
        $this->db = $args['db'];
        $this->email = $args['email'];
        $this->password = $args['password'];
    }

    public function create_user($db){
        $rqt = "INSERT INTO users (email,password) 
                values (:mail,:pd)";
        $send = $db->prepare($rqt);
        $send->bindParam(":mail",$this->email);
        $send->bindParam(":pd",$this->password);

        $send->execute();
    }

}








