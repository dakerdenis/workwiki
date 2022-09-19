<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Group Wiki</title>

    <!---стили основной страницы--->
    <link rel="stylesheet" href="./styles/style.css">





    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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

<div class="add__subcategory__wrapper">
    <form method="POST" action="../db/add_subcategory.php" class="add_subcategory_form">
        <div class="add_subcategory_desc">Добавить подкатегорию</div>
        <!-----блок------>
        <div class="add_subcategory_block">
            <div class="add_subcategory_block-desc">Название</div>
            <div class="add_subcategory_block-input">
                <input type="text" id="subcategory_name" name="subcategory_name">
            </div>
        </div>
        <p id="name_error">Заполните это поле</p>
        <!-----блок------>
        <div class="add_subcategory_block">
            <div class="add_subcategory_block-desc">
                Родительская категория
            </div>
            <div class="add_subcategory_block-select">
                <select name="sub_id" id="sub_id">
                    <option value="">выберите родительскую категорию</option>
                    <?php
                    $query = "SELECT * FROM category";
                    $select_category = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($select_category)) {
                        $id = $row['id'];
                        $category_name = $row['category_name'];
                    ?>
                        <option value="<?php echo $id; ?>"><?php echo $category_name; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <!--------->
        <div class="add_subcategory_block_textarea">
            <!-- Create the editor container -->
            <div id="editor">

            </div>
        </div>
        <div class="add_subcategory_block">
            <button class="add_susb_button">Додбавить подкатегорию</button>

        </div>
    </form>


    <script>
        
    document.querySelector('.add_susb_button').addEventListener('click', function() {
        let result = true;
        let name = document.getElementById('subcategory_name');

        if(!name.value){
            result = false;
            document.getElementById('name_error').classList.remove('hidden');

        }else {
            document.getElementById('name_error').classList.add('hidden');
        }
    });


    </script>

</div>






<?php
include '../include/footer.php';
?>