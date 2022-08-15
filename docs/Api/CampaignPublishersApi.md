# Ringba\CampaignPublishersApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPublishertoaCampaign()**](CampaignPublishersApi.md#addPublishertoaCampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliates | Add Publisher to a Campaign
[**removePublisherfromaCampaign()**](CampaignPublishersApi.md#removePublisherfromaCampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/affiliates/{publisherId} | Remove Publisher from a Campaign


## `addPublishertoaCampaign()`

```php
addPublishertoaCampaign($authorization, $accountId, $campaignId, $addPublishertoaCampaignRequest): \Ringba\Model\AddPublishertoaCampaign
```

Add Publisher to a Campaign

Request to add a publisher to a campaign. This only adds them to the campaign but does not add any numbers or payout overrides for the publisher.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>publisherId</code></td> <td>The ID of the publisher you want to add to the campaign. Find <a href=\"#get-information-about-publishers\">publishers</a> associated with your account.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignPublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$addPublishertoaCampaignRequest = {"publisherId":"{{publisherId}}"}; // \Ringba\Model\AddPublishertoaCampaignRequest | 

try {
    $result = $apiInstance->addPublishertoaCampaign($authorization, $accountId, $campaignId, $addPublishertoaCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignPublishersApi->addPublishertoaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **addPublishertoaCampaignRequest** | [**\Ringba\Model\AddPublishertoaCampaignRequest**](../Model/AddPublishertoaCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\AddPublishertoaCampaign**](../Model/AddPublishertoaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePublisherfromaCampaign()`

```php
removePublisherfromaCampaign($authorization, $accountId, $campaignId, $publisherId): \Ringba\Model\RemovePublisherfromaCampaign
```

Remove Publisher from a Campaign

Request to remove a publisher from a campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignPublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->removePublisherfromaCampaign($authorization, $accountId, $campaignId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignPublishersApi->removePublisherfromaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\RemovePublisherfromaCampaign**](../Model/RemovePublisherfromaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
