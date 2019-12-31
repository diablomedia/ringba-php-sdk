# Ringba\SavedInsightApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**savedInsightCreate**](SavedInsightApi.md#savedInsightCreate) | **POST** /{accountid}/savedInsights | 
[**savedInsightDelete**](SavedInsightApi.md#savedInsightDelete) | **DELETE** /{accountid}/savedInsights/{id} | 
[**savedInsightGetItem**](SavedInsightApi.md#savedInsightGetItem) | **GET** /{accountid}/savedInsights/{id} | 
[**savedInsightIndex**](SavedInsightApi.md#savedInsightIndex) | **GET** /{accountid}/savedInsights | 
[**savedInsightUpdate**](SavedInsightApi.md#savedInsightUpdate) | **PUT** /{accountid}/savedInsights/{id} | 


# **savedInsightCreate**
> object savedInsightCreate($saved_insight_request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$saved_insight_request = new \Ringba\Model\CreateSavedInsightRequest(); // \Ringba\Model\CreateSavedInsightRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedInsightCreate($saved_insight_request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedInsightApi->savedInsightCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saved_insight_request** | [**\Ringba\Model\CreateSavedInsightRequest**](../Model/CreateSavedInsightRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **savedInsightDelete**
> object savedInsightDelete($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedInsightDelete($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedInsightApi->savedInsightDelete: ', $e->getMessage(), PHP_EOL;
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

# **savedInsightGetItem**
> object savedInsightGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedInsightGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedInsightApi->savedInsightGetItem: ', $e->getMessage(), PHP_EOL;
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

# **savedInsightIndex**
> object savedInsightIndex($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedInsightIndex($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedInsightApi->savedInsightIndex: ', $e->getMessage(), PHP_EOL;
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

# **savedInsightUpdate**
> object savedInsightUpdate($id, $saved_insight_request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\SavedInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$saved_insight_request = new \Ringba\Model\CreateSavedInsightRequest(); // \Ringba\Model\CreateSavedInsightRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->savedInsightUpdate($id, $saved_insight_request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedInsightApi->savedInsightUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **saved_insight_request** | [**\Ringba\Model\CreateSavedInsightRequest**](../Model/CreateSavedInsightRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

