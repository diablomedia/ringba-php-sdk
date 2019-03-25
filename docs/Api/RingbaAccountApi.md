# Ringba\RingbaAccountApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ringbaAccountAddUser**](RingbaAccountApi.md#ringbaAccountAddUser) | **PUT** /{accountid}/users | 
[**ringbaAccountAddUser_0**](RingbaAccountApi.md#ringbaAccountAddUser_0) | **PUT** /RingbaAccounts/{accountid}/users | 
[**ringbaAccountGet**](RingbaAccountApi.md#ringbaAccountGet) | **GET** /RingbaAccounts | 
[**ringbaAccountGet_0**](RingbaAccountApi.md#ringbaAccountGet_0) | **GET** /RingbaAccounts/{accountId} | 
[**ringbaAccountListUsers**](RingbaAccountApi.md#ringbaAccountListUsers) | **GET** /{accountid}/users | 
[**ringbaAccountListUsers_0**](RingbaAccountApi.md#ringbaAccountListUsers_0) | **GET** /RingbaAccounts/{accountid}/users | 
[**ringbaAccountRemoveUser**](RingbaAccountApi.md#ringbaAccountRemoveUser) | **DELETE** /{accountid}/users/{userId} | 
[**ringbaAccountRemoveUser_0**](RingbaAccountApi.md#ringbaAccountRemoveUser_0) | **DELETE** /RingbaAccounts/{accountid}/users/{userId} | 
[**ringbaAccountUpdate**](RingbaAccountApi.md#ringbaAccountUpdate) | **PATCH** /RingbaAccounts/{accountid} | 


# **ringbaAccountAddUser**
> object ringbaAccountAddUser($accountid, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$request = new \Ringba\Model\AddUserRequestModel(); // \Ringba\Model\AddUserRequestModel | 

try {
    $result = $apiInstance->ringbaAccountAddUser($accountid, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountAddUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **request** | [**\Ringba\Model\AddUserRequestModel**](../Model/AddUserRequestModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountAddUser_0**
> object ringbaAccountAddUser_0($accountid, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$request = new \Ringba\Model\AddUserRequestModel(); // \Ringba\Model\AddUserRequestModel | 

try {
    $result = $apiInstance->ringbaAccountAddUser_0($accountid, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountAddUser_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **request** | [**\Ringba\Model\AddUserRequestModel**](../Model/AddUserRequestModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountGet**
> object ringbaAccountGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ringbaAccountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountGet_0**
> object ringbaAccountGet_0($account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->ringbaAccountGet_0($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountGet_0: ', $e->getMessage(), PHP_EOL;
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

# **ringbaAccountListUsers**
> object ringbaAccountListUsers($accountid, $include_all_roles)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_all_roles = true; // bool | 

try {
    $result = $apiInstance->ringbaAccountListUsers($accountid, $include_all_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountListUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_all_roles** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountListUsers_0**
> object ringbaAccountListUsers_0($accountid, $include_all_roles)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_all_roles = true; // bool | 

try {
    $result = $apiInstance->ringbaAccountListUsers_0($accountid, $include_all_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountListUsers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_all_roles** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountRemoveUser**
> object ringbaAccountRemoveUser($accountid, $user_id, $notify)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$user_id = "user_id_example"; // string | 
$notify = true; // bool | 

try {
    $result = $apiInstance->ringbaAccountRemoveUser($accountid, $user_id, $notify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountRemoveUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **user_id** | **string**|  |
 **notify** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountRemoveUser_0**
> object ringbaAccountRemoveUser_0($accountid, $user_id, $notify)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$user_id = "user_id_example"; // string | 
$notify = true; // bool | 

try {
    $result = $apiInstance->ringbaAccountRemoveUser_0($accountid, $user_id, $notify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountRemoveUser_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **user_id** | **string**|  |
 **notify** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ringbaAccountUpdate**
> object ringbaAccountUpdate($accountid, $value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\RingbaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$value = new \Ringba\Model\RingbaAccountUpdateRequest(); // \Ringba\Model\RingbaAccountUpdateRequest | 

try {
    $result = $apiInstance->ringbaAccountUpdate($accountid, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RingbaAccountApi->ringbaAccountUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **value** | [**\Ringba\Model\RingbaAccountUpdateRequest**](../Model/RingbaAccountUpdateRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

