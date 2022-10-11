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
        case '';
            include './include/main.php';
            break;

        case 'search_result';
            include './content/search_result.php';
            break;

        case 'sub_page';
            include './content/sub_page.php';
            break;
        case 'edit_category';
        include './db/edit_subcategory.php';
        break;

        default:
            include './include/main.php';
            break;
    };

    ?>

    <?php



    ?>




    <?php include './include/footer.php'; ?>
</body>

</html>