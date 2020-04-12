<?php

namespace Core; 

Router::connect('/register',['controller'=>'user','action'=>'add']) ;

Router::connect ('/',['controller'=>'app','action'=>'index']) ;

Router::connect('/delete/{id}',['controller'=>'app','action'=>'delete']) ;

// Router::connect('/delet/{id}',['controller'=>'app','action'=>'delet']) ;


