<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInstanceTimes
 *
 * @ORM\Table(name="account_instance_times")
 * @ORM\Entity
 */
class AccountInstanceTimes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="releaseTime", type="bigint", nullable=false)
     */
    private $releasetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountid;

    /**
     * @var integer
     *
     * @ORM\Column(name="instanceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $instanceid;


}
