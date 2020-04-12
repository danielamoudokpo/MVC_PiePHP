<?php
namespace Core;

class Entity {


    public $orm;
    public $table;
    public $params;
    public $tab;
    public $relation;

    //test
    public $id;
  
    public function __construct($params){
        // $this->table = $table;
        //   var_dump($params);
        $this->orm = new ORM();
        $this->db = Database::getConnection();
        $class = get_class($this);
        $this->table = stripslashes(strtolower(str_replace(substr($class,-5,5),"",$class)."s"));
        // print_r($this->relations);
       
        // var_dump($this->id);
        if (count($params) == 1 && array_key_exists("id",$params) && strlen($params['id']) > 0){
               $tab = $this->orm->read($this->table,$params['id']);
               foreach ($tab as $key => $value) {
                $this->$key = $value;
            }    
            }else{
                $this->params = $params; 
                foreach ($params as $key => $value) {
                    $this->$key = $value;
                }
            }

        // var_dump($this);        

        if (isset($this->relations)) {

            foreach ($this->relations as $key => $value) {
                if ($key=="has_one") {
                    foreach ($value as $key => $val) {
                        if ($key == "table") {
                            $t = $val."s";
                            $prm = $this->orm->find($t,['WHERE'=>"id =".' '.$this->promo_id]);
                            $newClass = '\Model\\'.ucfirst($val."Model");
                        }
                    }   
                    $has_one = new $newClass($prm);
                    // $has_one->affiche();
                }
                else if($key == "has_many"){
                    foreach ($value as $key => $val) {
                        if ($key == "table") {
                            $t = $val."s";
                            $user_id= $this->id;
                            $prm = $this->orm->find($t,['WHERE'=>"user_id =".' '.$user_id]); 
                            $newClass = '\Model\\'.ucfirst($val."Model");
                        }
                    }
                    $has_many = new $newClass($prm);
                    // var_dump($has_many);   
                    // $has_many->affiche(); 
                }
                else if($key == "many_to_many"){
                     if ( array_key_exists("table1",$value) && array_key_exists("table2",$value) ) {
                        $t1= $value["table1"];
                        $t2= $value["table2"];
                        $tab1 = $value["table1"].'s';
                        $tab2 = $value["table2"].'s';
                        $t = $tab1.'_'.$tab2;
                
                        $prm = $this->orm->find($t,['WHERE'=>"user_id =".' '.$user_id]); 
                        foreach ($prm as $key => $value) {
                            
                            if ($key = $value["food_id"]) {
                               
                                $list = $this->orm->find($tab2,['WHERE'=>"id =".' '.$key]); 
                                }
                        }
                            $newClass = '\Model\\'.ucfirst($t2."Model");
                            $many_to_many = new $newClass($list);
                            // $many_to_many->affiche();
                        
                    }
                    
                }

            }
        }  

        // var_dump($params);
        
       
    }

    public function  create(){

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
