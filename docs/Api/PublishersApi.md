# Ringba\PublishersApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdPublishersGet()**](PublishersApi.md#accountIdPublishersGet) | **GET** /{accountId}/Publishers | Get Publishers
[**accountIdPublishersPost()**](PublishersApi.md#accountIdPublishersPost) | **POST** /{accountId}/Publishers | Create New Publisher
[**accountIdPublishersPublisherIdDelete()**](PublishersApi.md#accountIdPublishersPublisherIdDelete) | **DELETE** /{accountId}/Publishers/{publisherId} | Delete a Publisher
[**accountIdPublishersPublisherIdGet()**](PublishersApi.md#accountIdPublishersPublisherIdGet) | **GET** /{accountId}/Publishers/{publisherId} | Get Details About Single Publisher
[**accountIdPublishersPublisherIdInboundReferencesGet()**](PublishersApi.md#accountIdPublishersPublisherIdInboundReferencesGet) | **GET** /{accountId}/Publishers/{publisherId}/InboundReferences | Get Inbound References for a Publisher
[**accountIdPublishersPublisherIdNumbersGet()**](PublishersApi.md#accountIdPublishersPublisherIdNumbersGet) | **GET** /{accountId}/Publishers/{publisherId}/Numbers | Get Phone Numbers for a Single Publisher
[**accountIdPublishersPublisherIdPatch()**](PublishersApi.md#accountIdPublishersPublisherIdPatch) | **PATCH** /{accountId}/Publishers/{publisherId} | Edit a Publisher
[**accountIdPublishersPublisherIdUsersGet()**](PublishersApi.md#accountIdPublishersPublisherIdUsersGet) | **GET** /{accountId}/Publishers/{publisherId}/Users | Get User Details for a Publisher
[**accountIdPublishersStatsGet()**](PublishersApi.md#accountIdPublishersStatsGet) | **GET** /{accountId}/Publishers/stats | Get Call Statistics for Publishers


## `accountIdPublishersGet()`

```php
accountIdPublishersGet($accountId, $authorization): object
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
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdPublishersGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdPublishersPost()`

```php
accountIdPublishersPost($accountId, $authorization, $body): object
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
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdPublishersPost($accountId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdPublishersPublisherIdDelete()`

```php
accountIdPublishersPublisherIdDelete($accountId, $publisherId, $authorization, $force, $keepNumbers): object
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
$accountId = 'accountId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$force = false; // bool | If set to true, pulisher will be deleted even if it has active inbound references
$keepNumbers = true; // bool | If set to true, numbers associated with the publisher will stay in your account. If set to false, hte numbers will be deallocated.

try {
    $result = $apiInstance->accountIdPublishersPublisherIdDelete($accountId, $publisherId, $authorization, $force, $keepNumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPublisherIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **force** | **bool**| If set to true, pulisher will be deleted even if it has active inbound references | [optional]
 **keepNumbers** | **bool**| If set to true, numbers associated with the publisher will stay in your account. If set to false, hte numbers will be deallocated. | [optional]

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

## `accountIdPublishersPublisherIdGet()`

```php
accountIdPublishersPublisherIdGet($accountId, $publisherId, $authorization): object
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
$accountId = 'accountId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdPublishersPublisherIdGet($accountId, $publisherId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPublisherIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
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

## `accountIdPublishersPublisherIdInboundReferencesGet()`

```php
accountIdPublishersPublisherIdInboundReferencesGet($accountId, $publisherId, $authorization): object
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
$accountId = 'accountId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdPublishersPublisherIdInboundReferencesGet($accountId, $publisherId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPublisherIdInboundReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
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

## `accountIdPublishersPublisherIdNumbersGet()`

```php
accountIdPublishersPublisherIdNumbersGet($accountId, $publisherId, $authorization): object
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
$accountId = 'accountId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdPublishersPublisherIdNumbersGet($accountId, $publisherId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPublisherIdNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
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

## `accountIdPublishersPublisherIdPatch()`

```php
accountIdPublishersPublisherIdPatch($accountId, $publisherId, $authorization, $body): object
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
$accountId = 'accountId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdPublishersPublisherIdPatch($accountId, $publisherId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPublisherIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
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

## `accountIdPublishersPublisherIdUsersGet()`

```php
accountIdPublishersPublisherIdUsersGet($accountId, $publisherId, $authorization): object
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
$accountId = 'accountId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdPublishersPublisherIdUsersGet($accountId, $publisherId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersPublisherIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
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

## `accountIdPublishersStatsGet()`

```php
accountIdPublishersStatsGet($accountId, $authorization): object
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
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdPublishersStatsGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->accountIdPublishersStatsGet: ', $e->getMessage(), PHP_EOL;
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
