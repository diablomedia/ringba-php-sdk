# Ringba\CallApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callAdjustPayments**](CallApi.md#callAdjustPayments) | **POST** /{accountid}/Calls/Payments | Adjusts payout and/or conversion on the call. The payout and conversion events will be added or removed if necessary.
[**callAnnotateCall**](CallApi.md#callAnnotateCall) | **POST** /{accountid}/Calls/Annotate | 
[**callRequestConversionAdjustment**](CallApi.md#callRequestConversionAdjustment) | **POST** /{accountid}/Calls/RequestConversionAdjustment | 
[**callVoidCall**](CallApi.md#callVoidCall) | **POST** /{accountid}/Calls/Void | 


# **callAdjustPayments**
> object callAdjustPayments($request, $accountid)

Adjusts payout and/or conversion on the call. The payout and conversion events will be added or removed if necessary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\AdjustCallPaymentsRequestModel(); // \Ringba\Model\AdjustCallPaymentsRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callAdjustPayments($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->callAdjustPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\AdjustCallPaymentsRequestModel**](../Model/AdjustCallPaymentsRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callAnnotateCall**
> object callAnnotateCall($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\AnnotateCallRequest(); // \Ringba\Model\AnnotateCallRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callAnnotateCall($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->callAnnotateCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\AnnotateCallRequest**](../Model/AnnotateCallRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callRequestConversionAdjustment**
> object callRequestConversionAdjustment($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\AdjustConversionRequestModel(); // \Ringba\Model\AdjustConversionRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callRequestConversionAdjustment($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->callRequestConversionAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\AdjustConversionRequestModel**](../Model/AdjustConversionRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callVoidCall**
> object callVoidCall($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\VoidCallRequestModel(); // \Ringba\Model\VoidCallRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->callVoidCall($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallApi->callVoidCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\VoidCallRequestModel**](../Model/VoidCallRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

