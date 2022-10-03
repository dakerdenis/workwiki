<?php
include './connection.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password =  $_POST['password'];

    $query = " INSERT INTO `users` ( `id`, `username`, `password`,`role`)  
    VALUES ('','{$username}','{$password}','{$role}')";

     echo $query;
     $addnew__user = mysqli_query($connection, $query);

     header('Location: ../index.php?source_page=add_user');
 } else{
    echo 'error';
 }


?>