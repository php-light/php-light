<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 24/01/17
 * Time: 13:28
 */

namespace UserBundle\Entity;


use IKNSA\HelperBundle\Traits\GenerateUniqueIdTrait;
use PhpLight\Framework\Components\Model;
use PhpLight\Helpers\CreatedAtTrait;

class User extends Model
{
    use CreatedAtTrait, GenerateUniqueIdTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    public function __construct(array $data)
    {
        parent::__construct($data);

        if (empty($this->getUniqueId())) $this->setUniqueId();
        if (empty($this->getCreatedAt())) $this->setCreatedAt(new \DateTime('NOW'));
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return User
     */
    public function setUniqueId($uniqueId=null)
    {
        $this->uniqueId = empty($uniqueId) ? $this->generateUniqueId() : $uniqueId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
