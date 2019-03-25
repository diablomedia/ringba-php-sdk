# Ringba\CampaignApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignAddAffiliateNumber**](CampaignApi.md#campaignAddAffiliateNumber) | **PATCH** /{accountid}/campaigns/{id}/AffiliateNumbers | Adds an Affiliate number to a campaign
[**campaignAddCallRoute**](CampaignApi.md#campaignAddCallRoute) | **POST** /{accountid}/campaigns/{id}/Routes | adds a Call route to the campaign
[**campaignAddDefaultNumber**](CampaignApi.md#campaignAddDefaultNumber) | **PATCH** /{accountid}/campaigns/{id}/DefaultNumber | updates the campaigns default number
[**campaignAddDefaultPayoutV2**](CampaignApi.md#campaignAddDefaultPayoutV2) | **POST** /{accountid}/campaigns/{id}/DefaultPayouts | add a default payout
[**campaignAddIvrTree**](CampaignApi.md#campaignAddIvrTree) | **POST** /{accountid}/campaigns/{id}/IVRTree | adds a Call route to the campaign
[**campaignAddPublisher**](CampaignApi.md#campaignAddPublisher) | **PATCH** /{accountid}/campaigns/{id}/Affiliates | Add an existing affilliate to a campaign
[**campaignAddPublisherPayout**](CampaignApi.md#campaignAddPublisherPayout) | **POST** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts | Add/Update Publisher Campaign Payout Settings
[**campaignArchiveOffer**](CampaignApi.md#campaignArchiveOffer) | **DELETE** /{accountid}/campaigns/{id}/Offers/Published | 
[**campaignBatchUpdateCampaignDefaultPayouts**](CampaignApi.md#campaignBatchUpdateCampaignDefaultPayouts) | **PUT** /{accountid}/campaigns/{id}/DefaultPayouts | 
[**campaignBatchUpdatePublisherPayouts**](CampaignApi.md#campaignBatchUpdatePublisherPayouts) | **PUT** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts | 
[**campaignCloneCampaign**](CampaignApi.md#campaignCloneCampaign) | **POST** /{accountid}/campaigns/{id}/clone | 
[**campaignCreateCampaign**](CampaignApi.md#campaignCreateCampaign) | **POST** /{accountid}/campaigns | creates a campaign
[**campaignCreateTag**](CampaignApi.md#campaignCreateTag) | **POST** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag | Creates a JS tag to use on a web page
[**campaignDeleteCallRoute**](CampaignApi.md#campaignDeleteCallRoute) | **DELETE** /{accountid}/campaigns/{id}/Routes | removes the call route
[**campaignDeleteCampaign**](CampaignApi.md#campaignDeleteCampaign) | **DELETE** /{accountid}/campaigns/{id} | 
[**campaignDeleteCampaignOfferDraft**](CampaignApi.md#campaignDeleteCampaignOfferDraft) | **DELETE** /{accountid}/campaigns/{id}/Offers/Draft | 
[**campaignDeleteDefaultNumber**](CampaignApi.md#campaignDeleteDefaultNumber) | **DELETE** /{accountid}/campaigns/{id}/DefaultNumber | updates the campaigns default number
[**campaignDeleteDefaultPayout**](CampaignApi.md#campaignDeleteDefaultPayout) | **DELETE** /{accountid}/campaigns/{id}/DefaultPayouts/{payoutId} | update the default payout
[**campaignDeleteIVRTree**](CampaignApi.md#campaignDeleteIVRTree) | **DELETE** /{accountid}/campaigns/{id}/IVRTree | deletes the IVR Tree from the Campaign
[**campaignDeletePublisher**](CampaignApi.md#campaignDeletePublisher) | **DELETE** /{accountid}/campaigns/{id}/Affiliates/{affiliateId} | Add an existing affilliate to a campaign
[**campaignDeletePublisherPayout**](CampaignApi.md#campaignDeletePublisherPayout) | **DELETE** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | Remove Publisher Campaign Payout Settings
[**campaignDeleteTag**](CampaignApi.md#campaignDeleteTag) | **DELETE** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag | removes a tag
[**campaignGet**](CampaignApi.md#campaignGet) | **GET** /{accountid}/campaigns | return the campaigns for this account
[**campaignGetCampaignOfferDraft**](CampaignApi.md#campaignGetCampaignOfferDraft) | **GET** /{accountid}/campaigns/{id}/Offers/Draft | 
[**campaignGetCampaignOfferLive**](CampaignApi.md#campaignGetCampaignOfferLive) | **GET** /{accountid}/campaigns/{id}/Offers/Published | 
[**campaignGetCampaignOffers**](CampaignApi.md#campaignGetCampaignOffers) | **GET** /{accountid}/campaigns/{id}/Offers | 
[**campaignGetInboundReferences**](CampaignApi.md#campaignGetInboundReferences) | **GET** /{accountid}/campaigns/{id}/InboundReferences | 
[**campaignGetOfferParticipants**](CampaignApi.md#campaignGetOfferParticipants) | **GET** /{accountid}/campaigns/{id}/Offers/Published/Participants | 
[**campaignGetPublisherPayouts**](CampaignApi.md#campaignGetPublisherPayouts) | **GET** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts | Get Publisher Campaign Payout Settings
[**campaignGetTags**](CampaignApi.md#campaignGetTags) | **GET** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag | 
[**campaignGetTags_0**](CampaignApi.md#campaignGetTags_0) | **GET** /{accountid}/campaigns/{id}/Tags | returns the available tags for a given Campaign
[**campaignGet_0**](CampaignApi.md#campaignGet_0) | **GET** /{accountid}/campaigns/{id} | gets the campaign with the matching id
[**campaignGetstats**](CampaignApi.md#campaignGetstats) | **GET** /{accountid}/campaigns/stats | return the campaigns for this account
[**campaignInvitePublisherToOffer**](CampaignApi.md#campaignInvitePublisherToOffer) | **POST** /{accountid}/campaigns/{id}/Offers/Published/Invite | 
[**campaignLinkItem**](CampaignApi.md#campaignLinkItem) | **PATCH** /{accountid}/campaigns/{id}/Link | links an item to the campaign
[**campaignPatchItem**](CampaignApi.md#campaignPatchItem) | **PATCH** /{accountid}/campaigns/{id} | Updates the values of a campaign
[**campaignPauseCampaignOffer**](CampaignApi.md#campaignPauseCampaignOffer) | **POST** /{accountid}/campaigns/{id}/Offers/Published/Pause | 
[**campaignPublishCampaignOfferDraft**](CampaignApi.md#campaignPublishCampaignOfferDraft) | **POST** /{accountid}/campaigns/{id}/Offers/Draft/Publish | 
[**campaignResumeCampaignOffer**](CampaignApi.md#campaignResumeCampaignOffer) | **POST** /{accountid}/campaigns/{id}/Offers/Published/Resume | 
[**campaignSetCampaignOfferDraft**](CampaignApi.md#campaignSetCampaignOfferDraft) | **PUT** /{accountid}/campaigns/{id}/Offers/Draft | 
[**campaignUnLinkItem**](CampaignApi.md#campaignUnLinkItem) | **PATCH** /{accountid}/campaigns/{id}/UnLink | unlinks an item form the campaign
[**campaignUpdateDefaultPayout**](CampaignApi.md#campaignUpdateDefaultPayout) | **POST** /{accountid}/campaigns/{id}/DefaultPayouts/{payoutId} | update the default payout
[**campaignUpdateDefaultPayout_0**](CampaignApi.md#campaignUpdateDefaultPayout_0) | **PATCH** /{accountid}/campaigns/{id}/DefaultPayouts/{payoutId} | update the default payout
[**campaignUpdatePublisherPayoutById**](CampaignApi.md#campaignUpdatePublisherPayoutById) | **PUT** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | Add/Update Publisher Campaign Payout Settings
[**campaignUpdatePublisherPayoutById_0**](CampaignApi.md#campaignUpdatePublisherPayoutById_0) | **POST** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | Add/Update Publisher Campaign Payout Settings
[**campaignUpdatePublisherPayoutById_1**](CampaignApi.md#campaignUpdatePublisherPayoutById_1) | **PATCH** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/payouts/{payoutId} | Add/Update Publisher Campaign Payout Settings
[**campaignUpdateTag**](CampaignApi.md#campaignUpdateTag) | **PATCH** /{accountid}/campaigns/{id}/Affiliates/{affiliateId}/Numbers/{numberId}/JsTag/{jsTagId} | update the tag


# **campaignAddAffiliateNumber**
> object campaignAddAffiliateNumber($id, $request, $accountid)

Adds an Affiliate number to a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to add
$request = new \Ringba\Model\NumberRequestModel(); // \Ringba\Model\NumberRequestModel | the number request
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
 **id** | **string**| the id of the campaign to add |
 **request** | [**\Ringba\Model\NumberRequestModel**](../Model/NumberRequestModel.md)| the number request |
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

adds a Call route to the campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$create_call_route = new \Ringba\Model\CreateCallRouteModel(); // \Ringba\Model\CreateCallRouteModel | the call route
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
 **id** | **string**| the id of the campaign to update |
 **create_call_route** | [**\Ringba\Model\CreateCallRouteModel**](../Model/CreateCallRouteModel.md)| the call route |
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

updates the campaigns default number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$request = new \Ringba\Model\NumberRequestModel(); // \Ringba\Model\NumberRequestModel | the defualt number request
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
 **id** | **string**| the id of the campaign to update |
 **request** | [**\Ringba\Model\NumberRequestModel**](../Model/NumberRequestModel.md)| the defualt number request |
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

add a default payout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update the payout
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Conversion Request
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
 **id** | **string**| the id of the campaign to update the payout |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Conversion Request |
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

adds a Call route to the campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$create_call_route = new \Ringba\Model\CreateIVRCallRouteModel(); // \Ringba\Model\CreateIVRCallRouteModel | the call route
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
 **id** | **string**| the id of the campaign to update |
 **create_call_route** | [**\Ringba\Model\CreateIVRCallRouteModel**](../Model/CreateIVRCallRouteModel.md)| the call route |
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

Add an existing affilliate to a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to add the affiliate to
$request = new \Ringba\Model\AddPayoutToCampaignModel(); // \Ringba\Model\AddPayoutToCampaignModel | Payout Conversion Request
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
 **id** | **string**| the id of the campaign to add the affiliate to |
 **request** | [**\Ringba\Model\AddPayoutToCampaignModel**](../Model/AddPayoutToCampaignModel.md)| Payout Conversion Request |
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

Add/Update Publisher Campaign Payout Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Settings
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
 **id** | **string**| the id of the campaign |
 **affiliate_id** | **string**| the id of the affilaite |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Settings |
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

creates a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign = new \Ringba\Model\Campaign(); // \Ringba\Model\Campaign | The campaign to create
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
 **campaign** | [**\Ringba\Model\Campaign**](../Model/Campaign.md)| The campaign to create |
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

Creates a JS tag to use on a web page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the campaign id
$affiliate_id = "affiliate_id_example"; // string | the affiliate id
$number_id = "number_id_example"; // string | the number id
$model = new \Ringba\Model\TagRequestModel(); // \Ringba\Model\TagRequestModel | the request
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
 **id** | **string**| the campaign id |
 **affiliate_id** | **string**| the affiliate id |
 **number_id** | **string**| the number id |
 **model** | [**\Ringba\Model\TagRequestModel**](../Model/TagRequestModel.md)| the request |
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

removes the call route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$delete_call_route = new \Ringba\Model\DeleteCallRouteModel(); // \Ringba\Model\DeleteCallRouteModel | the call route
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
 **id** | **string**| the id of the campaign to update |
 **delete_call_route** | [**\Ringba\Model\DeleteCallRouteModel**](../Model/DeleteCallRouteModel.md)| the call route |
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

updates the campaigns default number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$request = new \Ringba\Model\NumberRequestModel(); // \Ringba\Model\NumberRequestModel | the defualt number request
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
 **id** | **string**| the id of the campaign to update |
 **request** | [**\Ringba\Model\NumberRequestModel**](../Model/NumberRequestModel.md)| the defualt number request |
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

update the default payout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update the payout
$payout_id = "payout_id_example"; // string | the id of the payout
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
 **id** | **string**| the id of the campaign to update the payout |
 **payout_id** | **string**| the id of the payout |
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

deletes the IVR Tree from the Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
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
 **id** | **string**| the id of the campaign to update |
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

Add an existing affilliate to a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign remove the affiliate
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite to remove
$accountid = "accountid_example"; // string | 
$keep_offer_numbers = true; // bool | true if the offer-related numbers should be preserved instead of releasing them. Default is false, and the offer numbers are removed from the account.

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
 **id** | **string**| the id of the campaign remove the affiliate |
 **affiliate_id** | **string**| the id of the affilaite to remove |
 **accountid** | **string**|  |
 **keep_offer_numbers** | **bool**| true if the offer-related numbers should be preserved instead of releasing them. Default is false, and the offer numbers are removed from the account. | [optional]

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

Remove Publisher Campaign Payout Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite
$payout_id = "payout_id_example"; // string | The id of the payout setting to remove
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
 **id** | **string**| the id of the campaign |
 **affiliate_id** | **string**| the id of the affilaite |
 **payout_id** | **string**| The id of the payout setting to remove |
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

removes a tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the campaign id
$affiliate_id = "affiliate_id_example"; // string | the affiliate id
$number_id = "number_id_example"; // string | the number id
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
 **id** | **string**| the campaign id |
 **affiliate_id** | **string**| the affiliate id |
 **number_id** | **string**| the number id |
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

return the campaigns for this account

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

Get Publisher Campaign Payout Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite
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
 **id** | **string**| the id of the campaign |
 **affiliate_id** | **string**| the id of the affilaite |
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

returns the available tags for a given Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to return the available tags for
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
 **id** | **string**| the id of the campaign to return the available tags for |
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
> object campaignGet_0($id, $accountid)

gets the campaign with the matching id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->campaignGet_0($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the campaign |
 **accountid** | **string**|  |

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

return the campaigns for this account

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

links an item to the campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$request = new \Ringba\Model\LinkRequest(); // \Ringba\Model\LinkRequest | the property name and id of the item to link
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
 **id** | **string**| the id of the campaign to update |
 **request** | [**\Ringba\Model\LinkRequest**](../Model/LinkRequest.md)| the property name and id of the item to link |
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

Updates the values of a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$values = new \stdClass; // object | the values of the campaign to update
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
 **id** | **string**| the id of the campaign to update |
 **values** | **object**| the values of the campaign to update |
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

unlinks an item form the campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update
$request = new \Ringba\Model\LinkRequest(); // \Ringba\Model\LinkRequest | the property name and id of the item to remove
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
 **id** | **string**| the id of the campaign to update |
 **request** | [**\Ringba\Model\LinkRequest**](../Model/LinkRequest.md)| the property name and id of the item to remove |
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

update the default payout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update the payout
$payout_id = "payout_id_example"; // string | the payout id for the request
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Conversion Request
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
 **id** | **string**| the id of the campaign to update the payout |
 **payout_id** | **string**| the payout id for the request |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Conversion Request |
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

update the default payout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign to update the payout
$payout_id = "payout_id_example"; // string | the payout id for the request
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Conversion Request
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
 **id** | **string**| the id of the campaign to update the payout |
 **payout_id** | **string**| the payout id for the request |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Conversion Request |
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

Add/Update Publisher Campaign Payout Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite
$payout_id = "payout_id_example"; // string | The id of the payout
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Settings
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
 **id** | **string**| the id of the campaign |
 **affiliate_id** | **string**| the id of the affilaite |
 **payout_id** | **string**| The id of the payout |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Settings |
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

Add/Update Publisher Campaign Payout Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite
$payout_id = "payout_id_example"; // string | The id of the payout
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Settings
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
 **id** | **string**| the id of the campaign |
 **affiliate_id** | **string**| the id of the affilaite |
 **payout_id** | **string**| The id of the payout |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Settings |
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

Add/Update Publisher Campaign Payout Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | the id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the id of the affilaite
$payout_id = "payout_id_example"; // string | The id of the payout
$request = new \Ringba\Model\PayoutConversionModel(); // \Ringba\Model\PayoutConversionModel | Payout Settings
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
 **id** | **string**| the id of the campaign |
 **affiliate_id** | **string**| the id of the affilaite |
 **payout_id** | **string**| The id of the payout |
 **request** | [**\Ringba\Model\PayoutConversionModel**](../Model/PayoutConversionModel.md)| Payout Settings |
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

update the tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | id of the campaign
$affiliate_id = "affiliate_id_example"; // string | the affiliateid
$number_id = "number_id_example"; // string | the affiliate number id
$js_tag_id = "js_tag_id_example"; // string | the js tag id
$model = new \Ringba\Model\TagUpdateRequestModel(); // \Ringba\Model\TagUpdateRequestModel | the update model
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
 **id** | **string**| id of the campaign |
 **affiliate_id** | **string**| the affiliateid |
 **number_id** | **string**| the affiliate number id |
 **js_tag_id** | **string**| the js tag id |
 **model** | [**\Ringba\Model\TagUpdateRequestModel**](../Model/TagUpdateRequestModel.md)| the update model |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

