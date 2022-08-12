# Ringba\TargetsApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignTargettoBuyer()**](TargetsApi.md#assignTargettoBuyer) | **PUT** /{accountId}/targets/{targetId}/Buyer | Assign Target to Buyer
[**checkDuplicateTargets()**](TargetsApi.md#checkDuplicateTargets) | **POST** /{accountId}/targets/isDuplicate | Check Duplicate Targets
[**createNewTarget()**](TargetsApi.md#createNewTarget) | **POST** /{accountId}/targets | Create New Target
[**deleteBuyerFromTarget()**](TargetsApi.md#deleteBuyerFromTarget) | **DELETE** /{accountId}/targets/{targetId}/Buyer/{buyerId} | Delete Buyer From Target
[**deleteTarget()**](TargetsApi.md#deleteTarget) | **DELETE** /{accountId}/targets/{targetId} | Delete Target
[**getDetailsAboutaSpecificTarget()**](TargetsApi.md#getDetailsAboutaSpecificTarget) | **GET** /{accountId}/targets/{targetId} | Get Details About a Specific Target
[**getInboundReferencesforaSpecificTarget()**](TargetsApi.md#getInboundReferencesforaSpecificTarget) | **GET** /{accountId}/targets/{targetId}/InboundReferences | Get Inbound References for a Specific Target
[**getStatsforaSpecificTarget()**](TargetsApi.md#getStatsforaSpecificTarget) | **GET** /{accountId}/targets/{targetId}/Counts | Get Stats for a Specific Target
[**getTargets()**](TargetsApi.md#getTargets) | **GET** /{accountId}/targets | Get Targets
[**resetCountforaSpecificTarget()**](TargetsApi.md#resetCountforaSpecificTarget) | **DELETE** /{accountId}/targets/{targetId}/ResetCount | Reset Count for a Specific Target
[**updateTarget()**](TargetsApi.md#updateTarget) | **PATCH** /{accountId}/targets/{targetId} | Update Target


## `assignTargettoBuyer()`

```php
assignTargettoBuyer($authorization, $accountId, $targetId, $assignTargettoBuyerRequest): \Ringba\Model\AddBuyertoTarget
```

Assign Target to Buyer

Request to assign a target to a specific buyer. To complete this request, the body must contain a valid ``buyerId``. Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 
$assignTargettoBuyerRequest = {"buyerId":"{{buyerId}}"}; // \Ringba\Model\AssignTargettoBuyerRequest | 

try {
    $result = $apiInstance->assignTargettoBuyer($authorization, $accountId, $targetId, $assignTargettoBuyerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->assignTargettoBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |
 **assignTargettoBuyerRequest** | [**\Ringba\Model\AssignTargettoBuyerRequest**](../Model/AssignTargettoBuyerRequest.md)|  |

### Return type

[**\Ringba\Model\AddBuyertoTarget**](../Model/AddBuyertoTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDuplicateTargets()`

```php
checkDuplicateTargets($authorization, $accountId, $checkDuplicateTargetsRequest): \Ringba\Model\CheckDuplicateTargetswithnonDuplicatetarget
```

Check Duplicate Targets

Request to check if a target is a duplicate of another target. This will check if the name, phone number, or SIP URI matches those of any other target in your account.  ### Path Variables <hr>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr>  The body of this request needs to have the entire object for the target you are interested in. Use the [GET Get Targets](#get-and-edit-information-about-your-targets) request above to view a list of all the targets associated with your account. Find the target you are interested in within the \"targets\" array in the response and copy it into the body of this request. See the examples to see how the request body should be formatted. <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$checkDuplicateTargetsRequest = {"id":"TAa58f7dbd65be4b9f938fd4172d63ce57","targetGroupId":"","instructions":{"connectionTimeOut":0,"callType":"number","number":"+18885852294"},"isHighRateTarget":false,"highRateCost":0.0,"ringbaNumberId":"PNZFWQO0","targetCallIncrement":"onConvert","_SearchNumer":"number:+18885852294","capsMigrated":true,"owner":{"accountId":"RA25107ee2411049989cd8672852278bdb","id":"BUec50e9c7fa294283ba10a35893b13198","userIds":["1f14ed10-c279-4897-b033-7e4d2db8a0c5"],"canPauseTargets":true,"canSetConcurrencyCaps":false,"canDisputeConversions":true,"capacity":{"timeZoneId":"UTC","allTimeSumCap":-1.0,"monthlySumCap":-1.0,"dailySumCap":-1.0,"hourlySumCap":-1.0,"allTimeCap":-1,"monthlyCap":-1,"dailyCap":-1,"hourlyCap":-1},"name":"Example Buyer Co.","enabled":true,"version":1},"conversionTimerOffset":0,"schedule":{"concurrencyCap":-1,"timeZoneId":"Pacific Standard Time","allTimeSumCap":-1.0,"monthlySumCap":-1.0,"dailySumCap":-1.0,"hourlySumCap":-1.0,"allTimeCap":-1,"monthlyCap":-1,"dailyCap":-1,"hourlyCap":-1},"blockRecordings":false,"name":"Ringba Test Target - Copy","accountId":"RA25107ee2411049989cd8672852278bdb","enabled":true,"version":1}; // \Ringba\Model\CheckDuplicateTargetsRequest | 

try {
    $result = $apiInstance->checkDuplicateTargets($authorization, $accountId, $checkDuplicateTargetsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->checkDuplicateTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **checkDuplicateTargetsRequest** | [**\Ringba\Model\CheckDuplicateTargetsRequest**](../Model/CheckDuplicateTargetsRequest.md)|  |

### Return type

[**\Ringba\Model\CheckDuplicateTargetswithnonDuplicatetarget**](../Model/CheckDuplicateTargetswithnonDuplicatetarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTarget()`

```php
createNewTarget($authorization, $accountId, $createNewTargetRequest): \Ringba\Model\CreateNewTargetWithPhoneNumber
```

Create New Target

Request to create a new target.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>name</code></td>         <td>The name of your new target to make it easy to identify later</td>     </tr>     <tr>         <td><code>schedule</code></td>         <td>An object containing the following parameters:</td>     </tr>     <tr>         <td></td>         <td><p><code>timeZoneId</code></p><p>The only required parameter for the <code>schedule</code> object and contains the time zone for the target</p><p>* See the <a href=\"#target-schedule-table\">Schedule Table</a> below for more information about other parameters that can be included in the <code>schedule</code> object.</p></td>     </tr>     <tr>         <td><code>instructions</code></td>         <td><p>An object containing additional parameters. There are two options for the instructions depending if the target is going to be a <b>phone number</b> or <b>SIP URI</b>.</p><p>* See the two tables below for more information about the <code>instructions</code> object</p></td>     </tr> </table>  <table>     <tr>         <td>If using a <b>phone number</b> the <code>instructions</code> object has the following parameters:</td>         <td></td>     </tr>     <tr>         <td><code>callType</code></td>         <td>Has a value of \"number\"</td>     </tr>     <tr>         <td><code>number</code></td>         <td>The phone number of the target you are creating</td>     </tr>     <tr>         <td><code>connectionTimeout</code></td>         <td>The number of seconds to wait before re-routing to another target if this target does not answer</td>     </tr> </table>  <table>     <tr>         <td>If using a <b>SIP URI</b> the <code>instructions</code> object has the following parameters:</td>         <td></td>     </tr>     <tr>         <td><code>callType</code></td>         <td>Has a value of \"sip\"</td>     </tr>     <tr>         <td><code>connectionTimeout</code></td>         <td>The number of seconds to wait before re-routing to another target if this target does not answer</td>     </tr>     <tr>         <td><code>sip</code></td>         <td>Is an object containing the following parameters:</td>     </tr>     <tr>         <td></td>         <td><p><code>number</code></p><p>The address for the SIP URI</p><hr><p><code>userName</code></p><p>The user name used to access your SIP URI</p><hr><p><code>password</code></p><p>The password used to access your SIP URI</p></td>     </tr> </table>  __NOTE:__ See the examples to the right called \"Create Target With Phone Number\" and \"Create Target With SIP URI\" to the right to compare the differences in the ``instructions`` field.   #### Optional Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>subId</code></td>         <td>ID for tracking this target</td>     </tr>     <tr>         <td><code>owner</code></td>         <td>object containing the <code>id</code> of the Buyer you want this target assigned to. Find a list of <a href=\"#get-and-edit-information-about-buyers-associated-with-your-account\">buyerIds</a></td>     </tr>     <tr>         <td><code>blockRecordings</code></td>         <td>Boolean value for whether or not the target is blocked from recording calls</td>     </tr>     <tr>         <td><code>targetCallIncrement</code></td>         <td>Determines at what point a call to this target will count toward the target's capacity limits. The parameter has three options:<ul><li>\"onConnect\" will count any call that connected</li><li>\"onConvert\" will count any call that is converted based on the buyer's specifications</li><li>\"onRevenue\" will count any call that leads to revenue for the buyer</li></ul></td>     </tr> </table>  ##### Target Schedule Table <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>hoursOfOperation</code></td>         <td>sets the hours of operation for the target. This parameter is an array of 7 objects, one for each day starting with Sunday. Each day object contains the following parameters:</td>     </tr>     <tr>         <td></td>         <td><p><code>openTime</code></p><p>Object with parameters <code>hour</code> and <code>minute</code> to decide what hours (in 24 hour format) the target opens for business</p><hr><p><code>closeTime</code></p><p>Object with parameters <code>hour</code> and <code>minute</code> to decide what hours (in 24 hour format) the target closes for business</p><hr><p><code>inverted</code></p><p>Set this value to \"false\"</p><hr><p><code>isClosed</code></p><p>If set to \"true\" this will set the target to \"closed\" for the entire day, regardless of the values for <code>openTime</code> or <code>closeTime</code>.</p><hr><p><b>NOTE:</b> See the \"Create New Target With Hours of Operation\" example to the right to see how to set the hours of operation to Monday-Friday 9AM-5PM and closed Saturday and Sunday.</p></td>     </tr>     <tr>         <td><code>allTimeCap</code></td>         <td>Limits the total number of calls that will be routed to this target</td>     </tr>     <tr>         <td><code>monthlyCap</code></td>         <td>Limits the number of calls routed to this target per month</td>     </tr>     <tr>         <td><code>dailyCap</code></td>         <td>Limits the number of calls routed to this target per day</td>     </tr>     <tr>         <td><code>hourlyCap</code></td>         <td>Limits the number of call routed to this target per hour</td>     </tr>     <tr>         <td><code>concurrencyCap</code></td>         <td>Limits the number of simultaneous live calls for this target</td>     </tr>     <tr>         <td><code>callConcurrencyMatrix</code></td>         <td>An array containing 7 sub-arrays, one for each day of the week starting with Sunday. Each sub-array contains 24 values, one for each hour starting with 12am. Each value determines the concurrencyCap for that day and hour. See the \"Create New Target With Concurrency Matrix\" example to the right to see how to limit the capacity to 2 calls Monday-Friday 9AM-5PM while leaving all other times unlimited.</td>     </tr> </table>  __NOTE:__ To make an unlimited cap for any of these parameters, use a value of \"-1\".<br> __NOTE:__ See the example to the right called \"Create Target With All Available Parameters\" to see how to write a request using all required and optional parameters.   <!-- ``subId`` id for tracking this target<br> ``owner`` object containing the ``id`` of the Buyer you want this target assigned to. Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)<br> ``blockRecordings`` boolean value for whether or not the target is blocked from recording calls<br> ``targetCallIncrement`` determines at what point a call to this target will count toward the target's capacity limits. The parameter has three options:<br> * \"onConnect\" will count any call that connected<br> * \"onConvert\" will count any call that is converted based on the buyer's specifications<br> * \"onRevenue\" will count any call that leads to revenue for the buyer<br>  Optional parameters within the ``schedule`` parameter:<br> > ``hoursOfOperation`` sets the hours of operation for the target. This parameter is an array of 7 objects, one for each day starting wiit Sunday. Each day object contains the following parameters:<br> > > ``openTime`` object with parameters ``hour`` and ``minute`` to decide what hours (in 24 hour format) the target opens for business<br> > > ``closeTime`` object with parameters ``hour`` and ``minute`` to decide what hours (in 24 hour format) the target closes for business<br> > > ``inverted`` set this value to \"false\"<br> > > ``isClosed`` will set the target to \"closed\" for the entire day, regardless of ``openTime`` or ``closedTime`` values<br> > > __NOTE:__ See the \"Create New Target With Hours of Operation\" example to the right to see how to set the hours of operation to Monday-Friday 9AM-5PM and closed Saturday and Sunday.<br>  > ``allTimeCap`` limits the total number of calls that will be routed to this target<br> > ``monthlyCap`` limits the number of calls routed to this target per month<br> > ``dailyCap`` limits the number of calls routed to this target per day<br> > ``hourlyCap`` limits the number of call routed to this target per hour<br> > ``concurrencyCap`` limits the number of simultaneous live calls for this target<br> > ``callConcurrencyMatrix`` array containing 7 sub-arrays, one for each day of the week starting with Sunday. Each sub-array contains 24 values, one for each hour starting with 12am. Each value determines the concurrencyCap for that day and hour. See the \"Create New Target With Concurrency Matrix\" example to the right to see how to limit the capacity to 2 calls Monday-Friday 9AM-5PM while leaving all other times unlimited. <br> > __NOTE:__ To make an unlimited cap for any of these parameters, use a value of \"-1\".<br>   <!-- ``name`` the name of your new target to make it easy to identify later.<br> ``schedule`` an object containing additional parameters: > ``timeZoneId`` is the only required parameter for the ``schedule``object and contains the time zone for the target. > see \"Optional Parameters\" below for more information about other parameters that can be included in the ``schedule`` object.<br>  ``instructions`` an object containing additional parameters. There are two options for the instructions depending if the target is going to be a phone number or SIP URI.<br> > If using a __phone number__ the ``instructions`` field has the following parameters:<br> > ``callType`` has a value of \"number\"<br> > ``number`` is the phone number of the target you are creating<br> > ``connectionTimeOut`` the number of seconds to wait before re-routing to another target if this target does not answer<br>   > If using a __SIP URI__ the ``instructions`` field has the following parameters:<br> > ``callType`` has a value of \"sip\"<br> > ``connectionTimeOut`` the number of seconds to wait before re-routing to another target if this target does not answer<br> > ``sip`` is an object containing the following parameters:<br> > > ``number`` is the address for the SIP URI<br> > > ``userName`` is the user name used to access your SIP URI<br> > > ``password`` is the password used to access your SIP URI<br>  > __NOTE:__ See the examples to the right called \"Create Target With Phone Number\" and \"Create Target With SIP URI\" to the right to compare the differences in the ``instructions`` field. --> <!-- __NOTE:__ See the example to the right called \"Create Target With All Available Parameters\" to see how to write a request using all required and optional parameters -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$createNewTargetRequest = {"name":"New Target","subId":"New","instructions":{"callType":"number","number":"+13075551234","connectionTimeOut":0},"schedule":{"timeZoneId":"Hawaiian Standard Time"}}; // \Ringba\Model\CreateNewTargetRequest | 

try {
    $result = $apiInstance->createNewTarget($authorization, $accountId, $createNewTargetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->createNewTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **createNewTargetRequest** | [**\Ringba\Model\CreateNewTargetRequest**](../Model/CreateNewTargetRequest.md)|  |

### Return type

[**\Ringba\Model\CreateNewTargetWithPhoneNumber**](../Model/CreateNewTargetWithPhoneNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuyerFromTarget()`

```php
deleteBuyerFromTarget($authorization, $accountId, $targetId, $buyerId): \Ringba\Model\DeleteBuyerFromTarget
```

Delete Buyer From Target

Request to unassign a specific target from the buyer to which it was assigned. This request will not delete the target from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets) <br> ``buyerId`` Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 
$buyerId = 'buyerId_example'; // string | 

try {
    $result = $apiInstance->deleteBuyerFromTarget($authorization, $accountId, $targetId, $buyerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->deleteBuyerFromTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |
 **buyerId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteBuyerFromTarget**](../Model/DeleteBuyerFromTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTarget()`

```php
deleteTarget($authorization, $accountId, $targetId): \Ringba\Model\DeleteTarget
```

Delete Target

Request to delete a target from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 

try {
    $result = $apiInstance->deleteTarget($authorization, $accountId, $targetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->deleteTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteTarget**](../Model/DeleteTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutaSpecificTarget()`

```php
getDetailsAboutaSpecificTarget($authorization, $accountId, $targetId): \Ringba\Model\GetDetailsAboutaSpecificTarget
```

Get Details About a Specific Target

Request to retrieve more information about an individual target. This request will automatically include the stats for that target.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 

try {
    $result = $apiInstance->getDetailsAboutaSpecificTarget($authorization, $accountId, $targetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->getDetailsAboutaSpecificTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsAboutaSpecificTarget**](../Model/GetDetailsAboutaSpecificTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundReferencesforaSpecificTarget()`

```php
getInboundReferencesforaSpecificTarget($authorization, $accountId, $targetId): \Ringba\Model\GetInboundReferencesforaSpecificTarget
```

Get Inbound References for a Specific Target

See which campaigns on your account reference a target. Multiple campaigns can reference the same target.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 

try {
    $result = $apiInstance->getInboundReferencesforaSpecificTarget($authorization, $accountId, $targetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->getInboundReferencesforaSpecificTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |

### Return type

[**\Ringba\Model\GetInboundReferencesforaSpecificTarget**](../Model/GetInboundReferencesforaSpecificTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatsforaSpecificTarget()`

```php
getStatsforaSpecificTarget($authorization, $accountId, $targetId): \Ringba\Model\GetStatsforaSpecificTarget
```

Get Stats for a Specific Target

Request to display only the stats for a specific target.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 

try {
    $result = $apiInstance->getStatsforaSpecificTarget($authorization, $accountId, $targetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->getStatsforaSpecificTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |

### Return type

[**\Ringba\Model\GetStatsforaSpecificTarget**](../Model/GetStatsforaSpecificTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargets()`

```php
getTargets($authorization, $accountId): \Ringba\Model\GetTargets
```

Get Targets

Request to retrieve details about all targets associated with the account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Optional Query Parameters <hr> <br>  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>includeStats=true</code></td>         <td>Can be added as a query parameter at the end of the url following a ? (question mark) in order to add stats for the targets</td>     </tr> </table> <br>  __NOTE:__ If the stats are included, an object containing stats for all the targets will be displayed _after_ the array containing details about all targets. See the \"Get Targets With Stats\" example to the right. <!-- `includeStats=true` can be added as a query parameter at the end of the url following a ? (question mark).<br> <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getTargets($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->getTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetTargets**](../Model/GetTargets.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetCountforaSpecificTarget()`

```php
resetCountforaSpecificTarget($authorization, $accountId, $targetId): \Ringba\Model\ResetCountforaSpecificTarget
```

Reset Count for a Specific Target

Request to reset the counts for a target. This will reset all counts to zero for that target.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 

try {
    $result = $apiInstance->resetCountforaSpecificTarget($authorization, $accountId, $targetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->resetCountforaSpecificTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |

### Return type

[**\Ringba\Model\ResetCountforaSpecificTarget**](../Model/ResetCountforaSpecificTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTarget()`

```php
updateTarget($authorization, $accountId, $targetId, $body): \Ringba\Model\UpdateTarget
```

Update Target

Request to update information about a specific target.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)  ### Request Body <hr> <br>  Please see the \"POST Create New Target\" request above for an explanation of the parameter available. Any of the required or optional parameters can be modified using this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetId = 'targetId_example'; // string | 
$body = // {
//     "transactionId": "TRf2ca4bb9-a6aa-4b44-b665-569b54c25887",
//     "targetId": "TA1183b884e2df4541ad9651c168e3bab9",
//     "target": {
//         "highRateCPM": 0.0,
//         "instructions": {
//             "connectionTimeOut": 0,
//             "callType": "number",
//             "number": "+18442757927"
//         },
//         "isHighRateTarget": false,
//         "targetCallIncrement": "onConvert",
//         "conversionTimerOffset": 0,
//         "schedule": {
//             "concurrencyCap": -1,
//             "timeZoneId": "Mountain Standard Time",
//             "allTimeSumCap": -1.0,
//             "monthlySumCap": -1.0,
//             "dailySumCap": -1.0,
//             "hourlySumCap": -1.0,
//             "allTimeCap": -1,
//             "monthlyCap": -1,
//             "dailyCap": -1,
//             "hourlyCap": -1
//         },
//         "blockRecordings": false,
//         "id": "TA1183b884e2df4541ad9651c168e3bab9",
//         "name": "Test Target Three",
//         "accountId": "RA25107ee2411049989cd8672852278bdb",
//         "enabled": true,
//         "version": 1
//     }
// }
{
    "name": "Test Target Three"
}; // string | 

try {
    $result = $apiInstance->updateTarget($authorization, $accountId, $targetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->updateTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetId** | **string**|  |
 **body** | **string**|  |

### Return type

[**\Ringba\Model\UpdateTarget**](../Model/UpdateTarget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
