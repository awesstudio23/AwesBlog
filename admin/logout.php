<?php

unset($_COOKIE['admin']);
setcookie('admin', null, time() + 60 * 60 * 24 * 1, '/');
header("Location: /");
