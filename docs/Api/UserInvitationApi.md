# Ringba\UserInvitationApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userInvitationAcceptInvitation**](UserInvitationApi.md#userInvitationAcceptInvitation) | **POST** /Invitations/{id}/join | 
[**userInvitationBuyerDelete**](UserInvitationApi.md#userInvitationBuyerDelete) | **DELETE** /{accountId}/Buyers/{buyerId}/Invitations/{id} | 
[**userInvitationBuyerGetInvitation**](UserInvitationApi.md#userInvitationBuyerGetInvitation) | **GET** /{accountId}/Buyers/{buyerId}/Invitations/{id} | 
[**userInvitationBuyerInviteUser**](UserInvitationApi.md#userInvitationBuyerInviteUser) | **POST** /{accountId}/Buyers/{buyerId}/Invitations | 
[**userInvitationBuyerListInvitations**](UserInvitationApi.md#userInvitationBuyerListInvitations) | **GET** /{accountId}/Buyers/{buyerId}/Invitations | 
[**userInvitationDescribeInvitation**](UserInvitationApi.md#userInvitationDescribeInvitation) | **GET** /Invitations/{id} | 
[**userInvitationPublisherDelete**](UserInvitationApi.md#userInvitationPublisherDelete) | **DELETE** /{accountId}/Affiliates/{affiliateId}/Invitations/{id} | 
[**userInvitationPublisherGetInvitation**](UserInvitationApi.md#userInvitationPublisherGetInvitation) | **GET** /{accountId}/Affiliates/{affiliateId}/Invitations/{id} | 
[**userInvitationPublisherInviteUser**](UserInvitationApi.md#userInvitationPublisherInviteUser) | **POST** /{accountId}/Affiliates/{affiliateId}/Invitations | 
[**userInvitationPublisherListInvitations**](UserInvitationApi.md#userInvitationPublisherListInvitations) | **GET** /{accountId}/Affiliates/{affiliateId}/Invitations | 
[**userInvitationUserDelete**](UserInvitationApi.md#userInvitationUserDelete) | **DELETE** /{accountid}/invitations/{id} | 
[**userInvitationUserGetInvitation**](UserInvitationApi.md#userInvitationUserGetInvitation) | **GET** /{accountid}/invitations/{id} | 
[**userInvitationUserInviteUser**](UserInvitationApi.md#userInvitationUserInviteUser) | **POST** /{accountid}/invitations | 
[**userInvitationUserListInvitations**](UserInvitationApi.md#userInvitationUserListInvitations) | **GET** /{accountid}/invitations | 


# **userInvitationAcceptInvitation**
> object userInvitationAcceptInvitation($id, $user_supplied_details)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$user_supplied_details = new \Ringba\Model\UserSuppliedDetails(); // \Ringba\Model\UserSuppliedDetails | 

try {
    $result = $apiInstance->userInvitationAcceptInvitation($id, $user_supplied_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationAcceptInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user_supplied_details** | [**\Ringba\Model\UserSuppliedDetails**](../Model/UserSuppliedDetails.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationBuyerDelete**
> object userInvitationBuyerDelete($id, $buyer_id, $account_id, $force)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$buyer_id = "buyer_id_example"; // string | 
$account_id = "account_id_example"; // string | 
$force = true; // bool | 

try {
    $result = $apiInstance->userInvitationBuyerDelete($id, $buyer_id, $account_id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationBuyerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **buyer_id** | **string**|  |
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

# **userInvitationBuyerGetInvitation**
> object userInvitationBuyerGetInvitation($buyer_id, $id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_id = "buyer_id_example"; // string | 
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->userInvitationBuyerGetInvitation($buyer_id, $id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationBuyerGetInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**|  |
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

# **userInvitationBuyerInviteUser**
> object userInvitationBuyerInviteUser($buyer_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_id = "buyer_id_example"; // string | 
$request = new \Ringba\Model\UserInvitationWebRequest(); // \Ringba\Model\UserInvitationWebRequest | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->userInvitationBuyerInviteUser($buyer_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationBuyerInviteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**|  |
 **request** | [**\Ringba\Model\UserInvitationWebRequest**](../Model/UserInvitationWebRequest.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationBuyerListInvitations**
> object userInvitationBuyerListInvitations($buyer_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_id = "buyer_id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->userInvitationBuyerListInvitations($buyer_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationBuyerListInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationDescribeInvitation**
> object userInvitationDescribeInvitation($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->userInvitationDescribeInvitation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationDescribeInvitation: ', $e->getMessage(), PHP_EOL;
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

# **userInvitationPublisherDelete**
> object userInvitationPublisherDelete($affiliate_id, $id, $account_id, $force)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = "affiliate_id_example"; // string | 
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 
$force = true; // bool | 

try {
    $result = $apiInstance->userInvitationPublisherDelete($affiliate_id, $id, $account_id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationPublisherDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **string**|  |
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

# **userInvitationPublisherGetInvitation**
> object userInvitationPublisherGetInvitation($affiliate_id, $id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = "affiliate_id_example"; // string | 
$id = "id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->userInvitationPublisherGetInvitation($affiliate_id, $id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationPublisherGetInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **string**|  |
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

# **userInvitationPublisherInviteUser**
> object userInvitationPublisherInviteUser($affiliate_id, $request, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = "affiliate_id_example"; // string | 
$request = new \Ringba\Model\UserInvitationWebRequest(); // \Ringba\Model\UserInvitationWebRequest | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->userInvitationPublisherInviteUser($affiliate_id, $request, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationPublisherInviteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **string**|  |
 **request** | [**\Ringba\Model\UserInvitationWebRequest**](../Model/UserInvitationWebRequest.md)|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationPublisherListInvitations**
> object userInvitationPublisherListInvitations($affiliate_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = "affiliate_id_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->userInvitationPublisherListInvitations($affiliate_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationPublisherListInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **string**|  |
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationUserDelete**
> object userInvitationUserDelete($id, $accountid, $force)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 

try {
    $result = $apiInstance->userInvitationUserDelete($id, $accountid, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationUserDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **force** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationUserGetInvitation**
> object userInvitationUserGetInvitation($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->userInvitationUserGetInvitation($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationUserGetInvitation: ', $e->getMessage(), PHP_EOL;
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

# **userInvitationUserInviteUser**
> object userInvitationUserInviteUser($request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\UserInvitationWebRequest(); // \Ringba\Model\UserInvitationWebRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->userInvitationUserInviteUser($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationUserInviteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\UserInvitationWebRequest**](../Model/UserInvitationWebRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInvitationUserListInvitations**
> object userInvitationUserListInvitations($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\UserInvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->userInvitationUserListInvitations($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationApi->userInvitationUserListInvitations: ', $e->getMessage(), PHP_EOL;
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

