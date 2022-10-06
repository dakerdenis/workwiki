<div class="navigation__wiki_wrapper">
    <div class="navigation__container">
        <a href="./index.php" class="navigation__container_logo">
        </a>
        <div class="administration__block_wrapper">
            <?php
            if (isset($_SESSION['role'])) {
                if ($_SESSION['role'] == 'admin') {
                    echo '
                                <a href="./index.php?source_page=add_subcategory">Добавить подкатегорию</a>
                                <a href="./index.php?source_page=add_category">Добавить категорию</a>
                                ';
                } else if ($_SESSION['role'] == 'user') {
                    echo 'Добро пожаловать !';
                } else if ($_SESSION['role'] == 'superadmin') {
                    echo '
                                <a href="./index.php?source_page=add_subcategory">Добавить подкатегорию</a>
                                <a href="./index.php?source_page=add_category">Добавить категорию</a>
                                <a href="./index.php?source_page=add_user">Пользователи</a>
                                ';
                }
            }
            ?>
        </div>
        <div class="search__navigation_wrapper">
            <form action="./db/search.php">
                <div class="search__block__input">
                    <input type="text" name="search_text" id="search_text" value="Поиск">
                </div>
                <div class="search__block__icon">
                    <button type="submit">
                        <img src="./styles/imgs/search.png" alt="">
                    </button>
                </div>
            </form>
        </div>
        <div class="navigation__container__login">
            <div class="navigation__container_username">
                <div class="navigation__container__username-p">
                    <img src="./styles/imgs/account.png" alt="" srcset=""> <?php echo $_SESSION['username']; ?>
                </div>
                <div class="navigation__container__role">
                    <?php echo $_SESSION['role']; ?>
                </div>

            </div>
            <div class="navigation__container_logout">
                <a href="./db/logout_user.php">Logout</a>
            </div>
        </div>
    </div>
</div>