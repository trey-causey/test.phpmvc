<?php

require_once 'libs/Controller.php';

class HelloCon extends Controller
{
    public function index($id = 0)
    {
        $this->view->hello ="Hello World from hello controller";
        $this->view->render('views/hello/index.php');
    }

    public function showVehicle($id)
    {
        $this->view->hello ="Hello World from hello controller";
        $this->view->render('views/hello/feature.php');
    }

    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}