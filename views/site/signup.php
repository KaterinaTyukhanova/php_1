<style>
    input, select{
        width: 517px;
        height: 53px;
        border: solid 2px black;
        background-color: #F5F5F5;
    }
    button {
        padding: 20px 50px;
        border: solid 2px black;
        background-color: #F5F5F5;
        margin-bottom: 40px;
    }
    .login-form{
        width: 100%;
        height: 100%;
        max-height: 600px;
        max-width: 650px;
        border-radius: 34px;
        background-color: #D9D9D9;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 100px auto;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 59px;
    }
    .text-login {
        font-size: 36px;
        font-weight: bold;
    }
</style>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
?>
<div class="login-form">
    <p class="text-login">Регистрация</p>
    <form method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <select name="id_role">
            <option disabled selected>Role</option>
            <?php
            foreach ($roles as $role) {
                echo '<option value="">' . $role->id . '</option>';
            }
            ?>
        </select>
        <button>Зарегистрироваться</button>
    </form>
</div>
<?php endif;