# OpenAPI\Client\APITokensApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTokensApiTokenIdDelete()**](APITokensApi.md#apiTokensApiTokenIdDelete) | **DELETE** /ApiTokens/{apiTokenId} | Delete Api Token |
| [**apiTokensGet()**](APITokensApi.md#apiTokensGet) | **GET** /ApiTokens | Get API Tokens |
| [**apiTokensPost()**](APITokensApi.md#apiTokensPost) | **POST** /ApiTokens | Create Api Token |


## `apiTokensApiTokenIdDelete()`

```php
apiTokensApiTokenIdDelete($api_token_id, $content_type, $authorization): object
```

Delete Api Token

Delete any existing API Token by supplying the ID in the URL. The IDs can be retrieved using the \"Get API Tokens\" endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token_id = 'api_token_id_example'; // string
$content_type = application/x-www-form-urlencoded; charset=UTF-8; // string
$authorization = Bearer {{accessToken}}; // string | Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token)

try {
    $result = $apiInstance->apiTokensApiTokenIdDelete($api_token_id, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->apiTokensApiTokenIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_token_id** | **string**|  | |
| **content_type** | **string**|  | [optional] |
| **authorization** | **string**| Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token) | [optional] |

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

## `apiTokensGet()`

```php
apiTokensGet($content_type, $authorization): object
```

Get API Tokens

Endpoint to retrieve a list of IDs of current API Tokens in your account.    ### Response Overview <hr> <br>  If the API Token has not been used, the `usage` array will be empty, otherwise it will contain the last 10 actions.  This request will __NOT__ return the actual API Token, but will show the ID of each Token. If you need the actual API Token, you can create a new one using the `POST Create API Token` request or contact Ringba support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/x-www-form-urlencoded; charset=UTF-8; // string
$authorization = Bearer {{accessToken}}; // string | Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token)

try {
    $result = $apiInstance->apiTokensGet($content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->apiTokensGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **authorization** | **string**| Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token) | [optional] |

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

## `apiTokensPost()`

```php
apiTokensPost($content_type, $authorization, $body): string
```

Create Api Token

#### How to Generate Your API Token  Create an API Token to be used for authenticating requests indefinitely. In the json response grab the `token` value and use as `{apiToken}` in the header `Authorization: Token {apiToken}` on all other requests. The body must contain the name for your API Token so you can identify when pulling the list of active tokens.  **NOTE: The API Token will be shown only once, please keep it in a safe place**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/x-www-form-urlencoded; charset=UTF-8; // string
$authorization = Bearer {{accessToken}}; // string | Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiTokensPost($content_type, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->apiTokensPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **authorization** | **string**| Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token) | [optional] |
| **body** | **object**|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
