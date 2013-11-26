<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservedName
 *
 * @ORM\Table(name="reserved_name")
 * @ORM\Entity
 */
class ReservedName
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;


}
