<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$tovar = trim($_POST["tovar"]);
$tovar = htmlspecialchars($_POST["tovar"]);
$tovar_url = htmlspecialchars($_POST["tovar_url"]);
$tel = htmlspecialchars($_POST["tel"]);
$error = "";
$name = " - заказ в один клик с сайта fonarik.loc";
$email = "fonarik.loc";
$rand = rand(0, 1000);
/*if(!$name)
{
$error .= "Пожалуйста введите ваше имя.<br />";
}*/
// Check email
/*function ValidateEmail($value)
{
$regex = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/";
if($value == "") {
return false;
} else {
$string = preg_replace($regex, "", $value);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите e-mail.<br />";
}
if($email && !ValidateEmail($email))
{
$error .= "Введите корректный e-mail.<br />";
}*/
// Check tel
function ValidateTel($valueTel)
{
/*$regexTel = "/^[0-9]{10,12}$/";*/
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$tel)
{
$error .= "Пожалуйста введите телефон<br />";
}
if($tel && !ValidateTel($tel))
{
$error .= "Введите корректный телефон.<br />";
}
if(!$error)
{
$subject ="Заказ в один клик с сайта fonarik.loc";
$message ="Клиент не захотел заполнять поля при оформлении заказа и хочет быстро оформить заказ по телефону.\n\nТовар, который хочет купить клиент: ".$tovar."\n\nСсылка на товар: " .$tovar_url."\n\nТелефон клиента для обратной связи: +38 ".$tel."\n\n";
$mail = mail("info@fonarik.com", $subject, $message,

"From: "."< ".$email." ".$rand." >");
if($mail)
{
echo 'OK';
}
}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}
}
?>