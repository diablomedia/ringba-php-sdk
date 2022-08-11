# OpenAPI\Client\TCPAShieldApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1AccountIdLookupGet()**](TCPAShieldApi.md#apiV1AccountIdLookupGet) | **GET** /api/v1/{accountId}/lookup | Lookup Number |
| [**apiV1AccountIdLookupbulkPost()**](TCPAShieldApi.md#apiV1AccountIdLookupbulkPost) | **POST** /api/v1/{accountId}/lookupbulk | Lookup Numbers Bulk |


## `apiV1AccountIdLookupGet()`

```php
apiV1AccountIdLookupGet($account_id, $authorization, $number): object
```

Lookup Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TCPAShieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$number = 16195643321; // int | Phone number with country code that you want to look up

try {
    $result = $apiInstance->apiV1AccountIdLookupGet($account_id, $authorization, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPAShieldApi->apiV1AccountIdLookupGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |
| **number** | **int**| Phone number with country code that you want to look up | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1AccountIdLookupbulkPost()`

```php
apiV1AccountIdLookupbulkPost($account_id, $authorization, $body): object
```

Lookup Numbers Bulk

The api endpoint allows you to test multiple numbers. The enpoint will return the numbers that are safe to call. Any number removed from the response list is a blocked number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TCPAShieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiV1AccountIdLookupbulkPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPAShieldApi->apiV1AccountIdLookupbulkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |
| **body** | **object**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
