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
    <div class="main__page__wrapper">
        <?php include './include/navigation.php' ?>
        <div class="main__page__block__nav_content">



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
                case 'add_files';
                    include './db/add_file.php';
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


        </div>


        <?php include './include/footer.php'; ?>
    </div>

</body>

</html>