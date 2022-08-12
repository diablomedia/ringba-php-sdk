# Ringba\BuyersApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdBuyersGet()**](BuyersApi.md#accountIdBuyersGet) | **GET** /{accountId}/Buyers | Get Buyers


## `accountIdBuyersGet()`

```php
accountIdBuyersGet($accountId, $authorization): object
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
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdBuyersGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->accountIdBuyersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
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
