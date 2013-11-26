<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterTalent
 *
 * @ORM\Table(name="character_talent")
 * @ORM\Entity
 */
class CharacterTalent
{
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
     * @ORM\Column(name="spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spec", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spec;


}
