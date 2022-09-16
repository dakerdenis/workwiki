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
<a style="color: red; font-size: 15px;" href="./settings/add_subcategory.php">Добавить подкатегорию</a>
<a style="color: red; font-size: 15px;" href="./settings/edit_category.php">Добавить категорию</a>


    <?php include './include/footer.php'; ?>
</body>

</html>