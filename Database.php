<?php

class Database
{
    private $server = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "ica17";
    
    function getConnection()
    {
        $conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

?>