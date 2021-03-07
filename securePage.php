<?php
include 'header.php';

if(!isset($_SESSION["principle"]) || is_null($_SESSION["principle"]) || $_SESSION["principle"] == FALSE)
{
    header("Location: phpLogin.html");
}
?>