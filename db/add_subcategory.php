<?php
include './connection.php';
if(isset($_POST['submit'])){
    $subcategory_name = $_POST['subcategory_name'];
    $sub_id = $_POST['sub_id'];
    $content=$_POST['content'];

 // $query = " INSERT INTO `sub_category` ( `id`, `name`, `sub_id`, `content`, `image`);  
 // VALUES ('','{$subcategory_name}','{$sub_id}','{$content}','')";

 //  echo $query;
 //  $addnew__subcategory = mysqli_query($connection, $query);

 //  header('Location: ../index.php');


 // } else{
 //    echo $query;
 //    echo 'error';
  ?>
    <script>
    var json = [
       " content": "<?php echo $content; ?>"
    ];
    console.log('test');
    console.log(json['content']);
</script>



  <?php 

}
?>

