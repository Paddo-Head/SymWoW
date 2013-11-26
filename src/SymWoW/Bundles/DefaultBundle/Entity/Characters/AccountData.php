<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountData
 *
 * @ORM\Table(name="account_data")
 * @ORM\Entity
 */
class AccountData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false)
     */
    private $data;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountid;


}
