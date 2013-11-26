<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterReputation
 *
 * @ORM\Table(name="character_reputation")
 * @ORM\Entity
 */
class CharacterReputation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="standing", type="integer", nullable=false)
     */
    private $standing;

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="smallint", nullable=false)
     */
    private $flags;

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
     * @ORM\Column(name="faction", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $faction;


}
