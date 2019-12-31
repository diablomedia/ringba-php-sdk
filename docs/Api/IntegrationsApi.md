# Ringba\IntegrationsApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationsGetAdWordsAccounts**](IntegrationsApi.md#integrationsGetAdWordsAccounts) | **GET** /{accountId}/integrations/ga/{integrationId}/accounts | 
[**integrationsGetAdWordsConversionSets**](IntegrationsApi.md#integrationsGetAdWordsConversionSets) | **GET** /{accountId}/integrations/ga/{integrationId}/conversionsets | 
[**integrationsGetAllIntegrations**](IntegrationsApi.md#integrationsGetAllIntegrations) | **GET** /{accountId}/integrations | 
[**integrationsGetFacebookAccountDetails**](IntegrationsApi.md#integrationsGetFacebookAccountDetails) | **GET** /{accountId}/integrations/fb/{integrationId}/accountdetails | 
[**integrationsGetFacebookConversionSets**](IntegrationsApi.md#integrationsGetFacebookConversionSets) | **GET** /{accountId}/integrations/fb/{integrationId}/conversionsets | 
[**integrationsRemoveIntegrationSetting**](IntegrationsApi.md#integrationsRemoveIntegrationSetting) | **DELETE** /{accountId}/integrations/integrationsetting/{id} | 
[**integrationsSetFacebookIntegrationSettingForJsTag**](IntegrationsApi.md#integrationsSetFacebookIntegrationSettingForJsTag) | **POST** /{accountId}/integrations/fb/{integrationId}/jstag/conversion | 
[**integrationsSetFacebookIntegrationSettingForNumbers**](IntegrationsApi.md#integrationsSetFacebookIntegrationSettingForNumbers) | **POST** /{accountId}/integrations/fb/{integrationId}/number/conversion | 
[**integrationsSetIntegrationSettingForNumbers**](IntegrationsApi.md#integrationsSetIntegrationSettingForNumbers) | **POST** /{accountId}/integrations/ga/{integrationId}/number/conversion | 
[**integrationsSetIntegrationSettingForNumbers_0**](IntegrationsApi.md#integrationsSetIntegrationSettingForNumbers_0) | **POST** /{accountId}/integrations/ga/{integrationId}/jstag/conversion | 
[**integrationsUpdateAdWordsIntegration**](IntegrationsApi.md#integrationsUpdateAdWordsIntegration) | **PATCH** /{accountId}/integrations/ga/{id} | 
[**integrationsUpdateFacebookIntegration**](IntegrationsApi.md#integrationsUpdateFacebookIntegration) | **PATCH** /{accountId}/integrations/fb/{id} | 
[**integrationsUpdateFacebookIntegrationSetting**](IntegrationsApi.md#integrationsUpdateFacebookIntegrationSetting) | **PUT** /{accountId}/integrations/fb/{integrationSettingId}/conversion | 
[**integrationsUpdateIntegrationSetting**](IntegrationsApi.md#integrationsUpdateIntegrationSetting) | **PUT** /{accountId}/integrations/ga/{integrationSettingId}/conversion | 


# **integrationsGetAdWordsAccounts**
> object integrationsGetAdWordsAccounts($integration_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsGetAdWordsAccounts($integration_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsGetAdWordsAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsGetAdWordsConversionSets**
> object integrationsGetAdWordsConversionSets($integration_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsGetAdWordsConversionSets($integration_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsGetAdWordsConversionSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsGetAllIntegrations**
> object integrationsGetAllIntegrations($account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsGetAllIntegrations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsGetAllIntegrations: ', $e->getMessage(), PHP_EOL;
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

# **integrationsGetFacebookAccountDetails**
> object integrationsGetFacebookAccountDetails($integration_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsGetFacebookAccountDetails($integration_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsGetFacebookAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsGetFacebookConversionSets**
> object integrationsGetFacebookConversionSets($integration_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsGetFacebookConversionSets($integration_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsGetFacebookConversionSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsRemoveIntegrationSetting**
> object integrationsRemoveIntegrationSetting($id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsRemoveIntegrationSetting($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsRemoveIntegrationSetting: ', $e->getMessage(), PHP_EOL;
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

# **integrationsSetFacebookIntegrationSettingForJsTag**
> object integrationsSetFacebookIntegrationSettingForJsTag($integration_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$request = new \Ringba\Model\SetJsTagIntegrationSettingRequest(); // \Ringba\Model\SetJsTagIntegrationSettingRequest | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsSetFacebookIntegrationSettingForJsTag($integration_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsSetFacebookIntegrationSettingForJsTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **request** | [**\Ringba\Model\SetJsTagIntegrationSettingRequest**](../Model/SetJsTagIntegrationSettingRequest.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsSetFacebookIntegrationSettingForNumbers**
> object integrationsSetFacebookIntegrationSettingForNumbers($integration_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$request = new \Ringba\Model\BulkSetNumbersIntegrationSettingRequest(); // \Ringba\Model\BulkSetNumbersIntegrationSettingRequest | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsSetFacebookIntegrationSettingForNumbers($integration_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsSetFacebookIntegrationSettingForNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **request** | [**\Ringba\Model\BulkSetNumbersIntegrationSettingRequest**](../Model/BulkSetNumbersIntegrationSettingRequest.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsSetIntegrationSettingForNumbers**
> object integrationsSetIntegrationSettingForNumbers($integration_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$request = new \Ringba\Model\BulkSetNumbersIntegrationSettingRequestModel(); // \Ringba\Model\BulkSetNumbersIntegrationSettingRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsSetIntegrationSettingForNumbers($integration_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsSetIntegrationSettingForNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **request** | [**\Ringba\Model\BulkSetNumbersIntegrationSettingRequestModel**](../Model/BulkSetNumbersIntegrationSettingRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsSetIntegrationSettingForNumbers_0**
> object integrationsSetIntegrationSettingForNumbers_0($integration_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = "integration_id_example"; // string | 
$request = new \Ringba\Model\SetJsTagIntegrationSettingRequestModel(); // \Ringba\Model\SetJsTagIntegrationSettingRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsSetIntegrationSettingForNumbers_0($integration_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsSetIntegrationSettingForNumbers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**|  |
 **request** | [**\Ringba\Model\SetJsTagIntegrationSettingRequestModel**](../Model/SetJsTagIntegrationSettingRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsUpdateAdWordsIntegration**
> object integrationsUpdateAdWordsIntegration($id, $values, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsUpdateAdWordsIntegration($id, $values, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsUpdateAdWordsIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **values** | **object**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsUpdateFacebookIntegration**
> object integrationsUpdateFacebookIntegration($id, $values, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsUpdateFacebookIntegration($id, $values, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsUpdateFacebookIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **values** | **object**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsUpdateFacebookIntegrationSetting**
> object integrationsUpdateFacebookIntegrationSetting($integration_setting_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_setting_id = "integration_setting_id_example"; // string | 
$request = new \Ringba\Model\BaseSetIntegrationSettingRequestModel(); // \Ringba\Model\BaseSetIntegrationSettingRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsUpdateFacebookIntegrationSetting($integration_setting_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsUpdateFacebookIntegrationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_setting_id** | **string**|  |
 **request** | [**\Ringba\Model\BaseSetIntegrationSettingRequestModel**](../Model/BaseSetIntegrationSettingRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationsUpdateIntegrationSetting**
> object integrationsUpdateIntegrationSetting($integration_setting_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_setting_id = "integration_setting_id_example"; // string | 
$request = new \Ringba\Model\BaseSetIntegrationSettingRequestModel(); // \Ringba\Model\BaseSetIntegrationSettingRequestModel | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->integrationsUpdateIntegrationSetting($integration_setting_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsUpdateIntegrationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_setting_id** | **string**|  |
 **request** | [**\Ringba\Model\BaseSetIntegrationSettingRequestModel**](../Model/BaseSetIntegrationSettingRequestModel.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

