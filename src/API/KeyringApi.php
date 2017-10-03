<?php
/**
 * KeyringApi
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
 * KeyringApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalSystem
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeyringApi
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
     * @return KeyringApi
     */
    public function setApiClient(\BumbalSystem\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation removeKey
     *
     * Remove a key from the key ring
     *
     * @param string $name Name of the key to remove (required)
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return \BumbalSystem\Model\ApiResponse
     */
    public function removeKey($name)
    {
        list($response) = $this->removeKeyWithHttpInfo($name);
        return $response;
    }

    /**
     * Operation removeKeyWithHttpInfo
     *
     * Remove a key from the key ring
     *
     * @param string $name Name of the key to remove (required)
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return array of \BumbalSystem\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeKeyWithHttpInfo($name)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling removeKey');
        }
        // parse inputs
        $resourcePath = "/key-ring/remove";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalSystem\Model\ApiResponse',
                '/key-ring/remove'
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

    /**
     * Operation retrieveKeyRing
     *
     * Retrieve KeyRing
     *
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return \BumbalSystem\Model\KeyModel[]
     */
    public function retrieveKeyRing()
    {
        list($response) = $this->retrieveKeyRingWithHttpInfo();
        return $response;
    }

    /**
     * Operation retrieveKeyRingWithHttpInfo
     *
     * Retrieve KeyRing
     *
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return array of \BumbalSystem\Model\KeyModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveKeyRingWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/key-ring";
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
                '\BumbalSystem\Model\KeyModel[]',
                '/key-ring'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalSystem\Model\KeyModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalSystem\Model\KeyModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setKey
     *
     * Set a key to the key ring
     *
     * @param \BumbalSystem\Model\KeyModel $body Key object (required)
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return \BumbalSystem\Model\ApiResponse
     */
    public function setKey($body)
    {
        list($response) = $this->setKeyWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setKeyWithHttpInfo
     *
     * Set a key to the key ring
     *
     * @param \BumbalSystem\Model\KeyModel $body Key object (required)
     * @throws \BumbalSystem\ApiException on non-2xx response
     * @return array of \BumbalSystem\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setKeyWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling setKey');
        }
        // parse inputs
        $resourcePath = "/key-ring/set";
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
                '/key-ring/set'
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
