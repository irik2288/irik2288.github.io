<?php 
$login = $_POST['login'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$login = htmlspecialchars ($login);
$email = htmlspecialchars ($email);
$tel = htmlspecialchars ($tel);

$login = urldecode ($login);
$email=  urldecode ($email);
$tel = urldecode ($tel);

$login = trim  ($login);
$email = trim  ($email);
$tel = trim ($tel);
if (mail("pidik5544@mail.ru"),
"новое письмо с сайта"
"логин: ".$login. "\n".
"почта: ".$email,
"телефон: ".$tel. "\n".
" from:gruzdevaroslav140@gmail.com \r\n")
){
each ('письмо отправлено');
}
else{
    each ('есть ошибки. проверьте данные ...');
}

?>
