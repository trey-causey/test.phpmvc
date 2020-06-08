<?php

require_once 'libs/View.php';
require_once 'libs/Vehicle.php';
require_once 'libs/User.php';

class Controller
{
    public function __construct()
    {
        //construct the view
        $this->view = new View();



    }
}