<?php

require_once 'libs/Controller.php';

class Hello extends Controller
{
    public function index($id = 0)
    {
        $this->view->hello ="Hello World from hello controller";
        $this->view->render('views/hello/index.php');
    }

    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}