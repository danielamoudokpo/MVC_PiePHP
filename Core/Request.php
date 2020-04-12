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

            $val = trim(stripslashes(htmlspecialchars($value)));

           $this->request[$key] = $val;
        }

        // var_dump($this->request); 
        return $this->request;
    }
   

}

// $r = new Request;