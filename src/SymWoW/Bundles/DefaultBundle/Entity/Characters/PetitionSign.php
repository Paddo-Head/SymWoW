<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetitionSign
 *
 * @ORM\Table(name="petition_sign")
 * @ORM\Entity
 */
class PetitionSign
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ownerguid", type="integer", nullable=false)
     */
    private $ownerguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="player_account", type="integer", nullable=false)
     */
    private $playerAccount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="petitionguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $petitionguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="playerguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerguid;


}
