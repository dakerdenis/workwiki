<!DOCTYPE html>
<html>
  <head>
    <title>TINYMCE Show Contents</title>
  </head>
  <body><?php
    // NOTE: CONTENT ID IS FIXED TO 99 FOR THIS DEMO...
    require "2-database.php";
    echo $_CONTENT->get(99);
  ?></body>
</html>