# Ringba\NotificationsApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationsGet**](NotificationsApi.md#notificationsGet) | **GET** /{accountid}/notifications/user | Returns all notification settings of the current user
[**notificationsPatch**](NotificationsApi.md#notificationsPatch) | **PATCH** /{accountid}/notifications/user | Overwrites the existing notification settings of the current user with the new ones


# **notificationsGet**
> object notificationsGet($accountid)

Returns all notification settings of the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->notificationsGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsGet: ', $e->getMessage(), PHP_EOL;
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

# **notificationsPatch**
> object notificationsPatch($settings, $accountid)

Overwrites the existing notification settings of the current user with the new ones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings = new \Ringba\Model\NotificationsSettingsModel(); // \Ringba\Model\NotificationsSettingsModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->notificationsPatch($settings, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | [**\Ringba\Model\NotificationsSettingsModel**](../Model/NotificationsSettingsModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

