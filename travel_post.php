
<html>
    <title>Пост-путешествие</title>
<body>

<?php include_once "./parts/header.php";?>
<?php include_once "./connect/connect.php";?>
    <main class="container mt-5">
        <?php
        $id = $_GET['id'];     
        $query = $connect ->query("SELECT * FROM travel WHERE id = '$id'");
        if (mysqli_num_rows($query) == 0) echo "<span class='text-muted'>Не удалось найти пост</span>";
        while ($res = mysqli_fetch_assoc($query)):
        ?>
        <h1 class="text-center"><?=$res['title']; ?></h1>
        <article class="alert mt-4">
            <h3><?=$res['title'];?></h3>
            <p><?=$res['text'];?></p>
            <em>Дата публикации: <?=$res['pubdate'];?></em><br>
            <em>Автор: <a href="/about.php"><?=$res['author'];?></a></em><br>
            <?php
            endwhile;
            ?>
            <a href="/">Назад</a>
        </article>

    </main>

</body>
<? include_once "./parts/fotter.php";?>
</html