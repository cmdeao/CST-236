<?php

class SecurityService
{
    private $Username;
    private $Password;
    
    function __construct($username, $password)
    {
        $this->Username = $username;
        $this->Password = $password;
    }
    
    function authenticate()
    {
        if($this->Username == "John" && $this->Password == "Doe")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>