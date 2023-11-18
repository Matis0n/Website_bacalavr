<?php
include ("./session.php");

$addr1=$_SERVER["PHP_SELF"];
$addr2=$_SERVER["HTTP_REFERER"];

if ( isset($_SESSION['login'])) //it user logged in
 {

// Удаляем все переменные сессии.
$_SESSION = array();

// сбрасываем идентификатор сессии
session_regenerate_id();
// Наконец, уничтожаем сессию.
session_destroy();

//возвращаемся на ту же страницу
header ("Location: $addr2");



 }
else {
header ("Location: $addr2"); //no session


} 

?>