<?php
namespace Core;

class Request{



    public  $request;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }

    public function getQueryParams(){
        // var_dump($this->request);

        foreach ($this->request as $key => $value) {   

           $value = htmlspecialchars($value);
           $value = stripslashes($value);
           $value = trim($value);

           var_dump($value);
           $this->request[$key] = $value;

        //    var_dump($value);
        }

        // var_dump($this->request); 
        return $this->request;
    }
   

}

// $r = new Request;