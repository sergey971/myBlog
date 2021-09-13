$(document).ready(function()
{
        $("#submit").click(function()
        {
                $("#erconts").fadeIn(500);
                $.ajax(
                {
                        type: "POST",
                        url: "./code/sandmail.php", // Адрес обработчика
                        data: $("#callbacks").serialize(),
                        error:function()
                        {
                                $("#erconts").html("Произошла ошибка!");
                        },
                        beforeSend: function()
                        {
                                $("#erconts").html("Отправляем данные...");
                        },
                        success: function(result)
                        {
                                $("#erconts").html(result);
                                $("form").css("display","none");
                                checkThis();
                        },
                        
                });
        return false;
        });
});