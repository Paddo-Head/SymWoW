<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceReset
 *
 * @ORM\Table(name="instance_reset")
 * @ORM\Entity
 */
class InstanceReset
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resettime", type="integer", nullable=false)
     */
    private $resettime;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapid", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mapid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $difficulty;


}
