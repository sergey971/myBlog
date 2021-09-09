<?php

include_once "../connect/connect.php";

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Проверка, является ли файл изображения реальным
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "Это изображение - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Файл не является изображением.";
        $uploadOk = 0;
    }
}

// Проверка, существует ли уже файл
if (file_exists($target_file)) {
    echo "Извините, файл уже существует";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Разрешаем определенные расширения файлов
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Разрешены только файлы JPG, JPEG, PNG и GIF";
    $uploadOk = 0;
}

// Проверка, не установлено ли для $uploadOk значение 0 из-за ошибки
if ($uploadOk == 0) {
    echo "К сожалению, ваш файл не был загружен";
    // если все в порядке, поробуем загрузить файл
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Файл " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) .
            " был загружен";
            
    } else {
        echo "К сожалению, при загрузке вашего файла произошла ошибка";
    }
}
$query = $connect->query("INSERT INTO `image` (`photo`) VALUES ('{$_FILES['file']['name']}')");