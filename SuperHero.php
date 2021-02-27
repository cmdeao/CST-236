<?php

class SuperHero
{
    private $name;
    private $health;
    private $isDead = FALSE;
    
    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
    }
    
    public function attack($obj)
    {
        $damage = rand(1, 10);
        echo $this->name . " attacked " . $obj->name . " for " . $damage . " damage." . "<br>";
        $obj->determineHealth($damage);
    }
    
    public function determineHealth($damage)
    {
        $result = $this->health - $damage;
        $this->health = $result;
        echo $this->name . "'s health after the attack: " . $this->getHealth() . "<br>";
        if($this->health <= 0)
        {
            $this->isDead = true;
        }   
    }
    
    public function getHealth()
    {
        return $this->health;
    }
    
    public function getIsDead()
    {
        return $this->isDead;
    }
}
?>