<?php
var_dump($_POST);

var_dump(empty($_POST['auth_pass']));

$login = $_POST['auth_email'];
$password = $_POST['auth_pass'];

if(empty($login) || empty($password)) {
    echo "Error";
}
?>
