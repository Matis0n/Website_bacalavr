<h1>Успешная авторизация</h1>
<p>
Вы успешно авторизованы как 
<?php
if ( isset($_SESSION['login']))
 {
   echo  $_SESSION['login'];
 }
?>
</p>