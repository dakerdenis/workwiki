<?php
            try
            {
                $pdo = new PDO('mysql:host=localhost; dbname=wiki', "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->exec('SET NAMES "utf8"');
            }
            catch (PDOException $e)
            {
                $output = 'Unable to connect to the database server:' . $e->getMessage();
                include '../output.html.php';
                exit();
            }

    $title = $_POST['subcategory_name'];
    echo "<br />";
    echo "the title is " . $title;
            $about = $_POST['about'];
    echo "<br />";
    echo "the discussion content is ". $about;
            $sub_id = $_POST['sub_id'];

    $sql = 'INSERT INTO sub_category(name, content)
    Values(:Title, :about)';
    $statement = $pdo -> prepare($sql);
    $statement -> execute(array(':Title' => $title, ':about' => $about));

?>  