<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channels
 *
 * @ORM\Table(name="channels")
 * @ORM\Entity
 */
class Channels
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="announce", type="boolean", nullable=false)
     */
    private $announce;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ownership", type="boolean", nullable=false)
     */
    private $ownership;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="bannedList", type="text", nullable=true)
     */
    private $bannedlist;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastUsed", type="integer", nullable=false)
     */
    private $lastused;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="team", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $team;


}
