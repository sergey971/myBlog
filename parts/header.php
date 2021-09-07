<!doctype html>
<html lang="ru" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://bootstrap5.ru/examples/blog" />
  <meta name="description" content="Журнал как шаблон блога с заголовком, навигацией, избранным контентом.">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors, Alexey Golyagin">
  <meta name="docsearch:language" content="ru">
  <meta name="docsearch:version" content="5.0">

  <title>Блог</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootstrap5.ru/css/docs.css">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://bootstrap5.ru/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://bootstrap5.ru/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://bootstrap5.ru/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  <!-- Facebook -->
  <meta property="og:url" content="https://bootstrap5.ru/examples/blog">
  <meta property="og:title" content="Бесплатный bootstrap 5 шаблон - Блог">
  <meta property="og:description" content="Журнал как шаблон блога с заголовком, навигацией, избранным контентом.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://bootstrap5.ru/img/examples/blog.png">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1000">
  <meta property="og:image:height" content="500">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=V5n4tf6-EraVrS-B4RNn5HIatwaquPxMgm78IoNqFFkEpsv2QOCdhAWxJ77U94lZE2sjH_OSpS4BAcAFFwb2XA" charset="UTF-8"></script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/css/examples/blog.css" rel="stylesheet">
</head>
<style>
body{
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
          <a  style="margin-right: 230px " class="blog-header-logo text-dark" href="/"><img src="/image/m_sof-ila.png" alt=""></a>

        </div>
        <div class="col-4 d-flex justify-content-around align-items-center">
          <a class="link-secondary" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewbox="0 0 24 24">
              <title>Поиск</title>
              <circle cx="10.5" cy="10.5" r="7.5"></circle>
              <path d="M21 21l-5.2-5.2"></path>
            </svg>
          </a>          
          <div class="col-4 pt-1"style="margin-left: 25px ">
          <a style="background: #73605B;" class="btn btn-sm" href="/edit.php">Admin</a>
          </div>
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
            <a class="p-4 link-secondary" href="#">Портфолио</a>
            <a class="p-4 link-secondary" href="#">Жизнь</a>
            <a class="p-4 link-secondary" href="#">Семья</a>
            <a class="p-4 link-secondary" href="#">Фото альбом</a>
            <a class="p-4 link-secondary" href="/history.php">История</a>
            <a class="p-4 text-dark" href="/travel.php">Путешествие</a>
          </nav>
        <?php else : ?>
    </div>
    <a class="p-4 link-secondary" href="/history.php">История</a>
    <a class="p-4 text-dark" href="/travel.php">Путешествие</a>
    <a class="p-4 text-dark" href="/add.php">Добавить /</a>
    <a class="p-4 text-dark" href="/add_travel_post.php">Добавить статью путешествие</a>
    <a class="p-4 text-dark" href="/add_history_post.php">Добавить статью история</a>
    <a class="p-4 text-dark" href="/code/exit.php">Выйти</a>
  <?php endif ?>
  </nav>
  </div>
</body>

</html>