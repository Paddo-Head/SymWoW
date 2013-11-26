<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemRefundInstance
 *
 * @ORM\Table(name="item_refund_instance")
 * @ORM\Entity
 */
class ItemRefundInstance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="paidMoney", type="integer", nullable=false)
     */
    private $paidmoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="paidExtendedCost", type="smallint", nullable=false)
     */
    private $paidextendedcost;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemGuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="player_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerGuid;


}
