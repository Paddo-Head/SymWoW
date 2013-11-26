<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankItem
 *
 * @ORM\Table(name="guild_bank_item")
 * @ORM\Entity
 */
class GuildBankItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer", nullable=false)
     */
    private $itemGuid;

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
     * @ORM\Column(name="TabId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SlotId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $slotid;


}
