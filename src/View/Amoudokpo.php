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
        echo "ff";  
        ?>
        <!doctype html>
        <html lang ="en">
        <head>
        <meta charset ="UTF -8"/>
        <meta name ="viewport"content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale =1.0,minimum-scale=1.0"/>
        <meta http-equiv ="X-UA-Compatible"content="ie=edge"/>
        <title> Pie PHP </title >
        </head>
        <body>
        <? $view ="mom"; ?>
        </body>
        </html>
<?php
    }

    
}