<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once "./parts/header.php";?>
<?php include_once "./connect/connect.php";?>
<main class="container mt-5">
    <?php
    $id = $$_GET['id'];
    $query = $connect -> query("SELECT * FROM `history` WHERE `id`= '$id'");
    if (mysqli_num_rows($query) == 0) echo "<span class='text_muted'>Не удалось найти пост</span>";
    while($res = mysqli_fetch_assoc($query)):
    ?>
    <h1 class="text-center"><?=$res['title']?></h1>
    <article class="alert=mt-4">
        <h3><?=$res['title']?></h3>
        <p><?=$res['text']?></p>
        <em>Дата публикации: <?=$res['pubdate'];?></em><br>
        <em>Автор: <a href="/about.php"></a><?=$res['author'];?></em><br>
    </article>
    <? endwhile; ?>
    <a href="/">Назад</a>
</main>
</body>
<? include_once "./parts/fotter.php";?>
</html>