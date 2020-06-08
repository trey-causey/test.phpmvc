<?php

require_once 'libs/Controller.php';
include 'models/userpdo.php';
include_once 'libs/User.php';
include 'libs/PrintData.php';

class LoginCon extends Controller
{
    public function login()
    {
        session_start();
        session_unset();
        session_destroy();
        $this->view->render('views/vehicle/login.php');

    }

    public function logon()
    {
        //checks is both are set and not empty
        if(isset($_POST["username"]) && ($_POST["username"]!="") &&
        isset($_POST["userpassword"]) && ($_POST["userpassword"]!=""))
        {
            $userTryObject = new User($_POST['username'], $_POST['userpassword']);
          //returns true if login is correct
            $goodLogin = checkDbForUser($userTryObject);
          if ($goodLogin == true)
          {
              $this->view->render('views/vehicle/index.php');

          } else {
              $this->view->render('views/vehicle/login.php');
              print "Username and password not found";
          }

       }
       else {
           //this run if either the username or password field is empty
          $this->view->render('views/vehicle/login.php');
          print "Both fields are required";
       }
    }

    public function logoff()
    {
        $this->view->render('views/vehicle/index.php');
    }

    public function index($id = 0)
    {
        session_start();
        $this->view->render('views/vehicle/index.php');
    }
    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}