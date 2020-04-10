<?php
namespace Core;

class ORM 

{
    private $email;
    private $password;

    public function __construct(){

        $this->db = Database::getConnection();
    }
    public function create($table,$fields) {

        $columns = [];
        $placeholder = [];
        $val = [];
        foreach($fields as $col => $value){
            $columns[] = $col;
            $placeholder[] = '?';
            $val[] = $value;
        }
        $column_list = implode(',',$columns);
        $placeholder_list = implode(',',$placeholder);

        $rqt = "INSERT INTO $table ($column_list)  VALUES ($placeholder_list)";
        $send = $this->db->prepare($rqt);
        $send->execute($val);
    }

    public function read($table,$id ) {

        $rqt = "SELECT * from $table where id = ?";
        $send = $this->db->prepare($rqt);
        $send->execute([$id]);

        $row = $send->fetch(\PDO::FETCH_ASSOC); 
        
        return $row;

    }

    public function update ( $table , $id , $fields ) {   
        var_dump($id);
        foreach ($fields as $key => $value) {
        $rqt = "UPDATE $table SET $key = '$value' WHERE id = $id";
        $send = $this->db->prepare($rqt);
        $send->execute();
            
        } 

    }

    public function delete ($table ,$id ) {
        $rqt = "DELETE FROM $table WHERE id = $id ";
        $cooking = $this->db->prepare($rqt);
        $cooking ->execute();
    }

    public function find ( $table , $params = array ( 'WHERE'=>'1','ORDER BY'=>'id ASC', 'LIMIT'=>'1') ) {

        $rqt = "SELECT * from $table";
        foreach ($params as $key => $value) {

            $rqt = $rqt .' '.$key.' ' .$value.' ' ;

            $cooking = $this->db->prepare($rqt);

            $cooking->execute();

        }

        $row = $cooking->fetchAll();

        var_dump($row);

    }
}   
