<?php
   $suka =  $_POST['search_element'];
?>
<div class="search__result_wrapper">
    <div class="search__result__name">
    Результаты поиска:
    </div>
    <div class="search__result__by">
        поиск по запросу:  <?php echo $suka; ?>
    </div>
    <div class="search__result__wrapper">
        <div class="serach__result__element">
            <div class="serach__result__element_name">
                Название статьи
            </div>
            <div class="serach__result__element__desc">
                номер статьи и ключевые слова
            </div>
            <div class="serach__result__element__text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!</p>
            </div>
            <div class="serach__result__element__readmore">
                <a href="#">Подробнее</a>
            </div>
        </div>
    </div>
</div>