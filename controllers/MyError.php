<?php

require_once ('libs/Controller.php');

class MyError extends Controller
{
    public function IndexAction()
    {
     $this->view->message = "this controller doesn't exist!";
     $this->view->render('views/error/index.php');
    }
}