<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankRight
 *
 * @ORM\Table(name="guild_bank_right")
 * @ORM\Entity
 */
class GuildBankRight
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="gbright", type="boolean", nullable=false)
     */
    private $gbright;

    /**
     * @var integer
     *
     * @ORM\Column(name="SlotPerDay", type="integer", nullable=false)
     */
    private $slotperday;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guildid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rid", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TabId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;


}
