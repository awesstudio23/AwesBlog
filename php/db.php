<?

require "libs/rb-mysql.php";
require "config.php";

R::setup(
    'mysql:host=' . db_host . ';dbname=' . db_name,
    db_user,
    db_pass
);

if (isset($_COOKIE["user"])) {
    $userData = json_decode($_COOKIE["user"], true);
    $user = R::findOne("users", "login = ? AND password = ?", [$userData["login"], $userData["password"]]);

    if (!$user) {
        unset($_COOKIE['user']);
        setcookie('user', null, time() + 60 * 60 * 24 * 1, '/');
        header("Location: /");
    }
}
