<?php

require_once 'libs/Controller.php';
include 'models/vehiclepdo.php';
include_once 'libs/Vehicle.php';
include 'libs/PrintData.php';

class VehicleCon extends Controller
{
    public function index($id = 0)
    {
        session_start();
        $this->view->render('views/vehicle/index.php');
    }

    public function showVehicle($id = 0)
    {
        session_start();
        //get vehicle id and create object based on id
        $currentObj = constVehToPass($_REQUEST['vehicle_id']);
        //send constructed vehicle to the view object
        $this->view->VIN = $currentObj->getVIN();
        $this->view->YearModel = $currentObj->getYearModel();
        $this->view->Make = $currentObj->getMake();
        $this->view->Model = $currentObj->getModel();
        $this->view->Mileage = $currentObj->getMileage();
        $this->view->Model = $currentObj->getModel();
        $this->view->SalePrice = $currentObj->getSalePrice();
        $this->view->RetailPrice = $currentObj->getRetailPrice();
        $this->view->RetailMinusSalesPrice = $currentObj->getRetailPriceMinusSalePrice();

        $this->view->render('views/vehicle/feature.php');
    }

    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}