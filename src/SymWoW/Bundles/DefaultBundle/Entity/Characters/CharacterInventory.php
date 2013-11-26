<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterInventory
 *
 * @ORM\Table(name="character_inventory")
 * @ORM\Entity
 */
class CharacterInventory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="bag", type="integer", nullable=false)
     */
    private $bag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slot", type="boolean", nullable=false)
     */
    private $slot;

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;


}
