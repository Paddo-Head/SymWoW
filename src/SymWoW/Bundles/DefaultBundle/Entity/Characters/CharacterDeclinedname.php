<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterDeclinedname
 *
 * @ORM\Table(name="character_declinedname")
 * @ORM\Entity
 */
class CharacterDeclinedname
{
    /**
     * @var string
     *
     * @ORM\Column(name="genitive", type="string", length=15, nullable=false)
     */
    private $genitive;

    /**
     * @var string
     *
     * @ORM\Column(name="dative", type="string", length=15, nullable=false)
     */
    private $dative;

    /**
     * @var string
     *
     * @ORM\Column(name="accusative", type="string", length=15, nullable=false)
     */
    private $accusative;

    /**
     * @var string
     *
     * @ORM\Column(name="instrumental", type="string", length=15, nullable=false)
     */
    private $instrumental;

    /**
     * @var string
     *
     * @ORM\Column(name="prepositional", type="string", length=15, nullable=false)
     */
    private $prepositional;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
