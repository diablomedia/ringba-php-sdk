# Ringba\BearerTokensApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserAuthenticationBearerToken()**](BearerTokensApi.md#getUserAuthenticationBearerToken) | **POST** /token | Get User Authentication Bearer Token


## `getUserAuthenticationBearerToken()`

```php
getUserAuthenticationBearerToken($contentType, $grantType, $username, $password): \Ringba\Model\GetUserAuthenticationBearerToken
```

Get User Authentication Bearer Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\BearerTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = application/x-www-form-urlencoded; charset=UTF-8; // string | 
$grantType = 'grantType_example'; // string
$username = 'username_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->getUserAuthenticationBearerToken($contentType, $grantType, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BearerTokensApi->getUserAuthenticationBearerToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  |
 **grantType** | **string**|  |
 **username** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Ringba\Model\GetUserAuthenticationBearerToken**](../Model/GetUserAuthenticationBearerToken.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
