<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildEventlog
 *
 * @ORM\Table(name="guild_eventlog")
 * @ORM\Entity
 */
class GuildEventlog
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="EventType", type="boolean", nullable=false)
     */
    private $eventtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlayerGuid1", type="integer", nullable=false)
     */
    private $playerguid1;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlayerGuid2", type="integer", nullable=false)
     */
    private $playerguid2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NewRank", type="boolean", nullable=false)
     */
    private $newrank;

    /**
     * @var integer
     *
     * @ORM\Column(name="TimeStamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guildid;

    /**
     * @var integer
     *
     * @ORM\Column(name="LogGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $logguid;


}
