# OpenAPI\Client\CampaignsCampaignPublishersApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdAffiliatesPatch()**](CampaignsCampaignPublishersApi.md#accountIdCampaignsCampaignIdAffiliatesPatch) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliates | Add Publisher to a Campaign |
| [**accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete()**](CampaignsCampaignPublishersApi.md#accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/affiliates/{publisherId} | Remove Publisher from a Campaign |


## `accountIdCampaignsCampaignIdAffiliatesPatch()`

```php
accountIdCampaignsCampaignIdAffiliatesPatch($account_id, $campaign_id, $authorization, $body): object
```

Add Publisher to a Campaign

Request to add a publisher to a campaign. This only adds them to the campaign but does not add any numbers or payout overrides for the publisher.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>publisherId</code></td> <td>The ID of the publisher you want to add to the campaign. Find <a href=\"#get-information-about-publishers\">publishers</a> associated with your account.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignPublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliatesPatch($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignPublishersApi->accountIdCampaignsCampaignIdAffiliatesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |
| **body** | **object**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete()`

```php
accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete($account_id, $campaign_id, $publisher_id, $authorization): object
```

Remove Publisher from a Campaign

Request to remove a publisher from a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignPublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete($account_id, $campaign_id, $publisher_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignPublishersApi->accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
