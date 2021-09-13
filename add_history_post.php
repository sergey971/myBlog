<body>
<? include_once "./parts/header.php" ?>
<? if ($_COOKIE['log'] == ''): ?>
    <script>location.href = '/edit.php'</script><? endif; ?>
<main class="mt-5 container">
    <div class="text-center">
        <span id="errorSpan" class="alert alert-danger" style="display:none;bottom:15px"></span>
        <h1 class="text-center mt-3">Добавить историю</h1>
    </div>
    <form class="mt-4">
        <input type="text" name="title" id="title" placeholder="Введите заголовок" class="form-control mt-2">
        <input type="text" name="intro" id="intro" placeholder="Введите тема" class="form-control mt-2">
        <textarea name="text" id="text" class="form-control mt-2" placeholder="Введите текст"></textarea>
        <button class="btn btn-outline-primary mt-3" type="button" id="addBtn">Добавить</button>
    </form>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#addBtn").click(function () {
        const title = $('#title').val()
        const intro = $('#intro').val()
        const text = $('#text').val()

        $.ajax({
            url: '/code/add_history_post.php',
            type: 'POST',
            cache: false,
            data: {title, intro, text},
            dataType: 'html',
            success: function (data) {
                if (data == 'ready') {
                    $('#errorSpan').hide()
                    location.href = '/history.php'
                } else {
                    $('#errorSpan').show()
                    $('#errorSpan').text(data)
                }
            }
        })
    })
</script>
</body>
</html>