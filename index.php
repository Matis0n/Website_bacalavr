<?php
include("./php/session.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="css/formanad.css" type="text/css">

  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/coode.css" type="text/css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script src="js/lightbox-plus-jquery.min.js"></script>


  <link rel="shortcut icon" href="images/icon.ico">
    <title>Главная страница</title>
</head>
<body>
    <header><img class="logo" src="images/logo.png" alt="Логотип">Дефектоскоп OmniScan</header>

<div id="rootmenu">
<?php
if (isset($_SESSION["login"]))
{echo $_SESSION["login"]," <a href=\"./php/unreg.php\">Выйти из системы</a>";}
else
{echo "<a href=\"index.php?page=enter\">Войти в систему</a> ";}
?>
</div>

    <nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href='index.php?page'>Главная</a></li>
    <li><a href='index.php?page=23'>Автор</a></li>

    <li><a class='dropdown-arrow' href='#'>График</a>
      <ul class='sub-menus'>
        <li><a href='index.php?page=2'>График highcharts</a></li>
        <li><a href='index.php?page=24'>График БД</a></li>
      </ul>
    </li>

    <li><a class='dropdown-arrow' href='#'>Информация о приборе</a>
      <ul class='sub-menus'>
        <li><a href='index.php?page=3'>Описание</a></li>
        <li><a href='index.php?page=4'>Обновлённое программное обеспечение и калибровка</a></li>
        <li><a href='index.php?page=5'>Сбор данных</a></li>
        <li><a href='index.php?page=7'>Анализ данных и создание отчётов</a></li>
        <li><a href='index.php?page=8'>Характеристики SXPA</a></li>
        <li><a href='index.php?page=9'>Назначение средства измерений</a></li>
        <li><a href='index.php?page=10'>Описание средства измерений</a></li>
        <li><a href='index.php?page=11'>Программное обеспечение</a></li>
        <li><a href='index.php?page=15'>Ультразвуковая дефектоскопия фазированными решетками</a></li>
        <li><a href='index.php?page=16'>Меры предосторожности при использовании батарей</a></li>
      </ul>
    </li>
    <li><a class='dropdown-arrow' href='#'>Техническая информация</a>
      <ul class='sub-menus'>
        <li><a href='index.php?page=6'>Гарантии</a></li>
        <li><a href='index.php?page=12'>Метрологические и технические характеристики</a></li>
        <li><a href='index.php?page=13'>Поверка</a></li>
        <li><a href='index.php?page=14'>Комплектность средства измерений</a></li>
        <li><a href='index.php?page=17'>Зарядка батареи</a></li>
        <li><a href='index.php?page=18'>Индикаторы состояния батарей</a></li>
        <li><a href='index.php?page=19'>Опасно, Осторожно, Внимание</a></li>
        <li><a href='index.php?page=20'>Общие предупреждения</a></li>
        <li><a href='index.php?page=21'>Утилизация батарей</a></li>
        <li><a href='index.php?page=22'>Техническая поддержка</a></li>
      </ul>
    </li>
  </ul>
</nav>

  <article>
 <?php
    if (isset($_GET['page'])) { $page=$_GET['page']; } 

     if (isset($page)) 

    {
        switch ($page) 

        {
           
            case 2:include("./Pages/page2.php");break;
            case 3:include("./Pages/page3.php");break;
            case 4:include("./Pages/page4.php");break;
            case 5:include("./Pages/page5.php");break;
            case 6:include("./Pages/page6.php");break;
            case 7:include("./Pages/page7.php");break;
            case 8:include("./Pages/page8.php");break;
            case 9:include("./Pages/page9.php");break;
            case 10:include("./Pages/page10.php");break;
            case 11:include("./Pages/page11.php");break;
            case 12:include("./Pages/page12.php");break;
            case 13:include("./Pages/page13.php");break;
            case 14:include("./Pages/page14.php");break;
            case 15:include("./Pages/page15.php");break;
            case 16:include("./Pages/page16.php");break;
            case 17:include("./Pages/page17.php");break;
            case 18:include("./Pages/page18.php");break;
            case 19:include("./Pages/page19.php");break;
            case 20:include("./Pages/page20.php");break;
            case 21:include("./Pages/page21.php");break;
            case 22:include("./Pages/page22.php");break;
            case 23:include("./Pages/page23.php");break;
            case 25: include './docs/docdat1.php' ;break;
            case '24': $page_filename='./docs/sensor.php'; include './docs/restricted.php' ;break;
             case 'enter': $page_filename='./docs/success.php';include './docs/restricted.php' ;break;

            default:include("./Pages/page1.php");break;
        }
    }else include("./Pages/page1.php");


  ?>



  </article>  

  <footer> &copy;Евгений Жердев, ПС-91         
 <img class="css1" style="width:55px; height:21px" src="images/vcss-blue.png" alt="Правильный CSS!">
 <img class="cout1" style="width:60px; height:21px" src="/cnt/counter.php?cat=flawdefector&amp;color=10&amp;id=39674545baf9eddcb1613345e66e5840" alt="IT Counter">



</footer>
</body>
</html>
