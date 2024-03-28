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
        margin: 115px auto;
        max-height: 550px;
    }
    .sred-age-text {
        font-size: 30px;
        font-weight: bold;
        color: #071F5A;
    }
    .age-div {
        padding: 10px;
        width: 50px;
        border: solid 2px #071F5A;
        text-align: center;
        font-weight: bold;
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
        <p class="sred-age-text">Средний возраст подразделения:</p>
        <div class="age-div">0</div>
    </div>
</div>


