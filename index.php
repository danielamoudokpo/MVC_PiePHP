<?php

define ('BASE_URI',str_replace('\\','/',substr(__DIR__,strlen ($_SERVER ['DOCUMENT_ROOT'])))) ;

require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));

$app = new Core\Core() ;
$app->run() ;

$app2 = new Daniel() ;
$app2->run() ;

$app3 = new Kokou() ;
$app3->run() ;

$app4 = new Amoudokpo() ;
echo $app4->get_path(); 
$app4->run() ;


