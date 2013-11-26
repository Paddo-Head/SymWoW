<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildMember
 *
 * @ORM\Table(name="guild_member")
 * @ORM\Entity
 */
class GuildMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer", nullable=false)
     */
    private $guildid;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank", type="boolean", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="pnote", type="string", length=31, nullable=false)
     */
    private $pnote;

    /**
     * @var string
     *
     * @ORM\Column(name="offnote", type="string", length=31, nullable=false)
     */
    private $offnote;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
