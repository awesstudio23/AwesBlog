<?

require "libs/rb-mysql.php";
require "config.php";

R::setup(
    'mysql:host=' . db_host . ';dbname=' . db_name,
    db_user,
    db_pass
);
