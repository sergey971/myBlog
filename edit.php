
<body>
<?php include_once './parts/header.php'; ?>
<?php if ($_COOKIE["log"] != ''): ?> <script>location.href = '/'</script> <? endif;?>
<main class="mt-5 container">
    <div class="text-center">
        <span id="errorSpan" class="alert alert-danger mb-3" style="display:none;bottom: 20px"></span>
        <h1 class="text-center">Авторизация</h1>
    </div>
    <form class="mt-4">
        <input type="text" name="login" id="login" placeholder="Ввидите логин" class="form-control mt-2 w-25 p-2 ">
        <input type="password" name="password" id="password" placeholder="Ввидите пароль" class="form-control mt-2 w-25 p-2">
        <button class="btn btn-outline-primary mt-3" type="button" id="editBtn">Войти</button>
    </form>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#editBtn").click(function(){
        const login = $('#login').val()
        const password = $('#password').val()

        $.ajax({
            url:'../code/edit.php',
            type: 'POST',
            cache: false,
            data: {login, password},
            dataType: 'html',
            success: function(data){
                if (data == 'ready'){
                    $('#errorSpan').hide()
                    location.href = '/'
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
