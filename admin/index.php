<?php

require "../php/db.php";

if (isset($_COOKIE["admin"])) {
    $adminData = json_decode($_COOKIE["admin"], true);
    $admin = R::findOne("admins", "login = ? AND password = ?", [$adminData["login"], $adminData["password"]]);
}

if (!$admin) {
    unset($_COOKIE['admin']);
    setcookie('admin', null, time() + 60 * 60 * 24 * 1, '/');
    header("Location: sign-in");
}

$articles = R::findAll("articles");
$articles = array_reverse($articles, true);
$countPages = ceil(count($articles) / 9);

if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
} else if ($_GET["page"] > $countPages) {
    header("Location: /");
}

$articles = array_slice($articles, ($_GET["page"] - 1) * 9, 9);

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
    <link rel="stylesheet" href="../css/libs/toastr.min.css">
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
                            <a class="nav-item nav-link" href="/admin/">Список статей</a>
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
                        <? if (count($articles) != 0) { ?>
                            <? foreach ($articles as $article) : ?>
                                <div class="col-12 col-md-6 col-lg-4 d-flex">
                                    <div class="card border-0 shadow-3" href="#">
                                        <div class="card-img-top">
                                            <img src="<?= $article->imageUrl ?>" alt="photo" class="card-img-top card-imageUrl">
                                        </div>
                                        <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                            <h3 class="d-inline-block h3 mb-3 stretched-link card-title">
                                                <?= $article->title ?>
                                            </h3>
                                            <h4 class="mb-0 font-light text-muted card-subtitle">
                                                <?= $article->subtitle ?>
                                            </h4>
                                            <p class="d-none card-content">
                                                <?= $article->content ?>
                                            </p>
                                        </div>
                                        <hr class="mx-7 my-7" />
                                        <div class="px-7 pb-7 border-0 d-flex align-items-center w-full position-relative">
                                            <p class="text-sm text-muted mb-0">
                                                <time datetime="2019-05-02 card-date"><?= $article->date ?></time>
                                            </p>
                                            <div class="ms-auto">
                                                <a class="btn btn-primary open-edit-article" href="#" data-id="<?= $article->id ?>">Редактировать</a>
                                                <a class="btn btn-danger delete-article" href="#" data-id="<?= $article->id ?>">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        <? } else { ?>
                            <h3 class="text-center">Упс! Список статей временно пуст.</h3>
                        <? }  ?>
                    </div>
                    <?php if ($countPages != 0) : ?>
                        <nav class="mt-10">
                            <ul class="pagination pagination-spaced gap-2 articles__pagination">
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= max(1, $_GET["page"] - 1) ?>">
                                        <
                                    </a>
                                </li>
                                <?php
                                $startPage = max(1, $_GET["page"] - 2);
                                $endPage = min($countPages, $startPage + 4);

                                if ($countPages <= 5 || $_GET["page"] <= 3) {
                                    $startPage = 1;
                                    $endPage = min(5, $countPages);
                                } elseif ($_GET["page"] >= $countPages - 2) {
                                    $startPage = max(1, $countPages - 4);
                                    $endPage = $countPages;
                                }

                                for ($i = $startPage; $i <= $endPage; $i++) :
                                ?>
                                    <li class="page-item <?php if ($i == $_GET["page"]) echo "active" ?>">
                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>

                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= min($countPages, $_GET["page"] + 1) ?>">></a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif; ?>
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
                    <form action="#" id="add-article-form">
                        <div class="modal-body">
                            <div class="mb-2">
                                <textarea class="form-control" name="title" id="title" rows="2" placeholder="Заголовок" required></textarea>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" name="subtitle" id="subtitle" rows="2" placeholder="Краткое описание" required></textarea>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" name="content" id="content" rows="5" placeholder="Содержание" required></textarea>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="imageUrl" id="imageUrl" placeholder="Вставьте ссылку на изображение" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-sm w-full btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="editArticle" tabindex="-1" aria-labelledby="editArticle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title">Редактирование статьи</h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <form action="#" id="edit-article-form">
                        <div class="modal-body">
                            <div class="mb-2">
                                <textarea class="form-control" name="title" id="editTitle" rows="2" placeholder="Заголовок" required></textarea>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" name="subtitle" id="editSubtitle" rows="2" placeholder="Краткое описание" required></textarea>
                            </div>
                            <div class="mb-5">
                                <textarea class="form-control" name="content" id="editContent" rows="5" placeholder="Содержание" required></textarea>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="imageUrl" id="editImageUrl" placeholder="Вставьте ссылку на изображение" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-sm w-full btn-primary" id="edit-article-btn">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="../js/libs/jquery-3.7.0.min.js"></script>
    <script src="../js/libs/toastr.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/article.js"></script>
</body>

</html>