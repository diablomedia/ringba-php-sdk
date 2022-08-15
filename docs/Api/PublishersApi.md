# Ringba\PublishersApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewPublisher()**](PublishersApi.md#createNewPublisher) | **POST** /{accountId}/Publishers | Create New Publisher
[**deleteaPublisher()**](PublishersApi.md#deleteaPublisher) | **DELETE** /{accountId}/Publishers/{publisherId} | Delete a Publisher
[**editaPublisher()**](PublishersApi.md#editaPublisher) | **PATCH** /{accountId}/Publishers/{publisherId} | Edit a Publisher
[**getCallStatisticsforPublishers()**](PublishersApi.md#getCallStatisticsforPublishers) | **GET** /{accountId}/Publishers/stats | Get Call Statistics for Publishers
[**getDetailsAboutSinglePublisher()**](PublishersApi.md#getDetailsAboutSinglePublisher) | **GET** /{accountId}/Publishers/{publisherId} | Get Details About Single Publisher
[**getInboundReferencesforaPublisher()**](PublishersApi.md#getInboundReferencesforaPublisher) | **GET** /{accountId}/Publishers/{publisherId}/InboundReferences | Get Inbound References for a Publisher
[**getPhoneNumbersforaSinglePublisher()**](PublishersApi.md#getPhoneNumbersforaSinglePublisher) | **GET** /{accountId}/Publishers/{publisherId}/Numbers | Get Phone Numbers for a Single Publisher
[**getPublishers()**](PublishersApi.md#getPublishers) | **GET** /{accountId}/Publishers | Get Publishers
[**getUserDetailsforaPublisher()**](PublishersApi.md#getUserDetailsforaPublisher) | **GET** /{accountId}/Publishers/{publisherId}/Users | Get User Details for a Publisher


## `createNewPublisher()`

```php
createNewPublisher($authorization, $accountId, $createNewPublisherRequest): \Ringba\Model\CreateNewPublisher
```

Create New Publisher

Request to create a new publisher. In order to give users access to the publisher, you will need to use the \"POST Invite a User to Join a Publisher\" request in the \"Publisher Invitations\" folder below.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name of the publisher</td> </tr> <tr> <td><code>createNumbers</code></td> <td>Boolean value. If set to true, the publisher will be able to create new numbers. If false, the publisher will only be able to get numbers already associated with your account.</td> </tr> <tr> <td><code>doNotCreateUser</code></td> <td>Set this value to true</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>subId</code></td> <td>A subId to be used to tracking the publisher</td> </tr> <tr> <td><code>blockCallsIfCapped</code></td> <td>Boolean value. If set to true, calls will be blocked to this publisher once the publisher's payout cap has been reached. If this parameter is null or not included in the request, then your account settings will be applied for this setting.</td> </tr> <tr> <td><code>accessToRecordings</code></td> <td>Boolean value. If set to true, the publisher will have access to call recordings in the report. If this parameter is null or not included in the request, then your account settings will be applied for this setting.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$createNewPublisherRequest = {"name":"New Publisher","subId":"pubSubId","createNumbers":true,"doNotCreateUser":true,"blockCallsIfCapped":false,"accessToRecordings":true}; // \Ringba\Model\CreateNewPublisherRequest | 

try {
    $result = $apiInstance->createNewPublisher($authorization, $accountId, $createNewPublisherRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->createNewPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **createNewPublisherRequest** | [**\Ringba\Model\CreateNewPublisherRequest**](../Model/CreateNewPublisherRequest.md)|  |

### Return type

[**\Ringba\Model\CreateNewPublisher**](../Model/CreateNewPublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaPublisher()`

```php
deleteaPublisher($force, $keepNumbers, $authorization, $accountId, $publisherId): \Ringba\Model\DeleteaPublisher
```

Delete a Publisher

Request to remove a publisher from your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$force = false; // bool | If set to true, pulisher will be deleted even if it has active inbound references
$keepNumbers = true; // bool | If set to true, numbers associated with the publisher will stay in your account. If set to false, hte numbers will be deallocated.
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->deleteaPublisher($force, $keepNumbers, $authorization, $accountId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->deleteaPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force** | **bool**| If set to true, pulisher will be deleted even if it has active inbound references |
 **keepNumbers** | **bool**| If set to true, numbers associated with the publisher will stay in your account. If set to false, hte numbers will be deallocated. |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteaPublisher**](../Model/DeleteaPublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editaPublisher()`

```php
editaPublisher($authorization, $accountId, $publisherId, $editaPublisherRequest): \Ringba\Model\EditaPublisher
```

Edit a Publisher

Request to modify details for a publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.  ### Request Body <hr> <Br>  This request can be used to modify any of the settings described in the Request Body section of the \"POST Create New Publisher\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$editaPublisherRequest = {"name":"New Name","subId":"newPubSubId","enabled":true,"createNumbers":false,"blockCallsIfCapped":null,"accessToRecordings":false}; // \Ringba\Model\EditaPublisherRequest | 

try {
    $result = $apiInstance->editaPublisher($authorization, $accountId, $publisherId, $editaPublisherRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->editaPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
 **editaPublisherRequest** | [**\Ringba\Model\EditaPublisherRequest**](../Model/EditaPublisherRequest.md)|  |

### Return type

[**\Ringba\Model\EditaPublisher**](../Model/EditaPublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallStatisticsforPublishers()`

```php
getCallStatisticsforPublishers($authorization, $accountId): \Ringba\Model\GetCallStatisticsforPublishers
```

Get Call Statistics for Publishers

Request to get call statistics for all publishers associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getCallStatisticsforPublishers($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getCallStatisticsforPublishers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetCallStatisticsforPublishers**](../Model/GetCallStatisticsforPublishers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutSinglePublisher()`

```php
getDetailsAboutSinglePublisher($authorization, $accountId, $publisherId): \Ringba\Model\GetDetailsAboutSinglePublisher
```

Get Details About Single Publisher

Request to get details for a specific publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->getDetailsAboutSinglePublisher($authorization, $accountId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getDetailsAboutSinglePublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsAboutSinglePublisher**](../Model/GetDetailsAboutSinglePublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundReferencesforaPublisher()`

```php
getInboundReferencesforaPublisher($authorization, $accountId, $publisherId): \Ringba\Model\GetInboundReferencesforaPublisher
```

Get Inbound References for a Publisher

Request to get all references to a specific publisher. This will show you all campaigns, phone numbers, and users associated with the publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->getInboundReferencesforaPublisher($authorization, $accountId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getInboundReferencesforaPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\GetInboundReferencesforaPublisher**](../Model/GetInboundReferencesforaPublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumbersforaSinglePublisher()`

```php
getPhoneNumbersforaSinglePublisher($authorization, $accountId, $publisherId): \Ringba\Model\GetPhoneNumbersforaSinglePublisher
```

Get Phone Numbers for a Single Publisher

Request to get details about the phone numbers associated with a specific publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->getPhoneNumbersforaSinglePublisher($authorization, $accountId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getPhoneNumbersforaSinglePublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\GetPhoneNumbersforaSinglePublisher**](../Model/GetPhoneNumbersforaSinglePublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublishers()`

```php
getPublishers($authorization, $accountId): \Ringba\Model\GetPublishers
```

Get Publishers

Request to retrieve a list of publishers associated with your account. The response to this request will return an array called `publishers` which is the list of publishers. Each object in the array contains a parameter called `id` which is the `publisherID` that is used in other requests in this documentation.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getPublishers($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getPublishers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetPublishers**](../Model/GetPublishers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserDetailsforaPublisher()`

```php
getUserDetailsforaPublisher($authorization, $accountId, $publisherId): \Ringba\Model\GetUserDetailsforaPublisher
```

Get User Details for a Publisher

Request to get details about the users associated with a specific publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->getUserDetailsforaPublisher($authorization, $accountId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getUserDetailsforaPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\GetUserDetailsforaPublisher**](../Model/GetUserDetailsforaPublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
