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
                include '';
                exit();
            }

    $title = $_POST['subcategory_name'];
    $discussionContent = $_POST['content'];
    echo "<br />";
    echo "the title is " . $title;            
    echo "<br />";
    echo "the discussion content is ". $discussionContent;


    $sql = 'INSERT INTO quilltext(Title, DiscussionContent)
    Values(:Title, :DiscussionContent)';
    $statement = $pdo -> prepare($sql);
    $statement -> execute(array(':Title' => $title, ':DiscussionContent' => $discussionContent));

?>  