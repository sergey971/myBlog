<? include_once "./parts/header.php"; ?>
<? include_once "./connect/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-10">
                <h3 class="pb-4 mb-4 font-italic border-bottom"></h3>
                <?php include_once "./connect/connect.php"; ?>
                <?php
                if (isset($_GET['del'])){
                $id = ($_GET['del']);
                $query  = $connect -> query("DELETE FROM `travel` WHERE `travel`.`id` = '$id' ");
            }
            ?>
                <? $query = $connect -> query("SELECT * FROM `travel` ORDER BY `pubdate` DESC");?>
                <?php if (mysqli_num_rows($query) == 0 ):
        ?>
            <span class="text-muted text-center">На данный момент постов нет.</span>
        <?php
        endif;?>
                <?php
            while ($res = mysqli_fetch_assoc($query)):
            ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?=$res['title'];?></h2>
                <p class="lead my-3"><p><?=$res['intro'];?></p>
                <p class="lead my-3"><p><?=mb_substr($res['text'], 0, 200, 'Utf-8') . '...'?></p>
                <p class="lead mb-0"><a href="/travel_post.php?id=<?=$res['id']?>" class="text-black font-weight-bold">Продолжить чтение...</a></p><br>
                <?php if ($_COOKIE["log"] = $_COOKIE["log"]): ?> 
                <a href="?del=<?=$res['id'] ?>">Удалить</a>
                <a href="update.php?id=<?=$res['id']?>">Редактировать</a>
                <hr>
                <?php endif;?>
            <?php endwhile; ?>

                    </div>
                    <br><!-- /.blog-post -->


                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Предыдущие</a>
                        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Следующие</a>
                    </nav>

            </div>

        </div><!-- /.row -->

    </main><!-- /.container -->
</body>
<? include_once "./parts/fotter.php"; ?>

</html>