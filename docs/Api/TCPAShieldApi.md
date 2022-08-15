# Ringba\TCPAShieldApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**lookupNumber()**](TCPAShieldApi.md#lookupNumber) | **GET** /api/v1/{accountId}/lookup | Lookup Number
[**lookupNumbersBulk()**](TCPAShieldApi.md#lookupNumbersBulk) | **POST** /api/v1/{accountId}/lookupbulk | Lookup Numbers Bulk


## `lookupNumber()`

```php
lookupNumber($number, $authorization, $accountId): \Ringba\Model\LookupNumberNumbernotblocked
```

Lookup Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TCPAShieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = 16195643321; // int | Phone number with country code that you want to look up
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->lookupNumber($number, $authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPAShieldApi->lookupNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Phone number with country code that you want to look up |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\LookupNumberNumbernotblocked**](../Model/LookupNumberNumbernotblocked.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookupNumbersBulk()`

```php
lookupNumbersBulk($authorization, $accountId, $lookupNumbersBulkRequest): string[]
```

Lookup Numbers Bulk

The api endpoint allows you to test multiple numbers. The enpoint will return the numbers that are safe to call. Any number removed from the response list is a blocked number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TCPAShieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$lookupNumbersBulkRequest = {"phones":["16196308544","15555558353","15555555555","15555552740","15555552741","15555552738","16196308541"]}; // \Ringba\Model\LookupNumbersBulkRequest | 

try {
    $result = $apiInstance->lookupNumbersBulk($authorization, $accountId, $lookupNumbersBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPAShieldApi->lookupNumbersBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **lookupNumbersBulkRequest** | [**\Ringba\Model\LookupNumbersBulkRequest**](../Model/LookupNumbersBulkRequest.md)|  |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
