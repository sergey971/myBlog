<div class="container">
<?php

if(isset($_POST["name"]))
{
        if(isset($_POST["name"]))
        {
                $name = $_POST["name"];
        }
        if(isset($_POST["phone"]))
        {
                $phone= $_POST["phone"];
        }
        if(isset($_POST["email"]))
        {
                $email= $_POST["email"];
        }
        if(isset($_POST["body"]))
        {
                $body = $_POST["body"];
        }

        if($name=="" or $phone=="" or $body=="" or $body=="")
        { // Проверяем на заполненность всех полей.
                echo "Пожалуйста, заполните все поля";
        }
        else
        {
                $ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
                $brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
                $to = "murin.89@list.ru"; // Ваш email адрес
                $subject = "Сообщение c сайта sof-ilablog.ru"; // тема письма
                $headers .= "Content-Type: text/html;
                ";
                $headers .= ""; // Отправитель письма
                $message = "
                Имя: $name<br>
                Телефоны: $phone<br>
                Email: $email<br>
                Текст: $body<br><br>

                IP отправителя: $ip<br>
                Браузер отправителя: $brose<br>
                ";

                $send = mail($to, $subject, $message, $headers);
                
                if ($send == "true")
                
                {
                    
                    echo"Ваше сообщение отправлено. Я отвечу вам в ближайшее время.";
                    echo "<br>";

                    
                    
                    

                }
                else
                {
                        echo "Не удалось отправить, попробуйте снова!";
                }
                
            }
        }
        
?>
<a href="/">На главную</a>
</div>

