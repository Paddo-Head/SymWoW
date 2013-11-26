<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * LfgData
 *
 * @ORM\Table(name="lfg_data")
 * @ORM\Entity
 */
class LfgData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dungeon", type="integer", nullable=false)
     */
    private $dungeon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
