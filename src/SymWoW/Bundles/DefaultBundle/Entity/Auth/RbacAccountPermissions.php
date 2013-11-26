<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Auth;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacAccountPermissions
 *
 * @ORM\Table(name="rbac_account_permissions")
 * @ORM\Entity
 */
class RbacAccountPermissions
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="granted", type="boolean", nullable=false)
     */
    private $granted;

    /**
     * @var integer
     *
     * @ORM\Column(name="realmId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;

    /**
     * @var \Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions
     *
     * @ORM\OneToOne(targetEntity="Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permissionId", referencedColumnName="id", unique=true)
     * })
     */
    private $permissionid;

    /**
     * @var \Symwow\Bundles\DefaultBundle\Entity\Auth\Account
     *
     * @ORM\OneToOne(targetEntity="Symwow\Bundles\DefaultBundle\Entity\Auth\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accountId", referencedColumnName="id", unique=true)
     * })
     */
    private $accountid;



    /**
     * Set granted
     *
     * @param boolean $granted
     * @return RbacAccountPermissions
     */
    public function setGranted($granted)
    {
        $this->granted = $granted;
    
        return $this;
    }

    /**
     * Get granted
     *
     * @return boolean 
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Set realmid
     *
     * @param integer $realmid
     * @return RbacAccountPermissions
     */
    public function setRealmid($realmid)
    {
        $this->realmid = $realmid;
    
        return $this;
    }

    /**
     * Get realmid
     *
     * @return integer 
     */
    public function getRealmid()
    {
        return $this->realmid;
    }

    /**
     * Set permissionid
     *
     * @param \Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions $permissionid
     * @return RbacAccountPermissions
     */
    public function setPermissionid(\Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions $permissionid = null)
    {
        $this->permissionid = $permissionid;
    
        return $this;
    }

    /**
     * Get permissionid
     *
     * @return \Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions
     */
    public function getPermissionid()
    {
        return $this->permissionid;
    }

    /**
     * Set accountid
     *
     * @param \Symwow\Bundles\DefaultBundle\Entity\Auth\Account $accountid
     * @return RbacAccountPermissions
     */
    public function setAccountid(\Symwow\Bundles\DefaultBundle\Entity\Auth\Account $accountid = null)
    {
        $this->accountid = $accountid;
    
        return $this;
    }

    /**
     * Get accountid
     *
     * @return \Symwow\Bundles\DefaultBundle\Entity\Auth\Account
     */
    public function getAccountid()
    {
        return $this->accountid;
    }
}