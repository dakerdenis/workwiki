<?php include './include/header.php'; ?>
<?php include './db/connection.php'; ?>
<?php
session_start();

if (isset($_SESSION['username'])) {
    //////
} else {
    header("Location: ./login.php");
}

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
<a style="color: red; font-size: 15px;" href="./settings/add_category.php">Добавить категорию</a>
<a style="color: red; font-size: 15px;" href="./settings/add_category.php">Пользователи</a>


    <?php include './include/footer.php'; ?>
</body>

</html>