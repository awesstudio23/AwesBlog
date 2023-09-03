<?php

require "../php/db.php";

if (isset($_COOKIE["admin"])) {
    $adminData = json_decode($_COOKIE["user"], true);
    $admin = R::findOne("admins", "login = ? AND password = ?", [$adminData["login"], $adminData["password"]]);
}

if (!$admin) {
    unset($_COOKIE['admin']);
    setcookie('admin', null, time() + 60 * 60 * 24 * 1, '/');
    header("Location: sign-in");
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesBlog — Админ-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.min.css">
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
                        <img src="../img/logo.png" class="h-8" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-lg-auto">
<<<<<<< HEAD
                            <a class="nav-item nav-link" href="/">Список статей</a>
=======
                            <a class="nav-item nav-link active" href="/" aria-current="page">Список статей</a>
>>>>>>> d7193508ce5f5414118f75155fb57f8821e37c9d
                            <button class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#addArticle">Добавить статью</м>
                        </div>
                        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                            <a href="logout" class="btn btn-sm btn-danger w-full w-lg-auto">
                                Выйти
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main class="main py-20">
            <section class="articles">
                <div class="container max-w-screen-xl articles__container">
                    <div class="row g-10">
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card border-0 shadow-3" href="#">
                                <div class="card-img-top">
                                    <img src="../img/articles/1.avif" alt="photo" class="card-img-top">
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
                                    <p class="text-sm text-muted mb-0">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                    <div class="ms-auto">
                                        <a class="btn btn-primary" href="#">Редактировать</a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
        <div class="modal" id="addArticle" tabindex="-1" aria-labelledby="addArticle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title">Добавление статьи</h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="mb-2">
                                <textarea class="form-control" name="title" id="title" rows="2" placeholder="Заголовок" required></textarea>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" name="subtitle" id="subtitle" rows="2" placeholder="Краткое описание" required></textarea>
                            </div>
                            <div class="mb-5">
                                <textarea class="form-control" name="content" id="content" rows="5" placeholder="Содержание" required></textarea>
                            </div>
                            <div class="card shadow-none border-2 border-dashed border-primary-hover position-relative">
                                <div class="d-flex justify-content-center px-5 py-5">
                                    <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                                        <input id="file_upload" name="file_upload" type="file" class="visually-hidden" required>
                                    </label>
                                    <div class="text-center">
                                        <div class="text-2xl text-muted">
                                            <i class="bi bi-upload"></i>
                                        </div>
                                        <div class="d-flex text-sm mt-3">
                                            <p class="font-semibold">Загрузите изображение статьи</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm w-full btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="editArticle" tabindex="-1" aria-labelledby="addArticle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title">Редактирование статьи</h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="mb-2">
                                <textarea class="form-control" name="title" id="title" rows="2" placeholder="Заголовок" required></textarea>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" name="subtitle" id="subtitle" rows="2" placeholder="Краткое описание" required></textarea>
                            </div>
                            <div class="mb-5">
                                <textarea class="form-control" name="content" id="content" rows="5" placeholder="Содержание" required></textarea>
                            </div>
                            <div class="card shadow-none border-2 border-dashed border-primary-hover position-relative">
                                <div class="d-flex justify-content-center px-5 py-5">
                                    <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                                        <input id="file_upload" name="file_upload" type="file" class="visually-hidden" required>
                                    </label>
                                    <div class="text-center">
                                        <div class="text-2xl text-muted">
                                            <i class="bi bi-upload"></i>
                                        </div>
                                        <div class="d-flex text-sm mt-3">
                                            <p class="font-semibold">Загрузите изображение статьи</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm w-full btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="../js/libs/jquery-3.7.0.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>