# Ringba\NumberPoolsApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdNumberpoolsGet()**](NumberPoolsApi.md#accountIdNumberpoolsGet) | **GET** /{accountId}/numberpools | Get Number Pools Associated With Your Account
[**accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Affiliate/{publisherId} | Remove a Publisher from a Number Pool
[**accountIdNumberpoolsNumberPoolIdAffiliatePut()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdAffiliatePut) | **PUT** /{accountId}/numberpools/{numberPoolId}/Affiliate | Assign a Publisher to a  Number Pool
[**accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut) | **PUT** /{accountId}/numberpools/{numberPoolId}/AllocateMoreNumbers | Allocate More Numbers to a Number Pool
[**accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete) | **DELETE** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Delete an Allocation Job
[**accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Get Details About an Allocation Job
[**accountIdNumberpoolsNumberPoolIdAllocationJobsGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdAllocationJobsGet) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs | Get Allocation Jobs
[**accountIdNumberpoolsNumberPoolIdDelete()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdDelete) | **DELETE** /{accountId}/numberpools/{numberPoolId} | Delete a Number Pool
[**accountIdNumberpoolsNumberPoolIdExpandPut()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdExpandPut) | **PUT** /{accountId}/numberpools/{numberPoolId}/Expand | Increase Size of a Number Pool
[**accountIdNumberpoolsNumberPoolIdFreeNumberCountGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdFreeNumberCountGet) | **GET** /{accountId}/numberpools/{numberPoolId}/FreeNumberCount | Get Count of Available Numbers in a Number Pool
[**accountIdNumberpoolsNumberPoolIdGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdGet) | **GET** /{accountId}/numberpools/{numberPoolId} | Get Details About a Single Number Pool
[**accountIdNumberpoolsNumberPoolIdInboundReferencesGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdInboundReferencesGet) | **GET** /{accountId}/numberpools/{numberPoolId}/InboundReferences | Get Inbound References for a Number Pool
[**accountIdNumberpoolsNumberPoolIdNumbersGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdNumbersGet) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers | Get Numbers for a Number Pool
[**accountIdNumberpoolsNumberPoolIdNumbersInUseGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdNumbersInUseGet) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/InUse | Get Numbers Currently In Use
[**accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Numbers/{numberId} | Delete a Specific Number from a Number Pool
[**accountIdNumberpoolsNumberPoolIdNumbersPut()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdNumbersPut) | **PUT** /{accountId}/numberpools/{numberPoolId}/Numbers | Add a Specific Number to a Number Pool
[**accountIdNumberpoolsNumberPoolIdNumbersVerifyGet()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdNumbersVerifyGet) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/Verify | Verify Numbers in Number Pool
[**accountIdNumberpoolsNumberPoolIdPatch()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdPatch) | **PATCH** /{accountId}/numberpools/{numberPoolId} | Edit Information for a Number Pool
[**accountIdNumberpoolsNumberPoolIdReplacePost()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdReplacePost) | **POST** /{accountId}/numberpools/{numberPoolId}/Replace | Replace Numbers In a Number Pool
[**accountIdNumberpoolsNumberPoolIdShrinkPost()**](NumberPoolsApi.md#accountIdNumberpoolsNumberPoolIdShrinkPost) | **POST** /{accountId}/numberpools/{numberPoolId}/Shrink | Decrease Size of a Number Pool
[**accountIdNumberpoolsPost()**](NumberPoolsApi.md#accountIdNumberpoolsPost) | **POST** /{accountId}/numberpools | Create New Number Pool
[**accountidStatsNumberPoolsGet()**](NumberPoolsApi.md#accountidStatsNumberPoolsGet) | **GET** /{accountid}/stats/numberPools | Get number pool stats


## `accountIdNumberpoolsGet()`

```php
accountIdNumberpoolsGet($accountId, $authorization): object
```

Get Number Pools Associated With Your Account

Request to get information about all of the number pools associated with your account  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete()`

```php
accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete($accountId, $numberPoolId, $publisherId, $authorization): object
```

Remove a Publisher from a Number Pool

Request to remove a publisher from a number pool  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools)  `publisherId` The ID of the publisher you want to remove from the pool. Find [publishers](#get-information-about-publishers) associated with your account <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$publisherId = 'publisherId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete($accountId, $numberPoolId, $publisherId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdAffiliatePut()`

```php
accountIdNumberpoolsNumberPoolIdAffiliatePut($accountId, $numberPoolId, $authorization, $body): object
```

Assign a Publisher to a  Number Pool

Request to assign a publisher associated with your account to a number pool.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>affiliateId</code></td> <td>The ID of the publisher you want to add to the pool. Find <a href=#get-information-about-publishers>publishers</a> associated with your account</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdAffiliatePut($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdAffiliatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut()`

```php
accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut($accountId, $numberPoolId, $authorization, $body): object
```

Allocate More Numbers to a Number Pool

Request to allocate numbers to a number pool.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>allocation</code></td> <td>The number of phone numbers you want to add to the number pool</td> </tr> <tr> <td><code>chargeAccountIfNeeded</code></td> <td>Boolean value. If set to true, your credit card will be charged for number allocation if your account balance is not sufficient. If set to false, allocation will fail if account balance is not sufficient. Recommended to be set to true.</td> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete()`

```php
accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete($accountId, $numberPoolId, $allocationJobId, $authorization): object
```

Delete an Allocation Job

Request to remove a number allocation job that is currently in progress.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools)  `allocationJobId` You can find a list of number allocation jobs currently in progress using the \"GET Get Allocation Jobs\" request above <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$allocationJobId = 'allocationJobId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete($accountId, $numberPoolId, $allocationJobId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **allocationJobId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet()`

```php
accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet($accountId, $numberPoolId, $allocationJobId, $authorization): object
```

Get Details About an Allocation Job

Request to view details about a specific number allocation job currently in progress for a number pool in your account  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools)  `allocationJobId` You can find a list of number allocation jobs currently in progress using the \"GET Get Allocation Jobs\" request above <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$allocationJobId = 'allocationJobId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet($accountId, $numberPoolId, $allocationJobId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **allocationJobId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdAllocationJobsGet()`

```php
accountIdNumberpoolsNumberPoolIdAllocationJobsGet($accountId, $numberPoolId, $authorization): object
```

Get Allocation Jobs

Request to view information about number allocation jobs currently in progress for number pools in your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdAllocationJobsGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdAllocationJobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdDelete()`

```php
accountIdNumberpoolsNumberPoolIdDelete($accountId, $numberPoolId, $authorization, $force, $keepNumbers): object
```

Delete a Number Pool

Request to delete a number pool from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$force = false; // bool | Forces request even if the number pool is being used elsewhere in your account.
$keepNumbers = true; // bool | Keep numbers in your account after the number pool has been removed

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdDelete($accountId, $numberPoolId, $authorization, $force, $keepNumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **force** | **bool**| Forces request even if the number pool is being used elsewhere in your account. | [optional]
 **keepNumbers** | **bool**| Keep numbers in your account after the number pool has been removed | [optional]

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

## `accountIdNumberpoolsNumberPoolIdExpandPut()`

```php
accountIdNumberpoolsNumberPoolIdExpandPut($accountId, $numberPoolId, $authorization, $body): object
```

Increase Size of a Number Pool

Request to increase the size of a number pool. This is the same request as the \"PUT Allocate More Numbers to a Number Pool\" request above.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>allocation</code></td> <td>The number of phone numbers you want to add to the number pool</td> </tr> <tr> <td><code>chargeAccountIfNeeded</code></td> <td>Boolean value. If set to true, your credit card will be charged for number allocation if your account balance is not sufficient. If set to false, allocation will fail if account balance is not sufficient. Recommended to be set to true.</td> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdExpandPut($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdExpandPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdFreeNumberCountGet()`

```php
accountIdNumberpoolsNumberPoolIdFreeNumberCountGet($accountId, $numberPoolId, $authorization): object
```

Get Count of Available Numbers in a Number Pool

Request to see how many numbers in a number pool are currently available for calls.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdFreeNumberCountGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdFreeNumberCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdGet()`

```php
accountIdNumberpoolsNumberPoolIdGet($accountId, $numberPoolId, $authorization): object
```

Get Details About a Single Number Pool

Request to get further information about a single number pool.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdInboundReferencesGet()`

```php
accountIdNumberpoolsNumberPoolIdInboundReferencesGet($accountId, $numberPoolId, $authorization): object
```

Get Inbound References for a Number Pool

Request to get information about inbound references to a number pool. For example, this request will tell you numbers in the pool and Js Tags associated with the pool.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdInboundReferencesGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdInboundReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdNumbersGet()`

```php
accountIdNumberpoolsNumberPoolIdNumbersGet($accountId, $numberPoolId, $authorization): object
```

Get Numbers for a Number Pool

Request to view numbers associated with a number pool in your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdNumbersGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdNumbersInUseGet()`

```php
accountIdNumberpoolsNumberPoolIdNumbersInUseGet($accountId, $numberPoolId, $authorization): object
```

Get Numbers Currently In Use

Request to get information about numbers in a number pool that are currently being used for a call  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdNumbersInUseGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdNumbersInUseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete()`

```php
accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete($accountId, $numberPoolId, $numberId, $authorization): object
```

Delete a Specific Number from a Number Pool

Request to remove a specified number from a number pool  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools)  `numberId` The ID of the number you want to remove from the pool. You can find a list of numbers in the pool and their IDs using the \"GET Get Numbers for a Number Pool\" request above. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$numberId = 'numberId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete($accountId, $numberPoolId, $numberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **numberId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdNumbersPut()`

```php
accountIdNumberpoolsNumberPoolIdNumbersPut($accountId, $numberPoolId, $authorization, $body): object
```

Add a Specific Number to a Number Pool

Request to add a specific phone number that is already associated with your account to a number pool.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to add to the pool. Find <a href=#get-numbers-associated-with-your-account>numbers</a> associated with your account</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdNumbersPut($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdNumbersPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdNumbersVerifyGet()`

```php
accountIdNumberpoolsNumberPoolIdNumbersVerifyGet($accountId, $numberPoolId, $authorization): object
```

Verify Numbers in Number Pool

Request to verify numbers in a number pool and identify those that are no longer working and need to be removed or replaced.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdNumbersVerifyGet($accountId, $numberPoolId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdNumbersVerifyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdPatch()`

```php
accountIdNumberpoolsNumberPoolIdPatch($accountId, $numberPoolId, $authorization, $body): object
```

Edit Information for a Number Pool

Request to edit information about a number pool associated with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  This request can modify any of the setting explained in the description of the \"POST Create a New Number Pool\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdPatch($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdReplacePost()`

```php
accountIdNumberpoolsNumberPoolIdReplacePost($accountId, $numberPoolId, $authorization, $body): object
```

Replace Numbers In a Number Pool

Request to replace numbers in a pool. With this request, you cannot specify the numbers being replaced, just how many will be replaced with new numbers.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>count</code></td> <td>The number of phone numbers you want to release and replace in the number pool</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdReplacePost($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsNumberPoolIdShrinkPost()`

```php
accountIdNumberpoolsNumberPoolIdShrinkPost($accountId, $numberPoolId, $authorization, $body): object
```

Decrease Size of a Number Pool

Request to shrink the size of the number pool by releasing numbers from it.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  `numberPoolId` Find IDs of your [number pools](#get-information-about-number-pools) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>count</code></td> <td>The number of phone numbers you want to release from the number pool</td> </tr> <tr> <td><code>keepNumbers</code></td> <td>Boolean value. If set to true, numbers released from the number pool will still be kept in your account. If set to false the numbers will be removed from the number pool and from your account.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$numberPoolId = 'numberPoolId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsNumberPoolIdShrinkPost($accountId, $numberPoolId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsNumberPoolIdShrinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
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

## `accountIdNumberpoolsPost()`

```php
accountIdNumberpoolsPost($accountId, $authorization, $body): object
```

Create New Number Pool

Request to create a new number pool. This request only creates the number pool. In order to add numbers to the pool, once it is created you will need to use the \"PUT Allocate More Numbers to a Number Pool\" request below.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name you want to assign to the number pool</td> </tr> <tr> <td><code>assignmentSettings</code></td> <td><p>An object containing required and optional parameters.</p><p><b>NOTE:</b> <code>isTollFree</code> and <code>areaCode</code> only apply if the <code>countryCode</code> is set to \"US\".</td> </tr> <tr> <td></td> <td><p><code>countryCode</code> (required)</p><p>The code for the country you want to purchase numbers in.</p><hr><p><code>isTollFree</code> (required- US only)</p><p>Boolean value. If set to true, all numbers in the pool will be toll-free, which come with a higher per-minute charges. If set to false, local numbers will be used.</p><hr><p><code>areaCode</code> (optional- US only)</p><p>If desired, you can set a specific area code for the numbers in your new number pool.</p><hr><p><code>chargeAccountIfNeeded</code></p><p>Boolean value. If set to true, your credit card will be charged to allocate new numbers to the pool if your account balance is insufficient. If set to false, allocation will fail if your account balance is not sufficient. Recommended to set the value to true.</p></td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>holdNumberOutOfPoolInSeconds</code></td> <td>The length of time (in seconds) that Ringba locks a number to a user after they close their browser window.</td> </tr> <tr> <td><code>totalTimeForNumberOutOfPoolInSeconds</code></td> <td>The length of time (in seconds) that Ringba locks a number to a user if they leave their browser window open and idle.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumberpoolsPost($accountId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountIdNumberpoolsPost: ', $e->getMessage(), PHP_EOL;
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

## `accountidStatsNumberPoolsGet()`

```php
accountidStatsNumberPoolsGet($accountid, $authorization, $type): string
```

Get number pool stats

Request to get the stats for all the number pools in the account ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberPoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = 'accountid_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$type = {{type}}; // string | Optional  - If the <b>type</b> parameter is not added it will default to <b>day</b>. <h6>Options</h6> <b>day</b><br> Shows the stats  for the current day<br><br> <b>month</b><br> Shows the stats  for the current month

try {
    $result = $apiInstance->accountidStatsNumberPoolsGet($accountid, $authorization, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->accountidStatsNumberPoolsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **type** | **string**| Optional  - If the &lt;b&gt;type&lt;/b&gt; parameter is not added it will default to &lt;b&gt;day&lt;/b&gt;. &lt;h6&gt;Options&lt;/h6&gt; &lt;b&gt;day&lt;/b&gt;&lt;br&gt; Shows the stats  for the current day&lt;br&gt;&lt;br&gt; &lt;b&gt;month&lt;/b&gt;&lt;br&gt; Shows the stats  for the current month | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
