<?php

namespace App\Repository;

use App\Entity\EntityAbstract;
use Laminas\Db\ResultSet\ResultSet;

class CountryRepository implements RepositoryInterface
{
    public function getBy(?array $filter = null): ResultSet
    {
        return new ResultSet();
    }

    public function persist(EntityAbstract $country): boolean
    {
        return false;
    }
}
