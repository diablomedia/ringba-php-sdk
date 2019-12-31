# Ringba\WhiteLabelApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**whiteLabelCnameSettings**](WhiteLabelApi.md#whiteLabelCnameSettings) | **GET** /{accountid}/whiteLabel/Cname | 
[**whiteLabelDeleteCname**](WhiteLabelApi.md#whiteLabelDeleteCname) | **DELETE** /{accountid}/whiteLabel/Cname | 
[**whiteLabelGet**](WhiteLabelApi.md#whiteLabelGet) | **GET** /{accountid}/whiteLabel | 
[**whiteLabelPublishTheme**](WhiteLabelApi.md#whiteLabelPublishTheme) | **POST** /{accountid}/whiteLabel/publish | 
[**whiteLabelRequestCname**](WhiteLabelApi.md#whiteLabelRequestCname) | **POST** /{accountid}/whiteLabel/Cname | 
[**whiteLabelSetFriendlyName**](WhiteLabelApi.md#whiteLabelSetFriendlyName) | **PATCH** /{accountid}/whiteLabel/friendlyName | 
[**whiteLabelUpdateStagingTheme**](WhiteLabelApi.md#whiteLabelUpdateStagingTheme) | **PATCH** /{accountid}/whiteLabel/theme | 
[**whiteLabelValidateFriendlyName**](WhiteLabelApi.md#whiteLabelValidateFriendlyName) | **GET** /{accountid}/whiteLabel/friendlyName/validate | 


# **whiteLabelCnameSettings**
> object whiteLabelCnameSettings($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelCnameSettings($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelCnameSettings: ', $e->getMessage(), PHP_EOL;
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

# **whiteLabelDeleteCname**
> object whiteLabelDeleteCname($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelDeleteCname($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelDeleteCname: ', $e->getMessage(), PHP_EOL;
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

# **whiteLabelGet**
> object whiteLabelGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelGet: ', $e->getMessage(), PHP_EOL;
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

# **whiteLabelPublishTheme**
> object whiteLabelPublishTheme($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelPublishTheme($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelPublishTheme: ', $e->getMessage(), PHP_EOL;
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

# **whiteLabelRequestCname**
> object whiteLabelRequestCname($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\CnameCreationRequest(); // \Ringba\Model\CnameCreationRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelRequestCname($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelRequestCname: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\CnameCreationRequest**](../Model/CnameCreationRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **whiteLabelSetFriendlyName**
> object whiteLabelSetFriendlyName($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\WhiteLabelFriendlyNameRequest(); // \Ringba\Model\WhiteLabelFriendlyNameRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelSetFriendlyName($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelSetFriendlyName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\WhiteLabelFriendlyNameRequest**](../Model/WhiteLabelFriendlyNameRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **whiteLabelUpdateStagingTheme**
> object whiteLabelUpdateStagingTheme($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\WhiteLabelThemeRequest(); // \Ringba\Model\WhiteLabelThemeRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelUpdateStagingTheme($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelUpdateStagingTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\WhiteLabelThemeRequest**](../Model/WhiteLabelThemeRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **whiteLabelValidateFriendlyName**
> object whiteLabelValidateFriendlyName($friendly_name, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\WhiteLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$friendly_name = "friendly_name_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->whiteLabelValidateFriendlyName($friendly_name, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelApi->whiteLabelValidateFriendlyName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **friendly_name** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

