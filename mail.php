<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($body)){
 
$address = "vanzphoto@yandex.ru";
$mes = "Имя: $name \nE-mail: $email \nТекст: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено успешно. Перейдите на <a href='index.html'>главную</a> страницу.";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполнили все поля!!!";
}
?>