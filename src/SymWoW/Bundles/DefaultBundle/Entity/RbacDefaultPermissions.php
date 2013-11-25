<?php

namespace Symwow\Bundles\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacDefaultPermissions
 *
 * @ORM\Table(name="rbac_default_permissions")
 * @ORM\Entity
 */
class RbacDefaultPermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="secId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $secid;

    /**
     * @var \Symwow\Bundles\DefaultBundle\Entity\RbacPermissions
     *
     * @ORM\OneToOne(targetEntity="Symwow\Bundles\DefaultBundle\Entity\RbacPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permissionId", referencedColumnName="id", unique=true)
     * })
     */
    private $permissionid;



    /**
     * Set secid
     *
     * @param integer $secid
     * @return RbacDefaultPermissions
     */
    public function setSecid($secid)
    {
        $this->secid = $secid;
    
        return $this;
    }

    /**
     * Get secid
     *
     * @return integer 
     */
    public function getSecid()
    {
        return $this->secid;
    }

    /**
     * Set permissionid
     *
     * @param \Symwow\Bundles\DefaultBundle\Entity\RbacPermissions $permissionid
     * @return RbacDefaultPermissions
     */
    public function setPermissionid(\Symwow\Bundles\DefaultBundle\Entity\RbacPermissions $permissionid = null)
    {
        $this->permissionid = $permissionid;
    
        return $this;
    }

    /**
     * Get permissionid
     *
     * @return \Symwow\Bundles\DefaultBundle\Entity\RbacPermissions 
     */
    public function getPermissionid()
    {
        return $this->permissionid;
    }
}