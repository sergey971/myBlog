<?php

include_once "./parts/header.php";
include_once "./connect/connect.php";

if(!isset($_GET['page'])) $page = 1;
else $page = mysqli_real_escape_string($connect, trim($_GET['page']));
if (ctype_digit($page) === false)$page = 1;
$travel = "travel";
$count_query = $connect -> query("SELECT COUNT(*) FROM $travel");
$count_array = $count_query ->fetch_array(MYSQLI_NUM);
$count = $count_array[0];
$limit = 5;
$start = ($page * $limit) - $limit;
$length = ceil($count / $limit);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>История</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-10">
            <h3 class="pb-4 mb-4 font-italic border-bottom"></h3>
                <?php
                if (isset($_GET['del'])){
                $id = ($_GET['del']);
                $query  = $connect -> query("DELETE FROM `history` WHERE `history`.`id` = '$id' ");
            }
            ?>
                <?php
                if((int)$page > $length)$start = 0;
                $query = $connect->query("SELECT * FROM `history` ORDER BY `pubdate` DESC LIMIT $start, $limit");
                if (mysqli_num_rows($query) == 0) : ?>
                    <span class="text-muted text-center">На данный момент постов нет.</span>
                <?php
                endif;
                ?>
                <?php
                while ($res = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="blog-post">
                        <h2 style="color:#8D230F;" class="blog-post-title"><?= $res['title']; ?></h2>
                        <p class="lead my-3">
                        <p style="color: white;"><?= $res['intro']; ?></p>
                        <p class="lead my-3">
                        <p style="color: #CD7213;"><?= mb_substr($res['text'], 0, 200, 'Utf-8') . '...' ?></p>
                        <p class="lead md=0"><a href="/history_post.php?id=<?= $res['id'] ?>" class="text-black font-weight-bold">Продолжить чтение...</a></p><br>
                        <?php if ($_COOKIE["log"] = $_COOKIE["log"]) : ?>
                            <a href="?del=<?= $res['id'] ?>">Удалить</a>
                            <a href="update.php?id=<?= $res['id'] ?>">Редактировать</a>
                            <hr>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php
                    function Pagination($length, $page)
                    {
                        if ($length < 5) foreach (range(1,  $length) as $p) echo '<a href="index.php?page=' . $p . '">' . $p . '</a>';

                        if ($length > 4 && $page < 5) foreach (range(1, 5) as $p) echo '<a href="index.php?page=' . $p . '">' . $p . '</a>';

                        if ($length - 5 < 5 && $page > 5 && $length - 5 > 0) foreach (range($length - 4, $length) as $p) echo '<a href="index.php?page=' . $p . '">' . $p . '</a>';

                        if ($length > 4 && $length - 5 < 5 && $page == 5) foreach (range($page - 2, $length) as $p) echo '<a href="index.php?page=' . $p . '">' . $p . '</a>';

                        if ($length > 4 && $length - 5 > 5 && $page >= 5 && $page <= $length - 4) foreach (range($page - 2, $page + 2) as $p) echo '<a href="index.php?page=' . $p . '">' . $p . '</a>';

                        if ($length > 4 && $length - 5 > 5 && $page > $length - 4) foreach (range($length - 4, $length) as $p) echo '<a href="index.php?page=' . $p . '">' . $p . '</a>';
                    }
                    ?>

                    </div>
                    <br><!-- /.blog-post -->


                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-4">
                            <?php Pagination($length, $page); ?>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </main>
</body>
<? include_once "./parts/fotter.php" ?>

</html>