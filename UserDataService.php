<?php
require_once "Autoloader.php";

class UserDataService
{
    function findByFirstName($name)
    {
        $dataBase = new Database();
        $link = $dataBase->getConnection();
        $sql = "SELECT * FROM users WHERE FIRST_NAME LIKE " . "'%" . $name . "%'";
        $result = mysqli_query($link, $sql);
        
        $index = 0;
        $users = array();
        
        while($row = $result->fetch_assoc())
        {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
            ++$index;
        }
        return $users;
    }
}

