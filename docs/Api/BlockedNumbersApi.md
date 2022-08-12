# Ringba\BlockedNumbersApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**blockaPhoneNumber()**](BlockedNumbersApi.md#blockaPhoneNumber) | **POST** /{accountId}/blockedNumbers | Block a Phone Number
[**getBlockedPhoneNumbers()**](BlockedNumbersApi.md#getBlockedPhoneNumbers) | **GET** /{accountId}/blockedNumbers | Get Blocked Phone Numbers
[**getDetailsAboutaSingleBlockedNumber()**](BlockedNumbersApi.md#getDetailsAboutaSingleBlockedNumber) | **GET** /{accountId}/blockedNumbers/{blockedNumberId} | Get Details About a Single Blocked Number
[**unblockaPhoneNumber()**](BlockedNumbersApi.md#unblockaPhoneNumber) | **DELETE** /{accountId}/blockedNumbers/{blockedNumberId} | Unblock a Phone Number
[**updateaBlockedPhoneNumber()**](BlockedNumbersApi.md#updateaBlockedPhoneNumber) | **PATCH** /{accountId}/blockedNumbers/{blockedNumberId} | Update a Blocked Phone Number


## `blockaPhoneNumber()`

```php
blockaPhoneNumber($authorization, $accountId, $blockaPhoneNumberRequest): \Ringba\Model\Blockanonymousnumbersfor8hoursinspecificcampaign
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$blockaPhoneNumberRequest = {"phoneNumber":"+anonymous","campaignId":"CAa2714586592f464f817efc493f3a4b50","expInHour":8}; // \Ringba\Model\BlockaPhoneNumberRequest | 

try {
    $result = $apiInstance->blockaPhoneNumber($authorization, $accountId, $blockaPhoneNumberRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->blockaPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **blockaPhoneNumberRequest** | [**\Ringba\Model\BlockaPhoneNumberRequest**](../Model/BlockaPhoneNumberRequest.md)|  |

### Return type

[**\Ringba\Model\Blockanonymousnumbersfor8hoursinspecificcampaign**](../Model/Blockanonymousnumbersfor8hoursinspecificcampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockedPhoneNumbers()`

```php
getBlockedPhoneNumbers($authorization, $accountId): \Ringba\Model\GetBlockedPhoneNumbers
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getBlockedPhoneNumbers($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->getBlockedPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetBlockedPhoneNumbers**](../Model/GetBlockedPhoneNumbers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutaSingleBlockedNumber()`

```php
getDetailsAboutaSingleBlockedNumber($authorization, $accountId, $blockedNumberId): \Ringba\Model\GetDetailsAboutaSingleBlockedNumber
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$blockedNumberId = 'blockedNumberId_example'; // string | 

try {
    $result = $apiInstance->getDetailsAboutaSingleBlockedNumber($authorization, $accountId, $blockedNumberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->getDetailsAboutaSingleBlockedNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **blockedNumberId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsAboutaSingleBlockedNumber**](../Model/GetDetailsAboutaSingleBlockedNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockaPhoneNumber()`

```php
unblockaPhoneNumber($authorization, $accountId, $blockedNumberId): \Ringba\Model\UnblockaPhoneNumber
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$blockedNumberId = 'blockedNumberId_example'; // string | 

try {
    $result = $apiInstance->unblockaPhoneNumber($authorization, $accountId, $blockedNumberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->unblockaPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **blockedNumberId** | **string**|  |

### Return type

[**\Ringba\Model\UnblockaPhoneNumber**](../Model/UnblockaPhoneNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateaBlockedPhoneNumber()`

```php
updateaBlockedPhoneNumber($authorization, $accountId, $blockedNumberId, $updateaBlockedPhoneNumberRequest): \Ringba\Model\UpdateaBlockedPhoneNumber
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$blockedNumberId = 'blockedNumberId_example'; // string | 
$updateaBlockedPhoneNumberRequest = {"phoneNumber":"+anonymous","campaignId":"CAa2714586592f464f817efc493f3a4b50","expiration":"2021-04-06T05:36:25.104Z","timeLimited":true}; // \Ringba\Model\UpdateaBlockedPhoneNumberRequest | 

try {
    $result = $apiInstance->updateaBlockedPhoneNumber($authorization, $accountId, $blockedNumberId, $updateaBlockedPhoneNumberRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedNumbersApi->updateaBlockedPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **blockedNumberId** | **string**|  |
 **updateaBlockedPhoneNumberRequest** | [**\Ringba\Model\UpdateaBlockedPhoneNumberRequest**](../Model/UpdateaBlockedPhoneNumberRequest.md)|  |

### Return type

[**\Ringba\Model\UpdateaBlockedPhoneNumber**](../Model/UpdateaBlockedPhoneNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
