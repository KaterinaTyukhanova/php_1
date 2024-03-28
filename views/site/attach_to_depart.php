<style>
    input, select{
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
        max-height: 1000px;
        max-width: 550px;
        border-radius: 34px;
        background-color: #99B3F4;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px auto;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }
    .text-login {
        font-size: 28px;
        font-weight: bold;
        color: #071F5A;
    }
</style>

<div class="login-form">
    <p class="text-login">Прикрепить сотрудника к подразделению</p>
    <form method="post">
        <select name="surname">
            <option disabled selected>Выбор сотрудника</option>
        </select>
        <select name="name">
            <option disabled selected>Выбор подразделения</option>
        </select>
        <button>Прикрепить</button>
    </form>
</div>
