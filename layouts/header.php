<? if (!isset($_COOKIE["user"])) { ?>
    <header class="header">
        <div class="container max-w-screen-xl header__container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 py-3">
                <a class="navbar-brand" href="/">
                    <img src="img/logo.png" class="h-8" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
<? } else { ?>
    <header class="header">
        <div class="container max-w-screen-xl header__container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 py-3">
                <a class="navbar-brand" href="/">
                    <img src="img/logo.png" class="h-8" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-lg-auto">
                        <a class="nav-item nav-link" href="/">Главная</a>
                        <a class="nav-item nav-link" href="profile">Профиль</a>
                        <a class="nav-item nav-link disabled" href="#">To be soon..</a>
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
<? }  ?>