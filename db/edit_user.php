
<?php
$user_id =  $_GET['user_id'];
?>


<?php
$query_user = "SELECT * FROM users WHERE id = '{$user_id}'";
$select_user = mysqli_query($connection, $query_user);
while ($row = mysqli_fetch_assoc($select_user)) {
    $username = $row['username'];
    $password = $row['password'];
    $role = $row['role'];
    $categories = $row['categories'];
?>
<form action="./db/edit_user_code.php" class="form__add_user" method="post">
    <div class="add_user__form_name">
        Редактирование пользователя
    </div>
    <div class="add_user__form__block">
        <div class="add_user__form_desc">
            Username:
        </div>
        <div class="add_user__form_input">
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
        </div>
    </div>
    <div class="add_user__form__block">
        <div class="add_user__form_desc">
            Role:
        </div>
        <div class="add_user__form_input">
            <select name="role" id="role">
                <option value="<?php echo $role;?>"><?php echo $role;?></option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
        </div>
    </div>
    <div class="add_user__form__block">
        <div class="add_user__form_desc">
            password:
        </div>
        <div class="add_user__form_input">
            <input type="text" name="password" id="password" value="<?php echo $password; ?>">
        </div>
    </div>

    <div class="users__content__addnew">
        <button type="submit" id="submit" name="submit">сохранить изменения </button>
    </div>
</form>
<?php
}
?>