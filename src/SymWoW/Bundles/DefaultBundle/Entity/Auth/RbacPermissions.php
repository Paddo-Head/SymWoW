<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Auth;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacPermissions
 *
 * @ORM\Table(name="rbac_permissions")
 * @ORM\Entity
 */
class RbacPermissions
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions", inversedBy="id")
     * @ORM\JoinTable(name="rbac_linked_permissions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="linkedId", referencedColumnName="id")
     *   }
     * )
     */
    private $linkedid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->linkedid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return RbacPermissions
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Add linkedid
     *
     * @param \Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions $linkedid
     * @return RbacPermissions
     */
    public function addLinkedid(\Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions $linkedid)
    {
        $this->linkedid[] = $linkedid;
    
        return $this;
    }

    /**
     * Remove linkedid
     *
     * @param \Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions $linkedid
     */
    public function removeLinkedid(\Symwow\Bundles\DefaultBundle\Entity\Auth\RbacPermissions $linkedid)
    {
        $this->linkedid->removeElement($linkedid);
    }

    /**
     * Get linkedid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinkedid()
    {
        return $this->linkedid;
    }
}