<?php
    include './connection.php';
    if(isset($_GET['file_id'])){
        $id =  $_GET['file_id'];
        $sub_id = $_GET['sub_id'];

        $q = "DELETE FROM `files` WHERE `id`='{$id}'";
        $query__delete =  mysqli_query($connection, $q);

    
        header('Location: ../index.php?source_page=add_files&sub_id=' . $sub_id);
    }
?>