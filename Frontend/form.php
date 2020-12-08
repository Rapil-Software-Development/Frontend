<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['auth_email'];
    $password = $_POST['auth_pass'];
}
$key=1;
if ($key==1) {
    $filename="index.html";
}
$data=file_get_contents($filename);
echo $data;
?>
