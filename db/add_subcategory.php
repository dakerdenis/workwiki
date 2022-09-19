<?php
include './connection.php';

    $subcategory_name = $_POST['subcategory_name'];
    $sub_id = $_POST['sub_id'];
    $content=$_POST['content'];

  $query = " INSERT INTO `sub_category` ( `id`, `name`, `sub_id`, `content`, `image`);  
  VALUES ('','{$subcategory_name}','{$sub_id}',' ',' ')";
   echo $query;
   $addnew__subcategory = mysqli_query($connection, $query);
   header('Location: ../index.php');
  
?>

<script>

</script>