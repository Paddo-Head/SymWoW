<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addons
 *
 * @ORM\Table(name="addons")
 * @ORM\Entity
 */
class Addons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="crc", type="integer", nullable=false)
     */
    private $crc;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;


}
