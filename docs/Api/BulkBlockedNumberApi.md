# Ringba\BulkBlockedNumberApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkBlockedNumberDelete**](BulkBlockedNumberApi.md#bulkBlockedNumberDelete) | **DELETE** /{accountid}/bulkBlockedNumbers | 
[**bulkBlockedNumberDeleteNumber**](BulkBlockedNumberApi.md#bulkBlockedNumberDeleteNumber) | **DELETE** /{accountid}/bulkBlockedNumbers/{E164Number} | 
[**bulkBlockedNumberGet**](BulkBlockedNumberApi.md#bulkBlockedNumberGet) | **GET** /{accountid}/bulkBlockedNumbers | 
[**bulkBlockedNumberTestItem**](BulkBlockedNumberApi.md#bulkBlockedNumberTestItem) | **GET** /{accountid}/bulkBlockedNumbers/test | 
[**bulkBlockedNumberUploadBulk**](BulkBlockedNumberApi.md#bulkBlockedNumberUploadBulk) | **POST** /{accountid}/bulkBlockedNumbers | 


# **bulkBlockedNumberDelete**
> object bulkBlockedNumberDelete($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkBlockedNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkBlockedNumberDelete($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkBlockedNumberApi->bulkBlockedNumberDelete: ', $e->getMessage(), PHP_EOL;
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

# **bulkBlockedNumberDeleteNumber**
> object bulkBlockedNumberDeleteNumber($e164_number, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkBlockedNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$e164_number = "e164_number_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkBlockedNumberDeleteNumber($e164_number, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkBlockedNumberApi->bulkBlockedNumberDeleteNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **e164_number** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkBlockedNumberGet**
> object bulkBlockedNumberGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkBlockedNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkBlockedNumberGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkBlockedNumberApi->bulkBlockedNumberGet: ', $e->getMessage(), PHP_EOL;
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

# **bulkBlockedNumberTestItem**
> object bulkBlockedNumberTestItem($e164_number, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkBlockedNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$e164_number = "e164_number_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkBlockedNumberTestItem($e164_number, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkBlockedNumberApi->bulkBlockedNumberTestItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **e164_number** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkBlockedNumberUploadBulk**
> object bulkBlockedNumberUploadBulk($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkBlockedNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\BulkBlockNumberRequest(); // \Ringba\Model\BulkBlockNumberRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkBlockedNumberUploadBulk($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkBlockedNumberApi->bulkBlockedNumberUploadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\BulkBlockNumberRequest**](../Model/BulkBlockNumberRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

