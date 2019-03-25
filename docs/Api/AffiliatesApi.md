# Ringba\AffiliatesApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliatesCreateAffiliate**](AffiliatesApi.md#affiliatesCreateAffiliate) | **POST** /{accountId}/Affiliates | Creates an new Affiliate and adds it to the current account;
[**affiliatesDeleteAffiliate**](AffiliatesApi.md#affiliatesDeleteAffiliate) | **DELETE** /{accountId}/Affiliates/{id} | 
[**affiliatesGet**](AffiliatesApi.md#affiliatesGet) | **GET** /{accountId}/Affiliates | List the Affiliates Associated with this account.
[**affiliatesGetInboundReferences**](AffiliatesApi.md#affiliatesGetInboundReferences) | **GET** /{accountId}/Affiliates/{id}/InboundReferences | 
[**affiliatesGetItem**](AffiliatesApi.md#affiliatesGetItem) | **GET** /{accountId}/Affiliates/{id} | Get a specific Affiliate by the id of the Affiliate
[**affiliatesGetNumbers**](AffiliatesApi.md#affiliatesGetNumbers) | **GET** /{accountId}/Affiliates/{id}/Numbers | 
[**affiliatesGetStats**](AffiliatesApi.md#affiliatesGetStats) | **GET** /{accountId}/Affiliates/stats | Gets the Publishers Stats
[**affiliatesGetUsers**](AffiliatesApi.md#affiliatesGetUsers) | **GET** /{accountId}/Affiliates/{id}/Users | 
[**affiliatesPatchItem**](AffiliatesApi.md#affiliatesPatchItem) | **PATCH** /{accountId}/Affiliates/{id} | patches or updates specific properties of an Affiliate


# **affiliatesCreateAffiliate**
> object affiliatesCreateAffiliate($affiliate, $account_id)

Creates an new Affiliate and adds it to the current account;

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate = new \Ringba\Model\CreateAffiliateModel(); // \Ringba\Model\CreateAffiliateModel | The Affilliate to create
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesCreateAffiliate($affiliate, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesCreateAffiliate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate** | [**\Ringba\Model\CreateAffiliateModel**](../Model/CreateAffiliateModel.md)| The Affilliate to create |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesDeleteAffiliate**
> object affiliatesDeleteAffiliate($id, $account_id, $force, $keep_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 
$force = true; // bool | 
$keep_numbers = true; // bool | 

try {
    $result = $apiInstance->affiliatesDeleteAffiliate($id, $account_id, $force, $keep_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesDeleteAffiliate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **account_id** | **string**|  |
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

# **affiliatesGet**
> object affiliatesGet($account_id, $include_stats)

List the Affiliates Associated with this account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->affiliatesGet($account_id, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **include_stats** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesGetInboundReferences**
> object affiliatesGetInboundReferences($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesGetInboundReferences($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **affiliatesGetItem**
> object affiliatesGetItem($id, $account_id)

Get a specific Affiliate by the id of the Affiliate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The Id of the affiliate
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesGetItem($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Id of the affiliate |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesGetNumbers**
> object affiliatesGetNumbers($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesGetNumbers($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesGetNumbers: ', $e->getMessage(), PHP_EOL;
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

# **affiliatesGetStats**
> object affiliatesGetStats($account_id)

Gets the Publishers Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesGetStats($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesGetStats: ', $e->getMessage(), PHP_EOL;
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

# **affiliatesGetUsers**
> object affiliatesGetUsers($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesGetUsers($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesGetUsers: ', $e->getMessage(), PHP_EOL;
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

# **affiliatesPatchItem**
> object affiliatesPatchItem($id, $values, $account_id)

patches or updates specific properties of an Affiliate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the affiliate to update
$values = new \stdClass; // object | the list of fields and values to updte
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->affiliatesPatchItem($id, $values, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesPatchItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the affiliate to update |
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

