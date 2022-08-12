# Ringba\BlockedNumbersApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdBlockedNumbersBlockedNumberIdDelete()**](BlockedNumbersApi.md#accountIdBlockedNumbersBlockedNumberIdDelete) | **DELETE** /{accountId}/blockedNumbers/{blockedNumberId} | Unblock a Phone Number
[**accountIdBlockedNumbersBlockedNumberIdGet()**](BlockedNumbersApi.md#accountIdBlockedNumbersBlockedNumberIdGet) | **GET** /{accountId}/blockedNumbers/{blockedNumberId} | Get Details About a Single Blocked Number
[**accountIdBlockedNumbersBlockedNumberIdPatch()**](BlockedNumbersApi.md#accountIdBlockedNumbersBlockedNumberIdPatch) | **PATCH** /{accountId}/blockedNumbers/{blockedNumberId} | Update a Blocked Phone Number
[**accountIdBlockedNumbersGet()**](BlockedNumbersApi.md#accountIdBlockedNumbersGet) | **GET** /{accountId}/blockedNumbers | Get Blocked Phone Numbers
[**accountIdBlockedNumbersPost()**](BlockedNumbersApi.md#accountIdBlockedNumbersPost) | **POST** /{accountId}/blockedNumbers | Block a Phone Number


## `accountIdBlockedNumbersBlockedNumberIdDelete()`

```php
accountIdBlockedNumbersBlockedNumberIdDelete($accountId, $blockedNumberId, $authorization): object
```

Unblock a Phone Number

Request to unblock a phone number.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `blockedNumberId` The ID of the blocked number you want to unblock. You can find the IDs of all blocked numbers associated with your account using the \"GET Get Blocked Phone Numbers\" request above. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BlockedNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$blockedNumberId = 'blockedNumberId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdBlockedNumbersBlockedNumberIdDelete($accountId, $blockedNumberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->accountIdBlockedNumbersBlockedNumberIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **blockedNumberId** | **string**|  |
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

## `accountIdBlockedNumbersBlockedNumberIdGet()`

```php
accountIdBlockedNumbersBlockedNumberIdGet($accountId, $blockedNumberId, $authorization): object
```

Get Details About a Single Blocked Number

Request to view details about a single blocked number.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `blockedNumberId` The ID of the blocked number you want details for. You can find the IDs of all blocked numbers associated with your account using the \"GET Get Blocked Phone Numbers\" request above. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BlockedNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$blockedNumberId = 'blockedNumberId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdBlockedNumbersBlockedNumberIdGet($accountId, $blockedNumberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->accountIdBlockedNumbersBlockedNumberIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **blockedNumberId** | **string**|  |
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

## `accountIdBlockedNumbersBlockedNumberIdPatch()`

```php
accountIdBlockedNumbersBlockedNumberIdPatch($accountId, $blockedNumberId, $authorization, $body): object
```

Update a Blocked Phone Number

Request to edit the settings for a blocked number.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `blockedNumberId` The ID of the blocked number you want details for. You can find the IDs of all blocked numbers associated with your account using the \"GET Get Blocked Phone Numbers\" request above. <br> <br>  ### Request Body <hr> <br>  This request can be used to modify the `phoneNumber` or `campaignId` which are explained in the description of the \"POST Block a Phone Number\" request above.  Additionally, you can include the following parameters in the request body: <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>timeLimited</code></td> <td>Boolean value. If set to false the number will be blocked indefinitely</td> </tr> <tr> <td><code>expiration</code></td> <td>Use this to adjust when the blocked number will no longer be blocked</td> </tr> </table>  __NOTE:__ If you are adding an expiration to a blocked number that was previously blocked indefinitely, you must include both of these parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BlockedNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$blockedNumberId = 'blockedNumberId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdBlockedNumbersBlockedNumberIdPatch($accountId, $blockedNumberId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->accountIdBlockedNumbersBlockedNumberIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **blockedNumberId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **body** | **object**|  | [optional]

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

## `accountIdBlockedNumbersGet()`

```php
accountIdBlockedNumbersGet($accountId, $authorization): object
```

Get Blocked Phone Numbers

Request to view all the numbers you currently have blocked, as well as some details about how long and for what campaigns (if specified) they are blocked.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BlockedNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdBlockedNumbersGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->accountIdBlockedNumbersGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdBlockedNumbersPost()`

```php
accountIdBlockedNumbersPost($accountId, $authorization, $body): object
```

Block a Phone Number

Request to block a phone number, phone numbers with a certain prefix, or calls from anonymous callers.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>phoneNumber</code></td> <td>The number you want to block. To block anonymous calls, give this a value of \"+anonymous\". To block an area code, for example area code +1(555) give this a value of \"+1555*\". To block a specific phone number, for example +1(555)666-1234, give this a value of \"+15556661234\".</td> </tr> <tr> <td><code>campaignId</code></td> <td>Specifies the campaign for which you want to block the number. If you want to block it across all campaigns, leave empty quotes for the value, otherwise give this a value of the desired campaign's ID.</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>expInHour</code></td> <td>The number of hours you want to block call from this number. If this parameter is not included in the request, the number will be blocked indefinitely.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\BlockedNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdBlockedNumbersPost($accountId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->accountIdBlockedNumbersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **body** | **object**|  | [optional]

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
