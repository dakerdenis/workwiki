<?php

$search_text =  $_POST['search_element'];

$search_text = mysqli_real_escape_string($connection, $search_text);

$query_search = "SELECT * FROM `sub_category` WHERE `key_words` LIKE '%$search_text%'";
$search_result = mysqli_query($connection, $query_search);

if ($search_result == '') {
    $result = 'К сожалению в нашей базе нет такой информации,повторите попытку уточнив поиск';
}
?>
<div class="search__result_wrapper">
    <div class="search__result__name">
        Результаты поиска
    </div>
    <div class="search__result__by">
        <span>поиск по запросу: </span> <?php echo $search_text; ?>
    </div>
    <div class="search__result__wrapper">
        &nbsp;
        <div class="serach__result__element">
            <div class="serach__result__element_name">
                <?php  ?>Название
            </div>
            <div class="serach__result__element__desc">
                ключевые слова: <span><?php  ?></span>
            </div>
            <div class="serach__result__element__text">

                <?php  ?> контент
            </div>
            <div class="serach__result__element__readmore">
                <a title="<?php  ?>" href="./index.php?source_page=sub_page&sub_id=<?php echo $sub_id; ?>">Подробнее</a>
            </div>
        </div>

        <div class="search__error">
            <?php if(isset($result)){
                echo $result;
            }
            ?>
        </div>
    </div>
</div>