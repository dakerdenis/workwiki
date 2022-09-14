<?php include './include/header.php'; ?>
<?php include './db/connection.php'; ?>
<?php
        session_start();


        
?>
<body>

<?php

if (isset($_SESSION['username'])) {
    //////
} else {
    header("Location: ./login.php");
}

?>
    <?php include './include/navigation.php' ?>
    <div class="wiki__wrapper">
        <div class="wiki_infoblock">
            <div class="wiki__infoblock_test">
                A-Group Wiki
            </div>
            <div class="wiki_infoblock_content">
            
                <div class="infoblock__category_wrapper">
                    <?php

                    $query = "SELECT * FROM category";
                    $select_category = mysqli_query($connection, $query);



                    while ($row = mysqli_fetch_assoc($select_category)) {
                        $id = $row['id'];
                        $category_name = $row['category_name'];
                        $category_access = $row['category_access'];

                    ?>
                    <div class="category__wrapper__block">
                        <a href="#"><?php echo $category_name; ?></a>
                    </div>
                        
                    <?php
                    }

                    ?>
                </div>



            </div>
        </div>
    </div>


    <?php include './include/footer.php'; ?>
</body>

</html>