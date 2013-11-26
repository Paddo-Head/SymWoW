<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPet
 *
 * @ORM\Table(name="character_pet")
 * @ORM\Entity
 */
class CharacterPet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer", nullable=false)
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid", type="integer", nullable=true)
     */
    private $modelid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CreatedBySpell", type="integer", nullable=false)
     */
    private $createdbyspell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PetType", type="boolean", nullable=false)
     */
    private $pettype;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp", type="integer", nullable=false)
     */
    private $exp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reactstate", type="boolean", nullable=false)
     */
    private $reactstate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=21, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="renamed", type="boolean", nullable=false)
     */
    private $renamed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slot", type="boolean", nullable=false)
     */
    private $slot;

    /**
     * @var integer
     *
     * @ORM\Column(name="curhealth", type="integer", nullable=false)
     */
    private $curhealth;

    /**
     * @var integer
     *
     * @ORM\Column(name="curmana", type="integer", nullable=false)
     */
    private $curmana;

    /**
     * @var integer
     *
     * @ORM\Column(name="curhappiness", type="integer", nullable=false)
     */
    private $curhappiness;

    /**
     * @var integer
     *
     * @ORM\Column(name="savetime", type="integer", nullable=false)
     */
    private $savetime;

    /**
     * @var string
     *
     * @ORM\Column(name="abdata", type="text", nullable=true)
     */
    private $abdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
