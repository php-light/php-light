<?php

namespace PropertiesBundle\Repository;

use Romenys\Framework\Components\DB\DB;
use PropertiesBundle\Entity\House;

/**
* House Repository
*/
class HouseRepository
{
	public function create(House $house)
    {
        $db = (new DB())->connect();

        $query = $db->prepare(
            "INSERT INTO `house` (`color`) VALUES (:color)"
        );
        $query->bindValue(':color', $house->getColor());

        return $query->execute();
    }
}