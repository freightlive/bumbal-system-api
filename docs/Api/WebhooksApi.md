# BumbalSystem\WebhooksApi

All URIs are relative to *https://localhost/system/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWebHooks**](WebhooksApi.md#getWebHooks) | **PUT** /web-hook | Retrieve Web Hooks
[**removeByLabelWebHook**](WebhooksApi.md#removeByLabelWebHook) | **GET** /web-hook/remove-by-label | Remove web hooks by label
[**setWebHook**](WebhooksApi.md#setWebHook) | **POST** /web-hook/set | Set Web Hook


# **getWebHooks**
> \BumbalSystem\Model\WebHookModel[] getWebHooks()

Retrieve Web Hooks

Retrieve Web Hooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\WebhooksApi();

try {
    $result = $api_instance->getWebHooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalSystem\Model\WebHookModel[]**](../Model/WebHookModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeByLabelWebHook**
> \BumbalSystem\Model\ApiResponse removeByLabelWebHook($label)

Remove web hooks by label

Remove web hooks by label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\WebhooksApi();
$label = "label_example"; // string | label to remove

try {
    $result = $api_instance->removeByLabelWebHook($label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->removeByLabelWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label** | **string**| label to remove |

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setWebHook**
> \BumbalSystem\Model\ApiResponse setWebHook($body)

Set Web Hook

Set Web Hook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalSystem\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalSystem\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalSystem\Api\WebhooksApi();
$body = new \BumbalSystem\Model\WebHookModel(); // \BumbalSystem\Model\WebHookModel | WebHook object

try {
    $result = $api_instance->setWebHook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->setWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalSystem\Model\WebHookModel**](../Model/WebHookModel.md)| WebHook object |

### Return type

[**\BumbalSystem\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

