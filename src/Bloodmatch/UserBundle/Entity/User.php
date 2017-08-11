<?php

namespace Bloodmatch\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=3)
     *
     */
    protected $bloodtype;

    public function __construct()
    {
        parent::__construct();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getBloodtype()
    {
        return $this->bloodtype;
    }

    public function setBloodtype($bloodtype)
    {
        $this->bloodtype = $bloodtype;
        return $this;
    }
}