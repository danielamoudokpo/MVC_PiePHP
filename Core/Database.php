<?php

$host = "localhost";
$database = "meetic";
$username = "root";
$password = "daniel2014";
$charset = "UTF-8";

$db = new PDO ("mysql:host='.$host.';dbname ='.$database.';charset ='.$charset.'",$username,$password);

echo 'hello';