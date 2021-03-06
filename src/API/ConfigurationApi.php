<?php
/**
 * ConfigurationApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalSystem
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal System API documentation
 *
 * Bumbal System API documentation for System Management Calls
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalSystem\API;

use \BumbalSystem\ApiClient;
use \BumbalSystem\ApiException;
use \BumbalSystem\Configuration;
use \BumbalSystem\ObjectSerializer;

/**
 * ConfigurationApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalSystem
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigurationApi
{
    /**
     * API Client
     *
     * @var \BumbalSystem\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalSystem\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalSystem\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalSystem\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalSystem\ApiClient $apiClient set the API client
     *
     * @return ConfigurationApi
     */
    public function setApiClient(\BumbalSystem\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getConfiguration
     *
     * Retrieve Configuration
     *
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return \BumbalSystem\Model\ConfigurationOptionModel[]
     */
    public function getConfiguration()
    {
        list($response) = $this->getConfigurationWithHttpInfo();
        return $response;
    }

    /**
     * Operation getConfigurationWithHttpInfo
     *
     * Retrieve Configuration
     *
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return array of \BumbalSystem\Model\ConfigurationOptionModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getConfigurationWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/configuration";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalSystem\Model\ConfigurationOptionModel[]',
                '/configuration'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalSystem\Model\ConfigurationOptionModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalSystem\Model\ConfigurationOptionModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setConfiguration
     *
     * Set Configuration
     *
     * @param \BumbalSystem\Model\ConfigurationOptionModel $body Configuration object (required)
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return \BumbalSystem\Model\ApiResponse
     */
    public function setConfiguration($body)
    {
        list($response) = $this->setConfigurationWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setConfigurationWithHttpInfo
     *
     * Set Configuration
     *
     * @param \BumbalSystem\Model\ConfigurationOptionModel $body Configuration object (required)
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return array of \BumbalSystem\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setConfigurationWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling setConfiguration');
        }
        // parse inputs
        $resourcePath = "/configuration/set";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalSystem\Model\ApiResponse',
                '/configuration/set'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalSystem\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalSystem\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
