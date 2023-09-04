<?php

require "../db.php";

$data = $_POST;

if (isset($_COOKIE["admin"])) {
    $adminData = json_decode($_COOKIE["user"], true);
    $admin = R::findOne("admins", "login = ? AND password = ?", [$adminData["login"], $adminData["password"]]);
}

if ($data == null || !$admin) {
    include "../../404.php";
    exit();
}


if ($data["type"] == "add-article") {
    $article = R::dispense("articles");
    $article->title = $data["title"];
    $article->subtitle = $data["subtitle"];
    $article->content = $data["content"];
    $article->imageUrl = $data["imageUrl"];
    $article->date = strftime('%B %d');
    R::store($article);
} else if ($data["type"] == "edit-article") {
} else if ($data["type"] == "delete-article") {
    $article = R::findOne("articles", "id = ?", [$data["id"]]);
    R::trash    ($article);
} else {
    include "../../404.php";
    exit();
}
