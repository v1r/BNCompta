<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EntitiesUsersProxy extends \Entities\Users implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setEmail($email)
    {
        $this->_load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->_load();
        return parent::getEmail();
    }

    public function setUsername($username)
    {
        $this->_load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->_load();
        return parent::getUsername();
    }

    public function setPassword($password)
    {
        $this->_load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->_load();
        return parent::getPassword();
    }

    public function setDefaultLang($defaultLang)
    {
        $this->_load();
        return parent::setDefaultLang($defaultLang);
    }

    public function getDefaultLang()
    {
        $this->_load();
        return parent::getDefaultLang();
    }

    public function setLastLoginOn($lastLoginOn)
    {
        $this->_load();
        return parent::setLastLoginOn($lastLoginOn);
    }

    public function getLastLoginOn()
    {
        $this->_load();
        return parent::getLastLoginOn();
    }

    public function setLastOnlineOn($lastOnlineOn)
    {
        $this->_load();
        return parent::setLastOnlineOn($lastOnlineOn);
    }

    public function getLastOnlineOn()
    {
        $this->_load();
        return parent::getLastOnlineOn();
    }

    public function setCreatedOn($createdOn)
    {
        $this->_load();
        return parent::setCreatedOn($createdOn);
    }

    public function getCreatedOn()
    {
        $this->_load();
        return parent::getCreatedOn();
    }

    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function addEnterprise(\Entities\Enterprises $enterprise)
    {
        $this->_load();
        return parent::addEnterprise($enterprise);
    }

    public function getEnterprise()
    {
        $this->_load();
        return parent::getEnterprise();
    }

    public function setGroups(\Entities\Groups $groups)
    {
        $this->_load();
        return parent::setGroups($groups);
    }

    public function getGroups()
    {
        $this->_load();
        return parent::getGroups();
    }

    public function addAclUserPermission(\Entities\AclUsersPermissions $aclUserPermission)
    {
        $this->_load();
        return parent::addAclUserPermission($aclUserPermission);
    }

    public function getAclUserPermission()
    {
        $this->_load();
        return parent::getAclUserPermission();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'email', 'username', 'password', 'defaultLang', 'lastLoginOn', 'lastOnlineOn', 'createdOn', 'id', 'enterprise', 'acl_user_permission', 'groups');
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