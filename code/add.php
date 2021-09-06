<?php
require_once "../connect/connect.php";

$title = $_POST['title'];
$intro = $_POST['intro'];
$text = $_POST['text'];
$author = $_COOKIE['log'];

$error = '';
if (strlen($title) < 10) $error = "Заголовок должен содержать не менее 10 символов";
else if (strlen($intro) < 20) $error = "Интро должен содержать не менее 20 символов";
else if (strlen($text) < 30) $error = "Текст должен содержать не менее 30 символов";

if ($error) {
    echo $error;
    exit();
} else {
    $connect -> query("INSERT INTO `articles` (`title`, `intro`, `text`, `author`) VALUES ('$title', '$intro', '$text', '$author')");
    echo "ready";
}
