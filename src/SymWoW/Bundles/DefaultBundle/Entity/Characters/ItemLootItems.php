<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLootItems
 *
 * @ORM\Table(name="item_loot_items")
 * @ORM\Entity
 */
class ItemLootItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="container_id", type="integer", nullable=false)
     */
    private $containerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_count", type="integer", nullable=false)
     */
    private $itemCount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="follow_rules", type="boolean", nullable=false)
     */
    private $followRules;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ffa", type="boolean", nullable=false)
     */
    private $ffa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="blocked", type="boolean", nullable=false)
     */
    private $blocked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="counted", type="boolean", nullable=false)
     */
    private $counted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="under_threshold", type="boolean", nullable=false)
     */
    private $underThreshold;

    /**
     * @var boolean
     *
     * @ORM\Column(name="needs_quest", type="boolean", nullable=false)
     */
    private $needsQuest;

    /**
     * @var integer
     *
     * @ORM\Column(name="rnd_prop", type="integer", nullable=false)
     */
    private $rndProp;

    /**
     * @var integer
     *
     * @ORM\Column(name="rnd_suffix", type="integer", nullable=false)
     */
    private $rndSuffix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
