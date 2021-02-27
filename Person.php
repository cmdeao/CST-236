<?php

class Person
{
    public $name;
    public $age;
    
    final public function growOlderBy($year)
    {
        $this->age = $this->age + $year;
    }
}

?>