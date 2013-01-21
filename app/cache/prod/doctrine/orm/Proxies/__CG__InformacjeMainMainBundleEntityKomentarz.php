<?php

namespace Proxies\__CG__\Informacje\Main\MainBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Komentarz extends \Informacje\Main\MainBundle\Entity\Komentarz implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setCzas()
    {
        $this->__load();
        return parent::setCzas();
    }

    public function getCzas()
    {
        $this->__load();
        return parent::getCzas();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setKomentarz($komentarz)
    {
        $this->__load();
        return parent::setKomentarz($komentarz);
    }

    public function getKomentarz()
    {
        $this->__load();
        return parent::getKomentarz();
    }

    public function setPodpis($podpis)
    {
        $this->__load();
        return parent::setPodpis($podpis);
    }

    public function getPodpis()
    {
        $this->__load();
        return parent::getPodpis();
    }

    public function setPlus($plus)
    {
        $this->__load();
        return parent::setPlus($plus);
    }

    public function getPlus()
    {
        $this->__load();
        return parent::getPlus();
    }

    public function setMinus($minus)
    {
        $this->__load();
        return parent::setMinus($minus);
    }

    public function getMinus()
    {
        $this->__load();
        return parent::getMinus();
    }

    public function setStrona(\Informacje\Main\MainBundle\Entity\Strona $strona = NULL)
    {
        $this->__load();
        return parent::setStrona($strona);
    }

    public function getStrona()
    {
        $this->__load();
        return parent::getStrona();
    }

    public function addVisitor(\Informacje\Main\MainBundle\Entity\Visitor $visitor)
    {
        $this->__load();
        return parent::addVisitor($visitor);
    }

    public function removeVisitor(\Informacje\Main\MainBundle\Entity\Visitor $visitor)
    {
        $this->__load();
        return parent::removeVisitor($visitor);
    }

    public function getVisitor()
    {
        $this->__load();
        return parent::getVisitor();
    }

    public function addChildren(\Informacje\Main\MainBundle\Entity\Komentarz2 $children)
    {
        $this->__load();
        return parent::addChildren($children);
    }

    public function removeChildren(\Informacje\Main\MainBundle\Entity\Komentarz2 $children)
    {
        $this->__load();
        return parent::removeChildren($children);
    }

    public function getChildren()
    {
        $this->__load();
        return parent::getChildren();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'komentarz', 'podpis', 'czas', 'plus', 'minus', 'strona', 'visitor', 'children');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}