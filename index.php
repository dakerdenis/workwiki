<?php include './include/header.php'; ?>
<?php include './db/connection.php' ?>
<body>
<?php include './include/navigation.php' ?>
    <div class="wiki__wrapper">
        <div class="wiki_infoblock">
            <div class="wiki__infoblock_test">
                A-Group Wiki
            </div>
            <div class="wiki_infoblock_content">
                <?php 

$query = "SELECT * FROM category";
$select_category = mysqli_query($connection, $query);



while ($row = mysqli_fetch_assoc($select_category)) {
    $id = $row['id'];
    $clinic_name = $row['category_name'];
    $clinic_numbers = $row['category_access'];


?>
               
            
            </div>
        </div>
    </div>


    <?php include './include/footer.php'; ?>
</body>

</html>