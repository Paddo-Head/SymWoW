<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankTab
 *
 * @ORM\Table(name="guild_bank_tab")
 * @ORM\Entity
 */
class GuildBankTab
{
    /**
     * @var string
     *
     * @ORM\Column(name="TabName", type="string", length=16, nullable=false)
     */
    private $tabname;

    /**
     * @var string
     *
     * @ORM\Column(name="TabIcon", type="string", length=100, nullable=false)
     */
    private $tabicon;

    /**
     * @var string
     *
     * @ORM\Column(name="TabText", type="string", length=500, nullable=true)
     */
    private $tabtext;

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
     * @ORM\Column(name="TabId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;


}
