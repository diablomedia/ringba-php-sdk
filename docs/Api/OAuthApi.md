# Ringba\OAuthApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oAuthAddFacebookUser**](OAuthApi.md#oAuthAddFacebookUser) | **POST** /{accountId}/oauth/fb/callback | 
[**oAuthAddUserAdwordsData**](OAuthApi.md#oAuthAddUserAdwordsData) | **POST** /{accountId}/oauth/ga/callback | 
[**oAuthGetAuthorizationUrl**](OAuthApi.md#oAuthGetAuthorizationUrl) | **GET** /{accountId}/oauth/ga/authurl | 
[**oAuthGetFacebookAuthorisationUrl**](OAuthApi.md#oAuthGetFacebookAuthorisationUrl) | **GET** /{accountId}/oauth/fb/authurl | 


# **oAuthAddFacebookUser**
> object oAuthAddFacebookUser($request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\BaseOAuthCallbackRequestModel(); // \Ringba\Model\BaseOAuthCallbackRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->oAuthAddFacebookUser($request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthAddFacebookUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\BaseOAuthCallbackRequestModel**](../Model/BaseOAuthCallbackRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oAuthAddUserAdwordsData**
> object oAuthAddUserAdwordsData($request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\BaseOAuthCallbackRequestModel(); // \Ringba\Model\BaseOAuthCallbackRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->oAuthAddUserAdwordsData($request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthAddUserAdwordsData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\BaseOAuthCallbackRequestModel**](../Model/BaseOAuthCallbackRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oAuthGetAuthorizationUrl**
> object oAuthGetAuthorizationUrl($account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->oAuthGetAuthorizationUrl($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthGetAuthorizationUrl: ', $e->getMessage(), PHP_EOL;
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

# **oAuthGetFacebookAuthorisationUrl**
> object oAuthGetFacebookAuthorisationUrl($account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->oAuthGetFacebookAuthorisationUrl($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthGetFacebookAuthorisationUrl: ', $e->getMessage(), PHP_EOL;
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

