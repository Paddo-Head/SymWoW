<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSocial
 *
 * @ORM\Table(name="character_social")
 * @ORM\Entity
 */
class CharacterSocial
{
    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=48, nullable=false)
     */
    private $note;

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
     * @ORM\Column(name="friend", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $friend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flags", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $flags;


}
