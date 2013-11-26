<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail")
 * @ORM\Entity
 */
class Mail
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="messageType", type="boolean", nullable=false)
     */
    private $messagetype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stationery", type="boolean", nullable=false)
     */
    private $stationery;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailTemplateId", type="smallint", nullable=false)
     */
    private $mailtemplateid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sender", type="integer", nullable=false)
     */
    private $sender;

    /**
     * @var integer
     *
     * @ORM\Column(name="receiver", type="integer", nullable=false)
     */
    private $receiver;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_items", type="boolean", nullable=false)
     */
    private $hasItems;

    /**
     * @var integer
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false)
     */
    private $expireTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="deliver_time", type="integer", nullable=false)
     */
    private $deliverTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod", type="integer", nullable=false)
     */
    private $cod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="checked", type="boolean", nullable=false)
     */
    private $checked;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
