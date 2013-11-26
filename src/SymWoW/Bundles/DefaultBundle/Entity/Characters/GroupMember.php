<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMember
 *
 * @ORM\Table(name="group_member")
 * @ORM\Entity
 */
class GroupMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="memberFlags", type="boolean", nullable=false)
     */
    private $memberflags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="subgroup", type="boolean", nullable=false)
     */
    private $subgroup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="roles", type="boolean", nullable=false)
     */
    private $roles;

    /**
     * @var integer
     *
     * @ORM\Column(name="memberGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberguid;


}
