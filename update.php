<?php
error_reporting(E_ALL);
include_once "./parts/header.php";
include_once "./connect/connect.php";



$id = $_GET['id'];

$query = $connect->query("SELECT * FROM articles WHERE id = '$id'");
$res = mysqli_fetch_assoc($query);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <div class="container">
        <form class="mt-4" action="code/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $id['id'] ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="text" name="title" value="<?= $res['title'] ?>" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="text" name="intro" value="<?= $res['intro'] ?>" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"><?= $res['text'] ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Редактировать</button>
        </form>
    </div>
</body>

</html>
<? include_once "./parts/fotter.php"; ?>