<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ctrAccess
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\BaseBundle\Entity\ctrAccessRepository")
 */
class ctrAccess
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=30)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=25)
     */
    private $pass;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return ctrAccess
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return ctrAccess
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    
        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }
}
