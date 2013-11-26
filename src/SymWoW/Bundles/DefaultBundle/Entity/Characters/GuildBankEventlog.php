<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankEventlog
 *
 * @ORM\Table(name="guild_bank_eventlog")
 * @ORM\Entity
 */
class GuildBankEventlog
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
     * @ORM\Column(name="PlayerGuid", type="integer", nullable=false)
     */
    private $playerguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemOrMoney", type="integer", nullable=false)
     */
    private $itemormoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemStackCount", type="smallint", nullable=false)
     */
    private $itemstackcount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DestTabId", type="boolean", nullable=false)
     */
    private $desttabid;

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

    /**
     * @var boolean
     *
     * @ORM\Column(name="TabId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;


}
