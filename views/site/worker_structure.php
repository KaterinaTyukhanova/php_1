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
        <form method="post">
            <select name="name">
                <option disabled selected>Выбор состава</option>
            </select>
            <button>Показать сотрудников</button>
        </form>
    </div>

    <div class="sred-age">
        <p class="sred-age-text">Название состава:</p>
        <ul>
            <li>Иванов Иван Иванович</li>
            <li>Петрова Марина Викторовна</li>
            <li>Овечкин Анрдрей Михайлович</li>
            <li>Борисова Алёна Алексеевна</li>
        </ul>
    </div>
</div>


