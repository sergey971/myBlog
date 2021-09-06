<?php
error_reporting(E_ALL);
require_once "../connect/connect.php";

$login = mysqli_real_escape_string($connect, trim($_POST['login']));
$password = mysqli_real_escape_string($connect, trim($_POST['password']));

$hash = 'BNksda87TG@Hkhdbsak73fgdah';
$password = md5($password . $hash);


$query = $connect -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

$error = '';



if (mysqli_num_rows($query) == 0) $error = "Ввидите правильно логин или пароль";

if ($error) {
    echo $error;
    exit();
} else {
    setcookie("log", $login, time() + 3600, '/');
    echo "ready";
}


