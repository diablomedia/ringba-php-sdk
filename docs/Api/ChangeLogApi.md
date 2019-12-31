# Ringba\ChangeLogApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeLogGetChangelogByAccount**](ChangeLogApi.md#changeLogGetChangelogByAccount) | **POST** /{accountid}/changelog | 
[**changeLogGetChangelogByObjectId**](ChangeLogApi.md#changeLogGetChangelogByObjectId) | **POST** /{accountid}/changelog/object/{objectId} | 
[**changeLogGetChangelogByUser**](ChangeLogApi.md#changeLogGetChangelogByUser) | **POST** /{accountid}/changelog/user | 


# **changeLogGetChangelogByAccount**
> object changeLogGetChangelogByAccount($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\ChangeLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\GetChangeLogBaseRequest(); // \Ringba\Model\GetChangeLogBaseRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->changeLogGetChangelogByAccount($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeLogApi->changeLogGetChangelogByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\GetChangeLogBaseRequest**](../Model/GetChangeLogBaseRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeLogGetChangelogByObjectId**
> object changeLogGetChangelogByObjectId($object_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\ChangeLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_id = "object_id_example"; // string | 
$request = new \Ringba\Model\GetChangeLogBaseRequest(); // \Ringba\Model\GetChangeLogBaseRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->changeLogGetChangelogByObjectId($object_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeLogApi->changeLogGetChangelogByObjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **string**|  |
 **request** | [**\Ringba\Model\GetChangeLogBaseRequest**](../Model/GetChangeLogBaseRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeLogGetChangelogByUser**
> object changeLogGetChangelogByUser($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\ChangeLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\GetChangeLogByUserRequest(); // \Ringba\Model\GetChangeLogByUserRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->changeLogGetChangelogByUser($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeLogApi->changeLogGetChangelogByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\GetChangeLogByUserRequest**](../Model/GetChangeLogByUserRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

