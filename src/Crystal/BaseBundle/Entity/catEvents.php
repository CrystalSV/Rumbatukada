<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * catEvents
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\BaseBundle\Entity\catEventsRepository")
 */
class catEvents
{

    public function __construct()
    {
        $this->idNew = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @ORM\OneToMany(targetEntity="catNews", mappedBy="idEvent")
     */
    private $idNew;

    public function addidNew(\Crystal\BaseBundle\Entity\catNews $idNew)
    {
        $this->idNew[] = $idNew;
    }

    public function getidNew()
    {
        return $this->idNew;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=80)
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
     * @ORM\Column(name="place", type="string", length=50)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=7)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * @return catEvents
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
     * @return catEvents
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
     * Set place
     *
     * @param string $place
     * @return catEvents
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return catEvents
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return catEvents
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
