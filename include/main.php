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
                            $query_sub = "SELECT * FROM sub_category WHERE id = '{$id}'";
                            $select_sub_category = mysqli_query($connection, $query_sub);
                            while ($row = mysqli_fetch_assoc($select_sub_category)){

                            }
                        ?>

                            <li>
                                <a title="Şirkət haqqında" href="https://www.roimedpharma.az/az/pages/about-company">Şirkət haqqında</a>
                            </li>




                            <li>
                                <a title="Fəaliyyətimiz" href="https://www.roimedpharma.az/az/pages/activities">Fəaliyyətimiz</a>
                            </li>
                            <li>
                                <a title="Hədəf - Missiya - Gələcəyə baxışımız" href="https://www.roimedpharma.az/az/pages/targets-mission-our-vision">Hədəf - Missiya - Gələcəyə baxışımız</a>
                            </li>
                            <li>
                                <a title="Hədəf - Missiya - Gələcəyə baxışımız" href="https://www.roimedpharma.az/az/pages/targets-mission-our-vision">Hədəf - Missiya - Gələcəyə baxışımız</a>
                            </li>
                            <li>
                                <a title="Hədəf - Missiya - Gələcəyə baxışımız" href="https://www.roimedpharma.az/az/pages/targets-mission-our-vision">Hədəf - Missiya - Gələcəyə baxışımız</a>
                            </li>
                            <li>
                                <a title="Hədəf - Missiya - Gələcəyə baxışımız" href="https://www.roimedpharma.az/az/pages/targets-mission-our-vision">Hədəf - Missiya - Gələcəyə baxışımız</a>
                            </li>
                        </ul>
                    </div>







                <?php
                }

                ?>
            </div>



        </div>
    </div>
</div>