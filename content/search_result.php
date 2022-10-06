<?php
$search_text =  $_POST['search_element'];

$search_text = mysqli_real_escape_string($connection, $search_text);
?>
<div class="search__result_wrapper">
    <div class="search__result__name">
        Результаты поиска
    </div>
    <div class="search__result__by">
        <span>поиск по запросу: </span> <?php echo $search_text; ?>
    </div>
    <div class="search__result__wrapper">




        <?php
        $result=false;
        $query_search = "SELECT * FROM `sub_category` WHERE `key_words` LIKE '%$search_text%'";
        $search__result = mysqli_query($connection, $query_search);
        $row = mysqli_fetch_assoc($search__result);
        if ($row == null) {
            $result = 'К сожалению в нашей базе нет такой информации,повторите попытку уточнив поиск';
        } else if ($row != null) {
            while ($row = mysqli_fetch_assoc($search__result)) {
                $id = $row['id'];
                $sub_id = $row['id'];
                $sub_name = $row['name'];
                $sub_content = $row['content'];
                $image = $row['image'];
                $key_words = $row['key_words'];
        ?>

awdawf
                <div class="serach__result__element">
                    <div class="serach__result__element_name">
                        <?php echo $sub_name ?>
                    </div>
                    <div class="serach__result__element__desc">
                        ключевые слова: <span><?php echo $key_words ?></span>
                    </div>
                    <div class="serach__result__element__text">
                        <p>
                            < <?php echo $sub_content; ?> </p>
                    </div>
                    <div class="serach__result__element__readmore">
                        <a href="#">Подробнее</a>
                    </div>
                </div>

        <?php  }
        }


        ?>
        <div class="search__error">
            <?php if ($result) {
                echo $result;
            } else if(!$result){
                return false;
            } ?>
        </div>



    </div>
</div>