<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterAchievementProgress
 *
 * @ORM\Table(name="character_achievement_progress")
 * @ORM\Entity
 */
class CharacterAchievementProgress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="counter", type="integer", nullable=false)
     */
    private $counter;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

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
     * @ORM\Column(name="criteria", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $criteria;


}
