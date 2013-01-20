<?php

namespace Informacje\Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Strona
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Strona
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
     * @ORM\Column(name="header1", type="string", length=255)
     */
    private $header1;

    /**
     * @var string
     *
     * @ORM\Column(name="header2", type="text", nullable=true)
     */
    private $header2;
	
	/**
     * @var string
     *
     * @ORM\Column(name="header3", type="text", nullable=true)
     */
    private $header3;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="description1", type="text", nullable=true)
     */
    private $description1;

    /**
     * @var string
     *
     * @ORM\Column(name="description2", type="text", nullable=true)
     */
    private $description2;

    /**
     * @var string
     *
     * @ORM\Column(name="description3", type="text", nullable=true)
     */
    private $description3;

    /**
     * @var string
     *
     * @ORM\Column(name="description4", type="text", nullable=true)
     */
    private $description4;

    /**
     * @var string
     *
     * @ORM\Column(name="description5", type="text", nullable=true)
     */
    private $description5;

    /**
     * @var string
     *
     * @ORM\Column(name="description6", type="text", nullable=true)
     */
    private $description6;

    /**
     * @var string
     *
     * @ORM\Column(name="description7", type="text", nullable=true)
     */
    private $description7;

    /**
     * @var string
     *
     * @ORM\Column(name="description8", type="text", nullable=true)
     */
    private $description8;

    /**
     * @var string
     *
     * @ORM\Column(name="description9", type="text", nullable=true)
     */
    private $description9;

    /**
     * @var string
     *
     * @ORM\Column(name="description10", type="text", nullable=true)
     */
    private $description10;

	/**
     * @var string
     *
     * @ORM\Column(name="rodzaj", type="string", length=25)
     */
    private $rodzaj;
	
	/** @ORM\Column(name="czas", type="datetime" )*/
	
	private $czas;
	
	/** @ORM\OneToMany(targetEntity="Komentarz", mappedBy="strona" ) */
	public $komentarze;
	public function __construct()
    {
        $this->komentarze = new ArrayCollection();
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
     * Set header1
     *
     * @param string $header1
     * @return Strona
     */
    public function setHeader1($header1)
    {
        $this->header1 = $header1;
    
        return $this;
    }

    /**
     * Get header1
     *
     * @return string 
     */
    public function getHeader1()
    {
        return $this->header1;
    }

    /**
     * Set header2
     *
     * @param string $header2
     * @return Strona
     */
    public function setHeader2($header2)
    {
        $this->header2 = $header2;
    
        return $this;
    }

    /**
     * Get header2
     *
     * @return string 
     */
    public function getHeader2()
    {
        return $this->header2;
    }
    /**
     * Set header3
     *
     * @param string $header3
     * @return Strona
     */
    public function setHeader3($header3)
    {
        $this->header3 = $header3;
    
        return $this;
    }

    /**
     * Get header3
     *
     * @return string 
     */
    public function getHeader3()
    {
        return $this->header3;
    }
	
    /**
     * Set content
     *
     * @param string $content
     * @return Strona
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

	
	    /**
     * Set rodzaj
     *
     * @param string $rodzaj
     * @return Strona
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;
    
        return $this;
    }

    /**
     * Get rodzaj
     *
     * @return string 
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

	
	
    /**
     * Set description1
     *
     * @param string $description1
     * @return Strona
     */
    public function setDescription1($description1)
    {
        $this->description1 = $description1;
    
        return $this;
    }

    /**
     * Get description1
     *
     * @return string 
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * Set description2
     *
     * @param string $description2
     * @return Strona
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;
    
        return $this;
    }

    /**
     * Get description2
     *
     * @return string 
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Set description3
     *
     * @param string $description3
     * @return Strona
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;
    
        return $this;
    }

    /**
     * Get description3
     *
     * @return string 
     */
    public function getDescription3()
    {
        return $this->description3;
    }

    /**
     * Set description4
     *
     * @param string $description4
     * @return Strona
     */
    public function setDescription4($description4)
    {
        $this->description4 = $description4;
    
        return $this;
    }

    /**
     * Get description4
     *
     * @return string 
     */
    public function getDescription4()
    {
        return $this->description4;
    }

    /**
     * Set description5
     *
     * @param string $description5
     * @return Strona
     */
    public function setDescription5($description5)
    {
        $this->description5 = $description5;
    
        return $this;
    }

    /**
     * Get description5
     *
     * @return string 
     */
    public function getDescription5()
    {
        return $this->description5;
    }

    /**
     * Set description6
     *
     * @param string $description6
     * @return Strona
     */
    public function setDescription6($description6)
    {
        $this->description6 = $description6;
    
        return $this;
    }

    /**
     * Get description6
     *
     * @return string 
     */
    public function getDescription6()
    {
        return $this->description6;
    }

    /**
     * Set description7
     *
     * @param string $description7
     * @return Strona
     */
    public function setDescription7($description7)
    {
        $this->description7 = $description7;
    
        return $this;
    }

    /**
     * Get description7
     *
     * @return string 
     */
    public function getDescription7()
    {
        return $this->description7;
    }

    /**
     * Set description8
     *
     * @param string $description8
     * @return Strona
     */
    public function setDescription8($description8)
    {
        $this->description8 = $description8;
    
        return $this;
    }

    /**
     * Get description8
     *
     * @return string 
     */
    public function getDescription8()
    {
        return $this->description8;
    }

    /**
     * Set description9
     *
     * @param string $description9
     * @return Strona
     */
    public function setDescription9($description9)
    {
        $this->description9 = $description9;
    
        return $this;
    }

    /**
     * Get description9
     *
     * @return string 
     */
    public function getDescription9()
    {
        return $this->description9;
    }

    /**
     * Set description10
     *
     * @param string $description10
     * @return Strona
     */
    public function setDescription10($description10)
    {
        $this->description10 = $description10;
    
        return $this;
    }

    /**
     * Get description10
     *
     * @return string 
     */
    public function getDescription10()
    {
        return $this->description10;
    }
	
	// ==========================================  DODAJEMY 10 PLIKÓW

	/** @Assert\File(maxSize="12000000")  */
    public $file1;

    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path1;

	
    public function getAbsolutePath1()
    {   return null === $this->path1 ? null : $this->getUploadRootDir().'/'.$this->path1; }

    public function getWebPath1(){ return null === $this->path1 ? null : $this->getUploadDir().'/'.$this->path1;}

    protected function getUploadRootDir() { return __DIR__.'/../../../../../web/'.$this->getUploadDir(); }

    protected function getUploadDir() { return 'uploads/documents'; }
	
	
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload1() {
        if (null !== $this->file1) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path1 = $filename.'.'.$this->file1->guessExtension();}}

    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload1() { if (null === $this->file1) { return;}
        $this->file1->move($this->getUploadRootDir(), $this->path1);
        unset($this->file1);}

    /** @ORM\PostRemove() */
    public function removeUpload1()
    { if ($file1 = $this->getAbsolutePath()) {
			if (file_exists($file1) && is_writable($file1)){   
			unlink($file1);} }}
	
	
		/** @Assert\File(maxSize="12000000")  */
    public $file2;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path2;
	public function getAbsolutePath2()
    {   return null === $this->path2 ? null : $this->getUploadRootDir().'/'.$this->path2; }
    public function getWebPath2()
	{	return null === $this->path2? null: $this->getUploadDir().'/'.$this->path2;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload2() {
        if (null !== $this->file2) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path2 = $filename.'.'.$this->file2->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload2(){
        if (null === $this->file2) { return;}
        $this->file2->move($this->getUploadRootDir(), $this->path2);
        unset($this->file2);}
    /** @ORM\PostRemove() */
    public function removeUpload2()
    { if ($file2 = $this->getAbsolutePath2()) {
			if (file_exists($file2) && is_writable($file2)){   
        	   unlink($file2);}}}
			   
			   
	/** @Assert\File(maxSize="12000000")  */
    public $file3;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path3;
	public function getAbsolutePath3()
    {   return null === $this->path3 ? null : $this->getUploadRootDir().'/'.$this->path3; }
    public function getWebPath3()
	{	return null === $this->path3? null: $this->getUploadDir().'/'.$this->path3;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload3() {
        if (null !== $this->file3) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path3 = $filename.'.'.$this->file3->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload3(){
        if (null === $this->file3) { return;}
        $this->file3->move($this->getUploadRootDir(), $this->path3);
        unset($this->file3);}
    /** @ORM\PostRemove() */
    public function removeUpload3()
    { if ($file3 = $this->getAbsolutePath3()) {
			if (file_exists($file3) && is_writable($file3)){   
        	   unlink($file3);}}}	

	/** @Assert\File(maxSize="12000000")  */
    public $file4;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path4;
	public function getAbsolutePath4()
    {   return null === $this->path4 ? null : $this->getUploadRootDir().'/'.$this->path4; }
    public function getWebPath4()
	{	return null === $this->path4? null: $this->getUploadDir().'/'.$this->path4;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload4() {
        if (null !== $this->file4) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path4 = $filename.'.'.$this->file4->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload4(){
        if (null === $this->file4) { return;}
        $this->file4->move($this->getUploadRootDir(), $this->path4);
        unset($this->file4);}
    /** @ORM\PostRemove() */
    public function removeUpload4()
    { if ($file4 = $this->getAbsolutePath4()) {
			if (file_exists($file4) && is_writable($file4)){   
        	   unlink($file4);}}}			

	/** @Assert\File(maxSize="12000000")  */
    public $file5;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path5;
	public function getAbsolutePath5()
    {   return null === $this->path5 ? null : $this->getUploadRootDir().'/'.$this->path5; }
    public function getWebPath5()
	{	return null === $this->path5? null: $this->getUploadDir().'/'.$this->path5;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload5() {
        if (null !== $this->file5) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path5 = $filename.'.'.$this->file5->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload5(){
        if (null === $this->file5) { return;}
        $this->file5->move($this->getUploadRootDir(), $this->path5);
        unset($this->file5);}
    /** @ORM\PostRemove() */
    public function removeUpload5()
    { if ($file5 = $this->getAbsolutePath5()) {
			if (file_exists($file5) && is_writable($file5)){   
        	   unlink($file5);}}}				   
	
	
	
	/** @Assert\File(maxSize="12000000")  */
    public $file6;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path6;
	public function getAbsolutePath6()
    {   return null === $this->path6 ? null : $this->getUploadRootDir().'/'.$this->path6; }
    public function getWebPath6()
	{	return null === $this->path6? null: $this->getUploadDir().'/'.$this->path6;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload6() {
        if (null !== $this->file6) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path6 = $filename.'.'.$this->file6->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload6(){
        if (null === $this->file6) { return;}
        $this->file6->move($this->getUploadRootDir(), $this->path6);
        unset($this->file6);}
    /** @ORM\PostRemove() */
    public function removeUpload6()
    { if ($file6 = $this->getAbsolutePath6()) {
			if (file_exists($file6) && is_writable($file6)){   
        	   unlink($file6);}}}		
	
		/** @Assert\File(maxSize="12000000")  */
    public $file7;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path7;
	public function getAbsolutePath7()
    {   return null === $this->path7 ? null : $this->getUploadRootDir().'/'.$this->path7; }
    public function getWebPath7()
	{	return null === $this->path7? null: $this->getUploadDir().'/'.$this->path7;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload7() {
        if (null !== $this->file7) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path7 = $filename.'.'.$this->file7->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload7(){
        if (null === $this->file7) { return;}
        $this->file7->move($this->getUploadRootDir(), $this->path7);
        unset($this->file7);}
    /** @ORM\PostRemove() */
    public function removeUpload7()
    { if ($file7 = $this->getAbsolutePath7()) {
			if (file_exists($file7) && is_writable($file7)){   
        	   unlink($file7);}}}		
	
			/** @Assert\File(maxSize="12000000")  */
    public $file8;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path8;
	public function getAbsolutePath8()
    {   return null === $this->path8 ? null : $this->getUploadRootDir().'/'.$this->path8; }
    public function getWebPath8()
	{	return null === $this->path8? null: $this->getUploadDir().'/'.$this->path8;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload8() {
        if (null !== $this->file8) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path8 = $filename.'.'.$this->file8->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload8(){
        if (null === $this->file8) { return;}
        $this->file8->move($this->getUploadRootDir(), $this->path8);
        unset($this->file8);}
    /** @ORM\PostRemove() */
    public function removeUpload8()
    { if ($file8 = $this->getAbsolutePath8()) {
			if (file_exists($file8) && is_writable($file8)){   
        	   unlink($file8);}}}		
	
				/** @Assert\File(maxSize="12000000")  */
    public $file9;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path9;
	public function getAbsolutePath9()
    {   return null === $this->path9 ? null : $this->getUploadRootDir().'/'.$this->path9; }
    public function getWebPath9()
	{	return null === $this->path9? null: $this->getUploadDir().'/'.$this->path9;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload9() {
        if (null !== $this->file9) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path9 = $filename.'.'.$this->file9->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload9(){
        if (null === $this->file9) { return;}
        $this->file9->move($this->getUploadRootDir(), $this->path9);
        unset($this->file9);}
    /** @ORM\PostRemove() */
    public function removeUpload9()
    { if ($file9 = $this->getAbsolutePath9()) {
			if (file_exists($file9) && is_writable($file9)){   
        	   unlink($file9);}}}	
	
	
					/** @Assert\File(maxSize="12000000")  */
    public $file10;
    /** @ORM\Column(type="string", length=255, nullable=true)*/
    public $path10;
	public function getAbsolutePath10()
    {   return null === $this->path10 ? null : $this->getUploadRootDir().'/'.$this->path10; }
    public function getWebPath10()
	{	return null === $this->path10? null: $this->getUploadDir().'/'.$this->path10;}
	/** @ORM\PrePersist()  @ORM\PreUpdate() */
	public function preUpload10() {
        if (null !== $this->file10) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path10 = $filename.'.'.$this->file10->guessExtension(); } }
    /**  @ORM\PostPersist()  @ORM\PostUpdate() */
    public function upload10(){
        if (null === $this->file10) { return;}
        $this->file10->move($this->getUploadRootDir(), $this->path10);
        unset($this->file10);}
    /** @ORM\PostRemove() */
    public function removeUpload10()
    { if ($file10 = $this->getAbsolutePath10()) {
			if (file_exists($file10) && is_writable($file10)){   
        	   unlink($file10);}}}	
	




    /**
     * Set path1
     *
     * @param string $path1
     * @return Strona
     */
    public function setPath1($path1)
    {
        $this->path1 = $path1;
    
        return $this;
    }

    /**
     * Get path1
     *
     * @return string 
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * Set path2
     *
     * @param string $path2
     * @return Strona
     */
    public function setPath2($path2)
    {
        $this->path2 = $path2;
    
        return $this;
    }

    /**
     * Get path2
     *
     * @return string 
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Set path3
     *
     * @param string $path3
     * @return Strona
     */
    public function setPath3($path3)
    {
        $this->path3 = $path3;
    
        return $this;
    }

    /**
     * Get path3
     *
     * @return string 
     */
    public function getPath3()
    {
        return $this->path3;
    }

    /**
     * Set path4
     *
     * @param string $path4
     * @return Strona
     */
    public function setPath4($path4)
    {
        $this->path4 = $path4;
    
        return $this;
    }

    /**
     * Get path4
     *
     * @return string 
     */
    public function getPath4()
    {
        return $this->path4;
    }

    /**
     * Set path5
     *
     * @param string $path5
     * @return Strona
     */
    public function setPath5($path5)
    {
        $this->path5 = $path5;
    
        return $this;
    }

    /**
     * Get path5
     *
     * @return string 
     */
    public function getPath5()
    {
        return $this->path5;
    }

    /**
     * Set path6
     *
     * @param string $path6
     * @return Strona
     */
    public function setPath6($path6)
    {
        $this->path6 = $path6;
    
        return $this;
    }

    /**
     * Get path6
     *
     * @return string 
     */
    public function getPath6()
    {
        return $this->path6;
    }

    /**
     * Set path7
     *
     * @param string $path7
     * @return Strona
     */
    public function setPath7($path7)
    {
        $this->path7 = $path7;
    
        return $this;
    }

    /**
     * Get path7
     *
     * @return string 
     */
    public function getPath7()
    {
        return $this->path7;
    }

    /**
     * Set path8
     *
     * @param string $path8
     * @return Strona
     */
    public function setPath8($path8)
    {
        $this->path8 = $path8;
    
        return $this;
    }

    /**
     * Get path8
     *
     * @return string 
     */
    public function getPath8()
    {
        return $this->path8;
    }

    /**
     * Set path9
     *
     * @param string $path9
     * @return Strona
     */
    public function setPath9($path9)
    {
        $this->path9 = $path9;
    
        return $this;
    }

    /**
     * Get path9
     *
     * @return string 
     */
    public function getPath9()
    {
        return $this->path9;
    }

    /**
     * Set path10
     *
     * @param string $path10
     * @return Strona
     */
    public function setPath10($path10)
    {
        $this->path10 = $path10;
    
        return $this;
    }

    /**
     * Get path10
     *
     * @return string 
     */
    public function getPath10()
    {
        return $this->path10;
    }

    /**
     * Add komentarze
     *
     * @param \Informacje\Main\MainBundle\Entity\Komentarz $komentarze
     * @return Strona
     */
    public function addKomentarze(\Informacje\Main\MainBundle\Entity\Komentarz $komentarze)
    {
        $this->komentarze[] = $komentarze;
    
        return $this;
    }

    /**
     * Remove komentarze
     *
     * @param \Informacje\Main\MainBundle\Entity\Komentarz $komentarze
     */
    public function removeKomentarze(\Informacje\Main\MainBundle\Entity\Komentarz $komentarze)
    {
        $this->komentarze->removeElement($komentarze);
    }

    /**
     * Get komentarze
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKomentarze()
    {
        return $this->komentarze;
    }
}