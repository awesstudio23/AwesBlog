<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesBlog — Регистрация</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sign.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="preloader__icon"></div>
        </div>
        <header class="header">
            <div class="container max-w-screen-xl header__container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 py-3">
                    <a class="navbar-brand" href="/">
                        <img src="img/logo.png" class="h-8" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-lg-auto">
                            <a class="nav-item nav-link active" href="/" aria-current="page">Главная</a>
                            <a class="nav-item nav-link disabled" href="#">To be soon..</a>
                        </div>
                        <div class="navbar-nav ms-lg-4">
                            <a class="nav-item nav-link" href="sign-in">Войти</a>
                        </div>
                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                            <a href="sign-up" class="btn btn-sm btn-primary w-full w-lg-auto">
                                Зарегистрироваться
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main class="main">
            <section class="sign">
                <div class="container sign__container">
                    <h1 class="ls-tight font-bolder mb-7 text-center">
                        Регистрация
                    </h1>
                    <form action="#">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="name" placeholder="Логин" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" class="form-control" name="password" placeholder="Пароль"
                                autocomplete="new-password" required>
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control" name="confirm-password"
                                placeholder="Подтверждение пароля" autocomplete="new-password" required>
                        </div>
                        <div>
                            <button class="btn btn-primary w-full">
                                Зарегистрироваться
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="js/libs/jquery-3.7.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>