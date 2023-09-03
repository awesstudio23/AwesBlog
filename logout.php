<?php

unset($_COOKIE['user']);
setcookie('user', null, time() + 60 * 60 * 24 * 1, '/');
header("Location: /");
