<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guild
 *
 * @ORM\Table(name="guild")
 * @ORM\Entity
 */
class Guild
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="leaderguid", type="integer", nullable=false)
     */
    private $leaderguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EmblemStyle", type="boolean", nullable=false)
     */
    private $emblemstyle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EmblemColor", type="boolean", nullable=false)
     */
    private $emblemcolor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BorderStyle", type="boolean", nullable=false)
     */
    private $borderstyle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BorderColor", type="boolean", nullable=false)
     */
    private $bordercolor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="BackgroundColor", type="boolean", nullable=false)
     */
    private $backgroundcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="motd", type="string", length=128, nullable=false)
     */
    private $motd;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdate", type="integer", nullable=false)
     */
    private $createdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="BankMoney", type="bigint", nullable=false)
     */
    private $bankmoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guildid;


}
