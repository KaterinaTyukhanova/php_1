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
            <select name="structure">
                <option disabled selected>Выбор состава</option>
                <?php
                foreach ($structures as $structure) {
                    echo '<option value="'.$structure->id.'">'.$structure->name.'</option>';
                }
                ?>
            </select>
            <button>Показать сотрудников</button>
        </form>
    </div>

    <div class="sred-age">
        <p class="sred-age-text">Список сотрудников по составу:</p>
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


