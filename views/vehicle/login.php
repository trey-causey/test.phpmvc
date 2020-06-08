<?php

require_once('libs/Controller.php');
include ('views/partials/header1.php');
extract($_REQUEST);
?>
<html>
<head><title>Login from Login Controller</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        li {
            font-family: Georgia;
            font-size: large;
        }

        body {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h1></h1>
    <h1>Please Login</h1>
    <small>(Use 'user1' and 'password' for login and password)<br><br></small>
    <form action="http://localhost/test.phpmvc/LoginCon/logon/" method="post">
        <table>
            <tr><td>Login:</td><td><input type="text" name="username" ></td></tr>
            <tr><td>Password:</td><td><input type="password" name="userpassword" ></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Login" ></td></tr>

        </table>
    </form>
</html>