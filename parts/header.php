<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sof-Ila</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootstrap5.ru/css/docs.css">
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
  <link href="/css/examples/blog.css" rel="stylesheet">
</head>
<style>
  body {
    background: url(fon2.jpg) no-repeat;
    background-size: cover;
  }
</style>

<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1 " style="margin-right: 100px ">
          <a style="background: #73605B;" class="btn btn-sm btn" href="/message.php">Напиши мне</a>
        </div>
        <div class="col-4 text-center">
          <a style="margin-right: 230px " class="blog-header-logo text-dark" href="/"><img src="/image/m_sof-ila.png" alt=""></a>

        </div>
        <div class="col-4 d-flex justify-content-around align-items-center">

          <div class="col-4 pt-1" style="margin-left: 155px ">
            <a style="background: #73605B;" class="btn btn-sm" href="/edit.php">Admin</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
        <form class="d-flex" action="/search.php" method="GET">
          <input type="text" name="text" class="form-control" placeholder="Введите запрос">

            <button style="background: #73605B;" class="btn btn-sm-2"> Искать</button>
        </form>
      </div>
      </div>

  </div>
  </header>

  <div class="nav-scroller py-1 mb-2 ">
    <nav class="nav d-flex justify-content-center">
      <?php if ($_COOKIE['log'] == '') : ?>
        <nav class="nav d-flex justify-content-between">
          <a class="p-4 link-secondary" href="/contact.php">Контакты</a>
          <a class="p-4 link-secondary" href="/about.php">Обо мне</a>
          <!-- <a class="p-4 link-secondary" href="#">Портфолио</a> -->
          <!-- <a class="p-4 link-secondary" href="/add_photo.php">Фото альбом</a> -->
          <a class="p-4 link-secondary" href="/history.php">История</a>
          <a class="p-4 text-dark" href="/travel.php">Путешествие</a>
        </nav>
      <?php else : ?>
  </div>
  <div class="container">
  <a class="p-4 link-secondary" href="/history.php">История</a>
  <a class="p-4 text-dark" href="/travel.php">Путешествие</a>
  <a class="p-4 text-dark" href="/add.php">Добавить /</a>
  <a class="p-4 text-dark" href="/add_travel_post.php">Добавить статью путешествие</a>
  <a class="p-4 text-dark" href="/add_history_post.php">Добавить статью история</a>
  <a class="p-4 text-dark" href="/code/exit.php">Выйти</a>
  </div>
<?php endif ?>
</nav>
</div>
</body>

</html>