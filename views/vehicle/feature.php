<?php

require_once('libs/Controller.php');
include ('views/partials/header1.php');
require_once('controllers/VehicleCon.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
<style>
    li {
        font-family: Georgia;
        font-size: large;
    }

    body {
        background-color: lightgray;
    }
</style>
    <title>feature from Vehicle Controller</title>
</head>
<body>

<div class="row" >
    <div class="col-md-2"><img src="https://via.placeholder.com/200x900" ></div>
    <div class="col-md-8">
        <h1></h1>
        <div class="row">
            <img src="https://via.placeholder.com/600" >
            <ul>
                <li><h2>VIN: <?php echo $this->VIN ?></h2></li>
                <li><h2>Year: <?php echo $this->YearModel ?></h2></li>
                <li><h2>Make: <?php echo $this->Make ?></h2></li>
                <li><h2>Model: <?php echo $this->Model ?></h2></li>
                <li><h2>Mileage: <?php echo $this->Mileage ?></h2></li>
                <li><h2>Sales Price: <?php echo "\$" . $this->SalePrice ?></h2></li>
                <li><h2>Retail Price: <?php echo "\$" . $this->RetailPrice ?></h2></li>
                <li><h2>Savings: <?php echo "\$" . $this->RetailMinusSalesPrice ?></h2></li>
            </ul>
        </div>
        <div class="row">

        </div>
        <div class="row">

        </div>


    </div>

</div>
</body>
</html>
