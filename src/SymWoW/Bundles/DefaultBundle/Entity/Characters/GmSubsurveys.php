<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmSubsurveys
 *
 * @ORM\Table(name="gm_subsurveys")
 * @ORM\Entity
 */
class GmSubsurveys
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="surveyId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $surveyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="subsurveyId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $subsurveyid;


}
