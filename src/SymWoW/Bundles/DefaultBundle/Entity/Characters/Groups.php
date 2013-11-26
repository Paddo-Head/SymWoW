<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="leaderGuid", type="integer", nullable=false)
     */
    private $leaderguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lootMethod", type="boolean", nullable=false)
     */
    private $lootmethod;

    /**
     * @var integer
     *
     * @ORM\Column(name="looterGuid", type="integer", nullable=false)
     */
    private $looterguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lootThreshold", type="boolean", nullable=false)
     */
    private $lootthreshold;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon1", type="integer", nullable=false)
     */
    private $icon1;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon2", type="integer", nullable=false)
     */
    private $icon2;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon3", type="integer", nullable=false)
     */
    private $icon3;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon4", type="integer", nullable=false)
     */
    private $icon4;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon5", type="integer", nullable=false)
     */
    private $icon5;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon6", type="integer", nullable=false)
     */
    private $icon6;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon7", type="integer", nullable=false)
     */
    private $icon7;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon8", type="integer", nullable=false)
     */
    private $icon8;

    /**
     * @var boolean
     *
     * @ORM\Column(name="groupType", type="boolean", nullable=false)
     */
    private $grouptype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="boolean", nullable=false)
     */
    private $difficulty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="raiddifficulty", type="boolean", nullable=false)
     */
    private $raiddifficulty;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
