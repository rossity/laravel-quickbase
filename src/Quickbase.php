<?php

namespace Rossity\LaravelQuickbase;

use Rossity\LaravelQuickbase\Api\Apps;
use Rossity\LaravelQuickbase\Api\Fields;
use Rossity\LaravelQuickbase\Api\Files;
use Rossity\LaravelQuickbase\Api\Records;
use Rossity\LaravelQuickbase\Api\Reports;
use Rossity\LaravelQuickbase\Api\Tables;

class Quickbase
{
    private $hostName;
    private $userAgent;
    private $userToken;
    private $authorization;

    /**
     * Quickbase constructor.
     * @param $hostName
     * @param $userAgent
     * @param $userToken
     */
    public function __construct($hostName = null, $userAgent = null, $userToken = null)
    {
        $this->hostName = $hostName;
        $this->userAgent = $userAgent;
        $this->userToken = $userToken;
        $this->authorization = 'QB-USER-TOKEN '.$userToken;
    }

    /**
     * @param  mixed|null  $hostName
     */
    public function setHostName(?mixed $hostName): void
    {
        $this->hostName = $hostName;
    }

    /**
     * @param  mixed|null  $userAgent
     */
    public function setUserAgent(?mixed $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @param  mixed|null  $userToken
     */
    public function setUserToken(?mixed $userToken): void
    {
        $this->userToken = $userToken;

        $this->authorization = 'QB-USER-TOKEN '.$userToken;
    }

    /**
     * @return mixed
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @return mixed
     */
    public function getUserToken()
    {
        return $this->userToken;
    }


    public function apps()
    {
        return new Apps($this->hostName, $this->authorization, $this->userAgent);
    }

    public function fields()
    {
        return new Fields($this->hostName, $this->authorization, $this->userAgent);
    }

    public function files()
    {
        return new Files($this->hostName, $this->authorization, $this->userAgent);
    }

    public function records()
    {
        return new Records($this->hostName, $this->authorization, $this->userAgent);
    }

    public function reports()
    {
        return new Reports($this->hostName, $this->authorization, $this->userAgent);
    }

    public function tables()
    {
        return new Tables($this->hostName, $this->authorization, $this->userAgent);
    }
}
