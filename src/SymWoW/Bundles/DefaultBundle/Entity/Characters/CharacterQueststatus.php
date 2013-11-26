<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQueststatus
 *
 * @ORM\Table(name="character_queststatus")
 * @ORM\Entity
 */
class CharacterQueststatus
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="explored", type="boolean", nullable=false)
     */
    private $explored;

    /**
     * @var integer
     *
     * @ORM\Column(name="timer", type="integer", nullable=false)
     */
    private $timer;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount1", type="smallint", nullable=false)
     */
    private $mobcount1;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount2", type="smallint", nullable=false)
     */
    private $mobcount2;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount3", type="smallint", nullable=false)
     */
    private $mobcount3;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount4", type="smallint", nullable=false)
     */
    private $mobcount4;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount1", type="smallint", nullable=false)
     */
    private $itemcount1;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount2", type="smallint", nullable=false)
     */
    private $itemcount2;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount3", type="smallint", nullable=false)
     */
    private $itemcount3;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount4", type="smallint", nullable=false)
     */
    private $itemcount4;

    /**
     * @var integer
     *
     * @ORM\Column(name="playercount", type="smallint", nullable=false)
     */
    private $playercount;

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
     * @ORM\Column(name="quest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $quest;


}
