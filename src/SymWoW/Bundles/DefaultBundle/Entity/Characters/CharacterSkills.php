<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSkills
 *
 * @ORM\Table(name="character_skills")
 * @ORM\Entity
 */
class CharacterSkills
{
    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="smallint", nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="max", type="smallint", nullable=false)
     */
    private $max;

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
     * @ORM\Column(name="skill", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $skill;


}
