<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auctionhouse
 *
 * @ORM\Table(name="auctionhouse")
 * @ORM\Entity
 */
class Auctionhouse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="auctioneerguid", type="integer", nullable=false)
     */
    private $auctioneerguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemguid", type="integer", nullable=false)
     */
    private $itemguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemowner", type="integer", nullable=false)
     */
    private $itemowner;

    /**
     * @var integer
     *
     * @ORM\Column(name="buyoutprice", type="integer", nullable=false)
     */
    private $buyoutprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="buyguid", type="integer", nullable=false)
     */
    private $buyguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastbid", type="integer", nullable=false)
     */
    private $lastbid;

    /**
     * @var integer
     *
     * @ORM\Column(name="startbid", type="integer", nullable=false)
     */
    private $startbid;

    /**
     * @var integer
     *
     * @ORM\Column(name="deposit", type="integer", nullable=false)
     */
    private $deposit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
