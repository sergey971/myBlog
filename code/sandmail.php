<?php


if ($_POST['capcha'] != 10) {
    header('location: ../message.php');
    exit;
}

if ($_POST['subject'] == 1) {
    $subject = 'Тема письма';
} elseif ($_POST['subject'] == 2) {
    $subject = 'Вопрос о путешествии';
} elseif ($_POST['subject'] == 3) {
    $subject = 'Вопрос о проекте';
} elseif ($_POST['subject'] == 4) {
    $subject = 'Личный вопрос';
} elseif ($_POST['subject'] == 5) {
    $subject = 'Отзыв';
} elseif ($_POST['subject'] == 6) {
    $subject = 'Прочее';
} else {
    $subject = 'Тема письма';
}

$to = "murin.89@list.ru";
$from = trim($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($_POST['message']);

$headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
?>
<?php if (mail($to, $subject, $message, $headers)):?><? {
    header('Location: ../message_answer.php'); ?>
    <?
} ?>
<?endif?>

