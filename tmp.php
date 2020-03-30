<?php  

$a = "save";
if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['pd'])) {
    // var_dump($_POST);
    // var_dump($_SERVER);
    // var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($_SERVER as $key => $value) {
        echo ' <pre>'.$key.'=>'.$value.'</pre>';
    }  ?>

    <?php foreach ($_POST as $key => $value) {
        echo ' <pre>'.$key.'=>'.$value.'</pre>';
    }  ?>

<?php foreach ($_GET as $key => $value) {
        echo ' <pre>'.$key.'=>'.$value.'</pre>';
    }  ?>
</body>
</html>
 
<?php

}
