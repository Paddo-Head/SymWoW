<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildRank
 *
 * @ORM\Table(name="guild_rank")
 * @ORM\Entity
 */
class GuildRank
{
    /**
     * @var string
     *
     * @ORM\Column(name="rname", type="string", length=20, nullable=false)
     */
    private $rname;

    /**
     * @var integer
     *
     * @ORM\Column(name="rights", type="integer", nullable=false)
     */
    private $rights;

    /**
     * @var integer
     *
     * @ORM\Column(name="BankMoneyPerDay", type="integer", nullable=false)
     */
    private $bankmoneyperday;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guildid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rid", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rid;


}
