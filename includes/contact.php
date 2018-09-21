<?php
//print_r($_POST);

$to      = 'gav.sqrt@gmail.com';
$subject = 'Request to sales managers ';
$message = 'Tel - '.$_POST['tel'] . "\r\n" . 'Name - '.$_POST['name'] . "\r\n" .'Message : '.$_POST['textarea'];
$headers = 'From:'.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
    echo "Сообщение отправлено!";
}
else{
    echo "Ошибка отправки!";
}