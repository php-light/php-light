<?php

namespace PropertiesBundle\Entity;

use PhpLight\Framework\Components\Model;

/**
* Class House
*/
class House extends Model
{
    /**
     * @var $id
     */
    private $id;

    /**
     * @var $color
     */
    private $color;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return House
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
