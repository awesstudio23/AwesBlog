<?php

require "php/db.php";

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesBlog</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="preloader__icon"></div>
        </div>
        <? include "layouts/header.php"; ?>
        <main class="main pt-20">
            <section class="hero pb-10">
                <div class="container hero__container">
                    <div class="container-lg max-w-screen-xl">
                        <div class="row g-6 align-items-center">
                            <div class="col-lg-7 mx-auto text-lg-center">
                                <h1 class="ls-tight font-bolder display-4 mb-7">
                                    Кодеры: Руководство по программированию и разработке
                                </h1>
                                <h2 class="lead mb-12">
                                    Обучайтесь в программировании с помощью наших образовательных материалов,
                                    учебных
                                    курсов и руководств. Получите обратную связь и советы от опытных разработчиков.
                                    Поделитесь своим опытом и задайте вопросы в нашем активном сообществе
                                    программистов.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="articles">
                <div class="container max-w-screen-xl articles__container">
                    <div class="row g-10">
                        <div class="col-12 col-md-6 col-lg-4 d-flex articles__card">
                            <a class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                                </div>
                                <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                    <h3 class="d-inline-block h3 mb-3 stretched-link">
                                        Using Unsplash to improve your listing visibility
                                    </h3>
                                    <p class="mb-0 font-light text-muted">
                                        Using free stock photos of your surrounding areas can skyrocket your
                                        popularity.
                                    </p>
                                </div>
                                <hr class="mx-7 my-7" />
                                <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="img/favicon.ico" alt="logo" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="h6 font-semibold text-muted ms-2 stretched-link">
                                        AwesStudio
                                    </div>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex articles__card">
                            <a class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                                </div>
                                <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                    <h3 class="d-inline-block h3 mb-3 stretched-link">
                                        Using Unsplash to improve your listing visibility
                                    </h3>
                                    <p class="mb-0 font-light text-muted">
                                        Using free stock photos of your surrounding areas can skyrocket your
                                        popularity.
                                    </p>
                                </div>
                                <hr class="mx-7 my-7" />
                                <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="img/favicon.ico" alt="logo" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="h6 font-semibold text-muted ms-2 stretched-link">
                                        AwesStudio
                                    </div>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex articles__card">
                            <a class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                                </div>
                                <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                    <h3 class="d-inline-block h3 mb-3 stretched-link">
                                        Using Unsplash to improve your listing visibility
                                    </h3>
                                    <p class="mb-0 font-light text-muted">
                                        Using free stock photos of your surrounding areas can skyrocket your
                                        popularity.
                                    </p>
                                </div>
                                <hr class="mx-7 my-7" />
                                <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="img/favicon.ico" alt="logo" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="h6 font-semibold text-muted ms-2 stretched-link">
                                        AwesStudio
                                    </div>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex articles__card">
                            <a class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                                </div>
                                <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                    <h3 class="d-inline-block h3 mb-3 stretched-link">
                                        Using Unsplash to improve your listing visibility
                                    </h3>
                                    <p class="mb-0 font-light text-muted">
                                        Using free stock photos of your surrounding areas can skyrocket your
                                        popularity.
                                    </p>
                                </div>
                                <hr class="mx-7 my-7" />
                                <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="img/favicon.ico" alt="logo" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="h6 font-semibold text-muted ms-2 stretched-link">
                                        AwesStudio
                                    </div>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex articles__card">
                            <a class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                                </div>
                                <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                    <h3 class="d-inline-block h3 mb-3 stretched-link">
                                        Using Unsplash to improve your listing visibility
                                    </h3>
                                    <p class="mb-0 font-light text-muted">
                                        Using free stock photos of your surrounding areas can skyrocket your
                                        popularity.
                                    </p>
                                </div>
                                <hr class="mx-7 my-7" />
                                <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="img/favicon.ico" alt="logo" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="h6 font-semibold text-muted ms-2 stretched-link">
                                        AwesStudio
                                    </div>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex articles__card">
                            <a class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                                </div>
                                <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                    <h3 class="d-inline-block h3 mb-3 stretched-link">
                                        Using Unsplash to improve your listing visibility
                                    </h3>
                                    <p class="mb-0 font-light text-muted">
                                        Using free stock photos of your surrounding areas can skyrocket your
                                        popularity.
                                    </p>
                                </div>
                                <hr class="mx-7 my-7" />
                                <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                    <div class="avatar avatar-sm me-2">
                                        <img src="img/favicon.ico" alt="logo" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="h6 font-semibold text-muted ms-2 stretched-link">
                                        AwesStudio
                                    </div>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <nav class="mt-10">
                        <ul class="pagination pagination-spaced gap-2 articles__pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    < </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    >
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </main>
       <? include "layouts/footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="js/libs/jquery-3.7.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>