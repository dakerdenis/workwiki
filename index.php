<?php include './include/header.php'; ?>
<?php include './db/connection.php'; ?>
<?php
session_start();



?>

<body>

    <?php

    if (isset($_SESSION['username'])) {
        include './include/main.php';
    } else {
        header("Location: ./login.php");
    }

    ?>
    <?php include './include/navigation.php' ?>


    <?php include './include/footer.php'; ?>
</body>

</html>