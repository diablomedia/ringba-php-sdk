# Ringba\TargetApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**targetAddBuyerToTarget**](TargetApi.md#targetAddBuyerToTarget) | **PUT** /{accountid}/targets/{id}/Buyer | 
[**targetBuyerSetConcurrencyCap**](TargetApi.md#targetBuyerSetConcurrencyCap) | **PUT** /{accountid}/targets/{id}/BuyerSetConcurrencyCap | 
[**targetBuyerTogglePause**](TargetApi.md#targetBuyerTogglePause) | **PUT** /{accountid}/targets/{id}/BuyerTogglePause | 
[**targetCheckIfDuplicate**](TargetApi.md#targetCheckIfDuplicate) | **POST** /{accountid}/targets/isDuplicate | 
[**targetDeleteTarget**](TargetApi.md#targetDeleteTarget) | **DELETE** /{accountid}/targets/{id} | 
[**targetGet**](TargetApi.md#targetGet) | **GET** /{accountid}/targets | 
[**targetGetCurrentCounts**](TargetApi.md#targetGetCurrentCounts) | **GET** /{accountid}/targets/{id}/Counts | 
[**targetGetInboundReferences**](TargetApi.md#targetGetInboundReferences) | **GET** /{accountid}/targets/{id}/InboundReferences | 
[**targetGetItem**](TargetApi.md#targetGetItem) | **GET** /{accountid}/targets/{id} | Gets the Item with usage counts
[**targetPatch**](TargetApi.md#targetPatch) | **PATCH** /{accountid}/targets/{id} | Update a Target
[**targetPost**](TargetApi.md#targetPost) | **POST** /{accountid}/targets | Create Target
[**targetRemoveBuyerFromTargetGroup**](TargetApi.md#targetRemoveBuyerFromTargetGroup) | **DELETE** /{accountid}/targets/{id}/Buyer/{buyerId} | 
[**targetResetCount**](TargetApi.md#targetResetCount) | **DELETE** /{accountid}/targets/{id}/ResetCount | 


# **targetAddBuyerToTarget**
> object targetAddBuyerToTarget($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddBuyerRequestModel(); // \Ringba\Model\AddBuyerRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetAddBuyerToTarget($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetAddBuyerToTarget: ', $e->getMessage(), PHP_EOL;
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

# **targetBuyerSetConcurrencyCap**
> object targetBuyerSetConcurrencyCap($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\BuyerSetConcurrencyCapRequest(); // \Ringba\Model\BuyerSetConcurrencyCapRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetBuyerSetConcurrencyCap($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetBuyerSetConcurrencyCap: ', $e->getMessage(), PHP_EOL;
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

# **targetBuyerTogglePause**
> object targetBuyerTogglePause($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetBuyerTogglePause($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetBuyerTogglePause: ', $e->getMessage(), PHP_EOL;
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

# **targetCheckIfDuplicate**
> object targetCheckIfDuplicate($target, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$target = new \Ringba\Model\Target(); // \Ringba\Model\Target | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetCheckIfDuplicate($target, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetCheckIfDuplicate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | [**\Ringba\Model\Target**](../Model/Target.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetDeleteTarget**
> object targetDeleteTarget($id, $accountid, $force, $keep_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 
$keep_numbers = true; // bool | 

try {
    $result = $apiInstance->targetDeleteTarget($id, $accountid, $force, $keep_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetDeleteTarget: ', $e->getMessage(), PHP_EOL;
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

# **targetGet**
> object targetGet($accountid, $include_stats)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->targetGet($accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetGet: ', $e->getMessage(), PHP_EOL;
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

# **targetGetCurrentCounts**
> object targetGetCurrentCounts($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGetCurrentCounts($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetGetCurrentCounts: ', $e->getMessage(), PHP_EOL;
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

# **targetGetInboundReferences**
> object targetGetInboundReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGetInboundReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **targetGetItem**
> object targetGetItem($id, $accountid)

Gets the Item with usage counts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetGetItem: ', $e->getMessage(), PHP_EOL;
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

# **targetPatch**
> object targetPatch($id, $values, $accountid)

Update a Target

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetPatch($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetPatch: ', $e->getMessage(), PHP_EOL;
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

# **targetPost**
> object targetPost($target, $accountid)

Create Target

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$target = new \Ringba\Model\Target(); // \Ringba\Model\Target | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetPost($target, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | [**\Ringba\Model\Target**](../Model/Target.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetRemoveBuyerFromTargetGroup**
> object targetRemoveBuyerFromTargetGroup($id, $buyer_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$buyer_id = "buyer_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetRemoveBuyerFromTargetGroup($id, $buyer_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetRemoveBuyerFromTargetGroup: ', $e->getMessage(), PHP_EOL;
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

# **targetResetCount**
> object targetResetCount($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->targetResetCount($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetApi->targetResetCount: ', $e->getMessage(), PHP_EOL;
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

