<?php

class UserBusinessService
{
    function searchByFirstName($searchPattern)
    {
        $service = new UserDataService();
        return $service->findByFirstName($searchPattern);
    }
}

