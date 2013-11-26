<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterBattlegroundRandom
 *
 * @ORM\Table(name="character_battleground_random")
 * @ORM\Entity
 */
class CharacterBattlegroundRandom
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
