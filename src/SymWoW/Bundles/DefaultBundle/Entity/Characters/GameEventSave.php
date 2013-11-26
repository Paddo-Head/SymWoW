<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventSave
 *
 * @ORM\Table(name="game_event_save")
 * @ORM\Entity
 */
class GameEventSave
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="next_start", type="integer", nullable=false)
     */
    private $nextStart;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evententry;


}
