<div class="navigation__wiki_wrapper">
    <div class="navigation__container">
        <a href="../index.php" class="navigation__container_logo">
        </a>
        <div class="navigation__container__login">
            <div class="navigation__container_username">
                <?php $_SESSION['username']; ?>
            </div>
            <div class="navigation__container_logout">
                <a href="./db/logout_user.php">Logout</a>
            </div>
        </div>
    </div>
</div>