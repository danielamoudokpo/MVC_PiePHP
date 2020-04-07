<?php
namespace Core;

class Entity {

    // public $email;
    // public $password;
    public $orm;
    public function __construct($args){
        var_dump($args);

        $class = get_class($this);
        $this->orm = new ORM();
        $this->db = Database::getConnection();
        // $this->args = $args;
        if (array_key_exists("id",$args)){

            $this->orm->read('users',$args['id']);
            // ORM::read("users",$args['id']);
        }else{
            $this->email = $args['email'];
            $this->password = $args['password'];
        }
        // var_dump($args);
        
    }
}
