<?php
 include './connection.php';
    $subcategory_name = $_POST['subcategory_name'];
    $sub_id = $_POST['sub_id'];
    $content=$_POST['content'];
    echo "content: " . $content . "<br>"; 
  // $content =  trim($content);
 
  $query = " INSERT INTO `sub_category` ( `id`, `name`, `sub_id`, `content`, `image`);  
  VALUES ('','{$subcategory_name}','{$sub_id}','{$content}','')";
   echo $query;
   $addnew__subcategory = mysqli_query($connection, $query);
   header('Location: ../index.php?source_page=add_subcategory');
  
?>
