# Ringba\AccountInformationApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountInfousingAPIToken()**](AccountInformationApi.md#getAccountInfousingAPIToken) | **GET** /ringbaaccounts | Get Account Info using API Token


## `getAccountInfousingAPIToken()`

```php
getAccountInfousingAPIToken($authorization): \Ringba\Model\GetAccountInfo
```

Get Account Info using API Token

Simple authenticated request that uses the `API Token`. This request pulls the account information of the user that was granted the API Token. You can use this request if you ever need to find out your `Account ID` for other API requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getAccountInfousingAPIToken($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationApi->getAccountInfousingAPIToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |

### Return type

[**\Ringba\Model\GetAccountInfo**](../Model/GetAccountInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
