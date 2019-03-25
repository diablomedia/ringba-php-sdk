# Ringba\BuyersApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyersCreateBuyer**](BuyersApi.md#buyersCreateBuyer) | **POST** /{accountId}/Buyers | Creates an new buyer and adds it to the current account;
[**buyersDelete**](BuyersApi.md#buyersDelete) | **DELETE** /{accountId}/Buyers/{id} | 
[**buyersGet**](BuyersApi.md#buyersGet) | **GET** /{accountId}/Buyers | List the Buyers Associated with this account.
[**buyersGetItem**](BuyersApi.md#buyersGetItem) | **GET** /{accountId}/Buyers/{id} | Get a specific Buyer by the id of the Buyer
[**buyersGetReferences**](BuyersApi.md#buyersGetReferences) | **GET** /{accountId}/Buyers/{id}/InboundReferences | Get a specific Buyer&#39;s references
[**buyersGetTargets**](BuyersApi.md#buyersGetTargets) | **GET** /{accountId}/Buyers/{id}/Targets | 
[**buyersGetUsers**](BuyersApi.md#buyersGetUsers) | **GET** /{accountId}/Buyers/{id}/Users | 
[**buyersPatchItem**](BuyersApi.md#buyersPatchItem) | **PATCH** /{accountId}/Buyers/{id} | patches or updates specific properties of an Buyer


# **buyersCreateBuyer**
> object buyersCreateBuyer($buyer, $account_id)

Creates an new buyer and adds it to the current account;

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer = new \Ringba\Model\CreateBuyerModel(); // \Ringba\Model\CreateBuyerModel | The buyer to create
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersCreateBuyer($buyer, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersCreateBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer** | [**\Ringba\Model\CreateBuyerModel**](../Model/CreateBuyerModel.md)| The buyer to create |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersDelete**
> object buyersDelete($id, $account_id, $force)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 
$force = true; // bool | 

try {
    $result = $apiInstance->buyersDelete($id, $account_id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **account_id** | **string**|  |
 **force** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersGet**
> object buyersGet($account_id)

List the Buyers Associated with this account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersGet($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersGetItem**
> object buyersGetItem($id, $account_id)

Get a specific Buyer by the id of the Buyer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The Id of the buyer
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersGetItem($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Id of the buyer |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersGetReferences**
> object buyersGetReferences($id, $account_id)

Get a specific Buyer's references

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The Id of the buyer
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersGetReferences($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersGetReferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Id of the buyer |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersGetTargets**
> object buyersGetTargets($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersGetTargets($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersGetTargets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersGetUsers**
> object buyersGetUsers($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersGetUsers($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersGetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyersPatchItem**
> object buyersPatchItem($id, $values, $account_id)

patches or updates specific properties of an Buyer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the Buyer to update
$values = new \stdClass; // object | the list of fields and values to updte
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->buyersPatchItem($id, $values, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->buyersPatchItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the Buyer to update |
 **values** | **object**| the list of fields and values to updte |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

