<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmSurveys
 *
 * @ORM\Table(name="gm_surveys")
 * @ORM\Entity
 */
class GmSurveys
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
     * @ORM\Column(name="mainSurvey", type="integer", nullable=false)
     */
    private $mainsurvey;

    /**
     * @var string
     *
     * @ORM\Column(name="overallComment", type="text", nullable=false)
     */
    private $overallcomment;

    /**
     * @var integer
     *
     * @ORM\Column(name="createTime", type="integer", nullable=false)
     */
    private $createtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="surveyId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surveyid;


}
