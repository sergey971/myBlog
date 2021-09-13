<?php

    require "../connect/connect.php";
    if(isset($_POST['title']) || isset($_POST['intro']) || isset($_POST['text'])) {

        $title = mysqli_real_escape_string($connect, trim($_POST['title']));
        $intro = mysqli_real_escape_string($connect, trim($_POST['intro']));
        $text = mysqli_real_escape_string($connect, trim($_POST['text']));


        $error = '';
        if (strlen($title) < 10) $error = "Заголовок должен содержать не менее 10 символов";
        else if (strlen($intro) < 20) $error = "Интро должен содержать не менее 20 символов";
        else if (strlen($text) < 30) $error = "Текст должен содержать не менее 30 символов";

    if ($error) {
        echo $error;
        exit();
    } else {
        $id = $_GET['id'];
        $connect -> query("UPDATE `articles` SET `title` = '$title', `intro` = '$intro', `text` = '$text' WHERE `articles`.`id` = '$id'");
        echo "ready";
    }

}