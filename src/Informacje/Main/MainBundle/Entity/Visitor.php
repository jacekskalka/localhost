<?php

namespace Informacje\Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Visitor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Visitor
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
     * @ORM\Column(name="browser", type="string", length=400)
     */
    private $browser;


	/** @ORM\ManyToOne(targetEntity="Komentarz", inversedBy="visitor") */
	public $komentarz;
	
	
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
     * Set browser
     *
     * @param string $browser
     * @return Visitor
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    
        return $this;
    }

    /**
     * Get browser
     *
     * @return string 
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set komentarz
     *
     * @param \Informacje\Main\MainBundle\Entity\Komentarz $komentarz
     * @return Visitor
     */
    public function setKomentarz(\Informacje\Main\MainBundle\Entity\Komentarz $komentarz = null)
    {
        $this->komentarz = $komentarz;
    
        return $this;
    }

    /**
     * Get komentarz
     *
     * @return \Informacje\Main\MainBundle\Entity\Komentarz 
     */
    public function getKomentarz()
    {
        return $this->komentarz;
    }
}