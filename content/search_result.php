<?php
   $search_text =  $_POST['search_element'];

   $search_text = mysqli_real_escape_string($connection, $search_text);



   $query_search = "SELECT * FROM `sub_category` WHERE `key_words` LIKE '$search_text'";
   $search__result = mysqli_query($connection, $query_search);

?>
<div class="search__result_wrapper">
    <div class="search__result__name">
    Результаты поиска
    </div>
    <div class="search__result__by">
        <span>поиск по запросу: </span> <?php echo $search_text; ?>
    </div>
    <div class="search__result__wrapper">
        <div class="serach__result__element">
            <div class="serach__result__element_name">
                Название статьи
            </div>
            <div class="serach__result__element__desc">
                ключевые слова: <span></span>
            </div>
            <div class="serach__result__element__text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ut atque tenetur sit? Architecto omnis dolore nemo fuga sed similique, dolor aliquam ratione rem quos odio cumque voluptatum minima autem!

                </p>
            </div>
            <div class="serach__result__element__readmore">
                <a href="#">Подробнее</a>
            </div>
        </div>
    </div>
</div>