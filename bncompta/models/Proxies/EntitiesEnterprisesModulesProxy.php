<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EntitiesEnterprisesModulesProxy extends \Entities\EnterprisesModules implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function setModules($modules)
    {
        $this->_load();
        return parent::setModules($modules);
    }

    public function getModules()
    {
        $this->_load();
        return parent::getModules();
    }

    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setEnterprise(\Entities\Enterprises $enterprise)
    {
        $this->_load();
        return parent::setEnterprise($enterprise);
    }

    public function getEnterprise()
    {
        $this->_load();
        return parent::getEnterprise();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'modules', 'id', 'enterprise');
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
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}