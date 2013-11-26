<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corpse
 *
 * @ORM\Table(name="corpse")
 * @ORM\Entity
 */
class Corpse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var float
     *
     * @ORM\Column(name="posX", type="float", nullable=false)
     */
    private $posx;

    /**
     * @var float
     *
     * @ORM\Column(name="posY", type="float", nullable=false)
     */
    private $posy;

    /**
     * @var float
     *
     * @ORM\Column(name="posZ", type="float", nullable=false)
     */
    private $posz;

    /**
     * @var float
     *
     * @ORM\Column(name="orientation", type="float", nullable=false)
     */
    private $orientation;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid;

    /**
     * @var integer
     *
     * @ORM\Column(name="phaseMask", type="integer", nullable=false)
     */
    private $phasemask;

    /**
     * @var integer
     *
     * @ORM\Column(name="displayId", type="integer", nullable=false)
     */
    private $displayid;

    /**
     * @var string
     *
     * @ORM\Column(name="itemCache", type="text", nullable=false)
     */
    private $itemcache;

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes1", type="integer", nullable=false)
     */
    private $bytes1;

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes2", type="integer", nullable=false)
     */
    private $bytes2;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildId", type="integer", nullable=false)
     */
    private $guildid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flags", type="boolean", nullable=false)
     */
    private $flags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dynFlags", type="boolean", nullable=false)
     */
    private $dynflags;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var boolean
     *
     * @ORM\Column(name="corpseType", type="boolean", nullable=false)
     */
    private $corpsetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="instanceId", type="integer", nullable=false)
     */
    private $instanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="corpseGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $corpseguid;


}
