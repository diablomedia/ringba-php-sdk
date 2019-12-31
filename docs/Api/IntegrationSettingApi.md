# Ringba\IntegrationSettingApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationSettingGetIntegrationSetting**](IntegrationSettingApi.md#integrationSettingGetIntegrationSetting) | **GET** /{accountId}/integrationsettings/{id} | 


# **integrationSettingGetIntegrationSetting**
> object integrationSettingGetIntegrationSetting($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationSettingGetIntegrationSetting($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationSettingApi->integrationSettingGetIntegrationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

