<div class="users_wrapper">
    <div class="users__container">
        <div class="users__content_desc">
            Список всех пользователей
        </div>


        <div class="users__content__addnew">
            <a href="#">Добавить нового пользователя </a>
        </div>

        <div class="users__listofall">
            <!---Элемент который есть в списке --->
            <div class="users__element">
                <div class="users__element__flex">
                    <div class="user_id"><?php echo $user_id; ?></div>
                    <div class="user_username">
                        <?php echo $username; ?>
                    </div>
                    <div class="user_password">
                        <input type="password" value="<?php echo $user_password; ?>">
                    </div>
                    <div class="user_role">
                        <?php echo $user_role; ?>
                    </div>
                    <div class="user__previlegies">
                        <a href="./db/add_user.php?user_id=<?php echo $user_id; ?>">Доступ к статьям</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>