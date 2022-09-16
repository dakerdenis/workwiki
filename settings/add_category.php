<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Group Wiki</title>

    <!---стили основной страницы--->
    <link rel="stylesheet" href="./styles/style.css">


</head>
<?php
include '../include/navigation.php';
include '../db/connection.php';
?>
<style>
    <?php
    include '../styles/style.css';
    ?>
</style>

<div class="add__category__wrapper">
    <div class="add__category__block">
        <div class="add_category__desc">
            Добавление категорий
        </div>
        <form action="../db/add_category.php" method="POST" class="add_category__form">
            <div class="add_category_form_block">
                <p>Название подкатегорий</p>
                <div class="add_category_form_input">
                    <input type="text">
                </div>
            </div>
            <div class="add_category_form_block">
                <button type="submit">Добавить категорию</button>
            </div>
        </form>
    </div>

    <div class="category__list">
        <div class="category__list_desc">Список всех имеющихся категорий:</div>
    </div>
</div>






<?php
include '../include/footer.php';
?>