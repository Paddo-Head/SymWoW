<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterGifts
 *
 * @ORM\Table(name="character_gifts")
 * @ORM\Entity
 */
class CharacterGifts
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
     * @ORM\Column(name="entry", type="integer", nullable=false)
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemGuid;


}
