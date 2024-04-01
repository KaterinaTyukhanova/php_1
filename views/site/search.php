<style>
    input {
        width: 400px;
        height: 40px;
        border: solid 2px #071F5A;
    }
    button{
        padding: 10px 20px;
        border: solid 2px #071F5A;
        margin-bottom: 40px;
        text-align: center;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 45px;
    }
    .age {
        display: flex;
        gap: 200px;
        justify-content: center;
        align-items: center;
        margin: 115px auto;
        max-height: 550px;
    }
    .sred-age-text {
        font-size: 30px;
        font-weight: bold;
        color: #071F5A;
    }
    .sred-age {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .search-div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    ul {
        list-style-type: circle;
        color: #071F5A;
    }
</style>

<div class="age">
    <div class="search-div">
        <p class="sred-age-text">Поиск сотрудников</p>
        <form>
            <input type="search" name="search" placeholder="Surname/Name/Patronymic">
            <button>Найти</button>
        </form>
    </div>

    <div class="sred-age">
        <p class="sred-age-text">Список сотрудников:</p>

        <ul>
            <?php
            if(!empty($workers)):
                foreach ($workers as $worker) {
                    echo '<li>'. $worker->surname . ' ' . $worker->name . ' ' . $worker->patronymic .'</li>';
                }
            endif
            ?>
        </ul>
    </div>
</div>
