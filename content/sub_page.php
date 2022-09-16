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
        echo $_GET['sub_id'];
    }



    include '../include/footer.php';
?>