# Ringba\CallRouteApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callRouteCreate**](CallRouteApi.md#callRouteCreate) | **POST** /{accountid}/CallRoutes | 
[**callRouteGet**](CallRouteApi.md#callRouteGet) | **GET** /{accountid}/CallRoutes | 
[**callRouteGetItem**](CallRouteApi.md#callRouteGetItem) | **GET** /{accountid}/CallRoutes/{id} | 
[**callRouteLink**](CallRouteApi.md#callRouteLink) | **PATCH** /{accountid}/CallRoutes/{id}/Link | 
[**callRoutePatch**](CallRouteApi.md#callRoutePatch) | **PATCH** /{accountid}/CallRoutes/{id} | 
[**callRouteUnLink**](CallRouteApi.md#callRouteUnLink) | **PATCH** /{accountid}/CallRoutes/{id}/UnLink | 


# **callRouteCreate**
> object callRouteCreate($create_call_route, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_call_route = new \Ringba\Model\CreateCallRouteModel(); // \Ringba\Model\CreateCallRouteModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRouteCreate($create_call_route, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRouteApi->callRouteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_call_route** | [**\Ringba\Model\CreateCallRouteModel**](../Model/CreateCallRouteModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callRouteGet**
> object callRouteGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRouteGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRouteApi->callRouteGet: ', $e->getMessage(), PHP_EOL;
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

# **callRouteGetItem**
> object callRouteGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRouteGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRouteApi->callRouteGetItem: ', $e->getMessage(), PHP_EOL;
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

# **callRouteLink**
> object callRouteLink($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\LinkRequest(); // \Ringba\Model\LinkRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRouteLink($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRouteApi->callRouteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\LinkRequest**](../Model/LinkRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callRoutePatch**
> object callRoutePatch($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRoutePatch($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRouteApi->callRoutePatch: ', $e->getMessage(), PHP_EOL;
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

# **callRouteUnLink**
> object callRouteUnLink($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\LinkRequest(); // \Ringba\Model\LinkRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRouteUnLink($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallRouteApi->callRouteUnLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\LinkRequest**](../Model/LinkRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

