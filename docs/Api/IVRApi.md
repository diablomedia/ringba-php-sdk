# Ringba\IVRApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iVRAddNode**](IVRApi.md#iVRAddNode) | **POST** /{accountid}/ivrtree/node | 
[**iVRClone**](IVRApi.md#iVRClone) | **POST** /{accountid}/ivrtree/{id}/clone | 
[**iVRDelete**](IVRApi.md#iVRDelete) | **DELETE** /{accountid}/ivrtree/{id} | 
[**iVRDeleteNode**](IVRApi.md#iVRDeleteNode) | **PATCH** /{accountid}/ivrtree/removeNode | 
[**iVREditNode**](IVRApi.md#iVREditNode) | **PATCH** /{accountid}/ivrtree/editNode | 
[**iVREditNodeLink**](IVRApi.md#iVREditNodeLink) | **PATCH** /{accountid}/ivrtree/editLink | 
[**iVRFinalizeNode**](IVRApi.md#iVRFinalizeNode) | **POST** /{accountid}/ivrtree/finalizeTree | 
[**iVRGet**](IVRApi.md#iVRGet) | **GET** /{accountid}/ivrtree | 
[**iVRGetAvailableNodes**](IVRApi.md#iVRGetAvailableNodes) | **POST** /{accountid}/ivrtree/availableNodes | 
[**iVRGetAvailableTags**](IVRApi.md#iVRGetAvailableTags) | **POST** /{accountid}/ivrtree/availableTags | 
[**iVRGetItem**](IVRApi.md#iVRGetItem) | **GET** /{accountid}/ivrtree/{id} | 
[**iVRGetReferences**](IVRApi.md#iVRGetReferences) | **GET** /{accountid}/ivrtree/{id}/InboundReferences | 
[**iVRInitializeNewTree**](IVRApi.md#iVRInitializeNewTree) | **POST** /{accountid}/ivrtree/initialize | 


# **iVRAddNode**
> \Ringba\Model\IVRTreeResponse iVRAddNode($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\AddNodeRequestModel(); // \Ringba\Model\AddNodeRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRAddNode($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRAddNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\AddNodeRequestModel**](../Model/AddNodeRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeResponse**](../Model/IVRTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVRClone**
> object iVRClone($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRClone($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRClone: ', $e->getMessage(), PHP_EOL;
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

# **iVRDelete**
> object iVRDelete($id, $accountid, $force)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 

try {
    $result = $apiInstance->iVRDelete($id, $accountid, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **force** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVRDeleteNode**
> \Ringba\Model\IVRTreeResponse iVRDeleteNode($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\IVRNodeReferrenceModel(); // \Ringba\Model\IVRNodeReferrenceModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRDeleteNode($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRDeleteNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\IVRNodeReferrenceModel**](../Model/IVRNodeReferrenceModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeResponse**](../Model/IVRTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVREditNode**
> \Ringba\Model\IVRTreeResponse iVREditNode($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\EditNodeRequestModel(); // \Ringba\Model\EditNodeRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVREditNode($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVREditNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\EditNodeRequestModel**](../Model/EditNodeRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeResponse**](../Model/IVRTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVREditNodeLink**
> \Ringba\Model\IVRTreeResponse iVREditNodeLink($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\EditNodeLinkModel(); // \Ringba\Model\EditNodeLinkModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVREditNodeLink($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVREditNodeLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\EditNodeLinkModel**](../Model/EditNodeLinkModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeResponse**](../Model/IVRTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVRFinalizeNode**
> \Ringba\Model\IVRTreeResponse iVRFinalizeNode($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\IVRTreeRequestModel(); // \Ringba\Model\IVRTreeRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRFinalizeNode($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRFinalizeNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\IVRTreeRequestModel**](../Model/IVRTreeRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeResponse**](../Model/IVRTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVRGet**
> object iVRGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRGet: ', $e->getMessage(), PHP_EOL;
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

# **iVRGetAvailableNodes**
> \Ringba\Model\IVRTreeNodesResponse iVRGetAvailableNodes($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\GetAvailableNodesRequestModel(); // \Ringba\Model\GetAvailableNodesRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRGetAvailableNodes($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRGetAvailableNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\GetAvailableNodesRequestModel**](../Model/GetAvailableNodesRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeNodesResponse**](../Model/IVRTreeNodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVRGetAvailableTags**
> \Ringba\Model\IVRTreeNodesResponse iVRGetAvailableTags($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\GetAvailableTagsRequestModel(); // \Ringba\Model\GetAvailableTagsRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRGetAvailableTags($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRGetAvailableTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\GetAvailableTagsRequestModel**](../Model/GetAvailableTagsRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeNodesResponse**](../Model/IVRTreeNodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iVRGetItem**
> object iVRGetItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRGetItem: ', $e->getMessage(), PHP_EOL;
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

# **iVRGetReferences**
> object iVRGetReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRGetReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRGetReferences: ', $e->getMessage(), PHP_EOL;
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

# **iVRInitializeNewTree**
> \Ringba\Model\IVRTreeResponse iVRInitializeNewTree($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\CreateIVRTreeRequestModel(); // \Ringba\Model\CreateIVRTreeRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->iVRInitializeNewTree($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRApi->iVRInitializeNewTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\CreateIVRTreeRequestModel**](../Model/CreateIVRTreeRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\IVRTreeResponse**](../Model/IVRTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

