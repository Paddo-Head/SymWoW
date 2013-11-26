<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterInstance
 *
 * @ORM\Table(name="character_instance")
 * @ORM\Entity
 */
class CharacterInstance
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="permanent", type="boolean", nullable=false)
     */
    private $permanent;

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
     * @ORM\Column(name="instance", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $instance;


}
