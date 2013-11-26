<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterArenaStats
 *
 * @ORM\Table(name="character_arena_stats")
 * @ORM\Entity
 */
class CharacterArenaStats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matchMakerRating", type="smallint", nullable=false)
     */
    private $matchmakerrating;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slot", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $slot;


}
