# OpenAPI\Client\CampaignsPublisherRTBOverridesApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet()**](CampaignsPublisherRTBOverridesApi.md#accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet) | **GET** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId} | Get RTB Settings for a Publisher |
| [**accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch()**](CampaignsPublisherRTBOverridesApi.md#accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch) | **PATCH** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId} | Override RTB Settings for a Publisher |
| [**accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet()**](CampaignsPublisherRTBOverridesApi.md#accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet) | **GET** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId}/url | Get RTB URLs for a Publisher |


## `accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet()`

```php
accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet($account_id, $campaign_id, $publisher_id, $authorization)
```

Get RTB Settings for a Publisher

Request to get RTB information for a publisher associated with a RTB-enabled campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsPublisherRTBOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $apiInstance->accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet($account_id, $campaign_id, $publisher_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsPublisherRTBOverridesApi->accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch()`

```php
accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch($account_id, $campaign_id, $publisher_id, $authorization, $body): object
```

Override RTB Settings for a Publisher

Request to override the campaign's RTB settings for a specific publisher  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  ### Request Body <hr> <br>  #### Required Parameters You can override the campaign's RTB settings using the following parameters:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>enabled</code></td> <td>Boolean value. If set to false, RTB will be disabled for this publisher</td> </tr> <tr> <td><code>callerIdRequiredOverride</code></td> <td>Boolean value. If set to true, a Caller ID is required for calls to this publisher.</td> </tr> <tr> <td><code>rateLimitOverride</code></td> <td>An object to override the campaign's limit to the number of RTB bids for the publisher. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>maxRequests</code></p><p>The maximum number of requests in a specified time period. To specify the time period see the options for the next parameter <code>perSeconds</code></p><hr><p><code>perSeconds</code></p><p>Specifies the time period for the <code>maxRequests</code> parameter. There are three options for the time period:</p><ul><li>\"60\" to specify <code>maxRequests</code> per minute</li><li>\"3600\" to specify <code>maxRequests</code> per hour</li><li>\"86400\" to specify <code>maxRequests</code> per day</li></ul></td> </tr> <tr> <td><code>bidSettingsOverride</code></td> <td>An object to override the campaign's settings for RTB bids for the publisher. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>baseBidAmount</code></p><p>The dollar value of a bid before any adjustments are made</p><hr><p><code>maxBidAmount</code></p><p>The maximum dollar value for a bid regardless of adjustments made</p><hr><p><code>conversionType</code></p><p>Determines what event will convert a call and has the following options:</p><ul><li>\"incomingCall\" converts any incoming call</li><li>\"connectedCall\" converts any connected call</li><li>\"callLength\" converts a call based on length. If using this option, you need to include the <code>conversionArgs</code> parameter within the <code>bidSettingsOverride</code> object. See the <a href=\"#conversionargs-override-table\">ConversionArgs Table</a> below for more details</li></ul><hr><p><code>deDupeSetting</code></p><p>This determines if/when duplicate or repeat calls will be paid multiple times. It has three options:</p><ul><li>\"-1\" will allow payouts for repeat calls regardless of how much time passes between calls</li><li>\"0\" disables payouts for repeat calls</li><li>\"3600\" enables payouts for repeat calls as long as they are more than one hour (3600 seconds) apart. Any multiple of 3600 can be entered for this value.</li></ul></td> </tr> <tr> <td><code>bidAdjustmentsOverride</code></td> <td>Used to override the campaign's bid adjustment settings. For more information about bid adjustments check out the <a href=\"#bid-adjustments\">Bid Adjustments</a> section of the \"PUT Enable RTB for a Campaign\" request. </tr> </table>  #### ConversionArgs Override Table If you use the `callLength` option for `conversionType` you must include the following object in the `bidSettings` object:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionArgs</code></td> <td>An objects that specifies how long a call needs to last in order to convert. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>callLengthInSeconds</code></p><p>The number of seconds that a call needs to last in order to convert</p><hr><p><code>startTimerEvent</code></p><p>The event that will start the timer for the call length. It has three options:</p><ul><li>\"OnIncomingCall\" Starts the call as soon as it arrives at Ringba before any RTB or routing has been applied</li><li>\"OnDial\" Starts the timer once Ringba dials a target (and before the target answers)</li><li>\"OnCallConnected\" Starts the timer once a call is answered by the target</li></ul></td> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsPublisherRTBOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch($account_id, $campaign_id, $publisher_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsPublisherRTBOverridesApi->accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **publisher_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet()`

```php
accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet($account_id, $campaign_id, $publisher_id, $authorization): object
```

Get RTB URLs for a Publisher

Request to get the publisher's URLs for the requests in the \"Real Time Bidding (RTB) folder.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  ### Response Overview <hr> <br>  This request will return two URLs, one for JSON and one for XML. You will need to use the appropriate URL when making the requests found in the \"Real Time Bidding (RTB) folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsPublisherRTBOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet($account_id, $campaign_id, $publisher_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsPublisherRTBOverridesApi->accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet: ', $e->getMessage(), PHP_EOL;
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
