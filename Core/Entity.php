<?php
namespace Core;

class Entity {


    // public $orm;
    public $table;
    public $args;
    public function __construct($args,$table){
        // var_dump($args);
        $class = get_class($this);
        // var_dump($class);
        $this->table = $table;
        $this->orm = new ORM();
        $this->db = Database::getConnection();

        foreach ($args as $key => $value) {

            $this->$key = $value;
        } 
        var_dump($this->email);
        if (array_key_exists("id",$args) && strlen($this->id) > 0){

           $tab = $this->orm->read('users',$this->id);
           foreach ($tab as $key => $value) {
            $this->$key = $value;
        }
            // var_dump($tab);
            // var_dump($this->email);
            // var_dump($args);
        }else{
           
            $this->args = $args; 
            // var_dump($args);
           
        }
       
    }

    public function  create(){


        $this->orm->create($this->table,$this->args);

    }

    public function update(){

        $this->orm->update($this->table,$this->id,$tab);
    }
}
