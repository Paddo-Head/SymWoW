<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * LagReports
 *
 * @ORM\Table(name="lag_reports")
 * @ORM\Entity
 */
class LagReports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lagType", type="boolean", nullable=false)
     */
    private $lagtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid;

    /**
     * @var float
     *
     * @ORM\Column(name="posX", type="float", nullable=false)
     */
    private $posx;

    /**
     * @var float
     *
     * @ORM\Column(name="posY", type="float", nullable=false)
     */
    private $posy;

    /**
     * @var float
     *
     * @ORM\Column(name="posZ", type="float", nullable=false)
     */
    private $posz;

    /**
     * @var integer
     *
     * @ORM\Column(name="latency", type="integer", nullable=false)
     */
    private $latency;

    /**
     * @var integer
     *
     * @ORM\Column(name="createTime", type="integer", nullable=false)
     */
    private $createtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="reportId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportid;


}
