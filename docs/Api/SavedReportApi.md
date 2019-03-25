# Ringba\SavedReportApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**savedReportCreate**](SavedReportApi.md#savedReportCreate) | **POST** /{accountid}/savedReports | 
[**savedReportDelete**](SavedReportApi.md#savedReportDelete) | **DELETE** /{accountid}/savedReports/{id} | 
[**savedReportGetItem**](SavedReportApi.md#savedReportGetItem) | **GET** /{accountid}/savedReports/{id} | 
[**savedReportIndex**](SavedReportApi.md#savedReportIndex) | **GET** /{accountid}/savedReports | 
[**savedReportUpdate**](SavedReportApi.md#savedReportUpdate) | **PUT** /{accountid}/savedReports/{id} | 


# **savedReportCreate**
> object savedReportCreate($saved_report_request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$saved_report_request = new \Ringba\Model\CreateSavedReportRequest(); // \Ringba\Model\CreateSavedReportRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedReportCreate($saved_report_request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedReportApi->savedReportCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saved_report_request** | [**\Ringba\Model\CreateSavedReportRequest**](../Model/CreateSavedReportRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **savedReportDelete**
> object savedReportDelete($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedReportDelete($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedReportApi->savedReportDelete: ', $e->getMessage(), PHP_EOL;
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

# **savedReportGetItem**
> object savedReportGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedReportGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedReportApi->savedReportGetItem: ', $e->getMessage(), PHP_EOL;
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

# **savedReportIndex**
> object savedReportIndex($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedReportIndex($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedReportApi->savedReportIndex: ', $e->getMessage(), PHP_EOL;
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

# **savedReportUpdate**
> object savedReportUpdate($id, $saved_report_request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$saved_report_request = new \Ringba\Model\CreateSavedReportRequest(); // \Ringba\Model\CreateSavedReportRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedReportUpdate($id, $saved_report_request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedReportApi->savedReportUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **saved_report_request** | [**\Ringba\Model\CreateSavedReportRequest**](../Model/CreateSavedReportRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

