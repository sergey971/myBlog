<?php
require_once "../connect/connect.php";
error_reporting(E_ALL);


$id = $_POST['id'];
$title = $_POST['title'];
$intro = $_POST['intro'];
$text = $_POST['text'];


mysqli_query($connect,"UPDATE `articles` SET `title` = '$title', `intro` = '$intro', `text` = '$text' WHERE `articles`.`id` = '$id'");


header('Location: /');

