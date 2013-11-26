<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterGlyphs
 *
 * @ORM\Table(name="character_glyphs")
 * @ORM\Entity
 */
class CharacterGlyphs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="glyph1", type="smallint", nullable=true)
     */
    private $glyph1;

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph2", type="smallint", nullable=true)
     */
    private $glyph2;

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph3", type="smallint", nullable=true)
     */
    private $glyph3;

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph4", type="smallint", nullable=true)
     */
    private $glyph4;

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph5", type="smallint", nullable=true)
     */
    private $glyph5;

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph6", type="smallint", nullable=true)
     */
    private $glyph6;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spec", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spec;


}
