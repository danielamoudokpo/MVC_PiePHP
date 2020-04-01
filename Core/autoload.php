<?php

function my_autoloder($class){

$path = "./";

$good_class = str_replace('\\','/',$class);

if(is_file('./'.$good_class.'.php')){
    include './'.$good_class.'.php';
    // echo PHP_EOL."./".$good_class.".php".PHP_EOL;
}
elseif (is_file('./'.$class.'.php')) {
    include './'.$class.'.php';
    // echo PHP_EOL."./src/Controller/".$class.".php".PHP_EOL;
}
elseif (is_file('./src/Controller/'.$class.'.php')) {
    include './src/Controller/'.$class.'.php';
    // echo PHP_EOL."./src/Controller/".$class.".php".PHP_EOL;
}
elseif (is_file('./src/'.$good_class.'.php')) {
    include './src/'.$good_class.'.php';
    // echo PHP_EOL."./src/Controller/".$class.".php".PHP_EOL;
}
elseif (is_file('./src/Model/'.$class.'.php')) {
    include './src/Model/'.$class.'.php';
    // echo PHP_EOL."./src/Model/".$class.".php".PHP_EOL;
}
elseif (is_file('./src/'.$good_class.'.php')) {
    include './src/'.$good_class.'.php';
    // echo PHP_EOL."./src/Model/".$class.".php".PHP_EOL;
}
elseif (is_file('./src/'.$good_class.'.php')) {
    include './src/'.$good_class.'.php';
    // echo PHP_EOL."./src/View/".$class.".php".PHP_EOL;
}
elseif (is_file('./src/View/User'.$class.'.php')) {
    include './src/View/User'.$class.'.php';
    // echo PHP_EOL."./src/View/".$class.".php".PHP_EOL;
}

}
// my_autoloder();
spl_autoload_register('my_autoloder');

