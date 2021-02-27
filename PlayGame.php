<?php
require_once 'Batman.php';
require_once 'Superman.php';

$batman = new Batman();
$superman = new Superman();

while(($superman->getHealth() > 0) && ($batman->getHealth() > 0))
{
    $batman->attack($superman);
    if($superman->getIsDead())
    {
        echo "Batman defeated Superman!";
        break;
    }
    
    $superman->attack($batman);
    if($batman->getIsDead())
    {
        echo "Superman defeated Batman!";
        break;
    }
}
?>