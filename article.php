<?php

require "php/db.php";

?>
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
        <? include "layouts/header.php"; ?>
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
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.9775 0.0500008C13.2228 0.282032 9.72123 1.61797 6.82436 3.92422C0.36264 9.05703 -1.77486 17.9023 1.62827 25.4328C2.57748 27.5281 4.18061 29.7359 5.85405 31.2406L6.40248 31.7328L6.59233 31.5852C6.85952 31.3742 7.75248 30.8609 10.4384 29.4055C11.7181 28.7094 12.8923 28.0273 13.054 27.8867C13.2158 27.7461 13.4337 27.4508 13.5462 27.2258C13.7361 26.8391 13.7431 26.7898 13.7642 25.482L13.7923 24.1391L13.4689 23.6961C12.7869 22.775 12.0837 21.3477 11.7673 20.2578C11.6267 19.7797 11.5353 19.5969 11.3244 19.3719C10.797 18.8234 10.79 18.8023 10.79 16.8758C10.79 15.0406 10.804 14.9352 11.1767 14.5203C11.2962 14.3938 11.3103 14.1688 11.3384 12.0242C11.3665 9.38047 11.3876 9.26094 11.8869 8.23438C12.7376 6.50469 14.6361 5.55547 17.5048 5.43594C20.7814 5.30234 23.165 6.31484 24.1142 8.24844C24.6134 9.26797 24.6275 9.37344 24.6134 11.9891C24.5994 14.2953 24.5994 14.3164 24.747 14.45C24.8314 14.5273 24.972 14.7172 25.0564 14.8719C25.197 15.1391 25.204 15.2516 25.204 16.8758C25.204 18.5141 25.197 18.6125 25.0494 18.8867C24.8736 19.2172 24.4728 19.5969 24.1494 19.7305C23.9665 19.8008 23.9103 19.8922 23.8048 20.2297C23.6009 20.9117 22.6658 22.7047 22.1455 23.4289L21.6533 24.1109V25.4398C21.6533 26.9938 21.7095 27.2328 22.2017 27.7813C22.497 28.1117 22.7572 28.2523 25.6189 29.6867C27.3275 30.5375 28.9025 31.3602 29.1275 31.5078L29.5353 31.7891L29.9994 31.3813C31.2158 30.3125 32.5728 28.6531 33.4728 27.1273C35.7861 23.232 36.5244 18.5281 35.533 14.0633C34.19 8.02344 29.7673 3.05938 23.9103 1.02734C21.7236 0.26797 19.1923 -0.0906242 16.9775 0.0500008Z" fill="#6B7B93" />
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
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.9775 0.0500008C13.2228 0.282032 9.72123 1.61797 6.82436 3.92422C0.36264 9.05703 -1.77486 17.9023 1.62827 25.4328C2.57748 27.5281 4.18061 29.7359 5.85405 31.2406L6.40248 31.7328L6.59233 31.5852C6.85952 31.3742 7.75248 30.8609 10.4384 29.4055C11.7181 28.7094 12.8923 28.0273 13.054 27.8867C13.2158 27.7461 13.4337 27.4508 13.5462 27.2258C13.7361 26.8391 13.7431 26.7898 13.7642 25.482L13.7923 24.1391L13.4689 23.6961C12.7869 22.775 12.0837 21.3477 11.7673 20.2578C11.6267 19.7797 11.5353 19.5969 11.3244 19.3719C10.797 18.8234 10.79 18.8023 10.79 16.8758C10.79 15.0406 10.804 14.9352 11.1767 14.5203C11.2962 14.3938 11.3103 14.1688 11.3384 12.0242C11.3665 9.38047 11.3876 9.26094 11.8869 8.23438C12.7376 6.50469 14.6361 5.55547 17.5048 5.43594C20.7814 5.30234 23.165 6.31484 24.1142 8.24844C24.6134 9.26797 24.6275 9.37344 24.6134 11.9891C24.5994 14.2953 24.5994 14.3164 24.747 14.45C24.8314 14.5273 24.972 14.7172 25.0564 14.8719C25.197 15.1391 25.204 15.2516 25.204 16.8758C25.204 18.5141 25.197 18.6125 25.0494 18.8867C24.8736 19.2172 24.4728 19.5969 24.1494 19.7305C23.9665 19.8008 23.9103 19.8922 23.8048 20.2297C23.6009 20.9117 22.6658 22.7047 22.1455 23.4289L21.6533 24.1109V25.4398C21.6533 26.9938 21.7095 27.2328 22.2017 27.7813C22.497 28.1117 22.7572 28.2523 25.6189 29.6867C27.3275 30.5375 28.9025 31.3602 29.1275 31.5078L29.5353 31.7891L29.9994 31.3813C31.2158 30.3125 32.5728 28.6531 33.4728 27.1273C35.7861 23.232 36.5244 18.5281 35.533 14.0633C34.19 8.02344 29.7673 3.05938 23.9103 1.02734C21.7236 0.26797 19.1923 -0.0906242 16.9775 0.0500008Z" fill="#6B7B93" />
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
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.9775 0.0500008C13.2228 0.282032 9.72123 1.61797 6.82436 3.92422C0.36264 9.05703 -1.77486 17.9023 1.62827 25.4328C2.57748 27.5281 4.18061 29.7359 5.85405 31.2406L6.40248 31.7328L6.59233 31.5852C6.85952 31.3742 7.75248 30.8609 10.4384 29.4055C11.7181 28.7094 12.8923 28.0273 13.054 27.8867C13.2158 27.7461 13.4337 27.4508 13.5462 27.2258C13.7361 26.8391 13.7431 26.7898 13.7642 25.482L13.7923 24.1391L13.4689 23.6961C12.7869 22.775 12.0837 21.3477 11.7673 20.2578C11.6267 19.7797 11.5353 19.5969 11.3244 19.3719C10.797 18.8234 10.79 18.8023 10.79 16.8758C10.79 15.0406 10.804 14.9352 11.1767 14.5203C11.2962 14.3938 11.3103 14.1688 11.3384 12.0242C11.3665 9.38047 11.3876 9.26094 11.8869 8.23438C12.7376 6.50469 14.6361 5.55547 17.5048 5.43594C20.7814 5.30234 23.165 6.31484 24.1142 8.24844C24.6134 9.26797 24.6275 9.37344 24.6134 11.9891C24.5994 14.2953 24.5994 14.3164 24.747 14.45C24.8314 14.5273 24.972 14.7172 25.0564 14.8719C25.197 15.1391 25.204 15.2516 25.204 16.8758C25.204 18.5141 25.197 18.6125 25.0494 18.8867C24.8736 19.2172 24.4728 19.5969 24.1494 19.7305C23.9665 19.8008 23.9103 19.8922 23.8048 20.2297C23.6009 20.9117 22.6658 22.7047 22.1455 23.4289L21.6533 24.1109V25.4398C21.6533 26.9938 21.7095 27.2328 22.2017 27.7813C22.497 28.1117 22.7572 28.2523 25.6189 29.6867C27.3275 30.5375 28.9025 31.3602 29.1275 31.5078L29.5353 31.7891L29.9994 31.3813C31.2158 30.3125 32.5728 28.6531 33.4728 27.1273C35.7861 23.232 36.5244 18.5281 35.533 14.0633C34.19 8.02344 29.7673 3.05938 23.9103 1.02734C21.7236 0.26797 19.1923 -0.0906242 16.9775 0.0500008Z" fill="#6B7B93" />
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
        <? include "layouts/footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="js/libs/jquery-3.7.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>