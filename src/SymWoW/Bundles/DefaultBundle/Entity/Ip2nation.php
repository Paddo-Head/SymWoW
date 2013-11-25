<?php

namespace Symwow\Bundles\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ip2nation
 *
 * @ORM\Table(name="ip2nation")
 * @ORM\Entity
 */
class Ip2nation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ip", type="integer", nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country;

    /**
     * Set ip
     *
     * @param integer $ip
     * @return Ip2nation
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Ip2nation
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}