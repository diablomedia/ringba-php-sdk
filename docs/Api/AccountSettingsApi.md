# Ringba\AccountSettingsApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountSettingsCreateOrUpdateSettings**](AccountSettingsApi.md#accountSettingsCreateOrUpdateSettings) | **PUT** /{accountid}/accountsettings | 
[**accountSettingsGetItem**](AccountSettingsApi.md#accountSettingsGetItem) | **GET** /{accountid}/accountsettings | 


# **accountSettingsCreateOrUpdateSettings**
> object accountSettingsCreateOrUpdateSettings($account_settings_model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_settings_model = array(new \Ringba\Model\CreateAccountSettingsRequest()); // \Ringba\Model\CreateAccountSettingsRequest[] | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->accountSettingsCreateOrUpdateSettings($account_settings_model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsCreateOrUpdateSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_settings_model** | [**\Ringba\Model\CreateAccountSettingsRequest[]**](../Model/CreateAccountSettingsRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSettingsGetItem**
> object accountSettingsGetItem($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->accountSettingsGetItem($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsGetItem: ', $e->getMessage(), PHP_EOL;
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

