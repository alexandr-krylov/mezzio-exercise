<?php

namespace App\Repository;

use App\Entity\EntityAbstract;

interface RepositoryInterface
{
    public function getBy(array $filter = null);

    public function persist(EntityAbstract $entity);
}