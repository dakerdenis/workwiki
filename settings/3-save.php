<!DOCTYPE html>
<html>
  <head>
    <title>TinyMCE PHP MySQL Demo</title>
  </head>
  <body>
    <!-- (A) TINY MCE -->
    <!-- https://cdnjs.com/libraries/tinymce -->
    <!-- https://www.tiny.cloud/docs/configure/ -->
    <form method="post">
      <textarea id="mceDEMO" name="content"></textarea>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
    <script>
    tinymce.init({
      selector : "#mceDEMO",
      plugins : "save",
      menubar : false,
      toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify"
    });
    </script>

    <?php
    // (B) SAVE CONTENT ON FORM SUBMIT
    if (isset($_POST["content"])) {
      // (B1) CONNECT TO DATABASE
      require "2-database.php";

      // (B2) SAVE
      // NOTE - CONTENT ID FIXED TO 99 FOR THIS DEMO
      // USE YOUR OWN ID IN YOUR PROJECT!
      echo $_CONTENT->save(99, $_POST["content"])
        ? "<div>SAVED</div>"
        : "<div>{$_CONTENT->error}</div>" ;
    }
    ?>
  </body>
</html>
