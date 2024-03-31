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
        max-height: 900px;
        max-width: 500px;
        border-radius: 34px;
        background-color: #99B3F4;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 100px auto;
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
    <p class="text-login">Добавить сотрудника</p>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
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
            <?php
            foreach ($doljnosts as $doljnost) {
                echo '<option value="'.$doljnost->id.'">'.$doljnost->name.'</option>';
            }
            ?>
        </select>
        <select name="id_department">
            <option disabled selected>Department</option>
            <?php
            foreach ($departments as $department) {
                echo '<option value="'.$department->id.'">'.$department->name.'</option>';
            }
            ?>
        </select>
        <select name="id_structure">
            <option disabled selected>Structure</option>
            <?php
            foreach ($structures as $structure) {
                echo '<option value="'.$structure->id.'">'.$structure->name.'</option>';
            }
            ?>
        </select>

        <button>Добавить</button>
    </form>
</div>
