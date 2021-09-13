<?php
    
    include_once "./connect/connect.php"; 




    require_once "./parts/header.php";

if (!isset($_GET['page'])) $page = 1;
else $page = mysqli_real_escape_string($connect, trim($_GET['page']));
if (ctype_digit($page) === false) $page = 1;
$articles = "articles";
$count_query = $connect->query("SELECT COUNT(*) FROM $articles");
$count_array = $count_query->fetch_array(MYSQLI_NUM);
$count = $count_array[0];
$limit = 5;
$start = ($page * $limit) - $limit;
$length = ceil($count / $limit);


?>
<html>

<body>



        <div class="container ">
            <div class="row  float-right ">
                <aside class="p-4 p-md-5 mb-8 align-top" <div class="md-8 ">
                    <h4 class="font-italic " </h4>
                        <ol class="list-unstyled col-md-offset-4 ">
                            Я в сети
                            <li><a href="https://github.com/sergey971" target="_blank">GitHub</a></li>
                            <li><a href="https://twitter.com/C94967849" target="_blank">Twitter</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100013433798944" target="_blank">Facebook</a></li>
                            <li><a href="https://vk.com/smurin2013" target="_blank">Vk</a></li>
                        </ol>
                        
            </div>
            </aside>
        </div>
    </div>


    <main class="container">
        <div class="row">
            <div class="col-md-10">
                <h3 class="pb-4 mb-4 font-italic border-bottom"></h3>
                <?php include_once "./connect/connect.php"; ?>
                <?php
                if (isset($_GET['del'])) {
                    $id = ($_GET['del']);
                    $query  = $connect->query("DELETE FROM `articles` WHERE `articles`.`id` = '$id' ");
                }
                ?>
                <?php
                if ((int)$page > $length) $start = 0;

                $query = $connect->query("SELECT * FROM `articles` ORDER BY `pubdate` DESC LIMIT $start, $limit"); ?>
                <?php if (mysqli_num_rows($query) == 0) :
                ?>
                    <span class="text-muted text-center">На данный момент постов нет.</span>
                <?php
                endif; ?>
                <?php
                while ($res = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="blog-post">
                        <h2 style="color:#8D230F;" class="blog-post-title"><?= $res['title']; ?></h2>
                        <p class="lead my-3">
                        <p style="color: white;"><?= $res['intro']; ?></p>
                        <p class="lead my-3">
                        <p style="color: #CD7213;"><?= mb_substr($res['text'], 0, 200, 'Utf-8') . '...' ?></p>
                        <p class="lead mb-0"><a href="/article.php?id=<?= $res['id'] ?>" class="text-black font-weight-bold">Продолжить чтение...</a></p><br>
                        <hr>
                        <?php if ($_COOKIE["log"] = $_COOKIE["log"]) : ?>
                            <a href="?del=<?= $res['id']; ?>">Удалить</a>
                            <a href="update.php?id=<?=$res['id']; ?>">Редактировать</a>
                            <hr>
                        <?php endif; ?>
                    <?php endwhile; ?>

                    <?php
                    
                    function Pagination($length, $page)
                
                    
                    {
                        if ($length < 5) foreach (range(1, $length) as $p) echo  '<a href="index.php?page=' . $p . ' "> ' . $p . '</a>';
                        
                        if ($length > 4 && $page < 5) foreach (range(1, 5) as $p) echo '<a href="index.php?page=' . $p . ' "> ' . $p . '</a>';

                        if ($length - 5 < 5 && $page > 5 && $length - 5 > 0) foreach (range($length - 4, $length) as $p) echo '<a href="index.php?page=' . $p . ' "> ' . $p . '</a>';

                        if ($length > 4 && $length - 5 < 5 && $page == 5) foreach (range($page - 2, $length) as $p) echo '<a href="index.php?page=' . $p . ' "> ' . $p . '</a>';

                        if ($length > 4 && $length - 5 > 5 && $page >= 5 && $page <= $length - 4) foreach (range($page - 2, $page + 2) as $p) echo '<a href="index.php?page=' . $p . ' "> ' . $p . '</a>';

                        if ($length > 4 && $length - 5 > 5 && $page > $length - 4) foreach (range($length - 4, $length) as $p) echo '<a href="index.php?page=' . $p . ' "> ' . $p . '</a>';
                    }
                    ?>
                    </div>
                    <br><!-- /.blog-post -->

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-2" style="margin-left: 380px" >
                                <?php Pagination($length, $page); ?>
                            </div>
                        </div>

                    </div>

            </div><!-- /.row -->

    </main><!-- /.container -->


</body>
<?php
include_once "./parts/fotter.php";
?>

</html>