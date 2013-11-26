<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailItems
 *
 * @ORM\Table(name="mail_items")
 * @ORM\Entity
 */
class MailItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mail_id", type="integer", nullable=false)
     */
    private $mailId;

    /**
     * @var integer
     *
     * @ORM\Column(name="receiver", type="integer", nullable=false)
     */
    private $receiver;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemGuid;


}
