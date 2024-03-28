<style>
    select {
        width: 517px;
        height: 53px;
        border: solid 2px black;
        background-color: #F5F5F5;
    }
    button{
        padding: 20px 50px;
        border: solid 2px black;
        background-color: #F5F5F5;
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
    p {
        font-size: 30px;
        font-weight: bold;
    }
    .age-div {
        padding: 10px;
        width: 50px;
        border: solid 2px black;
        background-color: #F5F5F5;
        text-align: center;
    }
    .sred-age {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>


<div class="age">
    <div>
        <form method="post">
            <select name="name">
                <option disabled selected>Выбор подразделения</option>
            </select>
            <button>Рассчитать сред.возраст</button>
        </form>
    </div>

    <div class="sred-age">
        <p>Средний возраст подразделения:</p>
        <div class="age-div">0</div>
    </div>
</div>


