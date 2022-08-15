# Ringba\TargetGroupsApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRemoveMultipleTargetstoFromTargetGroup()**](TargetGroupsApi.md#addRemoveMultipleTargetstoFromTargetGroup) | **PATCH** /{accountId}/targetgroups/{targetGroupId}/targets/bulkUpdate | Add/Remove Multiple Targets to/from Target Group
[**addSingleTargettoTargetGroup()**](TargetGroupsApi.md#addSingleTargettoTargetGroup) | **PATCH** /{accountId}/TargetGroups/{targetGroupId}/Targets | Add Single Target to Target Group
[**assignTargetGrouptoaBuyer()**](TargetGroupsApi.md#assignTargetGrouptoaBuyer) | **PUT** /{accountId}/TargetGroups/{targetGroupId}/Buyer | Assign Target Group to a Buyer
[**createTargetGroup()**](TargetGroupsApi.md#createTargetGroup) | **POST** /{accountId}/targetgroups | Create Target Group
[**deleteSingleTargetfromTargetGroup()**](TargetGroupsApi.md#deleteSingleTargetfromTargetGroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Targets/{targetId} | Delete Single Target from Target Group
[**deleteTargetGroup()**](TargetGroupsApi.md#deleteTargetGroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId} | Delete Target Group
[**editTargetGroup()**](TargetGroupsApi.md#editTargetGroup) | **PATCH** /{accountId}/TargetGroups/{targetGroupId} | Edit Target Group
[**getDetailsaboutSpecificTargetGroup()**](TargetGroupsApi.md#getDetailsaboutSpecificTargetGroup) | **GET** /{accountId}/TargetGroups/{targetGroupId} | Get Details about Specific Target Group
[**getInboundReferencesforSpecificTargetGroup()**](TargetGroupsApi.md#getInboundReferencesforSpecificTargetGroup) | **GET** /{accountId}/TargetGroups/{targetGroupId}/InboundReferences | Get Inbound References for Specific Target Group
[**getStatsforSpecificTargetGroup()**](TargetGroupsApi.md#getStatsforSpecificTargetGroup) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Counts | Get Stats for Specific Target Group
[**getTargetGroups()**](TargetGroupsApi.md#getTargetGroups) | **GET** /{accountId}/TargetGroups | Get Target Groups
[**getTargetsforTargetGroup()**](TargetGroupsApi.md#getTargetsforTargetGroup) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Targets | Get Targets for Target Group
[**removeBuyerfromTargetGroup()**](TargetGroupsApi.md#removeBuyerfromTargetGroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Buyer/{buyerId} | Remove Buyer from Target Group
[**resetCountsforTargetGroup()**](TargetGroupsApi.md#resetCountsforTargetGroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/ResetCount | Reset Counts for Target Group


## `addRemoveMultipleTargetstoFromTargetGroup()`

```php
addRemoveMultipleTargetstoFromTargetGroup($authorization, $accountId, $targetGroupId, $addRemoveMultipleTargetstofromTargetGroupRequest): \Ringba\Model\RemoveMultipleTargetsfromTargetGroup
```

Add/Remove Multiple Targets to/from Target Group

Request to add or remove multiple targets to or from a target group. To complete this request, the body must contain at least one valid ``targetId`` in either the ``targetAddIds`` array or the ``targetRemoveIds``. Find a list of your [targetIds](#get-and-edit-information-about-your-targets).  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 
$addRemoveMultipleTargetstofromTargetGroupRequest = {"targetAddIds":["TAfa4c37e44a274af8b8927ed67d536d89","TA1183b884e2df4541ad9651c168e3bab9"],"targetRemoveIds":[]}; // \Ringba\Model\AddRemoveMultipleTargetstofromTargetGroupRequest | 

try {
    $result = $apiInstance->addRemoveMultipleTargetstoFromTargetGroup($authorization, $accountId, $targetGroupId, $addRemoveMultipleTargetstofromTargetGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->addRemoveMultipleTargetstoFromTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |
 **addRemoveMultipleTargetstofromTargetGroupRequest** | [**\Ringba\Model\AddRemoveMultipleTargetstofromTargetGroupRequest**](../Model/AddRemoveMultipleTargetstofromTargetGroupRequest.md)|  |

### Return type

[**\Ringba\Model\RemoveMultipleTargetsfromTargetGroup**](../Model/RemoveMultipleTargetsfromTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addSingleTargettoTargetGroup()`

```php
addSingleTargettoTargetGroup($authorization, $accountId, $targetGroupId, $addSingleTargettoTargetGroupRequest): \Ringba\Model\AddSingleTargettoTargetGroup
```

Add Single Target to Target Group

Request to add a single target to a target group. To complete this request, the body must contain a valid ``targetId``. Find a list of your [targetIds](#get-and-edit-information-about-your-targets).  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 
$addSingleTargettoTargetGroupRequest = {"targetId":"{{targetId}}"}; // \Ringba\Model\AddSingleTargettoTargetGroupRequest | 

try {
    $result = $apiInstance->addSingleTargettoTargetGroup($authorization, $accountId, $targetGroupId, $addSingleTargettoTargetGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->addSingleTargettoTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |
 **addSingleTargettoTargetGroupRequest** | [**\Ringba\Model\AddSingleTargettoTargetGroupRequest**](../Model/AddSingleTargettoTargetGroupRequest.md)|  |

### Return type

[**\Ringba\Model\AddSingleTargettoTargetGroup**](../Model/AddSingleTargettoTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignTargetGrouptoaBuyer()`

```php
assignTargetGrouptoaBuyer($authorization, $accountId, $targetGroupId, $assignTargetGrouptoaBuyerRequest): \Ringba\Model\AddBuyertoTargetGroup
```

Assign Target Group to a Buyer

Request to assign a target group to specific buyer. To complete this request, the body must contain a valid ``buyerId``. Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 
$assignTargetGrouptoaBuyerRequest = {"buyerId":"{{buyerId}}"}; // \Ringba\Model\AssignTargetGrouptoaBuyerRequest | 

try {
    $result = $apiInstance->assignTargetGrouptoaBuyer($authorization, $accountId, $targetGroupId, $assignTargetGrouptoaBuyerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->assignTargetGrouptoaBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |
 **assignTargetGrouptoaBuyerRequest** | [**\Ringba\Model\AssignTargetGrouptoaBuyerRequest**](../Model/AssignTargetGrouptoaBuyerRequest.md)|  |

### Return type

[**\Ringba\Model\AddBuyertoTargetGroup**](../Model/AddBuyertoTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTargetGroup()`

```php
createTargetGroup($authorization, $accountId, $createTargetGroupRequest): \Ringba\Model\CreateTargetGroup
```

Create Target Group

Request to create a new target group. This request will only create the target group, in order to assign targets to the group see the \"PATCH Add Single Target to Target Group\" or \"PATCH Add/Remove Multiple Targets to/from Target Group\" requests below.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>   ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>name</code></td>         <td>The name of the target group to display on reports</td>     </tr>     <tr>         <td><code>schedule</code></td>         <td> An object containing the following parameters:</td>     </tr>     <tr>         <td></td>         <td><p><code>timeZoneId</code></p><p>The only required parameter for the <code>schedule</code> object and contains the time zone for the target group.</p></td>     </tr> </table>   #### Optional Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>isSimalDial</code></td>         <td>Boolean value, if set to \"true\" then a call to this target group will simultaneously dial all targets in the group and the first to answer will get the call</td>     </tr>     <tr>         <td><code>disableTargets</code></td>         <td>Boolean value that if set to \"true\" will disable the targets within the target group from receiving calls</td>     </tr>     <tr>         <td><code>enabled</code></td>         <td>Boolean value that if set to false will disable the entire target group from receiving calls</td>     </tr> </table>  In addition to these optional parameters, a target group can override certain settings for the targets in the group using the following parameters:  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>oCapacity</code></td>         <td>Overrides the call capacity settings for the target</td>     </tr>     <tr>         <td><code>oConcurrency</code></td>         <td>Overrides the concurrency settings for the target</td>     </tr>     <tr>         <td><code>oSchedule</code></td>         <td>Overrides the hours of operation for the target</td>     </tr> </table>  Each of the above is an object with the following three parameters, which are all boolean values and only one should be set to true.  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>campaignOverride</code></td>         <td>Overrides the settings for the targets in the group <em>only</em> within the context of the campaign using the target group</td>     </tr>     <tr>         <td><code>globalOverride</code></td>         <td>Overrides the settings for the targets in the group <em>everywhere</em> not just within the campaing using the target group</td>     </tr>     <tr>         <td><code>waterfallOverride</code></td>         <td>This feature is being deprecated and should be set to \"false\"</td>     </tr> </table>  __NOTE:__ If any of the override parameters is set to true, they must be specified in the ``schedule`` parameter. For details on how to write the additional schedule parameters, see the \"POST Create New Target\" request in the \"Targets\" section above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$createTargetGroupRequest = {"name":"Example Target Grouprtert","isSimalDial":false,"schedule":{"timeZoneId":"Pacific Standard Time"}}; // \Ringba\Model\CreateTargetGroupRequest | 

try {
    $result = $apiInstance->createTargetGroup($authorization, $accountId, $createTargetGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->createTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **createTargetGroupRequest** | [**\Ringba\Model\CreateTargetGroupRequest**](../Model/CreateTargetGroupRequest.md)|  |

### Return type

[**\Ringba\Model\CreateTargetGroup**](../Model/CreateTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSingleTargetfromTargetGroup()`

```php
deleteSingleTargetfromTargetGroup($authorization, $accountId, $targetGroupId, $targetId): \Ringba\Model\DeleteSingleTargetfromTargetGroup
```

Delete Single Target from Target Group

Request to delete a single target from a target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)   ### Response Overview <hr> <br> The response to this request has a field `targets` which will display all remaining targets in the target group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 
$targetId = 'targetId_example'; // string | 

try {
    $result = $apiInstance->deleteSingleTargetfromTargetGroup($authorization, $accountId, $targetGroupId, $targetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->deleteSingleTargetfromTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |
 **targetId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteSingleTargetfromTargetGroup**](../Model/DeleteSingleTargetfromTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTargetGroup()`

```php
deleteTargetGroup($authorization, $accountId, $targetGroupId): \Ringba\Model\DeleteTargetGroup
```

Delete Target Group

Request to delete a target group from your account. This request will only work if the target group has no targets assigned to it. If you need to remove targets from the target group, see the \"DELETE Delete Single Target from Target Group\" or the \"PATCH Add/Remove Multiple Targets to/from Target Group\" requests above.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 

try {
    $result = $apiInstance->deleteTargetGroup($authorization, $accountId, $targetGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->deleteTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteTargetGroup**](../Model/DeleteTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editTargetGroup()`

```php
editTargetGroup($authorization, $accountId, $targetGroupId, $editTargetGroupRequest): \Ringba\Model\EditTargetGroup
```

Edit Target Group

Request to edit the information about a target group. In the example to the right the only thing that was changed was the ``name`` using the request body.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br>  ### Request Body <hr> <br> See the \"POST Create Target Group\" request above for an explanation of available parameters. Any of the required or optional parameters can be modified using this request.  ### Response Overview <hr> <br> The response to this request will include an complete overview of the target group including the targets within the group and stats for the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 
$editTargetGroupRequest = {"name":"New Name"}; // \Ringba\Model\EditTargetGroupRequest | 

try {
    $result = $apiInstance->editTargetGroup($authorization, $accountId, $targetGroupId, $editTargetGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->editTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |
 **editTargetGroupRequest** | [**\Ringba\Model\EditTargetGroupRequest**](../Model/EditTargetGroupRequest.md)|  |

### Return type

[**\Ringba\Model\EditTargetGroup**](../Model/EditTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsaboutSpecificTargetGroup()`

```php
getDetailsaboutSpecificTargetGroup($authorization, $accountId, $targetGroupId): \Ringba\Model\GetDetailsaboutSpecificTargetGroup
```

Get Details about Specific Target Group

Request to retrieve information about a specific target group. This request will automatically include stats for the target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 

try {
    $result = $apiInstance->getDetailsaboutSpecificTargetGroup($authorization, $accountId, $targetGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getDetailsaboutSpecificTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsaboutSpecificTargetGroup**](../Model/GetDetailsaboutSpecificTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundReferencesforSpecificTargetGroup()`

```php
getInboundReferencesforSpecificTargetGroup($authorization, $accountId, $targetGroupId): \Ringba\Model\GetInboundReferencesforSpecificTargetGroup
```

Get Inbound References for Specific Target Group

Request to view all the campaigns that the target group is assigned to and the targets assigned to the target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 

try {
    $result = $apiInstance->getInboundReferencesforSpecificTargetGroup($authorization, $accountId, $targetGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getInboundReferencesforSpecificTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |

### Return type

[**\Ringba\Model\GetInboundReferencesforSpecificTargetGroup**](../Model/GetInboundReferencesforSpecificTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatsforSpecificTargetGroup()`

```php
getStatsforSpecificTargetGroup($authorization, $accountId, $targetGroupId): \Ringba\Model\GetStatsforSpecificTargetGroup
```

Get Stats for Specific Target Group

Request to retrieve only the stats for a specific target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 

try {
    $result = $apiInstance->getStatsforSpecificTargetGroup($authorization, $accountId, $targetGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getStatsforSpecificTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |

### Return type

[**\Ringba\Model\GetStatsforSpecificTargetGroup**](../Model/GetStatsforSpecificTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargetGroups()`

```php
getTargetGroups($authorization, $accountId): \Ringba\Model\GetTargetGroups
```

Get Target Groups

Request to get a list of all target groups associated with your account as well as the targets assigned to each group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getTargetGroups($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getTargetGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetTargetGroups**](../Model/GetTargetGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargetsforTargetGroup()`

```php
getTargetsforTargetGroup($authorization, $accountId, $targetGroupId): \Ringba\Model\GetTargetsforTargetGroup
```

Get Targets for Target Group

Request to retrieve information about a specific target group _without_ the stats for the target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 

try {
    $result = $apiInstance->getTargetsforTargetGroup($authorization, $accountId, $targetGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getTargetsforTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |

### Return type

[**\Ringba\Model\GetTargetsforTargetGroup**](../Model/GetTargetsforTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeBuyerfromTargetGroup()`

```php
removeBuyerfromTargetGroup($authorization, $accountId, $targetGroupId, $buyerId): \Ringba\Model\RemoveBuyerfromTargetGroup
```

Remove Buyer from Target Group

Request to unassign a target group from the buyer to which it was assigned. This request will not delete the target group or the buyer from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br> ``buyerId`` Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 
$buyerId = 'buyerId_example'; // string | 

try {
    $result = $apiInstance->removeBuyerfromTargetGroup($authorization, $accountId, $targetGroupId, $buyerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->removeBuyerfromTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |
 **buyerId** | **string**|  |

### Return type

[**\Ringba\Model\RemoveBuyerfromTargetGroup**](../Model/RemoveBuyerfromTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetCountsforTargetGroup()`

```php
resetCountsforTargetGroup($authorization, $accountId, $targetGroupId): \Ringba\Model\ResetCountsforTargetGroup
```

Reset Counts for Target Group

Request to reset counts for a specific target groups. This will reset all counts to zero.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br>   ### Response Overview <hr> <br>  The response to this request will return the stats for the target group and for each target within the target group. They will be separated as an object for each based on the ``targetId`` or ``targetGroupId``

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$targetGroupId = 'targetGroupId_example'; // string | 

try {
    $result = $apiInstance->resetCountsforTargetGroup($authorization, $accountId, $targetGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->resetCountsforTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **targetGroupId** | **string**|  |

### Return type

[**\Ringba\Model\ResetCountsforTargetGroup**](../Model/ResetCountsforTargetGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
