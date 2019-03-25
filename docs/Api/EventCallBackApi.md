# Ringba\EventCallBackApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventCallBackCreate**](EventCallBackApi.md#eventCallBackCreate) | **POST** /{accountid}/EventCallBacks | 
[**eventCallBackDelete**](EventCallBackApi.md#eventCallBackDelete) | **DELETE** /{accountid}/EventCallBacks/{id} | 
[**eventCallBackGet**](EventCallBackApi.md#eventCallBackGet) | **GET** /{accountid}/EventCallBacks | 
[**eventCallBackGetInboundReferences**](EventCallBackApi.md#eventCallBackGetInboundReferences) | **GET** /{accountid}/EventCallBacks/{id}/InboundReferences | 
[**eventCallBackGetItem**](EventCallBackApi.md#eventCallBackGetItem) | **GET** /{accountid}/EventCallBacks/{id} | 
[**eventCallBackGetMacros**](EventCallBackApi.md#eventCallBackGetMacros) | **GET** /{accountid}/EventCallBacks/macros | a list of macros that can be used in a callback
[**eventCallBackPatch**](EventCallBackApi.md#eventCallBackPatch) | **PATCH** /{accountid}/EventCallBacks/{id} | 


# **eventCallBackCreate**
> object eventCallBackCreate($event_callback, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_callback = new \Ringba\Model\EventCallBackModel(); // \Ringba\Model\EventCallBackModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackCreate($event_callback, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_callback** | [**\Ringba\Model\EventCallBackModel**](../Model/EventCallBackModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventCallBackDelete**
> object eventCallBackDelete($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackDelete($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackDelete: ', $e->getMessage(), PHP_EOL;
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

# **eventCallBackGet**
> object eventCallBackGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackGet: ', $e->getMessage(), PHP_EOL;
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

# **eventCallBackGetInboundReferences**
> object eventCallBackGetInboundReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackGetInboundReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **eventCallBackGetItem**
> object eventCallBackGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackGetItem: ', $e->getMessage(), PHP_EOL;
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

# **eventCallBackGetMacros**
> object eventCallBackGetMacros($accountid)

a list of macros that can be used in a callback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackGetMacros($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackGetMacros: ', $e->getMessage(), PHP_EOL;
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

# **eventCallBackPatch**
> object eventCallBackPatch($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\EventCallBackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->eventCallBackPatch($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventCallBackApi->eventCallBackPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **values** | **object**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

