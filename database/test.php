<?php

include ('config.inc.php');
include ('../libs/PrintData.php');

$link = mysqli_connect(MARIADB_HOST, MARIADB_USER, MARIADB_PASSWORD, MARIADB_NAME, MARIADB_PORT);

if($link->connect_errno)
{
    printf("That connection failed: %s\n", $link->connect_error );
}

$sql = "SELECT * FROM Vehicle";

$result = $link->query($sql);
//var_dump($result);
foreach ($result as $row)
{
    PrintData::testPrint($row);

}
$link->close();