<?php

    session_start();
    UNSET( $_SESSION['login']);
    UNSET( $_SESSION['username']);
    header("Location: ../login.php");
    session_write_close();
    ob_flush();
    exit();

?>