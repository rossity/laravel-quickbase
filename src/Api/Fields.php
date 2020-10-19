<?php


namespace Rossity\LaravelQuickbase\Api;

use Rossity\PhpQuickbase\Api\FieldsApi;

class Fields
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

        $this->api = new FieldsApi();
    }

    /**
     * Operation createField
     *
     * Create a field
     *
     * @param  string  $tableId  The unique identifier of the table. (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject8  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function createField($tableId, $generated = null)
    {
        return (array) $this->api->createField(
            $tableId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation deleteFields
     *
     * Delete field(s)
     *
     * @param  string  $tableId  The unique identifier of the table. (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject9  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function deleteFields($tableId, $generated = null)
    {
        return (array) $this->api->deleteFields(
            $tableId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }

    /**
     * Operation getField
     *
     * Get field
     *
     * @param  int  $fieldId  The unique identifier (fid) of the field. (required)
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     * @param  bool  $includeFieldPerms  Set to &#39;true&#39; if you&#39;d like to get back the custom permissions for the field(s). (optional, default to false)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getField($fieldId, $tableId, $includeFieldPerms = false)
    {
        return (array) $this->api->getField(
            $fieldId,
            $tableId,
            $this->hostName,
            $this->authorization,
            $includeFieldPerms,
            $this->userAgent
        );
    }

    /**
     * Operation getFields
     *
     * Get fields for a table
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     * @param  bool  $includeFieldPerms  Set to &#39;true&#39; if you&#39;d like to get back the custom permissions for the field(s). (optional, default to false)
     *
     * @return \Rossity\PhpQuickbase\Model\InlineResponse2002[]
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getFields($tableId, $includeFieldPerms = false)
    {
        return (array) $this->api->getFields(
            $tableId,
            $this->hostName,
            $this->authorization,
            $includeFieldPerms,
            $this->userAgent
        );
    }

    /**
     * Operation getFieldsUsage
     *
     * Get usage for all fields
     *
     * @param  string  $tableId  The unique identifier (dbid) of the table. (required)
     * @param  int  $skip  The number of fields to skip from the list. (optional)
     * @param  int  $top  The maximum number of fields to return. (optional)
     *
     * @return \Rossity\PhpQuickbase\Model\InlineResponse2003[]
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getFieldsUsage($tableId, $skip = null, $top = null)
    {
        return (array) $this->api->getFieldsUsage(
            $tableId,
            $this->hostName,
            $this->authorization,
            $skip,
            $top,
            $this->userAgent
        );
    }

    /**
     * Operation updateField
     *
     * Update a field
     *
     * @param  int  $fieldId  The unique identifier (fid) of the field. (required)
     * @param  string  $tableId  The unique identifier of the table. (required)
     * @param  \Rossity\PhpQuickbase\Model\InlineObject10  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function updateField($fieldId, $tableId, $generated = null)
    {
        return (array) $this->api->updateField(
            $fieldId,
            $tableId,
            $this->hostName,
            $this->authorization,
            $this->userAgent,
            $generated
        );
    }
}
