<?php

class View
{
    public function __construct()
    {

    }

    //used from youtube tutorial
    public function render($viewScript)
    {
        require($viewScript);
    }
}