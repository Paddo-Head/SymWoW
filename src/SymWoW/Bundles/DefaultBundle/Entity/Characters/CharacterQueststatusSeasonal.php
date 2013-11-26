<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQueststatusSeasonal
 *
 * @ORM\Table(name="character_queststatus_seasonal")
 * @ORM\Entity
 */
class CharacterQueststatusSeasonal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="event", type="integer", nullable=false)
     */
    private $event;

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
