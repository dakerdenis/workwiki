<?php
    include '../include/header.php';
    include '../include/navigation.php';
    ?>
<style>
    <?php
        include '../styles/style.css';
    ?>
</style>

<?php

    if(isset($_GET['sub_id'])){
        $sub_getid=$_GET['sub_id'];

        $query = "SELECT * FROM sub_category WHERE id = '{$sub_getid}'";
        $select_sub_category = mysqli_query($connection, $query);



        while ($row = mysqli_fetch_assoc($select_sub_category)) {
            $id = $row['id'];
            $sub_id = $row['id'];
            $sub_name = $row['name'];
            $sub_content=$row['content'];
          }

?>

<div class="sub__page__wrapper">
    <div class="sub__page__content">
        <div class="sub_page_desc">
            <div class="sub_page_desc-name">
                <?php ?>
            </div>
        </div>
    </div>
</div>


<?php 

    include '../include/footer.php';
?>