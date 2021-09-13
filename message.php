<?php

require_once "./parts/header.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваше сообщение</title>
</head>
<style>
    textarea {
        width: 50%;
        height: 200px;
        resize: none;
    }
</style>

<body>
    <div class="container">
        <form name="MyForm" id="callbacks" action="" method="post">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="name" class="form-control" placeholder="Ваше Имя" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="number" name="phone" class="form-control" placeholder="Вашь телефон" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <label for="basic-url" class="form-label">Ваша почта</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Mail-Gmail-Rambler-Yandex</span>
                <input type="email" name="email" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <div class="input-group">
                <span class="input-group-text">Ваше сообщение</span>
                <textarea name="body" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <br>
            <button id="submit" type="submit" name="done" class="btn btn-primary">Отправить</button>
        <!-- <input id="submit" type="submit" name="done" /> -->
        </form>
    </div>
    <div id="erconts" style="display: none">
    </div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="/script.js"></script>


</html>

<?php
include_once "./parts/fotter.php";
?>