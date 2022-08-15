# Ringba\APITokensApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApiToken()**](APITokensApi.md#createApiToken) | **POST** /ApiTokens | Create Api Token
[**deleteApiToken()**](APITokensApi.md#deleteApiToken) | **DELETE** /ApiTokens/{apiTokenId} | Delete Api Token
[**getAPITokens()**](APITokensApi.md#getAPITokens) | **GET** /ApiTokens | Get API Tokens


## `createApiToken()`

```php
createApiToken($createApiTokenRequest)
```

Create Api Token

#### How to Generate Your API Token  Create an API Token to be used for authenticating requests indefinitely. In the json response grab the `token` value and use as `{apiToken}` in the header `Authorization: Token {apiToken}` on all other requests. The body must contain the name for your API Token so you can identify when pulling the list of active tokens.  **NOTE: The API Token will be shown only once, please keep it in a safe place**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createApiTokenRequest = {"name":"Test"}; // \Ringba\Model\CreateApiTokenRequest | 

try {
    $apiInstance->createApiToken($createApiTokenRequest);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->createApiToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createApiTokenRequest** | [**\Ringba\Model\CreateApiTokenRequest**](../Model/CreateApiTokenRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiToken()`

```php
deleteApiToken($apiTokenId): \Ringba\Model\DeleteApiToken
```

Delete Api Token

Delete any existing API Token by supplying the ID in the URL. The IDs can be retrieved using the \"Get API Tokens\" endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiTokenId = 'apiTokenId_example'; // string | 

try {
    $result = $apiInstance->deleteApiToken($apiTokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->deleteApiToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiTokenId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteApiToken**](../Model/DeleteApiToken.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPITokens()`

```php
getAPITokens(): \Ringba\Model\GetAPITokenswithusage
```

Get API Tokens

Endpoint to retrieve a list of IDs of current API Tokens in your account.     ### Response Overview <hr> <br>  If the API Token has not been used, the `usage` array will be empty, otherwise it will contain the last 10 actions.  This request will __NOT__ return the actual API Token, but will show the ID of each Token. If you need the actual API Token, you can create a new one using the `POST Create API Token` request or contact Ringba support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAPITokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->getAPITokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Ringba\Model\GetAPITokenswithusage**](../Model/GetAPITokenswithusage.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
