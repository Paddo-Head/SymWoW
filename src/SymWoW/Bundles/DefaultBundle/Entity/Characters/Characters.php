<?php

namespace Symwow\Bundles\DefaultBundle\Entity\Characters;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characters
 *
 * @ORM\Table(name="characters")
 * @ORM\Entity
 */
class Characters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="account", type="integer", nullable=false)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="race", type="boolean", nullable=false)
     */
    private $race;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean", nullable=false)
     */
    private $class;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var integer
     *
     * @ORM\Column(name="playerBytes", type="integer", nullable=false)
     */
    private $playerbytes;

    /**
     * @var integer
     *
     * @ORM\Column(name="playerBytes2", type="integer", nullable=false)
     */
    private $playerbytes2;

    /**
     * @var integer
     *
     * @ORM\Column(name="playerFlags", type="integer", nullable=false)
     */
    private $playerflags;

    /**
     * @var float
     *
     * @ORM\Column(name="position_x", type="float", nullable=false)
     */
    private $positionX;

    /**
     * @var float
     *
     * @ORM\Column(name="position_y", type="float", nullable=false)
     */
    private $positionY;

    /**
     * @var float
     *
     * @ORM\Column(name="position_z", type="float", nullable=false)
     */
    private $positionZ;

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint", nullable=false)
     */
    private $map;

    /**
     * @var integer
     *
     * @ORM\Column(name="instance_id", type="integer", nullable=false)
     */
    private $instanceId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instance_mode_mask", type="boolean", nullable=false)
     */
    private $instanceModeMask;

    /**
     * @var float
     *
     * @ORM\Column(name="orientation", type="float", nullable=false)
     */
    private $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="taximask", type="text", nullable=false)
     */
    private $taximask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean", nullable=false)
     */
    private $online;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cinematic", type="boolean", nullable=false)
     */
    private $cinematic;

    /**
     * @var integer
     *
     * @ORM\Column(name="totaltime", type="integer", nullable=false)
     */
    private $totaltime;

    /**
     * @var integer
     *
     * @ORM\Column(name="leveltime", type="integer", nullable=false)
     */
    private $leveltime;

    /**
     * @var integer
     *
     * @ORM\Column(name="logout_time", type="integer", nullable=false)
     */
    private $logoutTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_logout_resting", type="boolean", nullable=false)
     */
    private $isLogoutResting;

    /**
     * @var float
     *
     * @ORM\Column(name="rest_bonus", type="float", nullable=false)
     */
    private $restBonus;

    /**
     * @var integer
     *
     * @ORM\Column(name="resettalents_cost", type="integer", nullable=false)
     */
    private $resettalentsCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="resettalents_time", type="integer", nullable=false)
     */
    private $resettalentsTime;

    /**
     * @var float
     *
     * @ORM\Column(name="trans_x", type="float", nullable=false)
     */
    private $transX;

    /**
     * @var float
     *
     * @ORM\Column(name="trans_y", type="float", nullable=false)
     */
    private $transY;

    /**
     * @var float
     *
     * @ORM\Column(name="trans_z", type="float", nullable=false)
     */
    private $transZ;

    /**
     * @var float
     *
     * @ORM\Column(name="trans_o", type="float", nullable=false)
     */
    private $transO;

    /**
     * @var integer
     *
     * @ORM\Column(name="transguid", type="integer", nullable=false)
     */
    private $transguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_flags", type="smallint", nullable=false)
     */
    private $extraFlags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stable_slots", type="boolean", nullable=false)
     */
    private $stableSlots;

    /**
     * @var integer
     *
     * @ORM\Column(name="at_login", type="smallint", nullable=false)
     */
    private $atLogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="zone", type="smallint", nullable=false)
     */
    private $zone;

    /**
     * @var integer
     *
     * @ORM\Column(name="death_expire_time", type="integer", nullable=false)
     */
    private $deathExpireTime;

    /**
     * @var string
     *
     * @ORM\Column(name="taxi_path", type="text", nullable=true)
     */
    private $taxiPath;

    /**
     * @var integer
     *
     * @ORM\Column(name="arenaPoints", type="integer", nullable=false)
     */
    private $arenapoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalHonorPoints", type="integer", nullable=false)
     */
    private $totalhonorpoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="todayHonorPoints", type="integer", nullable=false)
     */
    private $todayhonorpoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="yesterdayHonorPoints", type="integer", nullable=false)
     */
    private $yesterdayhonorpoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalKills", type="integer", nullable=false)
     */
    private $totalkills;

    /**
     * @var integer
     *
     * @ORM\Column(name="todayKills", type="smallint", nullable=false)
     */
    private $todaykills;

    /**
     * @var integer
     *
     * @ORM\Column(name="yesterdayKills", type="smallint", nullable=false)
     */
    private $yesterdaykills;

    /**
     * @var integer
     *
     * @ORM\Column(name="chosenTitle", type="integer", nullable=false)
     */
    private $chosentitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="knownCurrencies", type="bigint", nullable=false)
     */
    private $knowncurrencies;

    /**
     * @var integer
     *
     * @ORM\Column(name="watchedFaction", type="integer", nullable=false)
     */
    private $watchedfaction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="drunk", type="boolean", nullable=false)
     */
    private $drunk;

    /**
     * @var integer
     *
     * @ORM\Column(name="health", type="integer", nullable=false)
     */
    private $health;

    /**
     * @var integer
     *
     * @ORM\Column(name="power1", type="integer", nullable=false)
     */
    private $power1;

    /**
     * @var integer
     *
     * @ORM\Column(name="power2", type="integer", nullable=false)
     */
    private $power2;

    /**
     * @var integer
     *
     * @ORM\Column(name="power3", type="integer", nullable=false)
     */
    private $power3;

    /**
     * @var integer
     *
     * @ORM\Column(name="power4", type="integer", nullable=false)
     */
    private $power4;

    /**
     * @var integer
     *
     * @ORM\Column(name="power5", type="integer", nullable=false)
     */
    private $power5;

    /**
     * @var integer
     *
     * @ORM\Column(name="power6", type="integer", nullable=false)
     */
    private $power6;

    /**
     * @var integer
     *
     * @ORM\Column(name="power7", type="integer", nullable=false)
     */
    private $power7;

    /**
     * @var integer
     *
     * @ORM\Column(name="latency", type="integer", nullable=false)
     */
    private $latency;

    /**
     * @var boolean
     *
     * @ORM\Column(name="speccount", type="boolean", nullable=false)
     */
    private $speccount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activespec", type="boolean", nullable=false)
     */
    private $activespec;

    /**
     * @var string
     *
     * @ORM\Column(name="exploredZones", type="text", nullable=true)
     */
    private $exploredzones;

    /**
     * @var string
     *
     * @ORM\Column(name="equipmentCache", type="text", nullable=true)
     */
    private $equipmentcache;

    /**
     * @var integer
     *
     * @ORM\Column(name="ammoId", type="integer", nullable=false)
     */
    private $ammoid;

    /**
     * @var string
     *
     * @ORM\Column(name="knownTitles", type="text", nullable=true)
     */
    private $knowntitles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actionBars", type="boolean", nullable=false)
     */
    private $actionbars;

    /**
     * @var boolean
     *
     * @ORM\Column(name="grantableLevels", type="boolean", nullable=false)
     */
    private $grantablelevels;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleteInfos_Account", type="integer", nullable=true)
     */
    private $deleteinfosAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="deleteInfos_Name", type="string", length=12, nullable=true)
     */
    private $deleteinfosName;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleteDate", type="integer", nullable=true)
     */
    private $deletedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;


}
