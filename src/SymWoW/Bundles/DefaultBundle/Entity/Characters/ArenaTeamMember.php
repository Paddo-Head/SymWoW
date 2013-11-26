<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArenaTeamMember
 *
 * @ORM\Table(name="arena_team_member")
 * @ORM\Entity
 */
class ArenaTeamMember
{
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
     * @ORM\Column(name="personalRating", type="smallint", nullable=false)
     */
    private $personalrating;

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
     * @ORM\Column(name="arenaTeamId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $arenateamid;


}
