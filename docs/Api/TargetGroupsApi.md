# OpenAPI\Client\TargetGroupsApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdTargetGroupsGet()**](TargetGroupsApi.md#accountIdTargetGroupsGet) | **GET** /{accountId}/TargetGroups | Get Target Groups |
| [**accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Buyer/{buyerId} | Remove Buyer from Target Group |
| [**accountIdTargetGroupsTargetGroupIdBuyerPut()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdBuyerPut) | **PUT** /{accountId}/TargetGroups/{targetGroupId}/Buyer | Assign Target Group to a Buyer |
| [**accountIdTargetGroupsTargetGroupIdCountsGet()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdCountsGet) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Counts | Get Stats for Specific Target Group |
| [**accountIdTargetGroupsTargetGroupIdDelete()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdDelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId} | Delete Target Group |
| [**accountIdTargetGroupsTargetGroupIdGet()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdGet) | **GET** /{accountId}/TargetGroups/{targetGroupId} | Get Details about Specific Target Group |
| [**accountIdTargetGroupsTargetGroupIdInboundReferencesGet()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdInboundReferencesGet) | **GET** /{accountId}/TargetGroups/{targetGroupId}/InboundReferences | Get Inbound References for Specific Target Group |
| [**accountIdTargetGroupsTargetGroupIdPatch()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdPatch) | **PATCH** /{accountId}/TargetGroups/{targetGroupId}/ | Edit Target Group |
| [**accountIdTargetGroupsTargetGroupIdResetCountDelete()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdResetCountDelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/ResetCount | Reset Counts for Target Group |
| [**accountIdTargetGroupsTargetGroupIdTargetsGet()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdTargetsGet) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Targets | Get Targets for Target Group |
| [**accountIdTargetGroupsTargetGroupIdTargetsPatch()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdTargetsPatch) | **PATCH** /{accountId}/TargetGroups/{targetGroupId}/Targets | Add Single Target to Target Group |
| [**accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete()**](TargetGroupsApi.md#accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Targets/{targetId} | Delete Single Target from Target Group |
| [**accountIdTargetgroupsPost()**](TargetGroupsApi.md#accountIdTargetgroupsPost) | **POST** /{accountId}/targetgroups | Create Target Group |
| [**accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch()**](TargetGroupsApi.md#accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch) | **PATCH** /{accountId}/targetgroups/{targetGroupId}/targets/bulkUpdate | Add/Remove Multiple Targets to/from Target Group |


## `accountIdTargetGroupsGet()`

```php
accountIdTargetGroupsGet($account_id, $authorization): object
```

Get Target Groups

Request to get a list of all target groups associated with your account as well as the targets assigned to each group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete()`

```php
accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete($account_id, $target_group_id, $buyer_id, $authorization): object
```

Remove Buyer from Target Group

Request to unassign a target group from the buyer to which it was assigned. This request will not delete the target group or the buyer from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br> ``buyerId`` Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$buyer_id = 'buyer_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete($account_id, $target_group_id, $buyer_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
| **buyer_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdBuyerPut()`

```php
accountIdTargetGroupsTargetGroupIdBuyerPut($account_id, $target_group_id, $authorization, $body): object
```

Assign Target Group to a Buyer

Request to assign a target group to specific buyer. To complete this request, the body must contain a valid ``buyerId``. Find a list of [buyerIds](#get-and-edit-information-about-buyers-associated-with-your-account)  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdBuyerPut($account_id, $target_group_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdBuyerPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdCountsGet()`

```php
accountIdTargetGroupsTargetGroupIdCountsGet($account_id, $target_group_id, $authorization): object
```

Get Stats for Specific Target Group

Request to retrieve only the stats for a specific target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdCountsGet($account_id, $target_group_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdCountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdDelete()`

```php
accountIdTargetGroupsTargetGroupIdDelete($account_id, $target_group_id, $authorization): object
```

Delete Target Group

Request to delete a target group from your account. This request will only work if the target group has no targets assigned to it. If you need to remove targets from the target group, see the \"DELETE Delete Single Target from Target Group\" or the \"PATCH Add/Remove Multiple Targets to/from Target Group\" requests above.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdDelete($account_id, $target_group_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdGet()`

```php
accountIdTargetGroupsTargetGroupIdGet($account_id, $target_group_id, $authorization): object
```

Get Details about Specific Target Group

Request to retrieve information about a specific target group. This request will automatically include stats for the target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdGet($account_id, $target_group_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdInboundReferencesGet()`

```php
accountIdTargetGroupsTargetGroupIdInboundReferencesGet($account_id, $target_group_id, $authorization): object
```

Get Inbound References for Specific Target Group

Request to view all the campaigns that the target group is assigned to and the targets assigned to the target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdInboundReferencesGet($account_id, $target_group_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdInboundReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdPatch()`

```php
accountIdTargetGroupsTargetGroupIdPatch($account_id, $target_group_id, $authorization, $body): object
```

Edit Target Group

Request to edit the information about a target group. In the example to the right the only thing that was changed was the ``name`` using the request body.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br>  ### Request Body <hr> <br> See the \"POST Create Target Group\" request above for an explanation of available parameters. Any of the required or optional parameters can be modified using this request.  ### Response Overview <hr> <br> The response to this request will include an complete overview of the target group including the targets within the group and stats for the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdPatch($account_id, $target_group_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdResetCountDelete()`

```php
accountIdTargetGroupsTargetGroupIdResetCountDelete($account_id, $target_group_id, $authorization): object
```

Reset Counts for Target Group

Request to reset counts for a specific target groups. This will reset all counts to zero.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br>   ### Response Overview <hr> <br>  The response to this request will return the stats for the target group and for each target within the target group. They will be separated as an object for each based on the ``targetId`` or ``targetGroupId``

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdResetCountDelete($account_id, $target_group_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdResetCountDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdTargetsGet()`

```php
accountIdTargetGroupsTargetGroupIdTargetsGet($account_id, $target_group_id, $authorization): object
```

Get Targets for Target Group

Request to retrieve information about a specific target group _without_ the stats for the target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdTargetsGet($account_id, $target_group_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdTargetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdTargetsPatch()`

```php
accountIdTargetGroupsTargetGroupIdTargetsPatch($account_id, $target_group_id, $authorization, $body): object
```

Add Single Target to Target Group

Request to add a single target to a target group. To complete this request, the body must contain a valid ``targetId``. Find a list of your [targetIds](#get-and-edit-information-about-your-targets).  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdTargetsPatch($account_id, $target_group_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdTargetsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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

## `accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete()`

```php
accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete($account_id, $target_group_id, $target_id, $authorization): object
```

Delete Single Target from Target Group

Request to delete a single target from a target group.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups) <br> ``targetId`` Find a list of [targetIds](#get-and-edit-information-about-your-targets)   ### Response Overview <hr> <br> The response to this request has a field `targets` which will display all remaining targets in the target group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$target_id = 'target_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete($account_id, $target_group_id, $target_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
| **target_id** | **string**|  | |
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

## `accountIdTargetgroupsPost()`

```php
accountIdTargetgroupsPost($account_id, $authorization, $body): object
```

Create Target Group

Request to create a new target group. This request will only create the target group, in order to assign targets to the group see the \"PATCH Add Single Target to Target Group\" or \"PATCH Add/Remove Multiple Targets to/from Target Group\" requests below.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>   ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>name</code></td>         <td>The name of the target group to display on reports</td>     </tr>     <tr>         <td><code>schedule</code></td>         <td> An object containing the following parameters:</td>     </tr>     <tr>         <td></td>         <td><p><code>timeZoneId</code></p><p>The only required parameter for the <code>schedule</code> object and contains the time zone for the target group.</p></td>     </tr> </table>   #### Optional Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>isSimalDial</code></td>         <td>Boolean value, if set to \"true\" then a call to this target group will simultaneously dial all targets in the group and the first to answer will get the call</td>     </tr>     <tr>         <td><code>disableTargets</code></td>         <td>Boolean value that if set to \"true\" will disable the targets within the target group from receiving calls</td>     </tr>     <tr>         <td><code>enabled</code></td>         <td>Boolean value that if set to false will disable the entire target group from receiving calls</td>     </tr> </table>  In addition to these optional parameters, a target group can override certain settings for the targets in the group using the following parameters:  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>oCapacity</code></td>         <td>Overrides the call capacity settings for the target</td>     </tr>     <tr>         <td><code>oConcurrency</code></td>         <td>Overrides the concurrency settings for the target</td>     </tr>     <tr>         <td><code>oSchedule</code></td>         <td>Overrides the hours of operation for the target</td>     </tr> </table>  Each of the above is an object with the following three parameters, which are all boolean values and only one should be set to true.  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>campaignOverride</code></td>         <td>Overrides the settings for the targets in the group <em>only</em> within the context of the campaign using the target group</td>     </tr>     <tr>         <td><code>globalOverride</code></td>         <td>Overrides the settings for the targets in the group <em>everywhere</em> not just within the campaing using the target group</td>     </tr>     <tr>         <td><code>waterfallOverride</code></td>         <td>This feature is being deprecated and should be set to \"false\"</td>     </tr> </table>  __NOTE:__ If any of the override parameters is set to true, they must be specified in the ``schedule`` parameter. For details on how to write the additional schedule parameters, see the \"POST Create New Target\" request in the \"Targets\" section above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdTargetgroupsPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetgroupsPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch()`

```php
accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch($account_id, $target_group_id, $authorization, $body): object
```

Add/Remove Multiple Targets to/from Target Group

Request to add or remove multiple targets to or from a target group. To complete this request, the body must contain at least one valid ``targetId`` in either the ``targetAddIds`` array or the ``targetRemoveIds``. Find a list of your [targetIds](#get-and-edit-information-about-your-targets).  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``targetGroupId`` Find a list of [targetGroupIds](#get-and-edit-information-about-your-target-groups)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$target_group_id = 'target_group_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch($account_id, $target_group_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_group_id** | **string**|  | |
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
