# Ringba\AccountInformationApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ringbaaccountsGet()**](AccountInformationApi.md#ringbaaccountsGet) | **GET** /ringbaaccounts | Get Account Info using API Token


## `ringbaaccountsGet()`

```php
ringbaaccountsGet($authorization): object
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
    $result = $apiInstance->ringbaaccountsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationApi->ringbaaccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
