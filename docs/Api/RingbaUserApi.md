# Ringba\RingbaUserApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ringbaUserGet**](RingbaUserApi.md#ringbaUserGet) | **GET** /uiUserSettings | 
[**ringbaUserSetUiItem**](RingbaUserApi.md#ringbaUserSetUiItem) | **POST** /uiUserSettings | 


# **ringbaUserGet**
> object ringbaUserGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ringbaUserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaUserApi->ringbaUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaUserSetUiItem**
> object ringbaUserSetUiItem($values)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$values = new \Ringba\Model\RingbaSettingRequestModel(); // \Ringba\Model\RingbaSettingRequestModel | 

try {
    $result = $apiInstance->ringbaUserSetUiItem($values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaUserApi->ringbaUserSetUiItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **values** | [**\Ringba\Model\RingbaSettingRequestModel**](../Model/RingbaSettingRequestModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

