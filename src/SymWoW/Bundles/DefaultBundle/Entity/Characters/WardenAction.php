<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * WardenAction
 *
 * @ORM\Table(name="warden_action")
 * @ORM\Entity
 */
class WardenAction
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="action", type="boolean", nullable=true)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="wardenId", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wardenid;


}
