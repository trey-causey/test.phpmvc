<?php
include 'config.inc.php';
require_once 'libs/User.php';

function checkDbForUser($theUserTry) {

    try {
        $userTryUN = $theUserTry->getUsername();
        $userTryPW = $theUserTry->getUserpassword();
        //connect to db, grab row of vehicle matching the idea passed in
        $db = new PDO(PDO_DSN, MARIADB_USER, MARIADB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $qString = $db->query("SELECT * FROM UserPW HAVING username ='".$userTryUN."'");
        $row = $qString->fetch(PDO::FETCH_ASSOC);
        if (!empty($row['userpassword']))
        {
            if($row['userpassword'] == $userTryPW)
            {
                session_start();
                $_SESSION['userID'] = $userTryUN;
                return true;
            } else {
                print "wrong PW";
            }
        } else {
            return false;
        }

    } catch (PDOException $e) {
        printf("There was no match: %s\n", $e->getMessage());
        die();

    }

}
