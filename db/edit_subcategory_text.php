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
      : "<div>{$_CONTENT->error}</div>";
  }
  ?>
