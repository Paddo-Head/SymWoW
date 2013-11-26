<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolQuestSave
 *
 * @ORM\Table(name="pool_quest_save")
 * @ORM\Entity
 */
class PoolQuestSave
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pool_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $poolId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questId;


}
