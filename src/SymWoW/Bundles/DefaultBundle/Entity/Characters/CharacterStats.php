<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterStats
 *
 * @ORM\Table(name="character_stats")
 * @ORM\Entity
 */
class CharacterStats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="maxhealth", type="integer", nullable=false)
     */
    private $maxhealth;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower1", type="integer", nullable=false)
     */
    private $maxpower1;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower2", type="integer", nullable=false)
     */
    private $maxpower2;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower3", type="integer", nullable=false)
     */
    private $maxpower3;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower4", type="integer", nullable=false)
     */
    private $maxpower4;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower5", type="integer", nullable=false)
     */
    private $maxpower5;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower6", type="integer", nullable=false)
     */
    private $maxpower6;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower7", type="integer", nullable=false)
     */
    private $maxpower7;

    /**
     * @var integer
     *
     * @ORM\Column(name="strength", type="integer", nullable=false)
     */
    private $strength;

    /**
     * @var integer
     *
     * @ORM\Column(name="agility", type="integer", nullable=false)
     */
    private $agility;

    /**
     * @var integer
     *
     * @ORM\Column(name="stamina", type="integer", nullable=false)
     */
    private $stamina;

    /**
     * @var integer
     *
     * @ORM\Column(name="intellect", type="integer", nullable=false)
     */
    private $intellect;

    /**
     * @var integer
     *
     * @ORM\Column(name="spirit", type="integer", nullable=false)
     */
    private $spirit;

    /**
     * @var integer
     *
     * @ORM\Column(name="armor", type="integer", nullable=false)
     */
    private $armor;

    /**
     * @var integer
     *
     * @ORM\Column(name="resHoly", type="integer", nullable=false)
     */
    private $resholy;

    /**
     * @var integer
     *
     * @ORM\Column(name="resFire", type="integer", nullable=false)
     */
    private $resfire;

    /**
     * @var integer
     *
     * @ORM\Column(name="resNature", type="integer", nullable=false)
     */
    private $resnature;

    /**
     * @var integer
     *
     * @ORM\Column(name="resFrost", type="integer", nullable=false)
     */
    private $resfrost;

    /**
     * @var integer
     *
     * @ORM\Column(name="resShadow", type="integer", nullable=false)
     */
    private $resshadow;

    /**
     * @var integer
     *
     * @ORM\Column(name="resArcane", type="integer", nullable=false)
     */
    private $resarcane;

    /**
     * @var float
     *
     * @ORM\Column(name="blockPct", type="float", nullable=false)
     */
    private $blockpct;

    /**
     * @var float
     *
     * @ORM\Column(name="dodgePct", type="float", nullable=false)
     */
    private $dodgepct;

    /**
     * @var float
     *
     * @ORM\Column(name="parryPct", type="float", nullable=false)
     */
    private $parrypct;

    /**
     * @var float
     *
     * @ORM\Column(name="critPct", type="float", nullable=false)
     */
    private $critpct;

    /**
     * @var float
     *
     * @ORM\Column(name="rangedCritPct", type="float", nullable=false)
     */
    private $rangedcritpct;

    /**
     * @var float
     *
     * @ORM\Column(name="spellCritPct", type="float", nullable=false)
     */
    private $spellcritpct;

    /**
     * @var integer
     *
     * @ORM\Column(name="attackPower", type="integer", nullable=false)
     */
    private $attackpower;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangedAttackPower", type="integer", nullable=false)
     */
    private $rangedattackpower;

    /**
     * @var integer
     *
     * @ORM\Column(name="spellPower", type="integer", nullable=false)
     */
    private $spellpower;

    /**
     * @var integer
     *
     * @ORM\Column(name="resilience", type="integer", nullable=false)
     */
    private $resilience;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
