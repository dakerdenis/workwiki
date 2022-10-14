<?php
include './connection.php';
include './functions.php';
    if(isset($_POST['add_file'])){ 
        echo "Filename: " . $_FILES['file']['name']."<br>";
        echo "Type : " . $_FILES['file']['type'] ."<br>";
        echo "Size : " . $_FILES['file']['size'] ."<br>";
        echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>";
        echo "Error : " . $_FILES['file']['error'] . "<br>";




        $file = $_FILES['file']['name'];
        $post_image_temp = $_FILES['file']['tmp_name'];

        $file__size = $_FILES['file']['size'];
        $file__size = formatSizeUnits($file__size);
        echo "New Size : " . $file__size ."<br>";

 
   //  move_uploaded_file($post_image_temp, "../files/$file");
 
   //  $query = " INSERT INTO `catalog` ( `name`, `image`, `description`, `type`, `price`)  
   //  VALUES ('{$name}','{$file}','{$description}','{$type}','{$price}')";
 
   //   echo $query;
   //   $addnew__element = mysqli_query($connection, $query);


     } else {
        echo 'FAILED';
     }
