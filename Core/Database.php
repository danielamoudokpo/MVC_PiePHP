<?php
$host = "localhost";
$database = "MVC_PiePHP";
$username = "root";
$password = "daniel2014";

try {
    $db = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8', $username,$password);
} catch (\Throwable $th) {
    throw $th;
}


