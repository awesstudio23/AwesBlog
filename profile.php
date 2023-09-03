<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesBlog</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.min.css">
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
                            <a class="nav-item nav-link" href="/">Главная</a>
                            <a class="nav-item nav-link active" href="/" aria-current="page">Профиль</a>
                            <a class="nav-item nav-link disabled" href="#">To be soon..</a>
                        </div>
                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                            <a href="#" class="btn btn-sm btn-danger w-full w-lg-auto">
                                Выйти
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main class="main pt-20">
            <section class="profile pb-10">
                <div class="container profile__container">
                    <div class="container-lg max-w-screen-xl">
                        <div class="row g-6 align-items-center">
                            <div class="col-lg-7 mx-auto text-lg-center">
                                <h1 class="ls-tight font-bolder display-4 mb-7">
                                    To be soon..
                                </h1>
                            </div>
                        </div>
                    </div>
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