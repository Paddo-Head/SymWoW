<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArenaTeam
 *
 * @ORM\Table(name="arena_team")
 * @ORM\Entity
 */
class ArenaTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="captainGuid", type="integer", nullable=false)
     */
    private $captainguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="smallint", nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="seasonGames", type="smallint", nullable=false)
     */
    private $seasongames;

    /**
     * @var integer
     *
     * @ORM\Column(name="seasonWins", type="smallint", nullable=false)
     */
    private $seasonwins;

    /**
     * @var integer
     *
     * @ORM\Column(name="weekGames", type="smallint", nullable=false)
     */
    private $weekgames;

    /**
     * @var integer
     *
     * @ORM\Column(name="weekWins", type="smallint", nullable=false)
     */
    private $weekwins;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="backgroundColor", type="integer", nullable=false)
     */
    private $backgroundcolor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emblemStyle", type="boolean", nullable=false)
     */
    private $emblemstyle;

    /**
     * @var integer
     *
     * @ORM\Column(name="emblemColor", type="integer", nullable=false)
     */
    private $emblemcolor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="borderStyle", type="boolean", nullable=false)
     */
    private $borderstyle;

    /**
     * @var integer
     *
     * @ORM\Column(name="borderColor", type="integer", nullable=false)
     */
    private $bordercolor;

    /**
     * @var integer
     *
     * @ORM\Column(name="arenaTeamId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $arenateamid;


}
