<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ctrMultimedia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\BaseBundle\Entity\ctrMultimediaRepository")
 */
class ctrMultimedia
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
     * @ORM\ManyToOne(targetEntity="catNews", inversedBy="ctrMultimedia")
     * @ORM\JoinColumn(name="idNew", referencedColumnName="id")
     * @return integer
     */
    private $idNew;

    public function setidNew(\Crystal\BaseBundle\Entity\catNews $idNew)
    {
        $this->idNew = $idNew;
    }

    public function getidNew()
    {
        return $this->idNew;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=70)
     */
    private $content;


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
     * Set type
     *
     * @param string $type
     * @return ctrMultimedia
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

    /**
     * Set content
     *
     * @param string $content
     * @return ctrMultimedia
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
