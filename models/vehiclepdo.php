<?php
include 'config.inc.php';

function constVehToPass($someId) {

    try {
        //connect to db, grab row of vehicle matching the idea passed in
        $db = new PDO(PDO_DSN, MARIADB_USER, MARIADB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $qString = $db->query("SELECT * FROM Vehicle WHERE vehicle_id = $someId");
        $row = $qString->fetch(PDO::FETCH_ASSOC);
        //construct the object with all relevant variables filled in
        $testVehicleObject = new Vehicle(
            $row['vehicle_id'],
            $row['VIN'],
            $row['yearModel'],
            $row['make'],
            $row['model'],
            $row['mileage'],
            $row['stockNumber'],
            $row['retailPrice'],
            $row['salesPrice'],
            $row['retailMinusSalesPrice'],
            $row['image']
        );

    } catch (PDOException $e) {
        printf("We had a problem: %s\n", $e->getMessage());
        die();
    }
    return $testVehicleObject;
}

