<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemInstance
 *
 * @ORM\Table(name="item_instance")
 * @ORM\Entity
 */
class ItemInstance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="itemEntry", type="integer", nullable=false)
     */
    private $itementry;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_guid", type="integer", nullable=false)
     */
    private $ownerGuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="creatorGuid", type="integer", nullable=false)
     */
    private $creatorguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="giftCreatorGuid", type="integer", nullable=false)
     */
    private $giftcreatorguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="charges", type="text", nullable=true)
     */
    private $charges;

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="enchantments", type="text", nullable=false)
     */
    private $enchantments;

    /**
     * @var integer
     *
     * @ORM\Column(name="randomPropertyId", type="smallint", nullable=false)
     */
    private $randompropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="durability", type="smallint", nullable=false)
     */
    private $durability;

    /**
     * @var integer
     *
     * @ORM\Column(name="playedTime", type="integer", nullable=false)
     */
    private $playedtime;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
