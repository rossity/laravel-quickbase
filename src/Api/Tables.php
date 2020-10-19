<?php


namespace Rossity\LaravelQuickbase\Api;

use Rossity\PhpQuickbase\Api\TablesApi;

class Tables
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

        $this->api = new TablesApi();
    }

    /**
     * Operation createRelationship
     *
     * Create a relationship
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. This will be the child table. (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject6  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function createRelationship($tableId, $generated = null)
    {
        return (array) $this->api->createRelationship(
            $tableId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation createTable
     *
     * Create a table
     *
     * @param  string  $appId  The unique identifier of an app (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject4  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function createTable($appId, $generated = null)
    {
        return (array) $this->api->createTable(
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation deleteRelationship
     *
     * Delete a relationship
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. This will be the child table. (required)
     * @param  float  $relationshipId  The relationship id. This is the field id of the reference field on the child table. (required)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function deleteRelationship($tableId, $relationshipId)
    {
        return (array) $this->api->deleteRelationship(
            $tableId,
            $relationshipId,
            $this->hostName,
            $this->authorization,
            $this->userAgent
        );
    }

    /**
     * Operation deleteTable
     *
     * Delete a table
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     * @param  string  $appId  The unique identifier of an app (required)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function deleteTable($tableId, $appId)
    {
        return (array) $this->api->deleteTable(
            $tableId,
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent
        );
    }

    /**
     * Operation getAppTables
     *
     * Get tables for an app
     *
     * @param  string  $appId  The unique identifier of an app (required)
     *
     * @return \Rossity\PhpQuickbase\Model\InlineResponse200[]
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getAppTables($appId)
    {
        return (array) $this->api->getAppTables($appId, $this->hostName, $this->authorization, $this->userAgent);
    }

    /**
     * Operation getRelationships
     *
     * Get all relationships
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getRelationships($tableId)
    {
        return (array) $this->api->getRelationships($tableId, $this->hostName, $this->authorization, $this->userAgent);
    }

    /**
     * Operation getTable
     *
     * Get a table
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     * @param  string  $appId  The unique identifier of an app (required)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getTable($tableId, $appId)
    {
        return (array) $this->api->getTable($tableId, $appId, $this->hostName, $this->authorization, $this->userAgent);
    }

    /**
     * Operation updateRelationship
     *
     * Update a relationship
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. This will be the child table. (required)
     * @param  float  $relationshipId  The relationship id. This is the field id of the reference field on the child table. (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject7  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function updateRelationship($tableId, $relationshipId, $generated = null)
    {
        return (array) $this->api->updateRelationship(
            $tableId,
            $relationshipId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation updateTable
     *
     * Update a table
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     * @param  string  $appId  The unique identifier of an app (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject5  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function updateTable($tableId, $appId, $generated = null)
    {
        return (array) $this->api->updateTable(
            $tableId,
            $appId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }
}
