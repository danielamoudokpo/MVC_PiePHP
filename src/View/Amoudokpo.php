<?php
$GLOBALS = $_SERVER['REQUEST_URI']; 
// echo $GLOBALS;

class Amoudokpo
{
    private $GLOBALS;

    function __constructor(){
        global $GLOBALS;

        $this->path =& $GLOBALS;
    }
    public function get_path(){
        // $my_path = $_SERVER['REQUEST_URI'];
        return $this->path;
    }
    public function run ()
    {
        echo __CLASS__ . " [ amoudokpo ]" .'<br>' ;
    }
}






