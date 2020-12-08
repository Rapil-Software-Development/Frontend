<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['auth_email'];
    $password = $_POST['auth_pass'];
}
?>
