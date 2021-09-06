<?php

include_once "./parts/header.php";


?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <title>Обратная связь</title>
</head>

<body>
    <form action="/code/sandmail.php" method="POST">
        <div class="container">
        <select name="subject" class="form-select" aria-label="Default select example">
            <option disabled selected>Тема письма</option>
            <option value="1">Вопрос о путешествии</option>
            <option value="2">Вопрос о проекте</option>
            <option value="3">Личный вопрос</option>
            <option value="4">Отзыв</option>
            <option value="5">Прочее</option>
        </select>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ввидите ваш email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ваше сообщение</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Сообщение" rows="3"></textarea>
        </div>
        <img src="/image/capcha2.jpg">
        <input type="number" name="capcha" class="form-control mt-2" placeholder="Ввидите ответ" maxlength="3" required><br>
        <div class="col-auto">
            <button type="submit"  class="btn btn-primary mb-3">Отправить письмо</button>
        </div>
        </div>
    </form>
</body>
<?php
include_once "./parts/fotter.php";
?>

</html>