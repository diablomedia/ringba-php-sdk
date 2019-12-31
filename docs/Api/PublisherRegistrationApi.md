# Ringba\PublisherRegistrationApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publisherRegistrationCreatePublisherRegistrationPage**](PublisherRegistrationApi.md#publisherRegistrationCreatePublisherRegistrationPage) | **POST** /{accountid}/publisher-registration | 
[**publisherRegistrationGet**](PublisherRegistrationApi.md#publisherRegistrationGet) | **GET** /{accountid}/publisher-registration | 
[**publisherRegistrationGetSignupFormDetails**](PublisherRegistrationApi.md#publisherRegistrationGetSignupFormDetails) | **GET** /PublisherSignup/{id} | 
[**publisherRegistrationGet_0**](PublisherRegistrationApi.md#publisherRegistrationGet_0) | **GET** /{accountid}/publisher-registration/{id} | 
[**publisherRegistrationNewPublisherRegistration**](PublisherRegistrationApi.md#publisherRegistrationNewPublisherRegistration) | **POST** /PublisherSignup/{id} | 
[**publisherRegistrationPatchItem**](PublisherRegistrationApi.md#publisherRegistrationPatchItem) | **PATCH** /{accountid}/publisher-registration/{id} | 
[**publisherRegistrationSetDefault**](PublisherRegistrationApi.md#publisherRegistrationSetDefault) | **POST** /{accountid}/publisher-registration/default | 


# **publisherRegistrationCreatePublisherRegistrationPage**
> object publisherRegistrationCreatePublisherRegistrationPage($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\CreatePRPModel(); // \Ringba\Model\CreatePRPModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->publisherRegistrationCreatePublisherRegistrationPage($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationCreatePublisherRegistrationPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\CreatePRPModel**](../Model/CreatePRPModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publisherRegistrationGet**
> object publisherRegistrationGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->publisherRegistrationGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationGet: ', $e->getMessage(), PHP_EOL;
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

# **publisherRegistrationGetSignupFormDetails**
> object publisherRegistrationGetSignupFormDetails($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->publisherRegistrationGetSignupFormDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationGetSignupFormDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publisherRegistrationGet_0**
> object publisherRegistrationGet_0($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->publisherRegistrationGet_0($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationGet_0: ', $e->getMessage(), PHP_EOL;
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

# **publisherRegistrationNewPublisherRegistration**
> object publisherRegistrationNewPublisherRegistration($id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\PublisherSignupModel(); // \Ringba\Model\PublisherSignupModel | 

try {
    $result = $apiInstance->publisherRegistrationNewPublisherRegistration($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationNewPublisherRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\PublisherSignupModel**](../Model/PublisherSignupModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publisherRegistrationPatchItem**
> object publisherRegistrationPatchItem($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->publisherRegistrationPatchItem($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationPatchItem: ', $e->getMessage(), PHP_EOL;
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

# **publisherRegistrationSetDefault**
> object publisherRegistrationSetDefault($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PublisherRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->publisherRegistrationSetDefault($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherRegistrationApi->publisherRegistrationSetDefault: ', $e->getMessage(), PHP_EOL;
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

