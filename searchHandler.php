<?php
include "Autoloader.php";

$name = trim($_POST["firstname"]);

$service = new UserBusinessService();
$users = $service->searchByFirstName($name);
if($users)
{
    include '_displayAllUsers.php';    
}
else
{
    echo "No one was found.";    
}