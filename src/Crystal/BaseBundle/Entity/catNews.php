<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * catNews
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\BaseBundle\Entity\catNewsRepository")
 */
class catNews
{

    public function __construct()
    {
        $this->idMultimedia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @ORM\ManyToOne(targetEntity="catEvents", inversedBy="catNews")
     * @ORM\JoinColumn(name="idEvent", referencedColumnName="id")
     * @return integer
     */
    private $idEvent;

    public function setidEvent(\Crystal\BaseBundle\Entity\catEvents $idEvent)
    {
        $this->idEvent = $idEvent;
    }

    public function getidEvent()
    {
        return $this->idEvent;
    }

    /**
     * @ORM\OneToMany(targetEntity="ctrMultimedia", mappedBy="idNew")
     */
    private $idMultimedia;

    public function addidMultimedia(\Crystal\BaseBundle\Entity\ctrMultimedia $idMultimedia)
    {
        $this->idMultimedia[] = $idMultimedia;
    }

    public function getidMultimedia()
    {
        return $this->idMultimedia;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
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
     * Set title
     *
     * @param string $title
     * @return catNews
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return catNews
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return catNews
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
