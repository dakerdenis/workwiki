<?php include './include/header.php'; ?>
<?php include './db/connection.php'; ?>
<?php
session_start();



?>

<body>
<?php include './include/navigation.php' ?>
    <?php

   // if (isset($_SESSION['username'])) {
   //     include './include/main.php';
   // } else {
   //     header("Location: ./login.php");
   // }
//





include './include/main.php' ;
    ?>



    <?php include './include/footer.php'; ?>
</body>

</html>