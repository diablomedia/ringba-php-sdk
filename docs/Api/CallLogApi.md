# Ringba\CallLogApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callLogExportCallLogs**](CallLogApi.md#callLogExportCallLogs) | **POST** /{accountid}/CallLogs/Date/Export/{format} | 
[**callLogGetAvailableGroupBys**](CallLogApi.md#callLogGetAvailableGroupBys) | **GET** /{accountid}/CallLogs/AvailableGroupBys | 
[**callLogGetEvents**](CallLogApi.md#callLogGetEvents) | **GET** /{accountid}/CallLogs/Events | 
[**callLogGetExportProgress**](CallLogApi.md#callLogGetExportProgress) | **GET** /{accountid}/CallLogs/Date/Export/{jobId} | 
[**callLogGetLogsByDate**](CallLogApi.md#callLogGetLogsByDate) | **POST** /{accountid}/CallLogs/Date | 
[**callLogGetSearchField**](CallLogApi.md#callLogGetSearchField) | **GET** /{accountid}/CallLogs/SearchFields/{fieldName} | 
[**callLogGetSearchField_0**](CallLogApi.md#callLogGetSearchField_0) | **GET** /{accountid}/CallLogs/SearchFields/{fieldName}/Values | 
[**callLogGetSearchFields**](CallLogApi.md#callLogGetSearchFields) | **GET** /{accountid}/CallLogs/SearchFields | 
[**callLogGetTagNames**](CallLogApi.md#callLogGetTagNames) | **GET** /{accountid}/CallLogs/Tags/{type} | 
[**callLogGetTagTypes**](CallLogApi.md#callLogGetTagTypes) | **GET** /{accountid}/CallLogs/Tags | 
[**callLogGetTagValues**](CallLogApi.md#callLogGetTagValues) | **GET** /{accountid}/CallLogs/Tags/{type}/{name}/Values | 


# **callLogExportCallLogs**
> object callLogExportCallLogs($format, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$format = "format_example"; // string | 
$request = new \Ringba\Model\CallLogsStatRequest(); // \Ringba\Model\CallLogsStatRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogExportCallLogs($format, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogExportCallLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**|  |
 **request** | [**\Ringba\Model\CallLogsStatRequest**](../Model/CallLogsStatRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetAvailableGroupBys**
> object callLogGetAvailableGroupBys($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetAvailableGroupBys($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetAvailableGroupBys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetEvents**
> object callLogGetEvents($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetEvents($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetExportProgress**
> object callLogGetExportProgress($job_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$job_id = "job_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetExportProgress($job_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetExportProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetLogsByDate**
> object callLogGetLogsByDate($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\CallLogsStatRequest(); // \Ringba\Model\CallLogsStatRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetLogsByDate($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetLogsByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\CallLogsStatRequest**](../Model/CallLogsStatRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetSearchField**
> object callLogGetSearchField($field_name, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_name = "field_name_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetSearchField($field_name, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetSearchField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetSearchField_0**
> object callLogGetSearchField_0($field_name, $val, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_name = "field_name_example"; // string | 
$val = "val_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetSearchField_0($field_name, $val, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetSearchField_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**|  |
 **val** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetSearchFields**
> object callLogGetSearchFields($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetSearchFields($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetSearchFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetTagNames**
> object callLogGetTagNames($type, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetTagNames($type, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetTagNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetTagTypes**
> object callLogGetTagTypes($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetTagTypes($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetTagTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callLogGetTagValues**
> object callLogGetTagValues($type, $name, $val, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | 
$name = "name_example"; // string | 
$val = "val_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callLogGetTagValues($type, $name, $val, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogApi->callLogGetTagValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **name** | **string**|  |
 **val** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

