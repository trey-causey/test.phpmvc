<?php

require_once ('libs/Controller.php');

class MyErrorCon extends Controller
{
    public function IndexAction()
    {

     $this->view->message = "this controller doesn't exist!";
        header('location: http://localhost/test.phpmvc/VehicleCon/');
     $this->view->render('views/error/index.php');
    }
}