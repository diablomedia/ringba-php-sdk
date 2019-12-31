# Ringba\CampaignApi

All URIs are relative to *https://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignAddAffiliateNumber**](CampaignApi.md#campaignAddAffiliateNumber) | **PATCH** /{accountid}/campaigns/{id}/AffiliateNumbers | 
[**campaignAddCallRoute**](CampaignApi.md#campaignAddCallRoute) | **POST** /{accountid}/campaigns/{id}/Routes | 
[**campaignAddDefaultNumber**](CampaignApi.md#campaignAddDefaultNumber) | **PATCH** /{accountid}/campaigns/{id}/DefaultNumber | 
[**campaignAddDefaultPayoutV2**](CampaignApi.md#campaignAddDefaultPayoutV2) | **POST** /{accountid}/campaigns/{id}/DefaultPayouts | 
[**campaignAddIvrTree**](CampaignApi.md#campaignAddIvrTree) | **POST** /{accountid}/campaigns/{id}/IVRTree | 
[**campaignAddPublisher**](CampaignApi.md#campaignAddPublisher) | **PATCH** /{accountid}/campaigns/{id}/Affiliates | 
[**campaignAddPublisherPayout**](CampaignApi.md#campaignAddPublisherPayout) | **POST** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts | 
[**campaignArchiveOffer**](CampaignApi.md#campaignArchiveOffer) | **DELETE** /{accountid}/campaigns/{id}/Offers/Published | 
[**campaignBatchUpdateCampaignDefaultPayouts**](CampaignApi.md#campaignBatchUpdateCampaignDefaultPayouts) | **PUT** /{accountid}/campaigns/{id}/DefaultPayouts | 
[**campaignBatchUpdatePublisherPayouts**](CampaignApi.md#campaignBatchUpdatePublisherPayouts) | **PUT** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts | 
[**campaignCloneCampaign**](CampaignApi.md#campaignCloneCampaign) | **POST** /{accountid}/campaigns/{id}/clone | 
[**campaignCreateCampaign**](CampaignApi.md#campaignCreateCampaign) | **POST** /{accountid}/campaigns | 
[**campaignCreateTag**](CampaignApi.md#campaignCreateTag) | **POST** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag | 
[**campaignDeleteCallRoute**](CampaignApi.md#campaignDeleteCallRoute) | **DELETE** /{accountid}/campaigns/{id}/Routes | 
[**campaignDeleteCampaign**](CampaignApi.md#campaignDeleteCampaign) | **DELETE** /{accountid}/campaigns/{id} | 
[**campaignDeleteCampaignOfferDraft**](CampaignApi.md#campaignDeleteCampaignOfferDraft) | **DELETE** /{accountid}/campaigns/{id}/Offers/Draft | 
[**campaignDeleteDefaultNumber**](CampaignApi.md#campaignDeleteDefaultNumber) | **DELETE** /{accountid}/campaigns/{id}/DefaultNumber | 
[**campaignDeleteDefaultPayout**](CampaignApi.md#campaignDeleteDefaultPayout) | **DELETE** /{accountid}/campaigns/{id}/DefaultPayouts/{payoutId} | 
[**campaignDeleteIVRTree**](CampaignApi.md#campaignDeleteIVRTree) | **DELETE** /{accountid}/campaigns/{id}/IVRTree | 
[**campaignDeletePublisher**](CampaignApi.md#campaignDeletePublisher) | **DELETE** /{accountid}/campaigns/{id}/Affiliates/{affiliateId} | 
[**campaignDeletePublisherPayout**](CampaignApi.md#campaignDeletePublisherPayout) | **DELETE** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | 
[**campaignDeleteTag**](CampaignApi.md#campaignDeleteTag) | **DELETE** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag | 
[**campaignGet**](CampaignApi.md#campaignGet) | **GET** /{accountid}/campaigns | 
[**campaignGetCampaignOfferDraft**](CampaignApi.md#campaignGetCampaignOfferDraft) | **GET** /{accountid}/campaigns/{id}/Offers/Draft | 
[**campaignGetCampaignOfferLive**](CampaignApi.md#campaignGetCampaignOfferLive) | **GET** /{accountid}/campaigns/{id}/Offers/Published | 
[**campaignGetCampaignOffers**](CampaignApi.md#campaignGetCampaignOffers) | **GET** /{accountid}/campaigns/{id}/Offers | 
[**campaignGetInboundReferences**](CampaignApi.md#campaignGetInboundReferences) | **GET** /{accountid}/campaigns/{id}/InboundReferences | 
[**campaignGetOfferParticipants**](CampaignApi.md#campaignGetOfferParticipants) | **GET** /{accountid}/campaigns/{id}/Offers/Published/Participants | 
[**campaignGetPublisherPayouts**](CampaignApi.md#campaignGetPublisherPayouts) | **GET** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts | 
[**campaignGetTags**](CampaignApi.md#campaignGetTags) | **GET** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag | 
[**campaignGetTags_0**](CampaignApi.md#campaignGetTags_0) | **GET** /{accountid}/campaigns/{id}/Tags | 
[**campaignGet_0**](CampaignApi.md#campaignGet_0) | **GET** /{accountid}/campaigns/{id} | 
[**campaignGetstats**](CampaignApi.md#campaignGetstats) | **GET** /{accountid}/campaigns/stats | 
[**campaignInvitePublisherToOffer**](CampaignApi.md#campaignInvitePublisherToOffer) | **POST** /{accountid}/campaigns/{id}/Offers/Published/Invite | 
[**campaignLinkItem**](CampaignApi.md#campaignLinkItem) | **PATCH** /{accountid}/campaigns/{id}/Link | 
[**campaignPatchItem**](CampaignApi.md#campaignPatchItem) | **PATCH** /{accountid}/campaigns/{id} | 
[**campaignPauseCampaignOffer**](CampaignApi.md#campaignPauseCampaignOffer) | **POST** /{accountid}/campaigns/{id}/Offers/Published/Pause | 
[**campaignPublishCampaignOfferDraft**](CampaignApi.md#campaignPublishCampaignOfferDraft) | **POST** /{accountid}/campaigns/{id}/Offers/Draft/Publish | 
[**campaignResumeCampaignOffer**](CampaignApi.md#campaignResumeCampaignOffer) | **POST** /{accountid}/campaigns/{id}/Offers/Published/Resume | 
[**campaignSetCampaignOfferDraft**](CampaignApi.md#campaignSetCampaignOfferDraft) | **PUT** /{accountid}/campaigns/{id}/Offers/Draft | 
[**campaignUnLinkItem**](CampaignApi.md#campaignUnLinkItem) | **PATCH** /{accountid}/campaigns/{id}/UnLink | 
[**campaignUpdateDefaultPayout**](CampaignApi.md#campaignUpdateDefaultPayout) | **POST** /{accountid}/campaigns/{id}/DefaultPayouts/{payoutId} | 
[**campaignUpdateDefaultPayout_0**](CampaignApi.md#campaignUpdateDefaultPayout_0) | **PATCH** /{accountid}/campaigns/{id}/DefaultPayouts/{payoutId} | 
[**campaignUpdatePublisherPayoutById**](CampaignApi.md#campaignUpdatePublisherPayoutById) | **PUT** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | 
[**campaignUpdatePublisherPayoutById_0**](CampaignApi.md#campaignUpdatePublisherPayoutById_0) | **POST** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | 
[**campaignUpdatePublisherPayoutById_1**](CampaignApi.md#campaignUpdatePublisherPayoutById_1) | **PATCH** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | 
[**campaignUpdateTag**](CampaignApi.md#campaignUpdateTag) | **PATCH** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag/{jsTagId} | 


# **campaignAddAffiliateNumber**
> object campaignAddAffiliateNumber($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\NumberRequestModel(); // \Ringba\Model\NumberRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddAffiliateNumber($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddAffiliateNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\NumberRequestModel**](../Model/NumberRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignAddCallRoute**
> object campaignAddCallRoute($id, $create_call_route, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$create_call_route = new \Ringba\Model\CreateCallRouteModel(); // \Ringba\Model\CreateCallRouteModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddCallRoute($id, $create_call_route, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddCallRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_call_route** | [**\Ringba\Model\CreateCallRouteModel**](../Model/CreateCallRouteModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignAddDefaultNumber**
> object campaignAddDefaultNumber($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\NumberRequestModel(); // \Ringba\Model\NumberRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddDefaultNumber($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddDefaultNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\NumberRequestModel**](../Model/NumberRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignAddDefaultPayoutV2**
> object campaignAddDefaultPayoutV2($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddDefaultPayoutV2($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddDefaultPayoutV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignAddIvrTree**
> object campaignAddIvrTree($id, $create_call_route, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$create_call_route = new \Ringba\Model\CreateIVRCallRouteModel(); // \Ringba\Model\CreateIVRCallRouteModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddIvrTree($id, $create_call_route, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddIvrTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_call_route** | [**\Ringba\Model\CreateIVRCallRouteModel**](../Model/CreateIVRCallRouteModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignAddPublisher**
> object campaignAddPublisher($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\AddPayoutToCampaignModel(); // \Ringba\Model\AddPayoutToCampaignModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddPublisher($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddPublisher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\AddPayoutToCampaignModel**](../Model/AddPayoutToCampaignModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignAddPublisherPayout**
> object campaignAddPublisherPayout($id, $affiliate_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignAddPublisherPayout($id, $affiliate_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignAddPublisherPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignArchiveOffer**
> object campaignArchiveOffer($id, $accountid, $keep_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$keep_numbers = true; // bool | 

try {
    $result = $apiInstance->campaignArchiveOffer($id, $accountid, $keep_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignArchiveOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **keep_numbers** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignBatchUpdateCampaignDefaultPayouts**
> object campaignBatchUpdateCampaignDefaultPayouts($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\BatchPayoutUpdateModel(); // \Ringba\Model\BatchPayoutUpdateModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignBatchUpdateCampaignDefaultPayouts($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignBatchUpdateCampaignDefaultPayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\BatchPayoutUpdateModel**](../Model/BatchPayoutUpdateModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignBatchUpdatePublisherPayouts**
> object campaignBatchUpdatePublisherPayouts($id, $affiliate_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$request = new \Ringba\Model\BatchPayoutUpdateModel(); // \Ringba\Model\BatchPayoutUpdateModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignBatchUpdatePublisherPayouts($id, $affiliate_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignBatchUpdatePublisherPayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **request** | [**\Ringba\Model\BatchPayoutUpdateModel**](../Model/BatchPayoutUpdateModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignCloneCampaign**
> object campaignCloneCampaign($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignCloneCampaign($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCloneCampaign: ', $e->getMessage(), PHP_EOL;
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

# **campaignCreateCampaign**
> object campaignCreateCampaign($campaign, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign = new \Ringba\Model\Campaign(); // \Ringba\Model\Campaign | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignCreateCampaign($campaign, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCreateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**\Ringba\Model\Campaign**](../Model/Campaign.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignCreateTag**
> object campaignCreateTag($id, $affiliate_id, $number_id, $model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$number_id = "number_id_example"; // string | 
$model = new \Ringba\Model\TagRequestModel(); // \Ringba\Model\TagRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignCreateTag($id, $affiliate_id, $number_id, $model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCreateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **number_id** | **string**|  |
 **model** | [**\Ringba\Model\TagRequestModel**](../Model/TagRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDeleteCallRoute**
> object campaignDeleteCallRoute($id, $delete_call_route, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$delete_call_route = new \Ringba\Model\DeleteCallRouteModel(); // \Ringba\Model\DeleteCallRouteModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeleteCallRoute($id, $delete_call_route, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteCallRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **delete_call_route** | [**\Ringba\Model\DeleteCallRouteModel**](../Model/DeleteCallRouteModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDeleteCampaign**
> object campaignDeleteCampaign($id, $accountid, $force, $keep_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$force = true; // bool | 
$keep_numbers = true; // bool | 

try {
    $result = $apiInstance->campaignDeleteCampaign($id, $accountid, $force, $keep_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
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

# **campaignDeleteCampaignOfferDraft**
> object campaignDeleteCampaignOfferDraft($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeleteCampaignOfferDraft($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteCampaignOfferDraft: ', $e->getMessage(), PHP_EOL;
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

# **campaignDeleteDefaultNumber**
> object campaignDeleteDefaultNumber($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\NumberRequestModel(); // \Ringba\Model\NumberRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeleteDefaultNumber($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteDefaultNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\NumberRequestModel**](../Model/NumberRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDeleteDefaultPayout**
> object campaignDeleteDefaultPayout($id, $payout_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeleteDefaultPayout($id, $payout_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteDefaultPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **payout_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDeleteIVRTree**
> object campaignDeleteIVRTree($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeleteIVRTree($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteIVRTree: ', $e->getMessage(), PHP_EOL;
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

# **campaignDeletePublisher**
> object campaignDeletePublisher($id, $affiliate_id, $accountid, $keep_offer_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$accountid = "accountid_example"; // string | 
$keep_offer_numbers = true; // bool | 

try {
    $result = $apiInstance->campaignDeletePublisher($id, $affiliate_id, $accountid, $keep_offer_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeletePublisher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **accountid** | **string**|  |
 **keep_offer_numbers** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDeletePublisherPayout**
> object campaignDeletePublisherPayout($id, $affiliate_id, $payout_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeletePublisherPayout($id, $affiliate_id, $payout_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeletePublisherPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **payout_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDeleteTag**
> object campaignDeleteTag($id, $affiliate_id, $number_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$number_id = "number_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignDeleteTag($id, $affiliate_id, $number_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDeleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **number_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignGet**
> object campaignGet($accountid, $include_stats)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$include_stats = true; // bool | 

try {
    $result = $apiInstance->campaignGet($accountid, $include_stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **include_stats** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignGetCampaignOfferDraft**
> object campaignGetCampaignOfferDraft($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetCampaignOfferDraft($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetCampaignOfferDraft: ', $e->getMessage(), PHP_EOL;
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

# **campaignGetCampaignOfferLive**
> object campaignGetCampaignOfferLive($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetCampaignOfferLive($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetCampaignOfferLive: ', $e->getMessage(), PHP_EOL;
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

# **campaignGetCampaignOffers**
> object campaignGetCampaignOffers($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetCampaignOffers($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetCampaignOffers: ', $e->getMessage(), PHP_EOL;
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

# **campaignGetInboundReferences**
> object campaignGetInboundReferences($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetInboundReferences($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetInboundReferences: ', $e->getMessage(), PHP_EOL;
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

# **campaignGetOfferParticipants**
> object campaignGetOfferParticipants($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetOfferParticipants($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetOfferParticipants: ', $e->getMessage(), PHP_EOL;
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

# **campaignGetPublisherPayouts**
> object campaignGetPublisherPayouts($id, $affiliate_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetPublisherPayouts($id, $affiliate_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetPublisherPayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignGetTags**
> object campaignGetTags($id, $affiliate_id, $number_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$number_id = "number_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetTags($id, $affiliate_id, $number_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **number_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignGetTags_0**
> object campaignGetTags_0($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetTags_0($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetTags_0: ', $e->getMessage(), PHP_EOL;
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

# **campaignGet_0**
> object campaignGet_0($id, $accountid, $include_integration_settings)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$include_integration_settings = true; // bool | 

try {
    $result = $apiInstance->campaignGet_0($id, $accountid, $include_integration_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **include_integration_settings** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignGetstats**
> object campaignGetstats($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGetstats($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGetstats: ', $e->getMessage(), PHP_EOL;
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

# **campaignInvitePublisherToOffer**
> object campaignInvitePublisherToOffer($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\OfferInvitationModel(); // \Ringba\Model\OfferInvitationModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignInvitePublisherToOffer($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignInvitePublisherToOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\OfferInvitationModel**](../Model/OfferInvitationModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignLinkItem**
> object campaignLinkItem($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\LinkRequest(); // \Ringba\Model\LinkRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignLinkItem($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignLinkItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\LinkRequest**](../Model/LinkRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignPatchItem**
> object campaignPatchItem($id, $values, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$values = new \stdClass; // object | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignPatchItem($id, $values, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignPatchItem: ', $e->getMessage(), PHP_EOL;
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

# **campaignPauseCampaignOffer**
> object campaignPauseCampaignOffer($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignPauseCampaignOffer($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignPauseCampaignOffer: ', $e->getMessage(), PHP_EOL;
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

# **campaignPublishCampaignOfferDraft**
> object campaignPublishCampaignOfferDraft($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignPublishCampaignOfferDraft($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignPublishCampaignOfferDraft: ', $e->getMessage(), PHP_EOL;
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

# **campaignResumeCampaignOffer**
> object campaignResumeCampaignOffer($id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignResumeCampaignOffer($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignResumeCampaignOffer: ', $e->getMessage(), PHP_EOL;
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

# **campaignSetCampaignOfferDraft**
> object campaignSetCampaignOfferDraft($id, $offer, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$offer = new \Ringba\Model\OfferDetailModel(); // \Ringba\Model\OfferDetailModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignSetCampaignOfferDraft($id, $offer, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignSetCampaignOfferDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **offer** | [**\Ringba\Model\OfferDetailModel**](../Model/OfferDetailModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUnLinkItem**
> object campaignUnLinkItem($id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$request = new \Ringba\Model\LinkRequest(); // \Ringba\Model\LinkRequest | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUnLinkItem($id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUnLinkItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **request** | [**\Ringba\Model\LinkRequest**](../Model/LinkRequest.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUpdateDefaultPayout**
> object campaignUpdateDefaultPayout($id, $payout_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUpdateDefaultPayout($id, $payout_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUpdateDefaultPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **payout_id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUpdateDefaultPayout_0**
> object campaignUpdateDefaultPayout_0($id, $payout_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUpdateDefaultPayout_0($id, $payout_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUpdateDefaultPayout_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **payout_id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUpdatePublisherPayoutById**
> object campaignUpdatePublisherPayoutById($id, $affiliate_id, $payout_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUpdatePublisherPayoutById($id, $affiliate_id, $payout_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUpdatePublisherPayoutById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **payout_id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUpdatePublisherPayoutById_0**
> object campaignUpdatePublisherPayoutById_0($id, $affiliate_id, $payout_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUpdatePublisherPayoutById_0($id, $affiliate_id, $payout_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUpdatePublisherPayoutById_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **payout_id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUpdatePublisherPayoutById_1**
> object campaignUpdatePublisherPayoutById_1($id, $affiliate_id, $payout_id, $request, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUpdatePublisherPayoutById_1($id, $affiliate_id, $payout_id, $request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUpdatePublisherPayoutById_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **payout_id** | **string**|  |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignUpdateTag**
> object campaignUpdateTag($id, $affiliate_id, $number_id, $js_tag_id, $model, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$affiliate_id = "affiliate_id_example"; // string | 
$number_id = "number_id_example"; // string | 
$js_tag_id = "js_tag_id_example"; // string | 
$model = new \Ringba\Model\TagUpdateRequestModel(); // \Ringba\Model\TagUpdateRequestModel | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignUpdateTag($id, $affiliate_id, $number_id, $js_tag_id, $model, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignUpdateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **affiliate_id** | **string**|  |
 **number_id** | **string**|  |
 **js_tag_id** | **string**|  |
 **model** | [**\Ringba\Model\TagUpdateRequestModel**](../Model/TagUpdateRequestModel.md)|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

