# BumbalSystem\LogsApi

All URIs are relative to *https://localhost/system/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListLog**](LogsApi.md#retrieveListLog) | **PUT** /log | Retrieve List of Log Entries
[**truncateLog**](LogsApi.md#truncateLog) | **GET** /log/truncate | Truncate Log Table


# **retrieveListLog**
> \BumbalSystem\Model\LogListResponse retrieveListLog($arguments)

Retrieve List of Log Entries

Retrieve List of Log Entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\LogsApi();
$arguments = new \BumbalSystem\Model\LogRetrieveListArguments(); // \BumbalSystem\Model\LogRetrieveListArguments | Log RetrieveList Arguments

try {
    $result = $api_instance->retrieveListLog($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->retrieveListLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalSystem\Model\LogRetrieveListArguments**](../Model/LogRetrieveListArguments.md)| Log RetrieveList Arguments |

### Return type

[**\BumbalSystem\Model\LogListResponse**](../Model/LogListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **truncateLog**
> \BumbalSystem\Model\ApiResponse truncateLog()

Truncate Log Table

Truncate Log Table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\LogsApi();

try {
    $result = $api_instance->truncateLog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->truncateLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

