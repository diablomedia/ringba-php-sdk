# OpenAPI\Client\BearerTokensApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tokenPost()**](BearerTokensApi.md#tokenPost) | **POST** /token | Get User Authentication Bearer Token |


## `tokenPost()`

```php
tokenPost($content_type, $grant_type, $username, $password): object
```

Get User Authentication Bearer Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BearerTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/x-www-form-urlencoded; charset=UTF-8; // string
$grant_type = 'grant_type_example'; // string
$username = 'username_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->tokenPost($content_type, $grant_type, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BearerTokensApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **grant_type** | **string**|  | [optional] |
| **username** | **string**|  | [optional] |
| **password** | **string**|  | [optional] |

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
