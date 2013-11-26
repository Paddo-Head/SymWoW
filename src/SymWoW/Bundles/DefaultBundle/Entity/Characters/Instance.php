<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instance
 *
 * @ORM\Table(name="instance")
 * @ORM\Entity
 */
class Instance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint", nullable=false)
     */
    private $map;

    /**
     * @var integer
     *
     * @ORM\Column(name="resettime", type="integer", nullable=false)
     */
    private $resettime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="boolean", nullable=false)
     */
    private $difficulty;

    /**
     * @var integer
     *
     * @ORM\Column(name="completedEncounters", type="integer", nullable=false)
     */
    private $completedencounters;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
