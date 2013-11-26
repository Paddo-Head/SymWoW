<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventConditionSave
 *
 * @ORM\Table(name="game_event_condition_save")
 * @ORM\Entity
 */
class GameEventConditionSave
{
    /**
     * @var float
     *
     * @ORM\Column(name="done", type="float", nullable=true)
     */
    private $done;

    /**
     * @var integer
     *
     * @ORM\Column(name="condition_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditionId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evententry;


}
