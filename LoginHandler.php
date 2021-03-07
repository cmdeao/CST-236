<?php
require_once 'SecurityService.php';
include 'header.php';

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$security = new SecurityService($username, $password);

if($security->authenticate())
{
    $_SESSION["principle"] = true;
    include 'loginPassed.php';
    header('location: loginPassed.php');
}
else 
{
    $_SESSION["principle"] = false;
    include 'loginFailed.php';
}

?>