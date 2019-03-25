# Ringba\InAppNotificationApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inAppNotificationDeleteMessage**](InAppNotificationApi.md#inAppNotificationDeleteMessage) | **DELETE** /notifications/{id} | deletes a givent message
[**inAppNotificationGetAll**](InAppNotificationApi.md#inAppNotificationGetAll) | **GET** /notifications/all | returns the message toasts and message counts
[**inAppNotificationGetCounts**](InAppNotificationApi.md#inAppNotificationGetCounts) | **GET** /notifications/counts | returns the counts for a the loged in user. Such as total and unread counts
[**inAppNotificationGetMessage**](InAppNotificationApi.md#inAppNotificationGetMessage) | **GET** /notifications/{id} | gets the message
[**inAppNotificationGetMessages**](InAppNotificationApi.md#inAppNotificationGetMessages) | **GET** /notifications | returns the notifications for a given user  in order to get the tope 5 message, you would call this method with pageSize&#x3D;5  and leave rest of the responses blank
[**inAppNotificationGetPreviews**](InAppNotificationApi.md#inAppNotificationGetPreviews) | **GET** /notifications/toasts | returns the message toasts to show a user
[**inAppNotificationMarkMessageRead**](InAppNotificationApi.md#inAppNotificationMarkMessageRead) | **PUT** /notifications/{id} | marks a given message as read


# **inAppNotificationDeleteMessage**
> object inAppNotificationDeleteMessage($id)

deletes a givent message

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

returns the message toasts and message counts

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

returns the counts for a the loged in user. Such as total and unread counts

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

gets the message

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
$mark_as_read = true; // bool | if you want to mark the messaeg as read

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
 **mark_as_read** | **bool**| if you want to mark the messaeg as read | [optional]

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

returns the notifications for a given user  in order to get the tope 5 message, you would call this method with pageSize=5  and leave rest of the responses blank

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\InAppNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | the current page
$page_size = 56; // int | the desired page size
$pagination_key = 56; // int | the pagination key for a request

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
 **page** | **int**| the current page | [optional]
 **page_size** | **int**| the desired page size | [optional]
 **pagination_key** | **int**| the pagination key for a request | [optional]

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

returns the message toasts to show a user

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

marks a given message as read

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

