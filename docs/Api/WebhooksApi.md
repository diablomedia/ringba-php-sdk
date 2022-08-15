# Ringba\WebhooksApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewWebhook()**](WebhooksApi.md#createNewWebhook) | **POST** /{accountId}/WebHooks/CreateConversion | Create New Webhook
[**deleteaWebhook()**](WebhooksApi.md#deleteaWebhook) | **DELETE** /{accountId}/WebHooks/{webHookId} | Delete a Webhook
[**getDetailsforaSingleWebhook()**](WebhooksApi.md#getDetailsforaSingleWebhook) | **GET** /{accountId}/WebHooks/{webHookId} | Get Details for a Single Webhook
[**getWebhooks()**](WebhooksApi.md#getWebhooks) | **GET** /{accountId}/WebHooks | Get Webhooks


## `createNewWebhook()`

```php
createNewWebhook($accountId, $createNewWebhookRequest, $authorization): \Ringba\Model\CreateNewWebhook
```

Create New Webhook

Create a new webhook for use with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>This is the name that will be used to describe your webhook information on the report</td> </tr> <tr> <td><code>incomingCallIdQueryStringParameter</code></td> <td>This is the name of the variable that Ringba will collect the call Id from, we use the call Id to identify which call the requests refer to</td> </tr> <tr> <td><code>conversionAmountQueryStringParameter</code></td> <td>Name of the variable that Ringba will collect the revenue from</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionCriteriaParameterMatch</code></td> <td> If the optional string is set and the incoming request has it on the parameters then Ringba will set the call as converted and add revenue to the call.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$createNewWebhookRequest = {"name":"New Webhook","incomingCallIdQueryStringParameter":"call_id","conversionAmountQueryStringParameter":"call_revenue","conversionCriteriaParameterMatch":"sale_successful=yes"}; // \Ringba\Model\CreateNewWebhookRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->createNewWebhook($accountId, $createNewWebhookRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createNewWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **createNewWebhookRequest** | [**\Ringba\Model\CreateNewWebhookRequest**](../Model/CreateNewWebhookRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\CreateNewWebhook**](../Model/CreateNewWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaWebhook()`

```php
deleteaWebhook($accountId, $webHookId, $authorization): \Ringba\Model\DeleteaWebhook
```

Delete a Webhook

Remove a webhook from your account  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `webHookId` Find IDs of your webhooks using the \"GET Get Webhooks\" request above <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$webHookId = 'webHookId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->deleteaWebhook($accountId, $webHookId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteaWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **webHookId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\DeleteaWebhook**](../Model/DeleteaWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsforaSingleWebhook()`

```php
getDetailsforaSingleWebhook($accountId, $webHookId, $authorization): \Ringba\Model\GetDetailsforaSingleWebhook
```

Get Details for a Single Webhook

Get details about a specific webhook.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `webHookId` Find IDs of your webhooks using the \"GET Get Webhooks\" request above <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$webHookId = 'webHookId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getDetailsforaSingleWebhook($accountId, $webHookId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getDetailsforaSingleWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **webHookId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetDetailsforaSingleWebhook**](../Model/GetDetailsforaSingleWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks($accountId, $authorization): \Ringba\Model\GetWebhooks
```

Get Webhooks

Get all webhooks associated with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getWebhooks($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetWebhooks**](../Model/GetWebhooks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
