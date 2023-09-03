<?php

$data = $_POST;

if ($data == null) {
    include "../../404.php";
    exit();
}

require "../db.php";

if ($data["type"] == "sign-up") {
    if (strlen($data["login"]) < 3) {
        $error = "Ошибка! Логин менее 3-х символов.";
    } else if (strlen($data["password"]) < 8) {
        $error = "Ошибка! Пароль менее 8-ми символов.";
    } else if ($data["password"] != $data["confirm-password"]) {
        $error = "Ошибка! Пароли не совпадают.";
    } else if ($user = R::findOne('users', 'login = ?', [$data["login"]])) {
        $error = "Ошибка! Пользователь с данным логином уже существует.";
    }

    if (isset($error)) {
        echo $error;
    } else {
        $user = R::dispense("users");
        $user->login = $data["login"];
        $user->password = $data["password"];
        R::store($user);
        SetCookie("user", json_encode($user), time() + 60 * 60 * 24 * 1, '/');
    }
} else if ($data["type"] == "sign-in") {
    if (strlen($data["login"]) < 3) {
        $error = "Ошибка! Логин менее 3-х символов.";
    } else if (strlen($data["password"]) < 8) {
        $error = "Ошибка! Пароль менее 8-ми символов.";
    } else {
        $user = R::findOne('users', 'login = ? AND password = ?', [$data["login"], $data["password"]]);
        if (!$user)
            $error = "Ошибка! Неверный логин или пароль.";
    }

    if (isset($error)) {
        echo $error;
    } else {
        SetCookie("user", json_encode($user), time() + 60 * 60 * 24 * 1, '/');
    }
} else if ($data["type"] == "sign-in-admin") {
    if (strlen($data["login"]) < 3) {
        $error = "Ошибка! Логин менее 3-х символов.";
    } else if (strlen($data["password"]) < 8) {
        $error = "Ошибка! Пароль менее 8-ми символов.";
    } else {
        $admin = R::findOne('admins', 'login = ? AND password = ?', [$data["login"], $data["password"]]);
        if (!$admin)
            $error = "Ошибка! Неверный логин или пароль.";
    }

    if (isset($error)) {
        echo $error;
    } else {
        SetCookie("admin", json_encode($admin), time() + 60 * 60 * 24 * 1, '/');
    }
} else {
    include "../../404.php";
    exit();
}
