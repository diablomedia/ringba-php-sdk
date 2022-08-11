# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdWebHooksCreateConversionPost()**](WebhooksApi.md#accountIdWebHooksCreateConversionPost) | **POST** /{accountId}/WebHooks/CreateConversion | Create New Webhook |
| [**accountIdWebHooksGet()**](WebhooksApi.md#accountIdWebHooksGet) | **GET** /{accountId}/WebHooks | Get Webhooks |
| [**accountIdWebHooksWebHookIdDelete()**](WebhooksApi.md#accountIdWebHooksWebHookIdDelete) | **DELETE** /{accountId}/WebHooks/{webHookId} | Delete a Webhook |
| [**accountIdWebHooksWebHookIdGet()**](WebhooksApi.md#accountIdWebHooksWebHookIdGet) | **GET** /{accountId}/WebHooks/{webHookId} | Get Details for a Single Webhook |


## `accountIdWebHooksCreateConversionPost()`

```php
accountIdWebHooksCreateConversionPost($account_id, $authorization, $body): object
```

Create New Webhook

Create a new webhook for use with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>This is the name that will be used to describe your webhook information on the report</td> </tr> <tr> <td><code>incomingCallIdQueryStringParameter</code></td> <td>This is the name of the variable that Ringba will collect the call Id from, we use the call Id to identify which call the requests refer to</td> </tr> <tr> <td><code>conversionAmountQueryStringParameter</code></td> <td>Name of the variable that Ringba will collect the revenue from</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionCriteriaParameterMatch</code></td> <td> If the optional string is set and the incoming request has it on the parameters then Ringba will set the call as converted and add revenue to the call.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdWebHooksCreateConversionPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountIdWebHooksCreateConversionPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdWebHooksGet()`

```php
accountIdWebHooksGet($account_id, $authorization): object
```

Get Webhooks

Get all webhooks associated with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdWebHooksGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountIdWebHooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |

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

## `accountIdWebHooksWebHookIdDelete()`

```php
accountIdWebHooksWebHookIdDelete($account_id, $web_hook_id, $authorization): object
```

Delete a Webhook

Remove a webhook from your account  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `webHookId` Find IDs of your webhooks using the \"GET Get Webhooks\" request above <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$web_hook_id = 'web_hook_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdWebHooksWebHookIdDelete($account_id, $web_hook_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountIdWebHooksWebHookIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **web_hook_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |

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

## `accountIdWebHooksWebHookIdGet()`

```php
accountIdWebHooksWebHookIdGet($account_id, $web_hook_id, $authorization): object
```

Get Details for a Single Webhook

Get details about a specific webhook.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `webHookId` Find IDs of your webhooks using the \"GET Get Webhooks\" request above <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$web_hook_id = 'web_hook_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdWebHooksWebHookIdGet($account_id, $web_hook_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountIdWebHooksWebHookIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **web_hook_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |

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
