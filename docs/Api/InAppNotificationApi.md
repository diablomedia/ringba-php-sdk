# Ringba\InAppNotificationApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inAppNotificationDeleteMessage**](InAppNotificationApi.md#inAppNotificationDeleteMessage) | **DELETE** /notifications/{id} | 
[**inAppNotificationGetAll**](InAppNotificationApi.md#inAppNotificationGetAll) | **GET** /notifications/all | 
[**inAppNotificationGetCounts**](InAppNotificationApi.md#inAppNotificationGetCounts) | **GET** /notifications/counts | 
[**inAppNotificationGetMessage**](InAppNotificationApi.md#inAppNotificationGetMessage) | **GET** /notifications/{id} | 
[**inAppNotificationGetMessages**](InAppNotificationApi.md#inAppNotificationGetMessages) | **GET** /notifications | 
[**inAppNotificationGetPreviews**](InAppNotificationApi.md#inAppNotificationGetPreviews) | **GET** /notifications/toasts | 
[**inAppNotificationMarkMessageRead**](InAppNotificationApi.md#inAppNotificationMarkMessageRead) | **PUT** /notifications/{id} | 


# **inAppNotificationDeleteMessage**
> object inAppNotificationDeleteMessage($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->inAppNotificationDeleteMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationDeleteMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inAppNotificationGetAll**
> \Ringba\Model\GetAllResponse inAppNotificationGetAll()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->inAppNotificationGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ringba\Model\GetAllResponse**](../Model/GetAllResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inAppNotificationGetCounts**
> \Ringba\Model\CountResponse inAppNotificationGetCounts()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->inAppNotificationGetCounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationGetCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ringba\Model\CountResponse**](../Model/CountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inAppNotificationGetMessage**
> \Ringba\Model\MessageResponse inAppNotificationGetMessage($id, $mark_as_read)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$mark_as_read = true; // bool | 

try {
    $result = $apiInstance->inAppNotificationGetMessage($id, $mark_as_read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationGetMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **mark_as_read** | **bool**|  | [optional]

### Return type

[**\Ringba\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inAppNotificationGetMessages**
> \Ringba\Model\MessagesResponse inAppNotificationGetMessages($page, $page_size, $pagination_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | 
$page_size = 56; // int | 
$pagination_key = 56; // int | 

try {
    $result = $apiInstance->inAppNotificationGetMessages($page, $page_size, $pagination_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationGetMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **pagination_key** | **int**|  | [optional]

### Return type

[**\Ringba\Model\MessagesResponse**](../Model/MessagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inAppNotificationGetPreviews**
> \Ringba\Model\PreviewResponse inAppNotificationGetPreviews()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->inAppNotificationGetPreviews();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationGetPreviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ringba\Model\PreviewResponse**](../Model/PreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inAppNotificationMarkMessageRead**
> object inAppNotificationMarkMessageRead($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->inAppNotificationMarkMessageRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppNotificationApi->inAppNotificationMarkMessageRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

