<?php


namespace Rossity\LaravelQuickbase\Api;

use Rossity\PhpQuickbase\Api\FilesApi;

class Files
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

        $this->api = new FilesApi();
    }

    /**
     * Operation deleteFile
     *
     * Delete file
     *
     * @param  string  $tableId  The unique identifier of the table. (required)
     * @param  int  $recordId  The unique identifier of the record. (required)
     * @param  int  $fieldId  The unique identifier of the field. (required)
     * @param  int  $versionNumber  The file attachment version number. (required)
     * @param  string  $userAgent  Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting. (optional)
     *
     * @return array
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function deleteFile($tableId, $recordId, $fieldId, $versionNumber)
    {
        return (array) $this->api->deleteFile(
            $tableId,
            $recordId,
            $fieldId,
            $versionNumber,
            $this->hostName,
            $this->authorization,
            $this->userAgent
        );
    }

    /**
     * Operation downloadFile
     *
     * Download file
     *
     * @param  string  $tableId  The unique identifier of the table. (required)
     * @param  int  $recordId  The unique identifier of the record. (required)
     * @param  int  $fieldId  The unique identifier of the field. (required)
     * @param  int  $versionNumber  The file attachment version number. (required)
     * @param  string  $userAgent  Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting. (optional)
     *
     * @return object
     * @throws \InvalidArgumentException
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     */
    public function downloadFile($tableId, $recordId, $fieldId, $versionNumber)
    {
        return $this->api->downloadFile(
            $tableId,
            $recordId,
            $fieldId,
            $versionNumber,
            $this->hostName,
            $this->authorization,
            $this->userAgent
        );
    }
}
