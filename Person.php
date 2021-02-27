<?php

class Person
{
    private $name;
    
    public function __construct($name)
    {
        echo "Hello my name is " .$name . "<br>";
        $this->name = $name;
        $this->username = "shad";
        $this->password = "password";
    }
    
    public function walk()
    {
        echo "I am walking...." . " <br>";   
    }
    
    public function formalGreeting()
    {
        echo "Good day to you sir. You can address me as " . $this->name . "<br>";
    }
    
    public function spanishGreeting()
    {
        echo "Hola. Me llamo " . $this->name . "<br>";
    }
    
    public function login($a, $b)
    {
        if($a == $this->username && $b == $this->password)
        {
            echo $this->name . " has been logged in successfully<br>";
        }
        else
        {
            echo "Login failed. That doesn't seem quite right<br>";
        }
    }
}

?>