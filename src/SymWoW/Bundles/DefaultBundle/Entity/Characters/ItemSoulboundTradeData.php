<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemSoulboundTradeData
 *
 * @ORM\Table(name="item_soulbound_trade_data")
 * @ORM\Entity
 */
class ItemSoulboundTradeData
{
    /**
     * @var string
     *
     * @ORM\Column(name="allowedPlayers", type="text", nullable=false)
     */
    private $allowedplayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemguid;


}
