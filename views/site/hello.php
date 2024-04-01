<div class="main-div">
    <div class="conteiner">
        <p class="main-div-text">Вы находитесь на главной странице!</p>
        <p class="main-div-text">Нажмите на ссылки, представленные ниже, чтобы перейти к нужной вам функции.</p>
    </div>
    <div>
        <ul>
            <?php
            if(app()->auth::checkAdmin()):
                ?>
                <li><a href="<?= app()->route->getUrl('/signup') ?>" class="text-ssilka">Добавление нового пользователя</a></li>
            <?php
            else:
                ?>
                <li><a href="<?= app()->route->getUrl('/add_worker') ?>" class="text-ssilka">Добавить нового сотрудника</a></li>
                <li><a href="<?= app()->route->getUrl('/add_department') ?>" class="text-ssilka">Добавить новое подразделение</a></li>
                <li><a href="<?= app()->route->getUrl('/average_age') ?>" class="text-ssilka">Посчитать сред.возраст сотрудников</a></li>
                <li><a href="<?= app()->route->getUrl('/worker_structure') ?>" class="text-ssilka">Посмотреть список сотрудников по составам</a></li>
                <li><a href="<?= app()->route->getUrl('/worker_department') ?>" class="text-ssilka">Посмотреть список сотрудников по определенному подразделению</a></li>
                <li><a href="<?= app()->route->getUrl('/all_worker_all_department') ?>" class="text-ssilka">Посмотреть список сотрудников по всем подразделениям</a></li>
                <li><a href="<?= app()->route->getUrl('/search') ?>" class="text-ssilka">Поиск сотрудников</a></li>
            <?php
            endif;
            ?>
        </ul>
    </div>
</div>


<style>
    ul {
        list-style-type: circle;
    }
    .text-ssilka {
        font-size: 22px;
        font-weight: 200;
    }
    .main-div {
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }
    .main-div-text {
        font-size: 24px;
        font-weight: 300;
        color: #071F5A;
    }
    .conteiner {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
    }
</style>