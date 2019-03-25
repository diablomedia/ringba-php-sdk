# Ringba\OffersApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offersAddNumber**](OffersApi.md#offersAddNumber) | **POST** /{accountid}/offers/{cmpId}/number | 
[**offersGet**](OffersApi.md#offersGet) | **GET** /{accountid}/offers | 
[**offersGetPublisherNumbers**](OffersApi.md#offersGetPublisherNumbers) | **GET** /{accountid}/offers/{cmpId}/number | 
[**offersGet_0**](OffersApi.md#offersGet_0) | **GET** /{accountid}/offers/{cmpid} | 
[**offersHide**](OffersApi.md#offersHide) | **POST** /{accountid}/offers/{cmpid}/hide | 
[**offersJoin**](OffersApi.md#offersJoin) | **POST** /{accountid}/offers/{cmpid}/join | 
[**offersLeave**](OffersApi.md#offersLeave) | **POST** /{accountid}/offers/{cmpid}/leave | 
[**offersUnhide**](OffersApi.md#offersUnhide) | **POST** /{accountid}/offers/{cmpid}/unhide | 


# **offersAddNumber**
> object offersAddNumber($cmp_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmp_id = "cmp_id_example"; // string | 
$request = new \Ringba\Model\CreateNumberRequestModel(); // \Ringba\Model\CreateNumberRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersAddNumber($cmp_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersAddNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmp_id** | **string**|  |
 **request** | [**\Ringba\Model\CreateNumberRequestModel**](../Model/CreateNumberRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersGet**
> object offersGet($accountid, $include_hidden)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_hidden = true; // bool | 

try {
    $result = $apiInstance->offersGet($accountid, $include_hidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_hidden** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersGetPublisherNumbers**
> object offersGetPublisherNumbers($cmp_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmp_id = "cmp_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersGetPublisherNumbers($cmp_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersGetPublisherNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmp_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersGet_0**
> object offersGet_0($cmpid, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmpid = "cmpid_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersGet_0($cmpid, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmpid** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersHide**
> object offersHide($cmpid, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmpid = "cmpid_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersHide($cmpid, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersHide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmpid** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersJoin**
> object offersJoin($cmpid, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmpid = "cmpid_example"; // string | 
$request = new \Ringba\Model\JoinOfferRequestModel(); // \Ringba\Model\JoinOfferRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersJoin($cmpid, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmpid** | **string**|  |
 **request** | [**\Ringba\Model\JoinOfferRequestModel**](../Model/JoinOfferRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersLeave**
> object offersLeave($cmpid, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmpid = "cmpid_example"; // string | 
$request = new \Ringba\Model\LeaveOfferRequestModel(); // \Ringba\Model\LeaveOfferRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersLeave($cmpid, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmpid** | **string**|  |
 **request** | [**\Ringba\Model\LeaveOfferRequestModel**](../Model/LeaveOfferRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersUnhide**
> object offersUnhide($cmpid, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmpid = "cmpid_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->offersUnhide($cmpid, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersUnhide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmpid** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

