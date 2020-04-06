<?php
namespace Core;

class ORM

{
    private $email;
    private $password;

    public function  __construct(){
        
       $this->email = $email; 
       $this->password = $password;
    }
    public function create ( $email , $password ) {

    }

    public function read ( $table , $id ) {

    }

    public function update ( $table , $id , $fields ) {

    }

    public function delete ( $table , $id ) {

    }

    public function find ( $table , $params = array ( 'WHERE'=>'1','ORDER BY'=>'id ASC', 'LIMIT'=>'') ) {

    }
}

$orm = new ORM () ;

$orm ->create('articles',array('titre'=>"un super titre ",'content'=>'et voici une super article de blog ','author'=>'Rodrigue'));

$orm ->update('articles',1 ,array('titre' => "un super titre",'content'=>'et voici un super article de blog','author'=>' Rodrigue'));

$orm ->delete('articles',1) ;