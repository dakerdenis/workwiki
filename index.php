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
    $admin_page = '';
    if (isset($_GET['source_page'])) {
        $admin_page = $_GET['source_page'];
    }


    switch ($admin_page) {
        case 'add_subcategory':
            include './settings/add_subcategory.php';
            break;
        case 'add_category':
            include './settings/add_category.php';
            break;
        case 'add_user':
            include './settings/add_user.php';
            break;
    };


    include './include/main.php'; ?>

    <a style="color: red; font-size: 15px;" href="./index.php?source_page=add_subcategory">Добавить подкатегорию</a>
    <a style="color: red; font-size: 15px;" href="./index.php?source_page=add_category">Добавить категорию</a>
    <a style="color: red; font-size: 15px;" href="./index.php?source_page=add_user">Пользователи</a>


    <?php include './include/footer.php'; ?>
</body>

</html>