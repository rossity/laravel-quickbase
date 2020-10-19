<?php


namespace Rossity\LaravelQuickbase\Api;

use Rossity\PhpQuickbase\Api\RecordsApi;

class Records
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

        $this->api = new RecordsApi();
    }

    /**
     * Operation deleteRecords
     *
     * Delete record(s)
     *
     * @param  \Rossity\PhpQuickbase\Model\InlineObject12  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function deleteRecords($generated = null)
    {
        return (array) $this->api->deleteRecords($this->hostName, $this->authorization, $this->userAgent, $generated);
    }

    /**
     * Operation runQuery
     *
     * Query for data
     *
     * @param  \Rossity\PhpQuickbase\Model\InlineObject13  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function runQuery($generated = null)
    {
        return (array) $this->api->runQuery($this->hostName, $this->authorization, $this->userAgent, $generated);
    }

    /**
     * Operation upsert
     *
     * Insert/Update record(s)
     *
     * @param  \Rossity\PhpQuickbase\Model\InlineObject11  $generated  generated (optional)
     *
     * @return array|map[string,object]
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function upsert($generated = null)
    {
        return (array) $this->api->upsert($this->hostName, $this->authorization, $this->userAgent, $generated);
    }
}
