<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountTutorial
 *
 * @ORM\Table(name="account_tutorial")
 * @ORM\Entity
 */
class AccountTutorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tut0", type="integer", nullable=false)
     */
    private $tut0;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut1", type="integer", nullable=false)
     */
    private $tut1;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut2", type="integer", nullable=false)
     */
    private $tut2;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut3", type="integer", nullable=false)
     */
    private $tut3;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut4", type="integer", nullable=false)
     */
    private $tut4;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut5", type="integer", nullable=false)
     */
    private $tut5;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut6", type="integer", nullable=false)
     */
    private $tut6;

    /**
     * @var integer
     *
     * @ORM\Column(name="tut7", type="integer", nullable=false)
     */
    private $tut7;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accountid;


}
