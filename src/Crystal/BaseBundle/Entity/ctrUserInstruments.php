<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ctrUserInstruments
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\BaseBundle\Entity\ctrUserInstrumentsRepository")
 */
class ctrUserInstruments
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
     * @ORM\ManyToOne(targetEntity="catUser", inversedBy="ctrUserInstruments")
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * @return integer
     */
    private $idUser;

    public function setidUser(\Crystal\BaseBundle\Entity\catUser $idUser)
    {
        $this->idUser = $idUser;
    }

    public function getidUser()
    {
        return $this->idUser;
    }

    /**
     * @ORM\ManyToOne(targetEntity="catInstruments", inversedBy="ctrUserInstruments")
     * @ORM\JoinColumn(name="idInstrument", referencedColumnName="id")
     * @return integer
     */
    private $idInstrument;

    public function setidInstrument(\Crystal\BaseBundle\Entity\catInstruments $idInstrument)
    {
        $this->idInstrument = $idInstrument;
    }

    public function getidInstrument()
    {
        return $this->idInstrument;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
