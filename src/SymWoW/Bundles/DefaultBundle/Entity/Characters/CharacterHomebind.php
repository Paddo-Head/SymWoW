<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterHomebind
 *
 * @ORM\Table(name="character_homebind")
 * @ORM\Entity
 */
class CharacterHomebind
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoneId", type="smallint", nullable=false)
     */
    private $zoneid;

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
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
