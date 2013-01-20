<?php

namespace Informacje\Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Komentarz
 *
 * @ORM\Table()
 * @ORM\Entity
  * @ORM\HasLifecycleCallbacks
 */
class Komentarz
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
     * @ORM\Column(name="komentarz", type="text")
     */
    private $komentarz;

    /**
     * @var string
     *
     * @ORM\Column(name="podpis", type="string", length=255)
     */
    private $podpis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="czas", type="datetime")
     */
    private $czas;

    /**
     * @var integer
     *
     * @ORM\Column(name="plus", type="integer", nullable=true )
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="minus", type="integer", nullable=true )
     */
    private $minus;


	/** @ORM\ManyToOne(targetEntity="Strona", inversedBy="komentarze") */
	public $strona;
	
	
	/** @ORM\OneToMany(targetEntity="Visitor", mappedBy="komentarz" ) */
	public $visitor;
	public function __construct()
    {
        $this->visitor = new ArrayCollection();
    }
	
	
	/**
 * @ORM\PrePersist
 */
public function setCzas()
{
    $this->czas = new \DateTime();
}

public function getCzas()
{
  return $this->czas; 
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

    /**
     * Set komentarz
     *
     * @param string $komentarz
     * @return Komentarz
     */
    public function setKomentarz($komentarz)
    {
        $this->komentarz = $komentarz;
    
        return $this;
    }

    /**
     * Get komentarz
     *
     * @return string 
     */
    public function getKomentarz()
    {
        return $this->komentarz;
    }

    /**
     * Set podpis
     *
     * @param string $podpis
     * @return Komentarz
     */
    public function setPodpis($podpis)
    {
        $this->podpis = $podpis;
    
        return $this;
    }

    /**
     * Get podpis
     *
     * @return string 
     */
    public function getPodpis()
    {
        return $this->podpis;
    }


    /**
     * Set plus
     *
     * @param integer $plus
     * @return Komentarz
     */
    public function setPlus($plus)
    {
        $this->plus = $plus;
    
        return $this;
    }

    /**
     * Get plus
     *
     * @return integer 
     */
    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * Set minus
     *
     * @param integer $minus
     * @return Komentarz
     */
    public function setMinus($minus)
    {
        $this->minus = $minus;
    
        return $this;
    }

    /**
     * Get minus
     *
     * @return integer 
     */
    public function getMinus()
    {
        return $this->minus;
    }

    /**
     * Set strona
     *
     * @param \Informacje\Main\MainBundle\Entity\Strona $strona
     * @return Komentarz
     */
    public function setStrona(\Informacje\Main\MainBundle\Entity\Strona $strona = null)
    {
        $this->strona = $strona;
    
        return $this;
    }

    /**
     * Get strona
     *
     * @return \Informacje\Main\MainBundle\Entity\Strona 
     */
    public function getStrona()
    {
        return $this->strona;
    }

    /**
     * Add visitor
     *
     * @param \Informacje\Main\MainBundle\Entity\Visitor $visitor
     * @return Komentarz
     */
    public function addVisitor(\Informacje\Main\MainBundle\Entity\Visitor $visitor)
    {
        $this->visitor[] = $visitor;
    
        return $this;
    }

    /**
     * Remove visitor
     *
     * @param \Informacje\Main\MainBundle\Entity\Visitor $visitor
     */
    public function removeVisitor(\Informacje\Main\MainBundle\Entity\Visitor $visitor)
    {
        $this->visitor->removeElement($visitor);
    }

    /**
     * Get visitor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVisitor()
    {
        return $this->visitor;
    }
}