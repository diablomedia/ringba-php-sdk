# Ringba\PingTreeTargetApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pingTreeTargetAddBuyerToTarget**](PingTreeTargetApi.md#pingTreeTargetAddBuyerToTarget) | **PUT** /{accountid}/pingtreetargets/{id}/Buyer | 
[**pingTreeTargetBuyerSetConcurrencyCap**](PingTreeTargetApi.md#pingTreeTargetBuyerSetConcurrencyCap) | **PUT** /{accountid}/pingtreetargets/{id}/BuyerSetConcurrencyCap | 
[**pingTreeTargetCheckIfDuplicate**](PingTreeTargetApi.md#pingTreeTargetCheckIfDuplicate) | **POST** /{accountid}/pingtreetargets/isDuplicate | 
[**pingTreeTargetDeleteTarget**](PingTreeTargetApi.md#pingTreeTargetDeleteTarget) | **DELETE** /{accountid}/pingtreetargets/{id} | 
[**pingTreeTargetGet**](PingTreeTargetApi.md#pingTreeTargetGet) | **GET** /{accountid}/pingtreetargets | 
[**pingTreeTargetGetCurrentCounts**](PingTreeTargetApi.md#pingTreeTargetGetCurrentCounts) | **GET** /{accountid}/pingtreetargets/{id}/Counts | 
[**pingTreeTargetGetInboundReferences**](PingTreeTargetApi.md#pingTreeTargetGetInboundReferences) | **GET** /{accountid}/pingtreetargets/{id}/InboundReferences | 
[**pingTreeTargetGetItem**](PingTreeTargetApi.md#pingTreeTargetGetItem) | **GET** /{accountid}/pingtreetargets/{id} | 
[**pingTreeTargetPatch**](PingTreeTargetApi.md#pingTreeTargetPatch) | **PATCH** /{accountid}/pingtreetargets/{id} | 
[**pingTreeTargetPost**](PingTreeTargetApi.md#pingTreeTargetPost) | **POST** /{accountid}/pingtreetargets | 
[**pingTreeTargetRemoveBuyerFromTargetGroup**](PingTreeTargetApi.md#pingTreeTargetRemoveBuyerFromTargetGroup) | **DELETE** /{accountid}/pingtreetargets/{id}/Buyer/{buyerId} | 
[**pingTreeTargetResetCount**](PingTreeTargetApi.md#pingTreeTargetResetCount) | **DELETE** /{accountid}/pingtreetargets/{id}/ResetCount | 
[**pingTreeTargetUpdateParseSettings**](PingTreeTargetApi.md#pingTreeTargetUpdateParseSettings) | **PUT** /{accountid}/pingtreetargets/{id}/ParseSetting | 


# **pingTreeTargetAddBuyerToTarget**
> object pingTreeTargetAddBuyerToTarget($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddBuyerRequestModel(); // \Ringba\Model\AddBuyerRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetAddBuyerToTarget($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetAddBuyerToTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\AddBuyerRequestModel**](../Model/AddBuyerRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetBuyerSetConcurrencyCap**
> object pingTreeTargetBuyerSetConcurrencyCap($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\BuyerSetConcurrencyCapRequest(); // \Ringba\Model\BuyerSetConcurrencyCapRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetBuyerSetConcurrencyCap($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetBuyerSetConcurrencyCap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\BuyerSetConcurrencyCapRequest**](../Model/BuyerSetConcurrencyCapRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetCheckIfDuplicate**
> object pingTreeTargetCheckIfDuplicate($target, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$target = new \Ringba\Model\PingTreeTarget(); // \Ringba\Model\PingTreeTarget | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetCheckIfDuplicate($target, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetCheckIfDuplicate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | [**\Ringba\Model\PingTreeTarget**](../Model/PingTreeTarget.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetDeleteTarget**
> object pingTreeTargetDeleteTarget($id, $accountid, $force, $keep_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 
$keep_numbers = true; // bool | 

try {
    $result = $apiInstance->pingTreeTargetDeleteTarget($id, $accountid, $force, $keep_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetDeleteTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **force** | **bool**|  | [optional]
 **keep_numbers** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetGet**
> object pingTreeTargetGet($accountid, $include_stats)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->pingTreeTargetGet($accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_stats** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetGetCurrentCounts**
> object pingTreeTargetGetCurrentCounts($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetGetCurrentCounts($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetGetCurrentCounts: ', $e->getMessage(), PHP_EOL;
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

# **pingTreeTargetGetInboundReferences**
> object pingTreeTargetGetInboundReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetGetInboundReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **pingTreeTargetGetItem**
> object pingTreeTargetGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetGetItem: ', $e->getMessage(), PHP_EOL;
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

# **pingTreeTargetPatch**
> object pingTreeTargetPatch($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetPatch($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetPatch: ', $e->getMessage(), PHP_EOL;
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

# **pingTreeTargetPost**
> object pingTreeTargetPost($target, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$target = new \Ringba\Model\PingTreeTargetCreateModel(); // \Ringba\Model\PingTreeTargetCreateModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetPost($target, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | [**\Ringba\Model\PingTreeTargetCreateModel**](../Model/PingTreeTargetCreateModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetRemoveBuyerFromTargetGroup**
> object pingTreeTargetRemoveBuyerFromTargetGroup($id, $buyer_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$buyer_id = "buyer_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetRemoveBuyerFromTargetGroup($id, $buyer_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetRemoveBuyerFromTargetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **buyer_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingTreeTargetResetCount**
> object pingTreeTargetResetCount($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetResetCount($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetResetCount: ', $e->getMessage(), PHP_EOL;
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

# **pingTreeTargetUpdateParseSettings**
> object pingTreeTargetUpdateParseSettings($id, $model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PingTreeTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$model = new \Ringba\Model\UrlParseSettingsModel(); // \Ringba\Model\UrlParseSettingsModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->pingTreeTargetUpdateParseSettings($id, $model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingTreeTargetApi->pingTreeTargetUpdateParseSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **model** | [**\Ringba\Model\UrlParseSettingsModel**](../Model/UrlParseSettingsModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

