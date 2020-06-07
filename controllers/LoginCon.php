<?php

require_once 'libs/Controller.php';
include 'models/userpdo.php';
include_once 'libs/User.php';
include 'libs/PrintData.php';

class LoginCon extends Controller
{
    public function login()
    {
        $this->view->render('views/vehicle/login.php');
        //$GLOBALS['loggedin'] = false;
    }

    public function logon()
    {
        if(isset($_POST["username"]) && ($_POST["username"]!="") &&
        isset($_POST["userpassword"]) && ($_POST["userpassword"]!=""))
        {
            $userTryObject = new User($_POST['username'], $_POST['userpassword']);
          $goodLogin = checkDbForUser($userTryObject);
          if ($goodLogin)
          {
              $this->view->render('views/vehicle/index.php');
              $GLOBALS['loggedin'] = true;
          } else {
              $this->view->render('views/vehicle/login.php');
              print "Username and password not found";
          }
//        $un = $_POST["username"];
//        $pw = $_POST["userpassword"];
//        $userTryObj = constUserToPass($_REQUEST['username']);
       }
       else {
          $this->view->render('views/vehicle/login.php');
          print "Both fields are required";
       }
//
//       checkPW($userTryObj);



    }

    public function logoff()
    {
        $this->view->render('views/vehicle/index.php');
    }
    public function __construct()
    {
        // call Controller constructor
        parent::__construct();

    }
}