<style>
    input, select {
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
        max-height: 350px;
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
    .text-login {
        font-size: 36px;
        font-weight: bold;
        color: #071F5A;
    }
</style>


<div class="login-form">
    <p class="text-login">Добавить подразделение</p>
    <form method="post">
        <input type="text" name="name" placeholder="Name">
        <select name="id_type">
            <option disabled selected>Type of department</option>
        </select>
        <button>Добавить</button>
    </form>
</div>
