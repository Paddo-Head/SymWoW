<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvents
 *
 * @ORM\Table(name="calendar_events")
 * @ORM\Entity
 */
class CalendarEvents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="creator", type="integer", nullable=false)
     */
    private $creator;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="dungeon", type="integer", nullable=false)
     */
    private $dungeon;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventtime", type="integer", nullable=false)
     */
    private $eventtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags;

    /**
     * @var integer
     *
     * @ORM\Column(name="time2", type="integer", nullable=false)
     */
    private $time2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
