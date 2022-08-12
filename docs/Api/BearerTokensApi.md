# Ringba\BearerTokensApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenPost()**](BearerTokensApi.md#tokenPost) | **POST** /token | Get User Authentication Bearer Token


## `tokenPost()`

```php
tokenPost($contentType, $grantType, $username, $password): object
```

Get User Authentication Bearer Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BearerTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = application/x-www-form-urlencoded; charset=UTF-8; // string
$grantType = 'grantType_example'; // string
$username = 'username_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->tokenPost($contentType, $grantType, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BearerTokensApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  | [optional]
 **grantType** | **string**|  | [optional]
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
