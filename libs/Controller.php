<?php

require_once 'libs/View.php';
require_once 'libs/Model.php';

class Controller
{
    public function __construct()
    {
        //construct the view
        $this->view = new View();
        //construct the vehicle object
        $this->vehicle = new Vehicle();


    }
}