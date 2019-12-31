# Ringba\CallPlanApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callPlanAddRoute**](CallPlanApi.md#callPlanAddRoute) | **POST** /{accountid}/callplan/{id}/callRoute | 
[**callPlanCreate**](CallPlanApi.md#callPlanCreate) | **POST** /{accountid}/callplan | 
[**callPlanDeleteCallPlan**](CallPlanApi.md#callPlanDeleteCallPlan) | **DELETE** /{accountid}/callplan/{id} | 
[**callPlanDeleteRoute**](CallPlanApi.md#callPlanDeleteRoute) | **DELETE** /{accountid}/callplan/{id}/callRoute/{routeId} | 
[**callPlanDuplicate**](CallPlanApi.md#callPlanDuplicate) | **POST** /{accountid}/callplan/duplicate/{id} | 
[**callPlanGet**](CallPlanApi.md#callPlanGet) | **GET** /{accountid}/callplan | 
[**callPlanGetCallRoutes**](CallPlanApi.md#callPlanGetCallRoutes) | **GET** /{accountid}/callplan/{id}/callRoute | 
[**callPlanGetInboundReferences**](CallPlanApi.md#callPlanGetInboundReferences) | **GET** /{accountid}/callplan/{id}/InboundReferences | 
[**callPlanGetItem**](CallPlanApi.md#callPlanGetItem) | **GET** /{accountid}/callplan/{id} | 
[**callPlanPatch**](CallPlanApi.md#callPlanPatch) | **PATCH** /{accountid}/callplan/{id} | 


# **callPlanAddRoute**
> \Ringba\Model\CallRoutesResponse callPlanAddRoute($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\CallRouteAddRequest(); // \Ringba\Model\CallRouteAddRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanAddRoute($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanAddRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\CallRouteAddRequest**](../Model/CallRouteAddRequest.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallRoutesResponse**](../Model/CallRoutesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanCreate**
> \Ringba\Model\CallPlan callPlanCreate($call_plan, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$call_plan = new \Ringba\Model\CallPlanRequestModel(); // \Ringba\Model\CallPlanRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanCreate($call_plan, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_plan** | [**\Ringba\Model\CallPlanRequestModel**](../Model/CallPlanRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallPlan**](../Model/CallPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanDeleteCallPlan**
> object callPlanDeleteCallPlan($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanDeleteCallPlan($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanDeleteCallPlan: ', $e->getMessage(), PHP_EOL;
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

# **callPlanDeleteRoute**
> \Ringba\Model\CallRoutesResponse callPlanDeleteRoute($id, $route_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$route_id = "route_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanDeleteRoute($id, $route_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanDeleteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **route_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallRoutesResponse**](../Model/CallRoutesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanDuplicate**
> \Ringba\Model\CallPlan callPlanDuplicate($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanDuplicate($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanDuplicate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallPlan**](../Model/CallPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanGet**
> \Ringba\Model\CallPlan[] callPlanGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallPlan[]**](../Model/CallPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanGetCallRoutes**
> \Ringba\Model\CallRoutesResponse callPlanGetCallRoutes($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanGetCallRoutes($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanGetCallRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallRoutesResponse**](../Model/CallRoutesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanGetInboundReferences**
> object callPlanGetInboundReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanGetInboundReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **callPlanGetItem**
> \Ringba\Model\CallPlan callPlanGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\CallPlan**](../Model/CallPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPlanPatch**
> \Ringba\Model\CallPlan callPlanPatch($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callPlanPatch($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallPlanApi->callPlanPatch: ', $e->getMessage(), PHP_EOL;
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

[**\Ringba\Model\CallPlan**](../Model/CallPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

