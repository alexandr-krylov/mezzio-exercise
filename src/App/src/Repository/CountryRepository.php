<?php

namespace App\Repository;

use App\Entity\Country;
use App\Entity\EntityAbstract;
use Laminas\Db\Adapter\Adapter;
use Laminas\Db\ResultSet\ResultSet;

class CountryRepository implements RepositoryInterface
{
    
    function getBy($filter = null)
    {
        
        return new ResultSet();
    }

    function persist(EntityAbstract $country)
    {

    }
}