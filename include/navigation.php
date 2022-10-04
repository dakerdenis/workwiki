<div class="navigation__wiki_wrapper">
    <div class="navigation__container">
        <a href="./index.php" class="navigation__container_logo">
        </a>
        <div class="navigation__container__login">
            <div class="navigation__container_username">
                <div class="navigation__container__username-p">
                   <img src="./styles/imgs/account.png" alt="" srcset=""> <?php echo $_SESSION['username'];?>
                </div>
                <div class="navigation__container__role">
                    <?php echo $_SESSION['role'];?>
                </div>
                
            </div>
            <div class="navigation__container_logout">
                <a href="./db/logout_user.php">Logout</a>
            </div>
        </div>
    </div>
</div>