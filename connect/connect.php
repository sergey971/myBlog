<?php


$connect = mysqli_connect("127.0.0.1:3307", "root", "root", "softjet");
if (!$connect) {
    echo "Ошибка соединения";
    exit();
}

