<?php
//data goes here...objects, etc
class Vehicle
{
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    public function setVehicleId($vehicle_id): void
    {
        $this->vehicle_id = $vehicle_id;
    }

    public function getVIN()
    {
        return $this->VIN;
    }

    public function setVIN($VIN): void
    {
        $this->VIN = $VIN;
    }

    public function getYearModel()
    {
        return $this->yearModel;
    }

    public function setYearModel($yearModel): void
    {
        $this->yearModel = $yearModel;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make): void
    {
        $this->make = $make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function setMileage($mileage): void
    {
        $this->mileage = $mileage;
    }

    public function getStockNumber()
    {
        return $this->stockNumber;
    }

    public function setStockNumber($stockNumber): void
    {
        $this->stockNumber = $stockNumber;
    }

    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    public function setRetailPrice($retailPrice): void
    {
        $this->retailPrice = $retailPrice;
    }

    public function getSalePrice()
    {
        return $this->salePrice;
    }

    public function setSalePrice($salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    public function getRetailPriceMinusSalePrice()
    {

        return $this->retailPriceMinusSalePrice = ($this->retailPrice - $this->salePrice);
    }

    public function setRetailPriceMinusSalePrice($retailPriceMinusSalePrice): void
    {
        $this->retailPriceMinusSalePrice = $retailPriceMinusSalePrice;
    }

    public function getImage(): array
    {
        return $this->image;
    }

    public function setImage(array $image): void
    {
        $this->image = $image;
    }

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
    private $image;



}