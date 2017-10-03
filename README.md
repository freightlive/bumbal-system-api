# 
Bumbal System API documentation for System Management Calls

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bumbal/bumbal-system-api-php.git"
    }
  ],
  "require": {
    "bumbal/bumbal-system-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://localhost/system/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConfigurationApi* | [**getConfiguration**](docs/Api/ConfigurationApi.md#getconfiguration) | **PUT** /configuration | Retrieve Configuration
*ConfigurationApi* | [**setConfiguration**](docs/Api/ConfigurationApi.md#setconfiguration) | **POST** /configuration/set | Set Configuration
*FileApi* | [**readFile**](docs/Api/FileApi.md#readfile) | **POST** /file/read | Read File
*FileApi* | [**writeFile**](docs/Api/FileApi.md#writefile) | **POST** /file/write | Write File
*KeyringApi* | [**deleteKey**](docs/Api/KeyringApi.md#deletekey) | **DELETE** /key-ring/delete/{name} | Remove a key from the key ring
*KeyringApi* | [**retrieveKeyRing**](docs/Api/KeyringApi.md#retrievekeyring) | **PUT** /key-ring | Retrieve KeyRing
*KeyringApi* | [**setKey**](docs/Api/KeyringApi.md#setkey) | **POST** /key-ring/set | Set a key to the key ring
*LogsApi* | [**retrieveListLog**](docs/Api/LogsApi.md#retrievelistlog) | **PUT** /log | Retrieve List of Log Entries
*LogsApi* | [**truncateLog**](docs/Api/LogsApi.md#truncatelog) | **GET** /log/truncate | Truncate Log Table
*WebhooksApi* | [**getWebHooks**](docs/Api/WebhooksApi.md#getwebhooks) | **PUT** /web-hook | Retrieve Web Hooks
*WebhooksApi* | [**removeByLabelWebHook**](docs/Api/WebhooksApi.md#removebylabelwebhook) | **GET** /web-hook/remove-by-label | Remove web hooks by label
*WebhooksApi* | [**setWebHook**](docs/Api/WebhooksApi.md#setwebhook) | **POST** /web-hook/set | Set Web Hook


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [ConfigurationOptionModel](docs/Model/ConfigurationOptionModel.md)
 - [FileModel](docs/Model/FileModel.md)
 - [KeyModel](docs/Model/KeyModel.md)
 - [LogFiltersModel](docs/Model/LogFiltersModel.md)
 - [LogListResponse](docs/Model/LogListResponse.md)
 - [LogModel](docs/Model/LogModel.md)
 - [LogOptionsModel](docs/Model/LogOptionsModel.md)
 - [LogRetrieveListArguments](docs/Model/LogRetrieveListArguments.md)
 - [WebHookModel](docs/Model/WebHookModel.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: ApiKey
- **Location**: HTTP header


## Author

gerb@bumbal.eu


