# Ringba\NumberPoolApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**numberPoolAddAffiliate**](NumberPoolApi.md#numberPoolAddAffiliate) | **PUT** /{accountid}/numberpools/{id}/Affiliate | 
[**numberPoolAddNumber**](NumberPoolApi.md#numberPoolAddNumber) | **PUT** /{accountid}/numberpools/{id}/Numbers | 
[**numberPoolAddNumbers**](NumberPoolApi.md#numberPoolAddNumbers) | **PUT** /{accountid}/numberpools/{id}/AllocateMoreNumbers | 
[**numberPoolAddNumbers_0**](NumberPoolApi.md#numberPoolAddNumbers_0) | **PUT** /{accountid}/numberpools/{id}/Expand | 
[**numberPoolCreatePool**](NumberPoolApi.md#numberPoolCreatePool) | **POST** /{accountid}/numberpools | 
[**numberPoolDeletePool**](NumberPoolApi.md#numberPoolDeletePool) | **DELETE** /{accountid}/numberpools/{id} | 
[**numberPoolGet**](NumberPoolApi.md#numberPoolGet) | **GET** /{accountid}/numberpools | 
[**numberPoolGetAllocationJob**](NumberPoolApi.md#numberPoolGetAllocationJob) | **GET** /{accountid}/numberpools/{id}/AllocationJobs/{allocationJobId} | 
[**numberPoolGetAllocationJobs**](NumberPoolApi.md#numberPoolGetAllocationJobs) | **GET** /{accountid}/numberpools/{id}/AllocationJobs | 
[**numberPoolGetFreePoolSize**](NumberPoolApi.md#numberPoolGetFreePoolSize) | **GET** /{accountid}/numberpools/{id}/FreeNumberCount | 
[**numberPoolGetInboundReferences**](NumberPoolApi.md#numberPoolGetInboundReferences) | **GET** /{accountid}/numberpools/{id}/InboundReferences | 
[**numberPoolGetItem**](NumberPoolApi.md#numberPoolGetItem) | **GET** /{accountid}/numberpools/{id} | 
[**numberPoolGetNumbers**](NumberPoolApi.md#numberPoolGetNumbers) | **GET** /{accountid}/numberpools/{id}/Numbers | 
[**numberPoolInUseNumbers**](NumberPoolApi.md#numberPoolInUseNumbers) | **GET** /{accountid}/numberpools/{id}/Numbers/InUse | 
[**numberPoolPatchItem**](NumberPoolApi.md#numberPoolPatchItem) | **PATCH** /{accountid}/numberpools/{id} | Updates the values of number pool
[**numberPoolRemoveAffilaite**](NumberPoolApi.md#numberPoolRemoveAffilaite) | **DELETE** /{accountid}/numberpools/{id}/Affiliate/{affiliateId} | 
[**numberPoolRemoveNumber**](NumberPoolApi.md#numberPoolRemoveNumber) | **DELETE** /{accountid}/numberpools/{id}/Numbers/{numberId} | 
[**numberPoolRemoveNumbers**](NumberPoolApi.md#numberPoolRemoveNumbers) | **POST** /{accountid}/numberpools/{id}/Shrink | 
[**numberPoolReplaceNumbers**](NumberPoolApi.md#numberPoolReplaceNumbers) | **POST** /{accountid}/numberpools/{id}/Replace | 
[**numberPoolSyncNumberCount**](NumberPoolApi.md#numberPoolSyncNumberCount) | **POST** /{accountid}/numberpools/SyncNumberCount | 
[**numberPoolVerifyNumbers**](NumberPoolApi.md#numberPoolVerifyNumbers) | **GET** /{accountid}/numberpools/{id}/Numbers/Verify | 


# **numberPoolAddAffiliate**
> object numberPoolAddAffiliate($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddAffiliateRequest(); // \Ringba\Model\AddAffiliateRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolAddAffiliate($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolAddAffiliate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\AddAffiliateRequest**](../Model/AddAffiliateRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolAddNumber**
> object numberPoolAddNumber($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\NumberPoolNumberRequest(); // \Ringba\Model\NumberPoolNumberRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolAddNumber($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolAddNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\NumberPoolNumberRequest**](../Model/NumberPoolNumberRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolAddNumbers**
> object numberPoolAddNumbers($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddNumberRequest(); // \Ringba\Model\AddNumberRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolAddNumbers($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolAddNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\AddNumberRequest**](../Model/AddNumberRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolAddNumbers_0**
> object numberPoolAddNumbers_0($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddNumberRequest(); // \Ringba\Model\AddNumberRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolAddNumbers_0($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolAddNumbers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\AddNumberRequest**](../Model/AddNumberRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolCreatePool**
> object numberPoolCreatePool($value, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = new \Ringba\Model\NumberPool(); // \Ringba\Model\NumberPool | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolCreatePool($value, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolCreatePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\Ringba\Model\NumberPool**](../Model/NumberPool.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolDeletePool**
> object numberPoolDeletePool($id, $accountid, $force, $keep_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 
$keep_numbers = true; // bool | 

try {
    $result = $apiInstance->numberPoolDeletePool($id, $accountid, $force, $keep_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolDeletePool: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolGet**
> object numberPoolGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGet: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolGetAllocationJob**
> object numberPoolGetAllocationJob($id, $allocation_job_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$allocation_job_id = "allocation_job_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolGetAllocationJob($id, $allocation_job_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGetAllocationJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **allocation_job_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolGetAllocationJobs**
> object numberPoolGetAllocationJobs($id, $accountid, $filter)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$filter = "filter_example"; // string | 

try {
    $result = $apiInstance->numberPoolGetAllocationJobs($id, $accountid, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGetAllocationJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **filter** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolGetFreePoolSize**
> object numberPoolGetFreePoolSize($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolGetFreePoolSize($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGetFreePoolSize: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolGetInboundReferences**
> object numberPoolGetInboundReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolGetInboundReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolGetItem**
> object numberPoolGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGetItem: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolGetNumbers**
> object numberPoolGetNumbers($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolGetNumbers($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolGetNumbers: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolInUseNumbers**
> object numberPoolInUseNumbers($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolInUseNumbers($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolInUseNumbers: ', $e->getMessage(), PHP_EOL;
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

# **numberPoolPatchItem**
> object numberPoolPatchItem($id, $values, $accountid)

Updates the values of number pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the numberpool to update
$values = new \stdClass; // object | the values of the numberpool to update
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolPatchItem($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolPatchItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the numberpool to update |
 **values** | **object**| the values of the numberpool to update |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolRemoveAffilaite**
> object numberPoolRemoveAffilaite($id, $affiliate_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolRemoveAffilaite($id, $affiliate_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolRemoveAffilaite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolRemoveNumber**
> object numberPoolRemoveNumber($id, $number_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$number_id = "number_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolRemoveNumber($id, $number_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolRemoveNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **number_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolRemoveNumbers**
> object numberPoolRemoveNumbers($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\RemoveNumbersRequest(); // \Ringba\Model\RemoveNumbersRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolRemoveNumbers($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolRemoveNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\RemoveNumbersRequest**](../Model/RemoveNumbersRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolReplaceNumbers**
> object numberPoolReplaceNumbers($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\ReplaceNumbersRequestModel(); // \Ringba\Model\ReplaceNumbersRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolReplaceNumbers($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolReplaceNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\ReplaceNumbersRequestModel**](../Model/ReplaceNumbersRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolSyncNumberCount**
> object numberPoolSyncNumberCount($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolSyncNumberCount($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolSyncNumberCount: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberPoolVerifyNumbers**
> object numberPoolVerifyNumbers($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\NumberPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->numberPoolVerifyNumbers($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberPoolApi->numberPoolVerifyNumbers: ', $e->getMessage(), PHP_EOL;
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

