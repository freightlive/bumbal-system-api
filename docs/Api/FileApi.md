# BumbalSystem\FileApi

All URIs are relative to *https://localhost/system/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readFile**](FileApi.md#readFile) | **POST** /file/read | Read File
[**writeFile**](FileApi.md#writeFile) | **POST** /file/write | Write File


# **readFile**
> \BumbalSystem\Model\FileModel readFile()

Read File

Read File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\FileApi();

try {
    $result = $api_instance->readFile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->readFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalSystem\Model\FileModel**](../Model/FileModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeFile**
> \BumbalSystem\Model\ApiResponse writeFile($body)

Write File

Write File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\FileApi();
$body = new \BumbalSystem\Model\FileModel(); // \BumbalSystem\Model\FileModel | File object

try {
    $result = $api_instance->writeFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->writeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalSystem\Model\FileModel**](../Model/FileModel.md)| File object |

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

