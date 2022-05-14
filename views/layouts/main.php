<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/Cal/views/layouts/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Main page</title>
</head>
<body>
<header>
    <div class="px-3 py-2 border-bottom" id="navbar">
        <div class="d-flex flex-wrap justify-content-center">
            <a class="text-start col-lg-auto me-lg-auto mx-3" href="<?= app()->route->getUrl('/') ?>">Главная</a>
            <?php
            if (!app()->auth::check()):
                ?>
                <a class="mx-2" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
            <?php
            else:
                ?>
                <a class="col-lg-auto me-lg-auto" href="<?= app()->route->getUrl('/add_user') ?>">Добавить абонента</a>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <?php
            endif;
            ?>
        </div>
    </div>
</header>
<main>
    <?= $content ?? ''; ?>
</main>

</body>
</html>