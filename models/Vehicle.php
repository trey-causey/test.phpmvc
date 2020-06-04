<?php

class Vehicle
{
    private $vehicle_id;
    private $VIN;
    private $yearModel;
    private $make;
    private $model;
    private $mileage;
    private $stockNumber;
    private $retailPrice;
    private $salePrice;
    private $retailPriceMinusSalePrice;
    private $image = Array();

    public function __construct($vehicle_id,$VIN,$yearModel,$make,$model,$mileage,$stockNumber,$retailPrice,$salePrice,$retailPriceMinusSalePrice, $image = Array())
    {
        $this->vehicle_id = $vehicle_id;
        $this->VIN = $VIN;
        $this->yearModel = $yearModel;
        $this->make = $make;
        $this->model = $model;
        $this->mileage = $mileage;
        $this->stockNumber = $stockNumber;
        $this->retailPrice = $retailPrice;
        $this->salePrice = $salePrice;
        $this->retailPriceMinusSalePrice = $retailPriceMinusSalePrice;
        $this->image = $image;
    }


    /*
        public function __construct()
        {
            $this->vehicle_id = 0;
            $this->VIN = "";
            $this->yearModel = "";
            $this->make = "";
            $this->model = "";
            $this->mileage = 0;
            $this->stockNumber = "";
            $this->retailPrice = 0.0;
            $this->salePrice = 0.0;
            $this->retailPriceMinusSalePrice = 0.0;
            $this->image = Array();
        }
    */


}