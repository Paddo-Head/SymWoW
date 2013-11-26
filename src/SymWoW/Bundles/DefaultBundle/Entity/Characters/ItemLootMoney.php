<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLootMoney
 *
 * @ORM\Table(name="item_loot_money")
 * @ORM\Entity
 */
class ItemLootMoney
{
    /**
     * @var integer
     *
     * @ORM\Column(name="container_id", type="integer", nullable=false)
     */
    private $containerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
