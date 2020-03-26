<?php

if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['pd'])) {

    extract($_POST);

    var_dump($email);

    var_dump($pd);

    var_dump($_SERVER);

    var_dump($_GET);
}

