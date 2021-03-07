<?php

class Database
{
    private $server = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "ica17";
    
    public function getConnect()
    {
        $link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        if($link === false)
        {
            die("ERROR: Connection failed: " . mysqli_connect_error());
        }
        return $link;
    }
}

?>