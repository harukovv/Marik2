<?php
require_once("config_mysql_index.php");
if(empty($_POST['Names'])) exit("Не указано имя пользователя");
if(empty($_POST['pass'])) exit("Не указан пароль пользователя");
$name=$_POST['Names']; 
$pass=$_POST['pass']; 
$trim_str_name= trim($name); 
$trim_str_pass= trim($pass); 
$sql = mysql_query("Select * from Users where Names = '$name'and
pass='$pass';" );
if (mysql_num_rows($sql) > 0)
{
header('Location: index.php');}
else {
print "Ошибка авторизации";
}
?>