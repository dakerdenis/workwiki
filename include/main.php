<div class="wiki__wrapper">
    <div class="wiki_infoblock">
        <div class="wiki__infoblock_test">
            A-Group Wiki
        </div>
        <div class="wiki_infoblock_content">

            <div class="infoblock__category_wrapper">
                <?php

                $query = "SELECT * FROM category";
                $select_category = mysqli_query($connection, $query);



                while ($row = mysqli_fetch_assoc($select_category)) {
                    $id = $row['id'];
                    $category_name = $row['category_name'];
                    $category_access = $row['category_access'];

                ?>

                    <div class="sitemap__item">
                        <a href="#"><?php echo $category_name; ?></a>
                        <ul class="sitemap__subitem">

                            <?php
                            $query_sub = "SELECT * FROM sub_category WHERE sub_id = '{$id}'";
                            $select_sub_category = mysqli_query($connection, $query_sub);
                            while ($row = mysqli_fetch_assoc($select_sub_category)) {
                                $sub_id = $row['id'];
                                $sub_name = $row['name'];
                            ?>
                                <li>
                                    <a title="<?php echo $sub_name; ?>" href="./content/sub_page.php?sub_id=<?php echo $sub_id; ?>"><?php echo $sub_name; ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>







                <?php
                }

                ?>
            </div>



        </div>
    </div>
</div>