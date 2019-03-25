# Ringba\BillingApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingAddCreditCard**](BillingApi.md#billingAddCreditCard) | **POST** /{accountid}/Billing/CreditCards | creates a new credit card for this account
[**billingAddFunds**](BillingApi.md#billingAddFunds) | **POST** /{accountid}/Billing/Balance | increases the balance for this account
[**billingBillSettings**](BillingApi.md#billingBillSettings) | **PUT** /{accountid}/Billing/BillingSettings | updates the billing setting for this account
[**billingCCTransactions**](BillingApi.md#billingCCTransactions) | **GET** /{accountid}/Billing/CCTransactions | gets the cc transactionss from this account, The lookup model is optional,   by defualt, the current months transactions will be shown
[**billingDeleteCreditCard**](BillingApi.md#billingDeleteCreditCard) | **DELETE** /{accountid}/Billing/CreditCards/{id} | removes a credit card for this account
[**billingDisableAccount**](BillingApi.md#billingDisableAccount) | **DELETE** /{accountid}/Billing/Disable | Disables the account and haults all further charges to credit cards on file
[**billingEnableAccount**](BillingApi.md#billingEnableAccount) | **PUT** /{accountid}/Billing/Enable | Re-enables a disabled account and haults all further charges to credit cards on file
[**billingFunds**](BillingApi.md#billingFunds) | **GET** /{accountid}/Billing/Balance | gets the balance for this account
[**billingGet**](BillingApi.md#billingGet) | **GET** /{accountid}/Billing | Gets the billing settings, Balance, and CreditCard info for this account
[**billingGetAccountTypes**](BillingApi.md#billingGetAccountTypes) | **GET** /{accountid}/Billing/Plans | 
[**billingGetBillSettings**](BillingApi.md#billingGetBillSettings) | **GET** /{accountid}/Billing/BillingSettings | get the billing settings for this account
[**billingGetCreditCards**](BillingApi.md#billingGetCreditCards) | **GET** /{accountid}/Billing/CreditCards | getst the credit cards for htis account
[**billingUpdateAccountType**](BillingApi.md#billingUpdateAccountType) | **PUT** /{accountid}/Billing/Plans | Updates the account type from one of the Account Types  IE: Basic, Plus, Advance
[**billingUpdateCreditCard**](BillingApi.md#billingUpdateCreditCard) | **PUT** /{accountid}/Billing/CreditCards/{id} | updates a creditcard for this account
[**billingVerify**](BillingApi.md#billingVerify) | **PUT** /{accountid}/Billing/CreditCards/{id}/verify | updates a creditcard for this account


# **billingAddCreditCard**
> object billingAddCreditCard($model, $accountid)

creates a new credit card for this account

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

increases the balance for this account

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

updates the billing setting for this account

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

gets the cc transactionss from this account, The lookup model is optional,   by defualt, the current months transactions will be shown

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

removes a credit card for this account

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

Disables the account and haults all further charges to credit cards on file

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

Re-enables a disabled account and haults all further charges to credit cards on file

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

gets the balance for this account

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

Gets the billing settings, Balance, and CreditCard info for this account

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

get the billing settings for this account

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

getst the credit cards for htis account

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

Updates the account type from one of the Account Types  IE: Basic, Plus, Advance

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

updates a creditcard for this account

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

updates a creditcard for this account

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

