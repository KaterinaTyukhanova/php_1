<style>
    input, select {
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
        max-height: 1200px;
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

<div class="login-form">
    <p class="text-login">Добавить сотрудника</p>
    <form method="post">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="patronymic" placeholder="Patronymic">
        <select name="gender">
            <option disabled selected>Gender</option>
            <option value="Ж">Ж</option>
            <option value="М">М</option>
        </select>
        <input type="date" name="burn_date" placeholder="Date of birth">
        <input type="text" name="address" placeholder="Address">
        <select name="id_doljnost">
            <option disabled selected>Held post</option>
        </select>
        <select name="id_department">
            <option disabled selected>Department</option>
        </select>

        <button>Добавить</button>
    </form>
</div>
