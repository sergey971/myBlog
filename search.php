<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <? include_once "./parts/header.php" ?>
    <? include_once "./connect/connect.php" ?>
    <main class="container mt-5">
        <h1 class="text-center">Поиск "<?=$_GET['text'];?>"</h1>
        <section class="mt-4">
            <?php
                $text = $_GET['text'];
                $query = $connect -> query("SELECT * FROM `articles` WHERE `title` LIKE '%$text%' ORDER BY `pubdate` DESC");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На данный момент нет постов.</span>
            <?php
                endif;
                while ($res = mysqli_fetch_assoc($query)):
            ?>
                <article class="alert alert">
                    <h3><?=$res['title'];?></h3>
                    <p><?=$res['intro'];?></p>
                    <em>Дата публикации: <?=$res['pubdate'];?></em><br>
                    <em>Автор: <a href="/author.php?login=<?=$res['author'];?>"><?=$res['author'];?></a></em><br>
                    <em>Просмотры: <?=$res['views'];?></em><br>
                    <a href="/article.php?id=<?=$res['id'];?>" class="btn btn-outline-primary mt-3">Перейти</a>
                </article>
            <?php
                endwhile;
            ?>
        </section>
    </main>
</body>
</html>