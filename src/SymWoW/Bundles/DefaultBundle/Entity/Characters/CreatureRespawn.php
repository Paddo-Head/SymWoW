<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureRespawn
 *
 * @ORM\Table(name="creature_respawn")
 * @ORM\Entity
 */
class CreatureRespawn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="respawnTime", type="integer", nullable=false)
     */
    private $respawntime;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid;

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
     * @ORM\Column(name="instanceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $instanceid;


}
