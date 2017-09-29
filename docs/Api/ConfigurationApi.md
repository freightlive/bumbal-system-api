# BumbalSystem\ConfigurationApi

All URIs are relative to *https://localhost/system/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfiguration**](ConfigurationApi.md#getConfiguration) | **PUT** /configuration | Retrieve Configuration
[**setConfiguration**](ConfigurationApi.md#setConfiguration) | **POST** /configuration/set | Set Configuration


# **getConfiguration**
> \BumbalSystem\Model\ConfigurationOptionModel[] getConfiguration()

Retrieve Configuration

Retrieve Configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\ConfigurationApi();

try {
    $result = $api_instance->getConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalSystem\Model\ConfigurationOptionModel[]**](../Model/ConfigurationOptionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setConfiguration**
> \BumbalSystem\Model\ApiResponse setConfiguration($body)

Set Configuration

Set Configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\ConfigurationApi();
$body = new \BumbalSystem\Model\ConfigurationOptionModel(); // \BumbalSystem\Model\ConfigurationOptionModel | Configuration object

try {
    $result = $api_instance->setConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->setConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalSystem\Model\ConfigurationOptionModel**](../Model/ConfigurationOptionModel.md)| Configuration object |

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

