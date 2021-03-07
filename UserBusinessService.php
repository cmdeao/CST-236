<?php

require_once 'UserDataService.php';

class UserBusinessService
{
    function searchByFirstName($pattern)
    {
        $service = new UserDataService();
        return $service->findByFirstName($pattern);
    }
}

?>