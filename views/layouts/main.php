<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .head {
            background-color: #7596EA;
            height: 100%;
            max-width: 100%;
        }
        footer{
            display: flex;
            background-color: #7596EA;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: space-around;
        }
        nav {
            display: flex;
            padding: 20px;
            align-items: center;
            justify-content: space-around;
        }
        a{
            text-decoration: none;
            color: #071F5A;
            font-size: 26px;
            font-weight: bold;
        }
        header{
            width: 100%;
        }
        .text {
            font-size: 20px;
            color: #071F5A;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <div class="head">
        <nav>
            <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
            <?php
            if (!app()->auth::check()):
                ?>
                <a href="<?= app()->route->getUrl('/login') ?>">Авторизация</a>
            <?php
            else:
                ?>
                <a href="<?= app()->route->getUrl('/all_workers') ?>">Сотрудники</a>
                <a href="<?= app()->route->getUrl('/all_departments') ?>">Подразделения</a>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
            <?php
            endif;
            ?>
        </nav>
    </div>
</header>
<main>
    <?= $content ?? '' ?>
</main>

<footer>
    <div class="contacts">
        <p class="text">Электронная почта: company@gmail.com</p>
        <p class="text">Телефон отдела: +7 (3822) 65-23-45</p>
    </div>

    <div class="slogan text">Мы находим, вы выбираете!</div>

</footer>

</body>
</html>
