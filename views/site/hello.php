<div class="main-div">
    <div>
        <ul>
            <li><a href="<?= app()->route->getUrl('/add_worker') ?>" class="text-ssilka">Добавить нового сотрудника</a></li>
            <li><a href="<?= app()->route->getUrl('/add_department') ?>" class="text-ssilka">Добавить новое подразделение</a></li>
            <li><a href="<?= app()->route->getUrl('/hello') ?>" class="text-ssilka">Прикрепить сотрудника к подразделению</a></li>
            <li><a href="<?= app()->route->getUrl('/hello') ?>" class="text-ssilka">Посчитать сред.возраст сотрудников</a></li>
            <li><a href="<?= app()->route->getUrl('/hello') ?>" class="text-ssilka">Посмотреть список сотрудников по составам</a></li>
            <li><a href="<?= app()->route->getUrl('/hello') ?>" class="text-ssilka">Посмотреть список сотрудников по подразделению</a></li>
        </ul>
    </div>

    <p>In a dapibus nulla. Aenean erat orci, egestas non orci at, varius tempus risus. Ut suscipit lorem magna, quis auctor leo molestie ac. Integer ut efficitur neque. Curabitur sollicitudin ipsum dolor, et tempus massa lacinia a. Donec efficitur egestas facilisis. Aliquam feugiat convallis arcu quis sollicitudin. Nullam eleifend iaculis sapien id scelerisque.</p>

</div>


<style>
    ul {
        list-style-type: circle;
    }
    .text-ssilka {
        font-size: 22px;
        font-weight: 200;
    }
    p {
        font-size: 22px;
        max-width: 500px;
    }
    .main-div {
        display: flex;
        justify-content: space-around;
    }
</style>