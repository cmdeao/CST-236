<?php
class Car
{
    private $engine;
    private $speed;
    private $firstTire;
    private $secondTire;
    private $thirdTire;
    private $fourthTire;
    
    public function __construct()
    {
       echo "Created a car" . "<br>";
    }
    
    public function addTires()
    {   
        $this->firstTire = new Tire();
        $this->secondTire = new Tire();
        $this->thirdTire = new Tire();
        $this->fourthTire = new Tire();
    }
    
    public function inflateTires()  
    {
        $this->firstTire->setPressure(32);
        $this->secondTire->setPressure(32);
        $this->thirdTire->setPressure(32);
        $this->fourthTire->setPressure(32);
    }
    
    public function addEngine()
    {
        $this->engine = new Engine();
    }
    
    public function startCar()
    {
        if($this->engine->engineState())
        {
            echo "The engine is already running. " . "<br>";
            exit;
        }
        if(!$this->checkTirePressure())
        {
            echo "Tires must have 32 PSI before running." . "<br>";
        }
        else 
        {
            $this->engine->startEngine();
        }
    }
    
    public function stopCar()
    {
        $this->speed = 0;
        if(!$this->engine->engineState())
        {
            echo "The engine has already stopped. " . "<br>";
            exit;
        }
        else 
        {
            $this->engine->stopEngine();
        }
    }
    
    public function drive()
    {
        $this->speed = rand(1, 60);
        echo "The car is driving at: " . $this->speed . " MPH" . "<br>";
    }
    
    public function checkTirePressure()
    {
        if($this->firstTire->getPressure() < 32)
        {
            return false;
        }
        if($this->secondTire->getPressure() < 32)
        {
            return false;
        }
        if($this->thirdTire->getPressure() < 32)
        {
            return false;
        }
        if($this->fourthTire->getPressure() < 32)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}

class Tire
{
    private $tirePressure = 0;
    
    public function __construct()
    {
        echo "Created a tire" . "<br>";
    }
    
    public function setPressure($pressure)
    {
        $this->tirePressure = $pressure;
    }
    
    public function getPressure()
    {
        return $this->tirePressure;
    }
}

class Engine
{
    private $running = false;
    
    public function __construct()
    {
        echo "Created the engine" . "<br>";    
    }
    
    public function startEngine()
    {
        echo "The engine has started" . "<br>";
        $this->running = true;
    }
    
    public function stopEngine()
    {
        echo "The engine has stopped" . "<br>";
        $this->running = false;
    }
    
    public function engineState()
    {
        return $this->running;
    }
}
?>