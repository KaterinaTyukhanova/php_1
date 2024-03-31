<style>
    select {
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
        margin: 100px 0px;
    }
    .sred-age-text{
        font-size: 30px;
        font-weight: bold;
        color: #071F5A;
    }
    .sred-age {
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
    <div>
        <form>
            <select name="department">
                <option disabled selected>Выбор подразделения</option>
                <?php
                foreach ($departments as $department) {
                    echo '<option value="'.$department->id.'">'.$department->name.'</option>';
                }
                ?>
            </select>
            <button>Показать сотрудников</button>
        </form>
    </div>

    <div class="sred-age">
        <p class="sred-age-text">Список сотрудников по подразделению:</p>
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
