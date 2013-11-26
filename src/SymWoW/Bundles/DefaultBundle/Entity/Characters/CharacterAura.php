<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterAura
 *
 * @ORM\Table(name="character_aura")
 * @ORM\Entity
 */
class CharacterAura
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="recalculate_mask", type="boolean", nullable=false)
     */
    private $recalculateMask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stackcount", type="boolean", nullable=false)
     */
    private $stackcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount0", type="integer", nullable=false)
     */
    private $amount0;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount1", type="integer", nullable=false)
     */
    private $amount1;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount2", type="integer", nullable=false)
     */
    private $amount2;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount0", type="integer", nullable=false)
     */
    private $baseAmount0;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount1", type="integer", nullable=false)
     */
    private $baseAmount1;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount2", type="integer", nullable=false)
     */
    private $baseAmount2;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxduration", type="integer", nullable=false)
     */
    private $maxduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="remaintime", type="integer", nullable=false)
     */
    private $remaintime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remaincharges", type="boolean", nullable=false)
     */
    private $remaincharges;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="caster_guid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $casterGuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemGuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="effect_mask", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $effectMask;


}
