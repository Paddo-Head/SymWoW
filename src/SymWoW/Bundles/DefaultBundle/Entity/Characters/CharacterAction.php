<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterAction
 *
 * @ORM\Table(name="character_action")
 * @ORM\Entity
 */
class CharacterAction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="action", type="integer", nullable=false)
     */
    private $action;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spec", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="button", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $button;


}
