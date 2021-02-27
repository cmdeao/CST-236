<?php
require_once 'SuperHero.php';
class Superman extends SuperHero
{
    function __construct()
    {
        parent::__construct("Superman",rand(1, 1000));
    }
}
?>