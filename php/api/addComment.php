<?php

require "../db.php";

$data = $_POST;

if (!$user) {
    echo "Ошибка! Вы не авторизованы.";
    exit();
}

if ($data == null) {
    include "../../404.php";
    exit();
}

if (strlen($data["content"]) < 3) {
    echo "Ошибка! Комментарий менее 3-х символов.";
    exit();
}

$lastComments = R::findAll("comments", "article_id = ? AND user_login = ?", [$data["id"], $user->login]);

$hasRecentComment = false;

if ($lastComments != null) {
    $currentTimestamp = time();
    foreach ($lastComments as $comment) {
        $commentTimestamp = strtotime($comment->eventTimestamp);
        $minutesPassed = ($currentTimestamp - $commentTimestamp) / 60;

        if ($minutesPassed < 3) {
            $hasRecentComment = true;
            break;
        }
    }
}

if ($hasRecentComment) {
    echo "Ошибка! Еще не прошло 3 минуты с последнего комментария.";
} else {
    $comment = R::dispense("comments");
    $comment->articleId = $data["id"];
    $comment->userLogin = $user->login;
    $comment->date = strftime('%B %d');
    $comment->content = $data["content"];
    $comment->eventTimestamp = date("Y-m-d H:i:s");
    R::store($comment);
}
