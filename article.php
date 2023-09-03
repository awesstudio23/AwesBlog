<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesBlog — articleName</title>
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
                            <a class="nav-item nav-link" href="/">Главная</a>
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
            <section class="article">
                <div class="container max-w-screen-xl d-flex justify-content-center articles__container ">
                    <div class="col-12 col-md-6 col-lg-6 d-flex">
                        <div class="card border-0 shadow-3">
                            <div class="card-img-top">
                                <img src="img/articles/1.avif" alt="photo" class="card-img-top">
                            </div>
                            <div class="px-7 pt-7 flex-none mt-auto position-relative overlap-10">
                                <h3 class="d-inline-block h3 mb-3 stretched-link">
                                    Using Unsplash to improve your listing visibility
                                </h3>
                                <p class="mb-0 font-light text-muted">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil eius, odit iusto
                                    reiciendis quo, enim ipsum et consectetur sed eaque non, magni impedit inventore
                                    asperiores est suscipit deleniti. Dolor, sed.
                                </p>
                            </div>
                            <div class="d-flex align-items-center px-7 pt-7">
                                <div class="mx-n2 w-full d-flex justify-content-between align-items-center">
                                    <a href="#" class="px-2 text-sm text-muted">
                                        <i class="bi bi-chat-square me-2"></i>
                                        4 comments
                                    </a>
                                    <p class="text-sm text-muted mb-0 ms-auto">
                                        <time datetime="2019-05-02">May 02</time>
                                    </p>
                                </div>
                            </div>
                            <hr class="mt-4 mb-3" />
                            <div class="list-group list-group-flush px-7">
                                <div class="list-group-item px-0">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-sm rounded-circle">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.9775 0.0500008C13.2228 0.282032 9.72123 1.61797 6.82436 3.92422C0.36264 9.05703 -1.77486 17.9023 1.62827 25.4328C2.57748 27.5281 4.18061 29.7359 5.85405 31.2406L6.40248 31.7328L6.59233 31.5852C6.85952 31.3742 7.75248 30.8609 10.4384 29.4055C11.7181 28.7094 12.8923 28.0273 13.054 27.8867C13.2158 27.7461 13.4337 27.4508 13.5462 27.2258C13.7361 26.8391 13.7431 26.7898 13.7642 25.482L13.7923 24.1391L13.4689 23.6961C12.7869 22.775 12.0837 21.3477 11.7673 20.2578C11.6267 19.7797 11.5353 19.5969 11.3244 19.3719C10.797 18.8234 10.79 18.8023 10.79 16.8758C10.79 15.0406 10.804 14.9352 11.1767 14.5203C11.2962 14.3938 11.3103 14.1688 11.3384 12.0242C11.3665 9.38047 11.3876 9.26094 11.8869 8.23438C12.7376 6.50469 14.6361 5.55547 17.5048 5.43594C20.7814 5.30234 23.165 6.31484 24.1142 8.24844C24.6134 9.26797 24.6275 9.37344 24.6134 11.9891C24.5994 14.2953 24.5994 14.3164 24.747 14.45C24.8314 14.5273 24.972 14.7172 25.0564 14.8719C25.197 15.1391 25.204 15.2516 25.204 16.8758C25.204 18.5141 25.197 18.6125 25.0494 18.8867C24.8736 19.2172 24.4728 19.5969 24.1494 19.7305C23.9665 19.8008 23.9103 19.8922 23.8048 20.2297C23.6009 20.9117 22.6658 22.7047 22.1455 23.4289L21.6533 24.1109V25.4398C21.6533 26.9938 21.7095 27.2328 22.2017 27.7813C22.497 28.1117 22.7572 28.2523 25.6189 29.6867C27.3275 30.5375 28.9025 31.3602 29.1275 31.5078L29.5353 31.7891L29.9994 31.3813C31.2158 30.3125 32.5728 28.6531 33.4728 27.1273C35.7861 23.232 36.5244 18.5281 35.533 14.0633C34.19 8.02344 29.7673 3.05938 23.9103 1.02734C21.7236 0.26797 19.1923 -0.0906242 16.9775 0.0500008Z"
                                                        fill="#6B7B93" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ms-n3">
                                            <div class="text-sm">
                                                <strong class="h6 text-sm">AwesStudio</strong>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <span class="text-xs text-muted d-block">May 02</span>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <p class="text-sm mb-0 lh-150">
                                                    I finished the new logo design. Check out the first version I
                                                    uploaded here.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item px-0">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-sm rounded-circle">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.9775 0.0500008C13.2228 0.282032 9.72123 1.61797 6.82436 3.92422C0.36264 9.05703 -1.77486 17.9023 1.62827 25.4328C2.57748 27.5281 4.18061 29.7359 5.85405 31.2406L6.40248 31.7328L6.59233 31.5852C6.85952 31.3742 7.75248 30.8609 10.4384 29.4055C11.7181 28.7094 12.8923 28.0273 13.054 27.8867C13.2158 27.7461 13.4337 27.4508 13.5462 27.2258C13.7361 26.8391 13.7431 26.7898 13.7642 25.482L13.7923 24.1391L13.4689 23.6961C12.7869 22.775 12.0837 21.3477 11.7673 20.2578C11.6267 19.7797 11.5353 19.5969 11.3244 19.3719C10.797 18.8234 10.79 18.8023 10.79 16.8758C10.79 15.0406 10.804 14.9352 11.1767 14.5203C11.2962 14.3938 11.3103 14.1688 11.3384 12.0242C11.3665 9.38047 11.3876 9.26094 11.8869 8.23438C12.7376 6.50469 14.6361 5.55547 17.5048 5.43594C20.7814 5.30234 23.165 6.31484 24.1142 8.24844C24.6134 9.26797 24.6275 9.37344 24.6134 11.9891C24.5994 14.2953 24.5994 14.3164 24.747 14.45C24.8314 14.5273 24.972 14.7172 25.0564 14.8719C25.197 15.1391 25.204 15.2516 25.204 16.8758C25.204 18.5141 25.197 18.6125 25.0494 18.8867C24.8736 19.2172 24.4728 19.5969 24.1494 19.7305C23.9665 19.8008 23.9103 19.8922 23.8048 20.2297C23.6009 20.9117 22.6658 22.7047 22.1455 23.4289L21.6533 24.1109V25.4398C21.6533 26.9938 21.7095 27.2328 22.2017 27.7813C22.497 28.1117 22.7572 28.2523 25.6189 29.6867C27.3275 30.5375 28.9025 31.3602 29.1275 31.5078L29.5353 31.7891L29.9994 31.3813C31.2158 30.3125 32.5728 28.6531 33.4728 27.1273C35.7861 23.232 36.5244 18.5281 35.533 14.0633C34.19 8.02344 29.7673 3.05938 23.9103 1.02734C21.7236 0.26797 19.1923 -0.0906242 16.9775 0.0500008Z"
                                                        fill="#6B7B93" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col ms-n3">
                                            <div class="text-sm">
                                                <strong class="h6 text-sm">AwesStudio</strong>
                                            </div>
                                            <div class="d-flex">
                                                <div>
                                                    <span class="text-xs text-muted d-block">May 02</span>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <p class="text-sm mb-0 lh-150">
                                                    I finished the new logo design. Check out the first version I
                                                    uploaded here.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-4 px-7">
                                <div class="row align-items-center">
                                    <div class="col-8 col-md-9 d-flex align-items-center">
                                        <div class="pe-3">
                                            <div class="avatar avatar-sm rounded-circle">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.9775 0.0500008C13.2228 0.282032 9.72123 1.61797 6.82436 3.92422C0.36264 9.05703 -1.77486 17.9023 1.62827 25.4328C2.57748 27.5281 4.18061 29.7359 5.85405 31.2406L6.40248 31.7328L6.59233 31.5852C6.85952 31.3742 7.75248 30.8609 10.4384 29.4055C11.7181 28.7094 12.8923 28.0273 13.054 27.8867C13.2158 27.7461 13.4337 27.4508 13.5462 27.2258C13.7361 26.8391 13.7431 26.7898 13.7642 25.482L13.7923 24.1391L13.4689 23.6961C12.7869 22.775 12.0837 21.3477 11.7673 20.2578C11.6267 19.7797 11.5353 19.5969 11.3244 19.3719C10.797 18.8234 10.79 18.8023 10.79 16.8758C10.79 15.0406 10.804 14.9352 11.1767 14.5203C11.2962 14.3938 11.3103 14.1688 11.3384 12.0242C11.3665 9.38047 11.3876 9.26094 11.8869 8.23438C12.7376 6.50469 14.6361 5.55547 17.5048 5.43594C20.7814 5.30234 23.165 6.31484 24.1142 8.24844C24.6134 9.26797 24.6275 9.37344 24.6134 11.9891C24.5994 14.2953 24.5994 14.3164 24.747 14.45C24.8314 14.5273 24.972 14.7172 25.0564 14.8719C25.197 15.1391 25.204 15.2516 25.204 16.8758C25.204 18.5141 25.197 18.6125 25.0494 18.8867C24.8736 19.2172 24.4728 19.5969 24.1494 19.7305C23.9665 19.8008 23.9103 19.8922 23.8048 20.2297C23.6009 20.9117 22.6658 22.7047 22.1455 23.4289L21.6533 24.1109V25.4398C21.6533 26.9938 21.7095 27.2328 22.2017 27.7813C22.497 28.1117 22.7572 28.2523 25.6189 29.6867C27.3275 30.5375 28.9025 31.3602 29.1275 31.5078L29.5353 31.7891L29.9994 31.3813C31.2158 30.3125 32.5728 28.6531 33.4728 27.1273C35.7861 23.232 36.5244 18.5281 35.533 14.0633C34.19 8.02344 29.7673 3.05938 23.9103 1.02734C21.7236 0.26797 19.1923 -0.0906242 16.9775 0.0500008Z"
                                                        fill="#6B7B93" />
                                                </svg>
                                            </div>
                                        </div>
                                        <form class="card-comment-box" role="form">
                                            <input class="form-control" placeholder="Add a comment...">
                                        </form>
                                    </div>
                                    <div class="col-4 col-md-3 text-end">
                                        <div class="d-inline-flex mx-n2">
                                            <a href="#" class="px-2 text-muted">
                                                <i class="bi bi-send"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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