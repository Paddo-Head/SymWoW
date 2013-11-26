<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmTickets
 *
 * @ORM\Table(name="gm_tickets")
 * @ORM\Entity
 */
class GmTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="createTime", type="integer", nullable=false)
     */
    private $createtime;

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
     * @ORM\Column(name="lastModifiedTime", type="integer", nullable=false)
     */
    private $lastmodifiedtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="closedBy", type="integer", nullable=false)
     */
    private $closedby;

    /**
     * @var integer
     *
     * @ORM\Column(name="assignedTo", type="integer", nullable=false)
     */
    private $assignedto;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", nullable=false)
     */
    private $response;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completed", type="boolean", nullable=false)
     */
    private $completed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="escalated", type="boolean", nullable=false)
     */
    private $escalated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="viewed", type="boolean", nullable=false)
     */
    private $viewed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="haveTicket", type="boolean", nullable=false)
     */
    private $haveticket;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticketId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ticketid;


}
