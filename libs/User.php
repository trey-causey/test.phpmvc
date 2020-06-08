<?php

class User
{

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->password = $username;
    }

    public function getUserpassword()
    {
        return $this->userpassword;
    }

    public function setUserpassword($userpassword): void
    {
        $this->userpassword = $userpassword;
    }

    public function checkPW($userTry, $knownUser)
    {

    }

    public function __construct($username, $userpassword)
    {
        //$this->user_id = $user_id; not needed to make a user object
        $this->username = $username;
        $this->userpassword = $userpassword;
    }

    //private $user_id; not needed to make a user object
    private $username;
    private $userpassword;

}