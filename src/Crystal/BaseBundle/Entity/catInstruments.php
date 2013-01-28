<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * catInstruments
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\BaseBundle\Entity\catInstrumentsRepository")
 */
class catInstruments
{

    public function __construct()
    {
        $this->idUserInstrument = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="ctrUserInstruments", mappedBy="idInstrument")
     */
    private $idUserInstrument;

    public function addidUserInstrument(\Crystal\BaseBundle\Entity\ctrUserInstruments $idUserInstrument)
    {
        $this->idUserInstrument[] = $idUserInstrument;
    }

    public function getidUserInstrument()
    {
        return $this->idUserInstrument;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;


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
     * Set name
     *
     * @param string $name
     * @return catInstruments
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return catInstruments
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
