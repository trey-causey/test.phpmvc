<?php

class Bootstrap
{
    public function __construct()
    {

        //1.router
        $tokens = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));

        //2.dispatcher
        $controllerName = ucfirst($tokens[2]);
        if (file_exists('controllers/' . $controllerName . '.php'))
        {
            require_once('controllers/' . $controllerName . '.php');
            $controller = new $controllerName;
            if(isset($tokens[3]))
            {
                if(isset($tokens[4]))
                {
                    $controller->{$tokens[3]}($tokens[4]);
                } else {
                    $controller->{$tokens[3]}();
                }

            } else {
                //default action
                    $controller->index();

            }
        } else {
            //called if root/folder does not exist
            require_once('controllers/MyErrorCon.php');
            $controllerName = 'MyErrorCon';
            $controller = new $controllerName;
            $controller->IndexAction();
        }
    }
}