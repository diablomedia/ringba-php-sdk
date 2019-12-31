# Ringba\BillingApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingAddCreditCard**](BillingApi.md#billingAddCreditCard) | **POST** /{accountid}/Billing/CreditCards | 
[**billingAddFunds**](BillingApi.md#billingAddFunds) | **POST** /{accountid}/Billing/Balance | 
[**billingBillSettings**](BillingApi.md#billingBillSettings) | **PUT** /{accountid}/Billing/BillingSettings | 
[**billingCCTransactions**](BillingApi.md#billingCCTransactions) | **GET** /{accountid}/Billing/CCTransactions | 
[**billingDeleteCreditCard**](BillingApi.md#billingDeleteCreditCard) | **DELETE** /{accountid}/Billing/CreditCards/{id} | 
[**billingDisableAccount**](BillingApi.md#billingDisableAccount) | **DELETE** /{accountid}/Billing/Disable | 
[**billingEnableAccount**](BillingApi.md#billingEnableAccount) | **PUT** /{accountid}/Billing/Enable | 
[**billingFunds**](BillingApi.md#billingFunds) | **GET** /{accountid}/Billing/Balance | 
[**billingGet**](BillingApi.md#billingGet) | **GET** /{accountid}/Billing | 
[**billingGetAccountTypes**](BillingApi.md#billingGetAccountTypes) | **GET** /{accountid}/Billing/Plans | 
[**billingGetBillSettings**](BillingApi.md#billingGetBillSettings) | **GET** /{accountid}/Billing/BillingSettings | 
[**billingGetCreditCards**](BillingApi.md#billingGetCreditCards) | **GET** /{accountid}/Billing/CreditCards | 
[**billingUpdateAccountType**](BillingApi.md#billingUpdateAccountType) | **PUT** /{accountid}/Billing/Plans | 
[**billingUpdateCreditCard**](BillingApi.md#billingUpdateCreditCard) | **PUT** /{accountid}/Billing/CreditCards/{id} | 
[**billingVerify**](BillingApi.md#billingVerify) | **PUT** /{accountid}/Billing/CreditCards/{id}/verify | 


# **billingAddCreditCard**
> object billingAddCreditCard($model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Ringba\Model\AddCreditCardModel(); // \Ringba\Model\AddCreditCardModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingAddCreditCard($model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingAddCreditCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Ringba\Model\AddCreditCardModel**](../Model/AddCreditCardModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingAddFunds**
> object billingAddFunds($model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Ringba\Model\AddAccountBalance(); // \Ringba\Model\AddAccountBalance | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingAddFunds($model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingAddFunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Ringba\Model\AddAccountBalance**](../Model/AddAccountBalance.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingBillSettings**
> object billingBillSettings($model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Ringba\Model\BillingSettingsModel(); // \Ringba\Model\BillingSettingsModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingBillSettings($model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingBillSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Ringba\Model\BillingSettingsModel**](../Model/BillingSettingsModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingCCTransactions**
> object billingCCTransactions($accountid, $past_days, $days, $past_months, $months)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$past_days = 56; // int | 
$days = 56; // int | 
$past_months = 56; // int | 
$months = 56; // int | 

try {
    $result = $apiInstance->billingCCTransactions($accountid, $past_days, $days, $past_months, $months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingCCTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **past_days** | **int**|  | [optional]
 **days** | **int**|  | [optional]
 **past_months** | **int**|  | [optional]
 **months** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingDeleteCreditCard**
> object billingDeleteCreditCard($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingDeleteCreditCard($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingDeleteCreditCard: ', $e->getMessage(), PHP_EOL;
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

# **billingDisableAccount**
> object billingDisableAccount($model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Ringba\Model\BillingConfirmModel(); // \Ringba\Model\BillingConfirmModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingDisableAccount($model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingDisableAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Ringba\Model\BillingConfirmModel**](../Model/BillingConfirmModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingEnableAccount**
> object billingEnableAccount($model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Ringba\Model\BillingConfirmModel(); // \Ringba\Model\BillingConfirmModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingEnableAccount($model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingEnableAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Ringba\Model\BillingConfirmModel**](../Model/BillingConfirmModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingFunds**
> object billingFunds($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingFunds($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingFunds: ', $e->getMessage(), PHP_EOL;
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

# **billingGet**
> object billingGet($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingGet: ', $e->getMessage(), PHP_EOL;
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

# **billingGetAccountTypes**
> object billingGetAccountTypes($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingGetAccountTypes($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingGetAccountTypes: ', $e->getMessage(), PHP_EOL;
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

# **billingGetBillSettings**
> object billingGetBillSettings($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingGetBillSettings($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingGetBillSettings: ', $e->getMessage(), PHP_EOL;
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

# **billingGetCreditCards**
> object billingGetCreditCards($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingGetCreditCards($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingGetCreditCards: ', $e->getMessage(), PHP_EOL;
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

# **billingUpdateAccountType**
> object billingUpdateAccountType($plan, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$plan = new \Ringba\Model\UpdateAccountTypeModel(); // \Ringba\Model\UpdateAccountTypeModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingUpdateAccountType($plan, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingUpdateAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan** | [**\Ringba\Model\UpdateAccountTypeModel**](../Model/UpdateAccountTypeModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingUpdateCreditCard**
> object billingUpdateCreditCard($id, $update_model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$update_model = new \Ringba\Model\UpdateCreditCardModel(); // \Ringba\Model\UpdateCreditCardModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingUpdateCreditCard($id, $update_model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingUpdateCreditCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_model** | [**\Ringba\Model\UpdateCreditCardModel**](../Model/UpdateCreditCardModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingVerify**
> object billingVerify($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->billingVerify($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingVerify: ', $e->getMessage(), PHP_EOL;
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

