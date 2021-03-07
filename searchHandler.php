<?php
require_once 'UserBusinessService.php';

$name = trim($_POST["firstname"]);

$business = new UserBusinessService();
$users = $business->searchByFirstName($name);
if($users)
{
    include '_displayAllUsers.php';    
}
else 
{
    echo "No one was found.";
}
?>