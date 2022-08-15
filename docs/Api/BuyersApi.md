# Ringba\BuyersApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBuyers()**](BuyersApi.md#getBuyers) | **GET** /{accountId}/Buyers | Get Buyers


## `getBuyers()`

```php
getBuyers($authorization, $accountId): \Ringba\Model\GetBuyers
```

Get Buyers

Request to retrieve a list of buyers associated with your account.  ### Path Variables <hr>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getBuyers($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->getBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetBuyers**](../Model/GetBuyers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
