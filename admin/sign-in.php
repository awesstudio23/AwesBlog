<?php

require "../php/db.php";

if ($user->admin != true) {
    include "../404.php";
    exit();
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesBlog — Админ-панель</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sign.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="preloader__icon"></div>
        </div>
        <main class="main">
            <section class="sign">
                <div class="container sign__container">
                    <h1 class="ls-tight font-bolder mb-7 text-center">
                        Вход
                    </h1>
                    <form action="#">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="login" placeholder="Логин" required>
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control" name="password" placeholder="Пароль" autocomplete="current-password" required>
                        </div>
                        <div>
                            <button class="btn btn-primary w-full">
                                Войти
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="../js/libs/jquery-3.7.0.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>