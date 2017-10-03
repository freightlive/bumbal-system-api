# BumbalSystem\KeyringApi

All URIs are relative to *https://localhost/system/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**removeKey**](KeyringApi.md#removeKey) | **GET** /key-ring/remove | Remove a key from the key ring
[**retrieveKeyRing**](KeyringApi.md#retrieveKeyRing) | **PUT** /key-ring | Retrieve KeyRing
[**setKey**](KeyringApi.md#setKey) | **POST** /key-ring/set | Set a key to the key ring


# **removeKey**
> \BumbalSystem\Model\ApiResponse removeKey($name)

Remove a key from the key ring

Remove a key from the key ring

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\KeyringApi();
$name = "name_example"; // string | Name of the key to remove

try {
    $result = $api_instance->removeKey($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyringApi->removeKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the key to remove |

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveKeyRing**
> \BumbalSystem\Model\KeyModel[] retrieveKeyRing()

Retrieve KeyRing

Retrieve KeyRing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\KeyringApi();

try {
    $result = $api_instance->retrieveKeyRing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyringApi->retrieveKeyRing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalSystem\Model\KeyModel[]**](../Model/KeyModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setKey**
> \BumbalSystem\Model\ApiResponse setKey($body)

Set a key to the key ring

Set a key to the key ring

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\KeyringApi();
$body = new \BumbalSystem\Model\KeyModel(); // \BumbalSystem\Model\KeyModel | Key object

try {
    $result = $api_instance->setKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyringApi->setKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalSystem\Model\KeyModel**](../Model/KeyModel.md)| Key object |

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

