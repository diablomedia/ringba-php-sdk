# Ringba\BulkTagApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkTagCreateBulkTag**](BulkTagApi.md#bulkTagCreateBulkTag) | **POST** /{accountid}/bulkTags | creates a bulk tag record
[**bulkTagDeleteId**](BulkTagApi.md#bulkTagDeleteId) | **DELETE** /{accountid}/bulkTags/{id} | creates a bulk tag record
[**bulkTagGet**](BulkTagApi.md#bulkTagGet) | **GET** /{accountid}/bulkTags | Returns all bulk tag for a given account
[**bulkTagGetItem**](BulkTagApi.md#bulkTagGetItem) | **GET** /{accountid}/bulkTags/{id} | Returns the bulk tag for the account
[**bulkTagUpdateBulkTag**](BulkTagApi.md#bulkTagUpdateBulkTag) | **PUT** /{accountid}/bulkTags/{id} | creates a bulk tag record


# **bulkTagCreateBulkTag**
> object bulkTagCreateBulkTag($request, $accountid)

creates a bulk tag record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\BulkTagUploadRequest(); // \Ringba\Model\BulkTagUploadRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkTagCreateBulkTag($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagApi->bulkTagCreateBulkTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\BulkTagUploadRequest**](../Model/BulkTagUploadRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTagDeleteId**
> object bulkTagDeleteId($id, $accountid)

creates a bulk tag record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkTagDeleteId($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagApi->bulkTagDeleteId: ', $e->getMessage(), PHP_EOL;
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

# **bulkTagGet**
> object bulkTagGet($accountid)

Returns all bulk tag for a given account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkTagGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagApi->bulkTagGet: ', $e->getMessage(), PHP_EOL;
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

# **bulkTagGetItem**
> object bulkTagGetItem($id, $accountid)

Returns the bulk tag for the account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkTagGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagApi->bulkTagGetItem: ', $e->getMessage(), PHP_EOL;
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

# **bulkTagUpdateBulkTag**
> object bulkTagUpdateBulkTag($id, $request, $accountid)

creates a bulk tag record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BulkTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\BulkTagUploadRequest(); // \Ringba\Model\BulkTagUploadRequest | The request to upate
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->bulkTagUpdateBulkTag($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTagApi->bulkTagUpdateBulkTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\BulkTagUploadRequest**](../Model/BulkTagUploadRequest.md)| The request to upate |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

