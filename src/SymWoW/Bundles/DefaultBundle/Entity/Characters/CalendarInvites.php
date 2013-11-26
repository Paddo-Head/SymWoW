<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarInvites
 *
 * @ORM\Table(name="calendar_invites")
 * @ORM\Entity
 */
class CalendarInvites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="event", type="bigint", nullable=false)
     */
    private $event;

    /**
     * @var integer
     *
     * @ORM\Column(name="invitee", type="integer", nullable=false)
     */
    private $invitee;

    /**
     * @var integer
     *
     * @ORM\Column(name="sender", type="integer", nullable=false)
     */
    private $sender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="statustime", type="integer", nullable=false)
     */
    private $statustime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank", type="boolean", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
