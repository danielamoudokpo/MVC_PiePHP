<?php

define ('BASE_URI',str_replace('\\','/',substr(__DIR__,strlen ($_SERVER ['DOCUMENT_ROOT'])))) ;

require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));

$app = new Core\Core();
$app->run();

// $exp = new UserController(['db'=>$db]);
// $exp->indexAction($db);

// $app2 = new Controller\Daniel() ;
// $app2->run() ;

// $app2 = new Daniel() ;
// $app2->run() ; 

// $app3 = new Kokou() ;
// $app3->run() ;

// $app4 = new Amoudokpo() ;
// $app4->run() ;

// if (isset($_POST['email']) && isset($_POST['password'])) {
//     extract($_POST);
//     $app5 = new UserModel(['email'=>$email,'password'=>$password]);
//     $app5->register();
// }


