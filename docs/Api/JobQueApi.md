# Ringba\JobQueApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobQueGet**](JobQueApi.md#jobQueGet) | **GET** /{accountid}/jobQueue | 
[**jobQueGetItem**](JobQueApi.md#jobQueGetItem) | **GET** /{accountid}/jobQueue/{id} | 
[**jobQueGetOfferParticipationRequests**](JobQueApi.md#jobQueGetOfferParticipationRequests) | **GET** /{accountid}/jobQueue/offers/participation/{cmpid} | 
[**jobQueProcessAction**](JobQueApi.md#jobQueProcessAction) | **POST** /{accountid}/jobQueue/{id}/action | 


# **jobQueGet**
> \Ringba\Model\JobsResponseModel jobQueGet($accountid, $status)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\JobQueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$status = "status_example"; // string | 

try {
    $result = $apiInstance->jobQueGet($accountid, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueApi->jobQueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **status** | **string**|  | [optional]

### Return type

[**\Ringba\Model\JobsResponseModel**](../Model/JobsResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobQueGetItem**
> \Ringba\Model\JobResponseModel jobQueGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\JobQueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->jobQueGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueApi->jobQueGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\JobResponseModel**](../Model/JobResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobQueGetOfferParticipationRequests**
> \Ringba\Model\JobsResponseModel jobQueGetOfferParticipationRequests($cmpid, $accountid, $status)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\JobQueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmpid = "cmpid_example"; // string | 
$accountid = "accountid_example"; // string | 
$status = "status_example"; // string | 

try {
    $result = $apiInstance->jobQueGetOfferParticipationRequests($cmpid, $accountid, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueApi->jobQueGetOfferParticipationRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmpid** | **string**|  |
 **accountid** | **string**|  |
 **status** | **string**|  | [optional]

### Return type

[**\Ringba\Model\JobsResponseModel**](../Model/JobsResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobQueProcessAction**
> \Ringba\Model\JobActionResultModel jobQueProcessAction($id, $model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\JobQueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$model = new \Ringba\Model\JobActionModel(); // \Ringba\Model\JobActionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->jobQueProcessAction($id, $model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueApi->jobQueProcessAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **model** | [**\Ringba\Model\JobActionModel**](../Model/JobActionModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\JobActionResultModel**](../Model/JobActionResultModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

