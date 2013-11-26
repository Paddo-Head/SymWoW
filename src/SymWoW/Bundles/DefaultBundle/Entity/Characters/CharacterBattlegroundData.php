<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterBattlegroundData
 *
 * @ORM\Table(name="character_battleground_data")
 * @ORM\Entity
 */
class CharacterBattlegroundData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="instanceId", type="integer", nullable=false)
     */
    private $instanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="team", type="smallint", nullable=false)
     */
    private $team;

    /**
     * @var float
     *
     * @ORM\Column(name="joinX", type="float", nullable=false)
     */
    private $joinx;

    /**
     * @var float
     *
     * @ORM\Column(name="joinY", type="float", nullable=false)
     */
    private $joiny;

    /**
     * @var float
     *
     * @ORM\Column(name="joinZ", type="float", nullable=false)
     */
    private $joinz;

    /**
     * @var float
     *
     * @ORM\Column(name="joinO", type="float", nullable=false)
     */
    private $joino;

    /**
     * @var integer
     *
     * @ORM\Column(name="joinMapId", type="smallint", nullable=false)
     */
    private $joinmapid;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxiStart", type="integer", nullable=false)
     */
    private $taxistart;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxiEnd", type="integer", nullable=false)
     */
    private $taxiend;

    /**
     * @var integer
     *
     * @ORM\Column(name="mountSpell", type="integer", nullable=false)
     */
    private $mountspell;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
