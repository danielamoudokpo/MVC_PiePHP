<?php
namespace Core;

class Request{

    public  $request ;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }

    public function getQueryParams(){

        foreach ($this->request as $key => $value) {   

            $value = trim($value);
           $value = htmlspecialchars($value);
           $value = stripslashes($value);

           $this->request[$key] = $value;
        }

        // var_dump($this->request); 
        return $this->request;
    }
   

}

// $r = new Request;