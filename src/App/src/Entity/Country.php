<?php

namespace App\Entity;

class Country extends EntityAbstract
{
    protected $id;
    protected $country;
    protected $updatedAt;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
