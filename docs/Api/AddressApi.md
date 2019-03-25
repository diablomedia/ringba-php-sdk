# Ringba\AddressApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressCreateAddress**](AddressApi.md#addressCreateAddress) | **POST** /{accountid}/addresses | 
[**addressDeleteItem**](AddressApi.md#addressDeleteItem) | **DELETE** /{accountid}/addresses/{id} | 
[**addressGet**](AddressApi.md#addressGet) | **GET** /{accountid}/addresses | 
[**addressGetCountries**](AddressApi.md#addressGetCountries) | **GET** /{accountid}/addresses/countries | 
[**addressGetCountryAddressRequirements**](AddressApi.md#addressGetCountryAddressRequirements) | **GET** /{accountid}/addresses/requirements/{countryCode} | 
[**addressGet_0**](AddressApi.md#addressGet_0) | **GET** /{accountid}/addresses/{id} | 
[**addressPatchItem**](AddressApi.md#addressPatchItem) | **PATCH** /{accountid}/addresses/{id} | 
[**addressSetAsDefault**](AddressApi.md#addressSetAsDefault) | **POST** /{accountid}/addresses/{id}/SetDefault | 
[**addressSubmitProofDocument**](AddressApi.md#addressSubmitProofDocument) | **PUT** /{accountid}/addresses/{id}/proof | updates a creditcard for this account


# **addressCreateAddress**
> object addressCreateAddress($address, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = new \Ringba\Model\Address(); // \Ringba\Model\Address | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressCreateAddress($address, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressCreateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | [**\Ringba\Model\Address**](../Model/Address.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressDeleteItem**
> object addressDeleteItem($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressDeleteItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressDeleteItem: ', $e->getMessage(), PHP_EOL;
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

# **addressGet**
> object addressGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressGet: ', $e->getMessage(), PHP_EOL;
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

# **addressGetCountries**
> object addressGetCountries($accountid, $include_no_voice, $include_mobile)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_no_voice = true; // bool | 
$include_mobile = true; // bool | 

try {
    $result = $apiInstance->addressGetCountries($accountid, $include_no_voice, $include_mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressGetCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_no_voice** | **bool**|  | [optional]
 **include_mobile** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressGetCountryAddressRequirements**
> object addressGetCountryAddressRequirements($country_code, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressGetCountryAddressRequirements($country_code, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressGetCountryAddressRequirements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressGet_0**
> object addressGet_0($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressGet_0($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressGet_0: ', $e->getMessage(), PHP_EOL;
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

# **addressPatchItem**
> object addressPatchItem($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressPatchItem($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressPatchItem: ', $e->getMessage(), PHP_EOL;
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

# **addressSetAsDefault**
> object addressSetAsDefault($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressSetAsDefault($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressSetAsDefault: ', $e->getMessage(), PHP_EOL;
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

# **addressSubmitProofDocument**
> object addressSubmitProofDocument($id, $accountid)

updates a creditcard for this account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->addressSubmitProofDocument($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressSubmitProofDocument: ', $e->getMessage(), PHP_EOL;
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

