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
        <footer class="footer py-20">
            <div class="container footer__container">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <img src="img/logo.png" class="h-10" alt="logo">
                    </div>
                </div>
                <div class="row justify-content-center my-7">
                    <div class="col-auto">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-lg text-muted">
                                    <figure>
                                        <svg width="1em" height="1em" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="github"
                                            class="svg-inline--fa fa-github fa-w-16" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                            <path fill="currentColor"
                                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                            </path>
                                        </svg>
                                    </figure>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-lg text-muted">
                                    <figure>
                                        <svg width="1em" height="1em" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="dribbble"
                                            class="svg-inline--fa fa-dribbble fa-w-16" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                                            </path>
                                        </svg>
                                    </figure>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-lg text-muted">
                                    <figure>
                                        <svg width="1em" height="1em" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="instagram"
                                            class="svg-inline--fa fa-instagram fa-w-14" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg>
                                    </figure>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-lg text-muted">
                                    <figure>
                                        <svg width="1em" height="1em" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="facebook"
                                            class="svg-inline--fa fa-facebook fa-w-16" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                            </path>
                                        </svg>
                                    </figure>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-lg text-muted">
                                    <figure>
                                        <svg width="1em" height="1em" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="medium"
                                            class="svg-inline--fa fa-medium fa-w-14" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z">
                                            </path>
                                        </svg>
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <p class="text-sm text-muted opacity-8">
                            &copy; Copyright 2023
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="js/libs/jquery-3.7.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>