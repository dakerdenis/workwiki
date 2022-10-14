<?php
include './db/connection.php';
$sub_id = $_GET['sub_id'];

$q = "SELECT * FROM `sub_category` WHERE id = '{$sub_id}'; ";

$query_sub = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($query_sub);
$name = $row['name'];
?>
<div class="add_files__form">
    <div class="add__files__form__block">
        <div class="add_files__name">
            Добавление файлов в категорию: <span>"<?php echo $name; ?>"</span>
        </div>
        <div class="add_files__go_back">
            <a href="./index.php?source_page=edit_category&sub_cat_id=<?php echo $sub_id; ?>"><span>&#8678;</span>
                <p>Вернуться обратно</p>
            </a>
        </div>
        <form class="add_files__form-form" action="./db/add_file_code.php" method="post" enctype="multipart/form-data">
            <div class="add__files__form__block">

            </div>
            <div class="add__files__form__block__desc">
                Добавьте файл - максимальный размер 3мб
            </div>
            <input type="hidden" name="sub_id" value="<?php echo $sub_id; ?>">
            <div class="add__files__form__block__input">
                <input name="file" id="file" type="file">
                <p>
                    <?php
                    if (isset($_GET['message'])) {
                        if ($_GET['message'] == '1') {
                            echo 'Слишком большой размер,не более 10мб';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="add__files__form__block__button">
                <input type="submit" value="Загрузить файл" name="add_file">
            </div>
        </form>


        <div class="add_files__downloaded">
            <div class="add_files__downloaded_name">
                Список уже загруженных файлов:
            </div>
            <div class="add_files__downloaded_wrapper">
                <?php

                $query_files = "SELECT * FROM `files` WHERE `file_sub_id` = '{$sub_id}'";
                $query_files_result = mysqli_query($connection, $query_files);

                while ($row3 = mysqli_fetch_assoc($query_files_result)) {
                    $_id = $row3['id'];
                    $name = $row3['name'];
                    $filesize = $row3['filesize'];
                    $filetype = $row3['filetype'];
                    $file_sub = $row3['file_sub_id'];
                    $number = 1;
                ?>

                    <div class="add_files__downloaded_element">
                        <div class="element__number_name">
                            <div class="add_files__downloaded_element_number">
                                <?php echo $_id; ?>
                            </div>
                            <div class="add_files__downloaded_element_name">
                                <?php echo $name; ?>
                            </div>
                            <div class="add_files__downloaded_element_filetype">
                                <?php echo $filetype ?>
                            </div>
                            <div class="add_files__downloaded_element_filesize">
                                <?php echo $filesize ?>
                            </div>
                        </div>
                        <div class="add_files__downloaded_element_delete">
                            <a href="./db/delete_file.php?sub_id=<?php echo $sub_id;?>&file_id=<?php echo $_id; ?>">Удалить</a>
                            
                        </div>
                    </div>


                <?php
                    $number ++;
                }

                ?>








            </div>
        </div>



    </div>
</div>