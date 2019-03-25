# Ringba\PingTreeApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pingTreeAddTargets**](PingTreeApi.md#pingTreeAddTargets) | **PATCH** /{accountid}/pingtrees/{id}/Targets | 
[**pingTreeCreatePingTree**](PingTreeApi.md#pingTreeCreatePingTree) | **POST** /{accountid}/pingtrees | 
[**pingTreeDeleteTarget**](PingTreeApi.md#pingTreeDeleteTarget) | **DELETE** /{accountid}/pingtrees/{id}/Targets/{targetId} | 
[**pingTreeGet**](PingTreeApi.md#pingTreeGet) | **GET** /{accountid}/pingtrees | 
[**pingTreeGetCurrentCounts**](PingTreeApi.md#pingTreeGetCurrentCounts) | **GET** /{accountid}/pingtrees/{id}/Counts | 
[**pingTreeGetItem**](PingTreeApi.md#pingTreeGetItem) | **GET** /{accountid}/pingtrees/{id} | Gets the Item with usage counts
[**pingTreeGetTargets**](PingTreeApi.md#pingTreeGetTargets) | **GET** /{accountid}/pingtrees/{id}/Targets | returns targets attached to the target group
[**pingTreePatchItem**](PingTreeApi.md#pingTreePatchItem) | **PATCH** /{accountid}/pingtrees/{id} | updated the Ping Tree
[**pingTreeResetCount**](PingTreeApi.md#pingTreeResetCount) | **DELETE** /{accountid}/pingtrees/{id}/ResetCount | 
[**pingTreeUpdateTargets**](PingTreeApi.md#pingTreeUpdateTargets) | **PATCH** /{accountid}/pingtrees/{id}/Targets/BulkUpdate | 


# **pingTreeAddTargets**
> object pingTreeAddTargets($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\TargetGroupTargetModel(); // \Ringba\Model\TargetGroupTargetModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeAddTargets($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeAddTargets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\TargetGroupTargetModel**](../Model/TargetGroupTargetModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeCreatePingTree**
> object pingTreeCreatePingTree($tree, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tree = new \Ringba\Model\PingTreeCreateModel(); // \Ringba\Model\PingTreeCreateModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeCreatePingTree($tree, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeCreatePingTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tree** | [**\Ringba\Model\PingTreeCreateModel**](../Model/PingTreeCreateModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeDeleteTarget**
> object pingTreeDeleteTarget($id, $target_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$target_id = "target_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeDeleteTarget($id, $target_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeDeleteTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **target_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeGet**
> object pingTreeGet($accountid, $include_stats)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->pingTreeGet($accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_stats** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeGetCurrentCounts**
> object pingTreeGetCurrentCounts($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeGetCurrentCounts($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeGetCurrentCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeGetItem**
> object pingTreeGetItem($id, $accountid)

Gets the Item with usage counts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeGetTargets**
> object pingTreeGetTargets($id, $accountid, $include_stats)

returns targets attached to the target group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | target group id
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | true if you want stats returend

try {
    $result = $apiInstance->pingTreeGetTargets($id, $accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeGetTargets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| target group id |
 **accountid** | **string**|  |
 **include_stats** | **bool**| true if you want stats returend | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreePatchItem**
> object pingTreePatchItem($id, $values, $accountid)

updated the Ping Tree

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the ping tree to update
$values = new \stdClass; // object | the list of fields and values to update
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreePatchItem($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreePatchItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the ping tree to update |
 **values** | **object**| the list of fields and values to update |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeResetCount**
> object pingTreeResetCount($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeResetCount($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeResetCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeUpdateTargets**
> object pingTreeUpdateTargets($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\BulkTargetUpdate(); // \Ringba\Model\BulkTargetUpdate | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeUpdateTargets($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeApi->pingTreeUpdateTargets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\BulkTargetUpdate**](../Model/BulkTargetUpdate.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

