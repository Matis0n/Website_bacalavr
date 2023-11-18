<?php

$mysqli = new mysqli('localhost','s2022_flawdefector',' 213BQ','s2022_flawdefector');

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


$p = $_POST['param'];

$result = $mysqli->query("SELECT * FROM grafick WHERE param=$p;");

$res = [];

while ($row = mysqli_fetch_object($result))
{
    $res[] = $row;
}

$obj = json_encode($res);

if ($obj == "[]")
{
    $obj = "Нет данных";
}

echo $obj;

$mysqli->close();

?>