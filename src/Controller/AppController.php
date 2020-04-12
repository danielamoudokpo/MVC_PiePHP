<?php
// namespace Controller;

class AppController {

    public function indexAction(){

        // echo $_SERVER['REQUEST_URI'];
        
        echo 'action';
    }

    public function deleteAction($id){

        // echo $_SERVER['REQUEST_URI'];
        
        echo 'delete';

        // var_dump($id);
    }

}