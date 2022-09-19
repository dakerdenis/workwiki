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

    <script src="jquery-3.6.0.min.js"></script>
</head>


<style>
    #form-container {
  width: 500px;
}

.row {
  margin-top: 15px;
}
.row.form-group {
  padding-left: 15px;
  padding-right: 15px;
}
.btn {
  margin-left: 15px;
}

.change-link {
  background-color: #000;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
  bottom: 0;
  color: #fff;
  opacity: 0.8;
  padding: 4px;
  position: absolute;
  text-align: center;
  width: 150px;
}
.change-link:hover {
  color: #fff;
  text-decoration: none;
}

img {
  width: 150px;
}

#editor-container {
  height: 130px;
}
</style>
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
    <form>
        <div class="row">
            <div class="col-xs-4">
                
                <a class="change-link" href='#'>Change picture</a>
            </div>
            <div class="col-xs-8">
                <div class="form-group">
                    <label for="display_name">Display name</label>
                    <input class="form-control" name="display_name" style="border: 1px red solid" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control" name="location" style="border: 1px red solid" type="text" value="">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label for="about">About me</label>
            <input name="about" type="hidden">
            <div id="editor">
                
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary" type="submit">Save Profile</button>
        </div>
    </form>
    <div class="add_subcategory_block">
        <button class="add_susb_button" type="submit">Додбавить подкатегорию</button>
        <input type="submit" value="submit">
    </div>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    ['bold', 'italic'],
                    ['link', 'blockquote', 'code-block', 'image'],
                    [{
                        list: 'ordered'
                    }, {
                        list: 'bullet'
                    }]
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        var form = document.querySelector('form'); // get form by ID
form.onsubmit = function() { // onsubmit do this first
    var name = document.querySelector('input[name=name]'); // set name input var
    name.value = JSON.stringify(quill.getContents()); // populate name input with quill data
    return true; // submit form
}
    </script>

</div>






<?php
include '../include/footer.php';
?>