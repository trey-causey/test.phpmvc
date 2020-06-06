<?php

require_once 'libs/Controller.php';
include 'models/vehiclepdo.php';

class VehicleCon extends Controller
{
    public function index($id = 0)
    {
        $this->view->hello ="Hello World from hello controller";
        $this->view->render('views/hello/index.php');
    }

    public function showVehicle($id)
    {
        //get vehicle id
        $this->vehicle->setVehicleId($id);
        //retrieve database row matching that id

        //construct query string based on row

        $this->view->hello ="Hello World from hello controller";
        $this->view->render('views/hello/feature.php');
    }

    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}