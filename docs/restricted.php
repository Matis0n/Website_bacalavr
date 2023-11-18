<?php


if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}



$addr1=$protocol.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$addr2=$_SERVER["HTTP_REFERER"];




if (! isset( $_SESSION['login']))
{


if ($addr1===$addr2) 
       {
         if ((isset($_SESSION['wrong_pass'])) && ($_SESSION['wrong_pass']==="on")) //if wrong pass was entered
         echo "Неверный логин или пароль";
        }

include('./docs/auth_form.php');}
else
{
if (isset($page_filename)) include ($page_filename); 
}

?>
