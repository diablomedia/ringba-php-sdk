# Ringba\TargetGroupApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**targetGroupAddBuyerToTargetGroup**](TargetGroupApi.md#targetGroupAddBuyerToTargetGroup) | **PUT** /{accountid}/TargetGroups/{id}/Buyer | 
[**targetGroupAddTargets**](TargetGroupApi.md#targetGroupAddTargets) | **PATCH** /{accountid}/TargetGroups/{id}/Targets | 
[**targetGroupCreateTargetGroup**](TargetGroupApi.md#targetGroupCreateTargetGroup) | **POST** /{accountid}/TargetGroups | 
[**targetGroupDeleteTarget**](TargetGroupApi.md#targetGroupDeleteTarget) | **DELETE** /{accountid}/TargetGroups/{id}/Targets/{targetId} | 
[**targetGroupDeleteTargetGroup**](TargetGroupApi.md#targetGroupDeleteTargetGroup) | **DELETE** /{accountid}/TargetGroups/{id} | 
[**targetGroupGet**](TargetGroupApi.md#targetGroupGet) | **GET** /{accountid}/TargetGroups | 
[**targetGroupGetCurrentCounts**](TargetGroupApi.md#targetGroupGetCurrentCounts) | **GET** /{accountid}/TargetGroups/{id}/Counts | 
[**targetGroupGetItem**](TargetGroupApi.md#targetGroupGetItem) | **GET** /{accountid}/TargetGroups/{id} | 
[**targetGroupGetReferences**](TargetGroupApi.md#targetGroupGetReferences) | **GET** /{accountid}/TargetGroups/{id}/InboundReferences | 
[**targetGroupGetTargets**](TargetGroupApi.md#targetGroupGetTargets) | **GET** /{accountid}/TargetGroups/{id}/Targets | 
[**targetGroupPatchItem**](TargetGroupApi.md#targetGroupPatchItem) | **PATCH** /{accountid}/TargetGroups/{id} | 
[**targetGroupRemoveBuyerFromTargetGroup**](TargetGroupApi.md#targetGroupRemoveBuyerFromTargetGroup) | **DELETE** /{accountid}/TargetGroups/{id}/Buyer/{buyerId} | 
[**targetGroupResetCount**](TargetGroupApi.md#targetGroupResetCount) | **DELETE** /{accountid}/TargetGroups/{id}/ResetCount | 
[**targetGroupUpdateTargets**](TargetGroupApi.md#targetGroupUpdateTargets) | **PATCH** /{accountid}/TargetGroups/{id}/Targets/BulkUpdate | 


# **targetGroupAddBuyerToTargetGroup**
> object targetGroupAddBuyerToTargetGroup($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddBuyerRequestModel(); // \Ringba\Model\AddBuyerRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupAddBuyerToTargetGroup($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupAddBuyerToTargetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\AddBuyerRequestModel**](../Model/AddBuyerRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupAddTargets**
> object targetGroupAddTargets($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\TargetGroupTargetModel(); // \Ringba\Model\TargetGroupTargetModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupAddTargets($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupAddTargets: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupCreateTargetGroup**
> object targetGroupCreateTargetGroup($target_group, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$target_group = new \Ringba\Model\TargetGroup(); // \Ringba\Model\TargetGroup | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupCreateTargetGroup($target_group, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupCreateTargetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target_group** | [**\Ringba\Model\TargetGroup**](../Model/TargetGroup.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupDeleteTarget**
> object targetGroupDeleteTarget($id, $target_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$target_id = "target_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupDeleteTarget($id, $target_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupDeleteTarget: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupDeleteTargetGroup**
> object targetGroupDeleteTargetGroup($id, $accountid, $force)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 

try {
    $result = $apiInstance->targetGroupDeleteTargetGroup($id, $accountid, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupDeleteTargetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **force** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupGet**
> object targetGroupGet($accountid, $include_stats)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->targetGroupGet($accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupGet: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupGetCurrentCounts**
> object targetGroupGetCurrentCounts($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupGetCurrentCounts($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupGetCurrentCounts: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupGetItem**
> object targetGroupGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupGetItem: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupGetReferences**
> object targetGroupGetReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupGetReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupGetReferences: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupGetTargets**
> object targetGroupGetTargets($id, $accountid, $include_stats)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->targetGroupGetTargets($id, $accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupGetTargets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
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

# **targetGroupPatchItem**
> object targetGroupPatchItem($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupPatchItem($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupPatchItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **values** | **object**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupRemoveBuyerFromTargetGroup**
> object targetGroupRemoveBuyerFromTargetGroup($id, $buyer_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$buyer_id = "buyer_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupRemoveBuyerFromTargetGroup($id, $buyer_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupRemoveBuyerFromTargetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **buyer_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupResetCount**
> object targetGroupResetCount($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupResetCount($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupResetCount: ', $e->getMessage(), PHP_EOL;
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

# **targetGroupUpdateTargets**
> object targetGroupUpdateTargets($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\BulkTargetUpdate(); // \Ringba\Model\BulkTargetUpdate | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGroupUpdateTargets($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupApi->targetGroupUpdateTargets: ', $e->getMessage(), PHP_EOL;
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

