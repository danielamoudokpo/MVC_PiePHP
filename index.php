<?php

define ('BASE_URI',str_replace('\\','/',substr(__DIR__,strlen ($_SERVER ['DOCUMENT_ROOT'])))) ;

// echo $_SERVER ['DOCUMENT_ROOT'];
// echo BASE_URI;

require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));

include "./Core/Database.php";

// var_dump($db);

// $app = new Core\Core(['db'=>$db]);
// $app->run($db);

// $exp = new UserController(['db'=>$db]);
// $exp->indexAction($db);

// $app2 = new Daniel() ;
// $app2->run() ;

// $app3 = new Kokou() ;
// $app3->run() ;

$app4 = new Amoudokpo() ;
$app4->run() ;

if (isset($_POST['email']) && isset($_POST['password'])) {
    extract($_POST);
    $app5 = new UserModel(['db'=>$db,'email'=>$email,'password'=>$password]);
    $app5->create_user($db);
    $app5 = run();
}


