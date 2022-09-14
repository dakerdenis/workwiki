<?php

ob_start();
session_start();

if($_POST['submit']){
    echo 'submit working';
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . "<br>";
    echo $password . "<br>";

} else {
    echo 'submit not working';
}

?>