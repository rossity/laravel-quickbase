<?php


namespace Rossity\LaravelQuickbase\Api;

use Rossity\PhpQuickbase\Api\AppsApi;

class Apps
{
    private $hostName;
    private $authorization;
    private $userAgent;
    private $api;


    public function __construct($hostName, $authorization, $userAgent)
    {
        $this->hostName = $hostName;
        $this->authorization = $authorization;
        $this->userAgent = $userAgent;

        $this->api = new AppsApi();
    }

    /**
     * Operation copyApp
     *
     * Copy an app
     *
     * @param  string  $appId  The unique identifier of an app (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject3  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function copyApp($appId, $generated = null)
    {
        return (array) $this->api->copyApp(
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation createApp
     *
     * Create an app
     *
     * @param  \Rossity\PhpQuickbase\Model\InlineObject  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function createApp($generated = null)
    {
        return (array) $this->api->createApp(
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation deleteApp
     *
     * Delete an app
     *
     * @param  string  $appId  The unique identifier of an app (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject2  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function deleteApp($appId, $generated = null)
    {
        return (array) $this->api->deleteApp(
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation getApp
     *
     * Get an app
     *
     * @param  string  $appId  The unique identifier of an app (required)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getApp($appId)
    {
        return (array) $this->api->getApp(
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent
        );
    }

    /**
     * Operation updateApp
     *
     * Update an app
     *
     * @param  string  $appId  The unique identifier of an app (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject1  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function updateApp($appId, $generated = null)
    {
        return (array) $this->api->updateApp(
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }
}
