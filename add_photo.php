<?php
include_once "./connect/connect.php";
include_once "./parts/header.php";

if (isset($_FILES['file']['tmp_name'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "./uploads/" . $_FILES['file']['name']);

    $query = $connect->query("INSERT INTO `image` (`photo`) VALUES ('{$_FILES['file']['name']}')");
}



?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Форма добавления фото</h2>
        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Выберите файл: </label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="file">
                </div>
                <br>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="submit" class="btn btn-button">Добавить</button>
            </div>
            </div>
    </div>
    </form>
    <br><br>
    <?php
    $table = $connect->query("SELECT * FROM `image`");
    while ($row = mysqli_fetch_array($table)) {
    ?>
        <table class="table">
        <tr>
            <td><?= ++$cnt ?></td>
            <td><img src='./uploads/<?= $row['photo']; ?>' width="300px" height="350px"></td>
            <td><a class="btn btn-danger" href="?del=<?= $res['id']; ?>">Удалить</a></td>
        </tr>
        </table>
    <?
    }
    ?>

</body>
</html>