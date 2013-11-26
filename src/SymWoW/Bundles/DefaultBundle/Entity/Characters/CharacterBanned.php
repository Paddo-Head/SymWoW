<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterBanned
 *
 * @ORM\Table(name="character_banned")
 * @ORM\Entity
 */
class CharacterBanned
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unbandate", type="integer", nullable=false)
     */
    private $unbandate;

    /**
     * @var string
     *
     * @ORM\Column(name="bannedby", type="string", length=50, nullable=false)
     */
    private $bannedby;

    /**
     * @var string
     *
     * @ORM\Column(name="banreason", type="string", length=255, nullable=false)
     */
    private $banreason;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

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
     * @ORM\Column(name="bandate", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bandate;


}
