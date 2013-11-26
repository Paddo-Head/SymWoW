<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterEquipmentsets
 *
 * @ORM\Table(name="character_equipmentsets")
 * @ORM\Entity
 */
class CharacterEquipmentsets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="setindex", type="boolean", nullable=false)
     */
    private $setindex;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=31, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iconname", type="string", length=100, nullable=false)
     */
    private $iconname;

    /**
     * @var integer
     *
     * @ORM\Column(name="ignore_mask", type="integer", nullable=false)
     */
    private $ignoreMask;

    /**
     * @var integer
     *
     * @ORM\Column(name="item0", type="integer", nullable=false)
     */
    private $item0;

    /**
     * @var integer
     *
     * @ORM\Column(name="item1", type="integer", nullable=false)
     */
    private $item1;

    /**
     * @var integer
     *
     * @ORM\Column(name="item2", type="integer", nullable=false)
     */
    private $item2;

    /**
     * @var integer
     *
     * @ORM\Column(name="item3", type="integer", nullable=false)
     */
    private $item3;

    /**
     * @var integer
     *
     * @ORM\Column(name="item4", type="integer", nullable=false)
     */
    private $item4;

    /**
     * @var integer
     *
     * @ORM\Column(name="item5", type="integer", nullable=false)
     */
    private $item5;

    /**
     * @var integer
     *
     * @ORM\Column(name="item6", type="integer", nullable=false)
     */
    private $item6;

    /**
     * @var integer
     *
     * @ORM\Column(name="item7", type="integer", nullable=false)
     */
    private $item7;

    /**
     * @var integer
     *
     * @ORM\Column(name="item8", type="integer", nullable=false)
     */
    private $item8;

    /**
     * @var integer
     *
     * @ORM\Column(name="item9", type="integer", nullable=false)
     */
    private $item9;

    /**
     * @var integer
     *
     * @ORM\Column(name="item10", type="integer", nullable=false)
     */
    private $item10;

    /**
     * @var integer
     *
     * @ORM\Column(name="item11", type="integer", nullable=false)
     */
    private $item11;

    /**
     * @var integer
     *
     * @ORM\Column(name="item12", type="integer", nullable=false)
     */
    private $item12;

    /**
     * @var integer
     *
     * @ORM\Column(name="item13", type="integer", nullable=false)
     */
    private $item13;

    /**
     * @var integer
     *
     * @ORM\Column(name="item14", type="integer", nullable=false)
     */
    private $item14;

    /**
     * @var integer
     *
     * @ORM\Column(name="item15", type="integer", nullable=false)
     */
    private $item15;

    /**
     * @var integer
     *
     * @ORM\Column(name="item16", type="integer", nullable=false)
     */
    private $item16;

    /**
     * @var integer
     *
     * @ORM\Column(name="item17", type="integer", nullable=false)
     */
    private $item17;

    /**
     * @var integer
     *
     * @ORM\Column(name="item18", type="integer", nullable=false)
     */
    private $item18;

    /**
     * @var integer
     *
     * @ORM\Column(name="setguid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $setguid;


}
