# Ringba\AccountUISettingsApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountUISettingsGet**](AccountUISettingsApi.md#accountUISettingsGet) | **GET** /{accountId}/UISettings | 
[**accountUISettingsSetUiItem**](AccountUISettingsApi.md#accountUISettingsSetUiItem) | **POST** /{accountId}/UISettings | 


# **accountUISettingsGet**
> object accountUISettingsGet($account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AccountUISettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->accountUISettingsGet($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountUISettingsApi->accountUISettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUISettingsSetUiItem**
> object accountUISettingsSetUiItem($values, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AccountUISettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$values = new \Ringba\Model\RingbaSettingRequestModel(); // \Ringba\Model\RingbaSettingRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->accountUISettingsSetUiItem($values, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountUISettingsApi->accountUISettingsSetUiItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **values** | [**\Ringba\Model\RingbaSettingRequestModel**](../Model/RingbaSettingRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

