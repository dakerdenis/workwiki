<?php
include '../include/header.php';
include '../include/navigation.php';
include '../db/connection.php';
?>
<style>
    <?php
    include '../styles/style.css';
    ?>
</style>

<?php

if (isset($_GET['sub_id'])) {
    $id = $_GET['sub_id'];

    $query_subpage = "SELECT * FROM sub_category WHERE id = '{$id}'";
    $select_sub_category = mysqli_query($connection, $query_subpage);



    while ($row = mysqli_fetch_assoc($select_sub_category)) {
        $id = $row['id'];
        $sub_id = $row['id'];
        $sub_name = $row['name'];
        $sub_content = $row['content'];
        $image = $row['image'];
    }

?>

    <div class="sub__page__wrapper">
        <div class="sub_page_container">
            <!------------>
            <div class="sub_page_desc">
                <!--назад к списку статей-->
                <div class="sub_page_desc_back">
                    <a href="../index.php"> <span>&#8678;</span> <p>Назад к списку статей</p></a>
                </div>
                <!--название статьи--->
                <div class="sub_page_desc-name">
                    <a href="../index.php">Главная</a><span>&#8250;</span><p><?php echo $sub_name; ?></p>
                </div>
                <!---номер статьи в БД------>
                <div class="sub_page_desc-number">
                    Номер статьи: <span><?php echo $id; ?></span>
                </div>
            </div>
            <!------------>

            <div class="sub_page_content">
                <div class="sub_page_text">
                    <p><?php echo $sub_content; ?></p>
                </div>
                <div class="sub_page_image">
                    <a target="blank" href="../styles/imgs/<?php echo $image; ?>">
                        <img src="../styles/imgs/<?php echo $image; ?>" alt="<?php echo $image; ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>


<?php
    include '../include/footer.php';
} else {
    header("Location: ../index.php");
} ?>