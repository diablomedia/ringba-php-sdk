# Ringba\IVRApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iVRAddNode**](IVRApi.md#iVRAddNode) | **POST** /{accountid}/ivrtree/node | adds a node to the provided tree as a child to the given parent node described by the   parentNodeId. If the request is successfull, the updated tree is returned. If there are any errors  the errors are returned.
[**iVRClone**](IVRApi.md#iVRClone) | **POST** /{accountid}/ivrtree/{id}/clone | Clone a specific IVR Tree for a given account
[**iVRDelete**](IVRApi.md#iVRDelete) | **DELETE** /{accountid}/ivrtree/{id} | Get inbound references to an IVR tree
[**iVRDeleteNode**](IVRApi.md#iVRDeleteNode) | **PATCH** /{accountid}/ivrtree/removeNode | Removes the node from the ivr tree with the given nodeId.
[**iVREditNode**](IVRApi.md#iVREditNode) | **PATCH** /{accountid}/ivrtree/editNode | edits the node from the given tree
[**iVREditNodeLink**](IVRApi.md#iVREditNodeLink) | **PATCH** /{accountid}/ivrtree/editLink | edits the node from the given tree
[**iVRFinalizeNode**](IVRApi.md#iVRFinalizeNode) | **POST** /{accountid}/ivrtree/finalizeTree | Removes the node from the ivr tree with the given nodeId.
[**iVRGet**](IVRApi.md#iVRGet) | **GET** /{accountid}/ivrtree | Returns all IVR Trees for a given account
[**iVRGetAvailableNodes**](IVRApi.md#iVRGetAvailableNodes) | **POST** /{accountid}/ivrtree/availableNodes | Returns a list of nodes that are eligible to be a child node of the given   tree and parent node.
[**iVRGetAvailableTags**](IVRApi.md#iVRGetAvailableTags) | **POST** /{accountid}/ivrtree/availableTags | Returns a list of nodes that are eligible to be a child node of the given   tree and parent node.
[**iVRGetItem**](IVRApi.md#iVRGetItem) | **GET** /{accountid}/ivrtree/{id} | Gets a specific IVR Tree for a given account
[**iVRGetReferences**](IVRApi.md#iVRGetReferences) | **GET** /{accountid}/ivrtree/{id}/InboundReferences | Get inbound references to an IVR tree
[**iVRInitializeNewTree**](IVRApi.md#iVRInitializeNewTree) | **POST** /{accountid}/ivrtree/initialize | Returns a intiliazed  tree for the given account that   is not saved. This will be the base object to build the tree  structure off of.


# **iVRAddNode**
> \Ringba\Model\IVRTreeResponse iVRAddNode($request, $accountid)

adds a node to the provided tree as a child to the given parent node described by the   parentNodeId. If the request is successfull, the updated tree is returned. If there are any errors  the errors are returned.

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

Clone a specific IVR Tree for a given account

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

Get inbound references to an IVR tree

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

Removes the node from the ivr tree with the given nodeId.

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

edits the node from the given tree

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\EditNodeRequestModel(); // \Ringba\Model\EditNodeRequestModel | the request tree
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
 **request** | [**\Ringba\Model\EditNodeRequestModel**](../Model/EditNodeRequestModel.md)| the request tree |
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

edits the node from the given tree

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IVRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\EditNodeLinkModel(); // \Ringba\Model\EditNodeLinkModel | the request tree
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
 **request** | [**\Ringba\Model\EditNodeLinkModel**](../Model/EditNodeLinkModel.md)| the request tree |
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

Removes the node from the ivr tree with the given nodeId.

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

Returns all IVR Trees for a given account

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

Returns a list of nodes that are eligible to be a child node of the given   tree and parent node.

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

Returns a list of nodes that are eligible to be a child node of the given   tree and parent node.

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

Gets a specific IVR Tree for a given account

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

Get inbound references to an IVR tree

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

Returns a intiliazed  tree for the given account that   is not saved. This will be the base object to build the tree  structure off of.

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

