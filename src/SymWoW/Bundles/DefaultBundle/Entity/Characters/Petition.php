<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petition
 *
 * @ORM\Table(name="petition")
 * @ORM\Entity
 */
class Petition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="petitionguid", type="integer", nullable=true)
     */
    private $petitionguid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ownerguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;


}
