<?php
namespace Core;

class Entity {


    public $orm;
    public $table;
    public $params;
    public $tab;
    public $id;
    public function __construct($params){
        // var_dump($params);
        echo '<br>';
        $class = get_class($this);
        $table = strtolower(str_replace(substr($class,-5,5),"",$class)."s");

        $this->table = $table;
        $this->orm = new ORM();
        $this->db = Database::getConnection();
        foreach ($params as $key => $value) {
            $this->$key = $value;
        }  
            $this->id = 3; 
        
        if (count($params) == 1 && intval($this->id) && array_key_exists("id",$params) && strlen($this->id) > 0){
            //  var_dump($this->id);
           $tab = $this->orm->read('users',$this->id);
           $this->tab = $tab;
           var_dump($tab);
           foreach ($tab as $key => $value) {
            $this->key = $value;
        }   
            echo'oui';
        }else{
            $this->params = $params; 
            // echo 'non';
        }
       
    }

    public function  create(){
        // var_dump($this->p$params);
        $this->orm->create($this->table,$this->params);
    }

    public function update(){

        $this->orm->update($this->table,$this->id,$this->params);
    }

    public function delete(){

        $this->orm->delete($this->table,$this->id);

    }
    public function find(){

        $this->orm->find($this->table,$this->params);
    }

 
}
