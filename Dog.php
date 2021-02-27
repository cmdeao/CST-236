<?php
require_once 'Animal.php';

class Dog extends Animal
{
    public function talk()
    {
        echo "bark bark<br>";   
    }
    
    public function doTrick()
    {
        echo "Jumps. Fetches.<br>";
    }
}

?>