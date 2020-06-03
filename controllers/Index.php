<?php

require_once 'libs/Controller.php';

class Index extends Controller
{
    public function index($id = 0)
    {
        $this->view->message = 'this is Index controller from index method' . $id;
        $this->view->render('views/index/index.php');
    }

    public function vehicle($id = 0)
    {
        $this->view->message = 'this is Index controller from vehicle method' . $id;
        $this->view->render('views/vehicle/index.php');
    }

    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}