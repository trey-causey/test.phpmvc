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
    private $image;

    /**
     * @return mixed
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    /**
     * @param mixed $vehicle_id
     */
    public function setVehicleId($vehicle_id): void
    {
        $this->vehicle_id = $vehicle_id;
    }

    /**
     * @return mixed
     */
    public function getVIN()
    {
        return $this->VIN;
    }

    /**
     * @param mixed $VIN
     */
    public function setVIN($VIN): void
    {
        $this->VIN = $VIN;
    }

    /**
     * @return mixed
     */
    public function getYearModel()
    {
        return $this->yearModel;
    }

    /**
     * @param mixed $yearModel
     */
    public function setYearModel($yearModel): void
    {
        $this->yearModel = $yearModel;
    }

    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @param mixed $make
     */
    public function setMake($make): void
    {
        $this->make = $make;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @param mixed $mileage
     */
    public function setMileage($mileage): void
    {
        $this->mileage = $mileage;
    }

    /**
     * @return mixed
     */
    public function getStockNumber()
    {
        return $this->stockNumber;
    }

    /**
     * @param mixed $stockNumber
     */
    public function setStockNumber($stockNumber): void
    {
        $this->stockNumber = $stockNumber;
    }

    /**
     * @return mixed
     */
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    /**
     * @param mixed $retailPrice
     */
    public function setRetailPrice($retailPrice): void
    {
        $this->retailPrice = $retailPrice;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param mixed $salePrice
     */
    public function setSalePrice($salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return mixed
     */
    public function getRetailPriceMinusSalePrice()
    {
        return $this->retailPriceMinusSalePrice;
    }

    /**
     * @param mixed $retailPriceMinusSalePrice
     */
    public function setRetailPriceMinusSalePrice($retailPriceMinusSalePrice): void
    {
        $this->retailPriceMinusSalePrice = $retailPriceMinusSalePrice;
    }

    /**
     * @return array
     */
    public function getImage(): array
    {
        return $this->image;
    }

    /**
     * @param array $image
     */
    public function setImage(array $image): void
    {
        $this->image = $image;
    }


//    public function __construct($vehicle_id,$VIN,$yearModel,$make,$model,$mileage,$stockNumber,$retailPrice,$salePrice,$retailPriceMinusSalePrice, $image = Array())
//    {
//        $this->vehicle_id = $vehicle_id;
//        $this->VIN = $VIN;
//        $this->yearModel = $yearModel;
//        $this->make = $make;
//        $this->model = $model;
//        $this->mileage = $mileage;
//        $this->stockNumber = $stockNumber;
//        $this->retailPrice = $retailPrice;
//        $this->salePrice = $salePrice;
//        $this->retailPriceMinusSalePrice = $retailPriceMinusSalePrice;
//        $this->image = $image;
//    }



}