<?php

ob_start();
session_start();





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki login</title>
</head>

<body>
    <div class="login__wrapper">
        <div class="login__container">
            <div class="login__logotype"></div>
            <form class="login__content_wrapper" method="post" action="./db/login_user.php">
                <!----->
                <div class="login__form__element">
                    <div class="form__element_desc">Login</div>
                    <div class="form__element_input">
                        <input type="text">
                    </div>
                </div>
                <!----->
                <div class="login__form__element">
                    <div class="form__element_desc">Login</div>
                    <div class="form__element_input">
                        <input type="text">
                    </div>
                </div>
                <!----->
                <div class="login__from_button">
                    <button type="submit">login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>