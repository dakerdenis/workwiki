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
        $key_words = $row['key_words'];
    }

?>

    <div class="sub__page__wrapper">
        <div class="sub_page_container">
            <!------------>
            <div class="sub_page_desc">
                <!--назад к списку статей-->
                <div class="sub_page_desc_back">
                    <a href="./index.php"> <span>&#8678;</span>
                        <p>Назад к списку статей</p>
                    </a>
                </div>
                <!--название статьи--->
                <div class="sub_page_desc-name">
                    <a href="../index.php">Главная</a><span>&#8250;</span>
                    <p><?php echo $sub_name; ?></p>
                </div>
                <!---номер статьи в БД------>
                <div class="sub_page_desc-number">
                    Номер статьи: <span><?php echo $id; ?></span>
                </div>
                <!---ключевые слова-->
                <div class="sub_page_key_words">
                    Ключевые слова: <span><?php echo $key_words; ?></span>
                </div>

            </div>
            <!------------>

            <div class="sub_page_content">
                <div class="sub_page_text">
                    <?php echo $sub_content; ?>
                </div>
            </div>

        </div>
        <!--редактировать статью-->
        <div class="sub_page__edit_link">
            <?php
            if (isset($_SESSION['role'])) {
                if ($_SESSION['role'] == 'admin') {
                    echo '
                                <a href=../index.php?source_page=edit_category&sub_cat_id=' . $id . '">Редактировать публикацию</a>
                                ';
                } else if ($_SESSION['role'] == 'user') {
                    echo '';
                } else if ($_SESSION['role'] == 'superadmin') {
                    echo '
                    <a href="./index.php?source_page=edit_category&sub_cat_id=' . $id . '">Редактировать публикацию</a>
                                ';
                }
            }
            ?>
        </div>
    </div>

<?php
}
?>