<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$name = htmlspecialchars($_POST["name"]);
$phone = htmlspecialchars($_POST["phone"]);
$error = "";
$name_1 = " - магазин";
$email_name = "fonarik.ua";
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
}*/
if(!$phone OR $phone=="Ваш телефон")
{
$error .= "Введите Ваш телефон<br />";
}
/*if($email && !ValidateEmail($email))
{
$error .= "Введите корректный e-mail.<br />";
}
// Check tel
function ValidateTel($valueTel)
{
/*$regexTel = "/^[0-9]{10,12}$/";
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
}*/
if(!$error)
{
$subject_mail ="Заказ обратного звонка FONARIK.UA!";
$message_mail ="Посетитель сайта заказал обратный звонок\n\nИмя посетителя: ".$name."\n\nТелефон посетителя: ".$phone;
$mail = mail("info@fonarik.com", $subject_mail, $message_mail,

"From: "."<".$rand.">"." ".$email_name." ".$name_1." "."Reply-To: ".$email_name." "." X-Mailer: PHP/" . phpversion());
if($mail)
{
echo 'OK';
}
}
else
{
echo '<div class="notification_error_foot">'.$error.'</div>';
}
}
?>