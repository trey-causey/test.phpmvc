<?php

include '../database/config.inc.php';
include 'Vehicle.php';

try{
    $db = new PDO($dsn,MARIADB_USER,MARIADB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $db->query("SELECT * FROM Vehicle");
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    //var_dump($row);
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
        PrintData::testPrint($row);
    }

} catch(PDOException $e) {
    printf("We had a problem: %s\n", $e->getMessage());
}