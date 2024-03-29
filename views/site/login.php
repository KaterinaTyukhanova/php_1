<style>
    input {
        width: 400px;
        height: 40px;
        border: solid 2px #071F5A;
    }
    button {
        padding: 20px 50px;
        border: solid 2px #071F5A;
        margin-bottom: 30px;
    }
    .login-form{
        width: 100%;
        height: 100%;
        max-height: 380px;
        max-width: 500px;
        border-radius: 34px;
        background-color: #99B3F4;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }
    .text-login, h4 {
        font-size: 36px;
        font-weight: bold;
        color: #071F5A;
    }
</style>

<h4><?= $message ?? ''; ?></h4>
<?php
if (!app()->auth::check()):
    ?>

<div class="login-form">
    <p class="text-login">Авторизация</p>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button>Войти</button>
    </form>
</div>
<?php endif;
