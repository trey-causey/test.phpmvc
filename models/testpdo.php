<?php

include 'config.inc.php';
include '../libs/PrintData.php';
#database access test

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
    die();
}