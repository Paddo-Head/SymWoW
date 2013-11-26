<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildMemberWithdraw
 *
 * @ORM\Table(name="guild_member_withdraw")
 * @ORM\Entity
 */
class GuildMemberWithdraw
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tab0", type="integer", nullable=false)
     */
    private $tab0;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab1", type="integer", nullable=false)
     */
    private $tab1;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab2", type="integer", nullable=false)
     */
    private $tab2;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab3", type="integer", nullable=false)
     */
    private $tab3;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab4", type="integer", nullable=false)
     */
    private $tab4;

    /**
     * @var integer
     *
     * @ORM\Column(name="tab5", type="integer", nullable=false)
     */
    private $tab5;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
