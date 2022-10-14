<?php
    include './db/connection.php';
    $sub_id = $_GET['sub_id'];

    $q="SELECT * FROM `sub_category` WHERE id = '{$sub_id}'; ";

    $query_sub = mysqli_query($connection , $q);
    $row = mysqli_fetch_assoc($query_sub);
    $name = $row['name'];
?>
<div class="add_files__form">
    <div class="add__files__form__block">
        <div class="add_files__name">
            Добавление файлов в категорию:  <span>"<?php echo $name; ?>"</span>
        </div>
        <form class="add_files__form-form" action="./db/add_file_code.php" method="post" enctype="multipart/form-data">
            <div class="add__files__form__block">

            </div>
            <div class="add__files__form__block__desc">
                Добавьте файл - максимальный размер 3мб
            </div>
            <div class="add__files__form__block__input">
                <input type="file">
            </div>
            <div class="add__files__form__block__button">
                <button>Загрузить</button>
            </div>
        </form>


        <div class="add_files__downloaded">
            <div class="add_files__downloaded_name">
                Список уже загруженных файлов:
            </div>
            <div class="add_files__downloaded_wrapper">
                <div class="add_files__downloaded_element">
                    <div class="element__number_name">
                        <div class="add_files__downloaded_element_number">
                            1
                        </div>
                        <div class="add_files__downloaded_element_name">
                            Название файла
                        </div>
                        <div class="add_files__downloaded_element_name">
                            pdf
                        </div>
                        <div class="add_files__downloaded_element_name">
                            340kb
                        </div>
                    </div>
                    <div class="add_files__downloaded_element_delete">
                        Удалить
                    </div>
                </div>




            </div>
        </div>



    </div>
</div>