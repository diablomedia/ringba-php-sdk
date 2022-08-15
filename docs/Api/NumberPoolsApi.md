# Ringba\NumberPoolsApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addaSpecificNumbertoaNumberPool()**](NumberPoolsApi.md#addaSpecificNumbertoaNumberPool) | **PUT** /{accountId}/numberpools/{numberPoolId}/Numbers | Add a Specific Number to a Number Pool
[**allocateMoreNumberstoaNumberPool()**](NumberPoolsApi.md#allocateMoreNumberstoaNumberPool) | **PUT** /{accountId}/numberpools/{numberPoolId}/AllocateMoreNumbers | Allocate More Numbers to a Number Pool
[**assignaPublishertoaNumberPool()**](NumberPoolsApi.md#assignaPublishertoaNumberPool) | **PUT** /{accountId}/numberpools/{numberPoolId}/Affiliate | Assign a Publisher to a  Number Pool
[**createNewNumberPool()**](NumberPoolsApi.md#createNewNumberPool) | **POST** /{accountId}/numberpools | Create New Number Pool
[**decreaseSizeofaNumberPool()**](NumberPoolsApi.md#decreaseSizeofaNumberPool) | **POST** /{accountId}/numberpools/{numberPoolId}/Shrink | Decrease Size of a Number Pool
[**deleteaNumberPool()**](NumberPoolsApi.md#deleteaNumberPool) | **DELETE** /{accountId}/numberpools/{numberPoolId} | Delete a Number Pool
[**deleteaSpecificNumberfromaNumberPool()**](NumberPoolsApi.md#deleteaSpecificNumberfromaNumberPool) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Numbers/{numberId} | Delete a Specific Number from a Number Pool
[**deleteanAllocationJob()**](NumberPoolsApi.md#deleteanAllocationJob) | **DELETE** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Delete an Allocation Job
[**editInformationforaNumberPool()**](NumberPoolsApi.md#editInformationforaNumberPool) | **PATCH** /{accountId}/numberpools/{numberPoolId} | Edit Information for a Number Pool
[**getAllocationJobs()**](NumberPoolsApi.md#getAllocationJobs) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs | Get Allocation Jobs
[**getCountofAvailableNumbersinaNumberPool()**](NumberPoolsApi.md#getCountofAvailableNumbersinaNumberPool) | **GET** /{accountId}/numberpools/{numberPoolId}/FreeNumberCount | Get Count of Available Numbers in a Number Pool
[**getDetailsAboutaSingleNumberPool()**](NumberPoolsApi.md#getDetailsAboutaSingleNumberPool) | **GET** /{accountId}/numberpools/{numberPoolId} | Get Details About a Single Number Pool
[**getDetailsAboutanAllocationJob()**](NumberPoolsApi.md#getDetailsAboutanAllocationJob) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Get Details About an Allocation Job
[**getInboundReferencesforaNumberPool()**](NumberPoolsApi.md#getInboundReferencesforaNumberPool) | **GET** /{accountId}/numberpools/{numberPoolId}/InboundReferences | Get Inbound References for a Number Pool
[**getNumberPoolsAssociatedWithYourAccount()**](NumberPoolsApi.md#getNumberPoolsAssociatedWithYourAccount) | **GET** /{accountId}/numberpools | Get Number Pools Associated With Your Account
[**getNumbersCurrentlyInUse()**](NumberPoolsApi.md#getNumbersCurrentlyInUse) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/InUse | Get Numbers Currently In Use
[**getNumbersforaNumberPool()**](NumberPoolsApi.md#getNumbersforaNumberPool) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers | Get Numbers for a Number Pool
[**getnumberpoolstats()**](NumberPoolsApi.md#getnumberpoolstats) | **GET** /{accountid}/stats/numberPools | Get number pool stats
[**increaseSizeofaNumberPool()**](NumberPoolsApi.md#increaseSizeofaNumberPool) | **PUT** /{accountId}/numberpools/{numberPoolId}/Expand | Increase Size of a Number Pool
[**removeaPublisherfromaNumberPool()**](NumberPoolsApi.md#removeaPublisherfromaNumberPool) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Affiliate/{publisherId} | Remove a Publisher from a Number Pool
[**replaceNumbersInaNumberPool()**](NumberPoolsApi.md#replaceNumbersInaNumberPool) | **POST** /{accountId}/numberpools/{numberPoolId}/Replace | Replace Numbers In a Number Pool
[**verifyNumbersinNumberPool()**](NumberPoolsApi.md#verifyNumbersinNumberPool) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/Verify | Verify Numbers in Number Pool


## `addaSpecificNumbertoaNumberPool()`

```php
addaSpecificNumbertoaNumberPool($authorization, $accountId, $numberPoolId, $addaSpecificNumbertoaNumberPoolRequest): \Ringba\Model\AddaSpecificNumbertoaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$addaSpecificNumbertoaNumberPoolRequest = {"numberId":"{{numberId}}"}; // \Ringba\Model\AddaSpecificNumbertoaNumberPoolRequest | 

try {
    $result = $apiInstance->addaSpecificNumbertoaNumberPool($authorization, $accountId, $numberPoolId, $addaSpecificNumbertoaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->addaSpecificNumbertoaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **addaSpecificNumbertoaNumberPoolRequest** | [**\Ringba\Model\AddaSpecificNumbertoaNumberPoolRequest**](../Model/AddaSpecificNumbertoaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\AddaSpecificNumbertoaNumberPool**](../Model/AddaSpecificNumbertoaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `allocateMoreNumberstoaNumberPool()`

```php
allocateMoreNumberstoaNumberPool($authorization, $accountId, $numberPoolId, $allocateMoreNumberstoaNumberPoolRequest): \Ringba\Model\AllocateMoreNumbersFailed
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$allocateMoreNumberstoaNumberPoolRequest = {"allocation":3,"chargeAccountIfNeeded":false}; // \Ringba\Model\AllocateMoreNumberstoaNumberPoolRequest | 

try {
    $result = $apiInstance->allocateMoreNumberstoaNumberPool($authorization, $accountId, $numberPoolId, $allocateMoreNumberstoaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->allocateMoreNumberstoaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **allocateMoreNumberstoaNumberPoolRequest** | [**\Ringba\Model\AllocateMoreNumberstoaNumberPoolRequest**](../Model/AllocateMoreNumberstoaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\AllocateMoreNumbersFailed**](../Model/AllocateMoreNumbersFailed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignaPublishertoaNumberPool()`

```php
assignaPublishertoaNumberPool($authorization, $accountId, $numberPoolId, $assignaPublishertoaNumberPoolRequest): \Ringba\Model\AssignaPublishertoaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$assignaPublishertoaNumberPoolRequest = {"affiliateId":"{{publisherId}}"}; // \Ringba\Model\AssignaPublishertoaNumberPoolRequest | 

try {
    $result = $apiInstance->assignaPublishertoaNumberPool($authorization, $accountId, $numberPoolId, $assignaPublishertoaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->assignaPublishertoaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **assignaPublishertoaNumberPoolRequest** | [**\Ringba\Model\AssignaPublishertoaNumberPoolRequest**](../Model/AssignaPublishertoaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\AssignaPublishertoaNumberPool**](../Model/AssignaPublishertoaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewNumberPool()`

```php
createNewNumberPool($authorization, $accountId, $createNewNumberPoolRequest): \Ringba\Model\CreateNewNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$createNewNumberPoolRequest = {"name":"New new Number Pool","assignmentSettings":{"countryCode":"US","isTollFree":false,"areaCode":"213","chargeAccountIfNeeded":true},"holdNumberOutOfPoolInSeconds":30,"totalTimeForNumberOutOfPoolInSeconds":300}; // \Ringba\Model\CreateNewNumberPoolRequest | 

try {
    $result = $apiInstance->createNewNumberPool($authorization, $accountId, $createNewNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->createNewNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **createNewNumberPoolRequest** | [**\Ringba\Model\CreateNewNumberPoolRequest**](../Model/CreateNewNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\CreateNewNumberPool**](../Model/CreateNewNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `decreaseSizeofaNumberPool()`

```php
decreaseSizeofaNumberPool($authorization, $accountId, $numberPoolId, $decreaseSizeofaNumberPoolRequest): \Ringba\Model\DecreaseSizeofaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$decreaseSizeofaNumberPoolRequest = {"count":1,"keepNumbers":true}; // \Ringba\Model\DecreaseSizeofaNumberPoolRequest | 

try {
    $result = $apiInstance->decreaseSizeofaNumberPool($authorization, $accountId, $numberPoolId, $decreaseSizeofaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->decreaseSizeofaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **decreaseSizeofaNumberPoolRequest** | [**\Ringba\Model\DecreaseSizeofaNumberPoolRequest**](../Model/DecreaseSizeofaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\DecreaseSizeofaNumberPool**](../Model/DecreaseSizeofaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaNumberPool()`

```php
deleteaNumberPool($force, $keepNumbers, $authorization, $accountId, $numberPoolId): \Ringba\Model\DeleteaNumberPool
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
$force = false; // bool | Forces request even if the number pool is being used elsewhere in your account.
$keepNumbers = true; // bool | Keep numbers in your account after the number pool has been removed
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->deleteaNumberPool($force, $keepNumbers, $authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->deleteaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force** | **bool**| Forces request even if the number pool is being used elsewhere in your account. |
 **keepNumbers** | **bool**| Keep numbers in your account after the number pool has been removed |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteaNumberPool**](../Model/DeleteaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaSpecificNumberfromaNumberPool()`

```php
deleteaSpecificNumberfromaNumberPool($authorization, $accountId, $numberPoolId, $numberId): \Ringba\Model\DeleteaSpecificNumberfromaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$numberId = 'numberId_example'; // string | 

try {
    $result = $apiInstance->deleteaSpecificNumberfromaNumberPool($authorization, $accountId, $numberPoolId, $numberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->deleteaSpecificNumberfromaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **numberId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteaSpecificNumberfromaNumberPool**](../Model/DeleteaSpecificNumberfromaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteanAllocationJob()`

```php
deleteanAllocationJob($authorization, $accountId, $numberPoolId, $allocationJobId): \Ringba\Model\DeleteanAllocationJob
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$allocationJobId = 'allocationJobId_example'; // string | 

try {
    $result = $apiInstance->deleteanAllocationJob($authorization, $accountId, $numberPoolId, $allocationJobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->deleteanAllocationJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **allocationJobId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteanAllocationJob**](../Model/DeleteanAllocationJob.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editInformationforaNumberPool()`

```php
editInformationforaNumberPool($authorization, $accountId, $numberPoolId, $editInformationforaNumberPoolRequest): \Ringba\Model\EditInformationforaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$editInformationforaNumberPoolRequest = {"name":"New Name","holdNumberOutOfPoolInSeconds":45,"totalTimeForNumberOutOfPoolInSeconds":200,"poolSize":1,"assignmentSettings":{"countryCode":"US","isTollFree":false,"areaCode":"213","chargeAccountIfNeeded":true}}; // \Ringba\Model\EditInformationforaNumberPoolRequest | 

try {
    $result = $apiInstance->editInformationforaNumberPool($authorization, $accountId, $numberPoolId, $editInformationforaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->editInformationforaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **editInformationforaNumberPoolRequest** | [**\Ringba\Model\EditInformationforaNumberPoolRequest**](../Model/EditInformationforaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\EditInformationforaNumberPool**](../Model/EditInformationforaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllocationJobs()`

```php
getAllocationJobs($authorization, $accountId, $numberPoolId): \Ringba\Model\GetAllocationJobs
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->getAllocationJobs($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getAllocationJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\GetAllocationJobs**](../Model/GetAllocationJobs.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountofAvailableNumbersinaNumberPool()`

```php
getCountofAvailableNumbersinaNumberPool($authorization, $accountId, $numberPoolId): \Ringba\Model\GetCountofAvailableNumbersinaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->getCountofAvailableNumbersinaNumberPool($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getCountofAvailableNumbersinaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\GetCountofAvailableNumbersinaNumberPool**](../Model/GetCountofAvailableNumbersinaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutaSingleNumberPool()`

```php
getDetailsAboutaSingleNumberPool($authorization, $accountId, $numberPoolId): \Ringba\Model\GetDetailsAboutaSingleNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->getDetailsAboutaSingleNumberPool($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getDetailsAboutaSingleNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsAboutaSingleNumberPool**](../Model/GetDetailsAboutaSingleNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutanAllocationJob()`

```php
getDetailsAboutanAllocationJob($authorization, $accountId, $numberPoolId, $allocationJobId): \Ringba\Model\GetDetailsAboutanAllocationJob
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$allocationJobId = 'allocationJobId_example'; // string | 

try {
    $result = $apiInstance->getDetailsAboutanAllocationJob($authorization, $accountId, $numberPoolId, $allocationJobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getDetailsAboutanAllocationJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **allocationJobId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsAboutanAllocationJob**](../Model/GetDetailsAboutanAllocationJob.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundReferencesforaNumberPool()`

```php
getInboundReferencesforaNumberPool($authorization, $accountId, $numberPoolId): \Ringba\Model\GetInboundReferencesforaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->getInboundReferencesforaNumberPool($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getInboundReferencesforaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\GetInboundReferencesforaNumberPool**](../Model/GetInboundReferencesforaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumberPoolsAssociatedWithYourAccount()`

```php
getNumberPoolsAssociatedWithYourAccount($authorization, $accountId): \Ringba\Model\GetNumberPoolsAssociatedWithYourAccount
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getNumberPoolsAssociatedWithYourAccount($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getNumberPoolsAssociatedWithYourAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetNumberPoolsAssociatedWithYourAccount**](../Model/GetNumberPoolsAssociatedWithYourAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumbersCurrentlyInUse()`

```php
getNumbersCurrentlyInUse($authorization, $accountId, $numberPoolId): \Ringba\Model\GetNumbersCurrentlyInUse
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->getNumbersCurrentlyInUse($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getNumbersCurrentlyInUse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\GetNumbersCurrentlyInUse**](../Model/GetNumbersCurrentlyInUse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumbersforaNumberPool()`

```php
getNumbersforaNumberPool($authorization, $accountId, $numberPoolId): \Ringba\Model\GetNumbersforaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->getNumbersforaNumberPool($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getNumbersforaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\GetNumbersforaNumberPool**](../Model/GetNumbersforaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getnumberpoolstats()`

```php
getnumberpoolstats($type, $authorization, $accountid): \Ringba\Model\Getnumberpoolwithmisses
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
$type = {{type}}; // string | Optional  - If the <b>type</b> parameter is not added it will default to <b>day</b>. <h6>Options</h6> <b>day</b><br> Shows the stats  for the current day<br><br> <b>month</b><br> Shows the stats  for the current month
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountid = 'accountid_example'; // string | 

try {
    $result = $apiInstance->getnumberpoolstats($type, $authorization, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->getnumberpoolstats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Optional  - If the &lt;b&gt;type&lt;/b&gt; parameter is not added it will default to &lt;b&gt;day&lt;/b&gt;. &lt;h6&gt;Options&lt;/h6&gt; &lt;b&gt;day&lt;/b&gt;&lt;br&gt; Shows the stats  for the current day&lt;br&gt;&lt;br&gt; &lt;b&gt;month&lt;/b&gt;&lt;br&gt; Shows the stats  for the current month |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\Getnumberpoolwithmisses**](../Model/Getnumberpoolwithmisses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `increaseSizeofaNumberPool()`

```php
increaseSizeofaNumberPool($authorization, $accountId, $numberPoolId, $increaseSizeofaNumberPoolRequest): \Ringba\Model\IncreaseSizeofaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$increaseSizeofaNumberPoolRequest = {"allocation":1,"chargeAccountIfNeeded":false}; // \Ringba\Model\IncreaseSizeofaNumberPoolRequest | 

try {
    $result = $apiInstance->increaseSizeofaNumberPool($authorization, $accountId, $numberPoolId, $increaseSizeofaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->increaseSizeofaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **increaseSizeofaNumberPoolRequest** | [**\Ringba\Model\IncreaseSizeofaNumberPoolRequest**](../Model/IncreaseSizeofaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\IncreaseSizeofaNumberPool**](../Model/IncreaseSizeofaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeaPublisherfromaNumberPool()`

```php
removeaPublisherfromaNumberPool($authorization, $accountId, $numberPoolId, $publisherId): \Ringba\Model\RemoveaPublisherfromaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->removeaPublisherfromaNumberPool($authorization, $accountId, $numberPoolId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->removeaPublisherfromaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\RemoveaPublisherfromaNumberPool**](../Model/RemoveaPublisherfromaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceNumbersInaNumberPool()`

```php
replaceNumbersInaNumberPool($authorization, $accountId, $numberPoolId, $replaceNumbersInaNumberPoolRequest): \Ringba\Model\ReplaceNumbersInaNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 
$replaceNumbersInaNumberPoolRequest = {"count":2}; // \Ringba\Model\ReplaceNumbersInaNumberPoolRequest | 

try {
    $result = $apiInstance->replaceNumbersInaNumberPool($authorization, $accountId, $numberPoolId, $replaceNumbersInaNumberPoolRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->replaceNumbersInaNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |
 **replaceNumbersInaNumberPoolRequest** | [**\Ringba\Model\ReplaceNumbersInaNumberPoolRequest**](../Model/ReplaceNumbersInaNumberPoolRequest.md)|  |

### Return type

[**\Ringba\Model\ReplaceNumbersInaNumberPool**](../Model/ReplaceNumbersInaNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyNumbersinNumberPool()`

```php
verifyNumbersinNumberPool($authorization, $accountId, $numberPoolId): \Ringba\Model\VerifyNumbersinNumberPool
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$numberPoolId = 'numberPoolId_example'; // string | 

try {
    $result = $apiInstance->verifyNumbersinNumberPool($authorization, $accountId, $numberPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolsApi->verifyNumbersinNumberPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **numberPoolId** | **string**|  |

### Return type

[**\Ringba\Model\VerifyNumbersinNumberPool**](../Model/VerifyNumbersinNumberPool.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
