<?php


namespace Rossity\LaravelQuickbase\Api;

use Rossity\PhpQuickbase\Api\ReportsApi;

class Reports
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

        $this->api = new ReportsApi();
    }

    /**
     * Operation getReport
     *
     * Get a report
     *
     * @param  string  $reportId  The identifier of the report, unique to the table. (required)
     * @param  string  $tableId  The unique identifier of table. (required)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getReport($reportId, $tableId)
    {
        return (array) $this->api->getReport(
            $reportId,
            $tableId,
            $this->hostName,
            $this->authorization,
            $this->userAgent
        );
    }

    /**
     * Operation getTableReports
     *
     * Get reports for a table
     *
     * @param  string  $tableId  The unique identifier of the table. (required)
     *
     * @return \Rossity\PhpQuickbase\Model\InlineResponse2001[]
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function getTableReports($tableId)
    {
        return (array) $this->api->getTableReports($tableId, $this->hostName, $this->authorization, $this->userAgent);
    }

    /**
     * Operation runReport
     *
     * Run a report
     *
     * @param  string  $reportId  The identifier of the report, unique to the table. (required)
     * @param  string  $tableId  The identifier of the table for the report. (required)
     * @param  int  $skip  The number of records to skip. You can set this value when paginating through a set of results. (optional)
     * @param  int  $top  The maximum number of records to return. You can override the default Quick Base pagination to get more or fewer results. If your requested value here exceeds the dynamic maximums, we will return a subset of results and the rest can be gathered in subsequent API calls. (optional)
     * @param  object  $generated  generated (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function runReport($reportId, $tableId, $skip = null, $top = null, $generated = null)
    {
        return (array) $this->api->runReport(
            $reportId,
            $tableId,
            $this->hostName,
            $this->authorization,
            $skip,
            $top,
            $this->userAgent,
            $generated
        );
    }
}
