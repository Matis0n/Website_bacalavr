<?php

$mysqli = new mysqli('localhost','s2022_flawdefector',' 213BQ','s2022_flawdefector');

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


$body = "INSERT INTO grafick(id, param, data, pokazanie) VALUES ";


if (isset($_POST["lables"]))
{
    
    for ($i = 0;$i < count($_POST["lables"]) - 1;$i++)
    {
        $temp = "('0', '".$_POST["param"]."', '".$_POST["lables"][$i]."', '".$_POST["Ddata"][$i]."'), ";
        $body = $body.$temp;
    }

    $body = $body."( '0', '".$_POST["param"]."', '".$_POST["lables"][count($_POST["lables"]) - 1]."', '".$_POST["Ddata"][count($_POST["lables"]) - 1]."');";
    
    $mysqli->query($body);
    print "Данные успешно добавлены";

    
}

$mysqli->close();
?>