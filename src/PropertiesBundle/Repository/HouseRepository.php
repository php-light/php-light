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

    public function findById($id)
    {
        $db = (new DB())->connect();

        $houseData = $db->query("SELECT * FROM `house` WHERE `id`= '" . $id . "'")->fetch($db::FETCH_ASSOC);

        return new House($houseData);
    }

    public function update(House $house)
    {
        $db = (new DB())->connect();

        $query = $db->query(
            "UPDATE `house` SET `name` = " . $house->getColor()
        );

        return $query->execute();
    }
}
