<?php

$mysqli = new mysqli('localhost','s2022_flawdefector','213BQ','s2022_flawdefector');

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


if (isset($_POST["param"]))
{
    $p = $_POST["param"];
    $result = $mysqli->query("DELETE FROM grafick WHERE param=$p");

    print "Данные удалены";
}

$mysqli->close();

?>