<?php

$mysqli = new mysqli('localhost','s2022_flawdefector','213BQ','s2022_flawdefector');

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


if (isset($_POST["d"]))
{
    $param = $_POST["param"];
    switch ($_POST["d"])
    {
        case 1: $result=$mysqli->query("SELECT MAX(pokazanie) AS MAX FROM grafick GROUP BY param HAVING param = $param"); break;
        case 2: $result=$mysqli->query("SELECT MIN(pokazanie) AS MIN FROM grafick GROUP BY param HAVING param = $param"); break;
        case 3: $result=$mysqli->query("SELECT AVG(pokazanie) AS SREDN FROM grafick GROUP BY param HAVING param = $param"); break;
    }

    print json_encode(mysqli_fetch_object($result));
}

?>