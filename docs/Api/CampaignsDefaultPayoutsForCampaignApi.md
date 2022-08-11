# OpenAPI\Client\CampaignsDefaultPayoutsForCampaignApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete()**](CampaignsDefaultPayoutsForCampaignApi.md#accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/DefaultPayouts/{payoutId} | Remove Default Payout Setting form a Campaign |
| [**accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch()**](CampaignsDefaultPayoutsForCampaignApi.md#accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch) | **PATCH** /{accountId}/campaigns/{campaignId}/DefaultPayouts/{payoutId} | Update Single Default Payout Settings |
| [**accountIdCampaignsCampaignIdDefaultPayoutsPost()**](CampaignsDefaultPayoutsForCampaignApi.md#accountIdCampaignsCampaignIdDefaultPayoutsPost) | **POST** /{accountId}/campaigns/{campaignId}/DefaultPayouts | Add New Default Payout for a Campaign |
| [**accountIdCampaignsCampaignIdDefaultPayoutsPut()**](CampaignsDefaultPayoutsForCampaignApi.md#accountIdCampaignsCampaignIdDefaultPayoutsPut) | **PUT** /{accountId}/campaigns/{campaignId}/DefaultPayouts | Update ALL Default Payout Settings for a Campaign |


## `accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete()`

```php
accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete($account_id, $campaign_id, $payout_id, $authorization): object
```

Remove Default Payout Setting form a Campaign

Request to remove a default payout setting from a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `payoutId` IDs of default payout settings for a campaign can be found in the `defaultPayouts` object in the response of the \"GET Get Information About a Single Campaign\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsDefaultPayoutsForCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$payout_id = 'payout_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete($account_id, $campaign_id, $payout_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsDefaultPayoutsForCampaignApi->accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **payout_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch()`

```php
accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch($account_id, $campaign_id, $payout_id, $authorization, $body): object
```

Update Single Default Payout Settings

Request to modify a __single__ default payout setting for a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `payoutId` IDs of default payout settings for a campaign can be found in the `defaultPayouts` object in the response of the \"GET Get Information About a Single Campaign\" request above.  ### Request Body <hr> <br>  This request can be used to modify any of the settings for a default payout. Check out the \"POST Add New Default Payout for a Campaign\" request above for an explanation of all the parameters for a default payout. You can include as many of the parameters as you would like but make sure you at least have the following parameters:  `isRevShare` must be included even if it is not being changed  If true, you must include `revSharePercentage` even if it is not being changed  If false, you must include `payoutAmount` and `payoutConversionType` even if they are not being changed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsDefaultPayoutsForCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$payout_id = 'payout_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch($account_id, $campaign_id, $payout_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsDefaultPayoutsForCampaignApi->accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **payout_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdDefaultPayoutsPost()`

```php
accountIdCampaignsCampaignIdDefaultPayoutsPost($account_id, $campaign_id, $authorization, $body): object
```

Add New Default Payout for a Campaign

Request to add a new default payout setting for a campaign. This default payout will be applied to all publishers associated with the campaign unless an override for a publisher is set up using the \"Publisher Payout Overrides\" requests.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br> There are two types of default payouts you can use for a campaign:  1. \"Fixed Amount\" will modify the payout to a specific amount based on the parameters provided. For more information see the [Fixed Amount](#fixed-amount-payout) Section below.  2. \"Revenue Share\" will modify the payout to a percentage of what the payout would otherwise be based on the parameters provided. For more information see the [Revenue Share](#revenue-share-payout) Section below.  ##### Fixed Amount Payout <hr>  #### Fixed Amount Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>isRevShare</code></td> <td>Set this value to false.</td> </tr> <tr> <td><code>priority</code></td> <td><p>The order in which default payouts will be prioritized if a call meets the criteria of more than one.</p><p><b>NOTE:</b> if this is the first default payout you are setting up for the campaign, set the <code>priority</code> to \"0\", which is the highest priority. If you already have default payout(s) associated with this campaign, make sure you each one has a different priority.</p></td> </tr> <tr> <td><code>payoutAmount</code></td> <td>The fixed amount that will be paid for calls meeting the criteria of the default payout</td> </tr> <tr> <td><code>payoutConversionType</code></td> <td><p>The event that will trigger a payout to the publisher. This has four options:</p><ul><li>\"connectedCall\" will trigger on any call that connects</li><li>\"incomingCall\" will trigger on any incoming call.</li><li>\"convertedCall\" will trigger on any call that converts</li><li>\"callLength\" will convert based on the length of the call.</li></ul><p><b>NOTE:</b> if using the \"callLength\" option, the <code>payoutConversionArgs</code> parameter is also required. See the <a href=\"#payout-conversion-args\">Payout Conversion Args</a> below for more information.</td> </tr> </table>  #### Fixed Amount Payout Conversion Args This parameter is required only if you are using a `payoutConversionType` of \"callLength\".  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>payoutConversionArgs</code></td> <td>An object that contains the following parameters:</td> </tr> <tr> <td></td> <td><p><code>callLengthInSeconds</code></p>The number of seconds that a call needs to last in order to convert</p><hr><p><code>startTimerEvent</code></p><p>The event that will start the clock for the call length. This has three options:</p><ul><li>\"OnIncomingCall\" Starts the call as soon as it arrives at Ringba before any RTB or routing has been applied</li><li>\"OnDial\" Starts the timer once Ringba dials a target (and before the target answers)</li><li>\"OnCallConnected\" Starts the timer once a call is answered by the target</li></ul></td> </tr> </table>  ##### Revenue Share Payout <hr>  #### RevShare Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>isRevShare</code></td> <td>Set this value to true.</td> </tr> <tr> <td><code>priority</code></td> <td><p>The order in which default payouts will be prioritized if a call meets the criteria of more than one.</p><p><b>NOTE:</b> if this is the first default payout you are setting up for the campaign, set the <code>priority</code> to \"0\", which is the highest priority. If you already have default payout(s) associated with this campaign, make sure you each one has a different priority.</p></td> </tr> <tr> <td><code>revSharePercentage</code></td> <td>The percent amount of the standard payout that you want to pay for calls in this campaign</td> </tr> </table>  #### RevShare Optional Parameters If you are using the Revenue Share Payout option, you can also add a minimum and maximum payout amount using the following parameters.  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>revShareMinPayoutAmount</code></td> <td>The minimum payment for calls to this campaign. If the <code>revSharePercentage</code> would otherwise make the payment lower than this amount, it will be adjusted to this amount.</td> </tr> <tr> <td><code>revShareMaxPayoutAmount</code></td> <td>The maximum payment for calls to this campaign. If the <code>revSharePercentage</code> would otherwise make the payment higher than this amount, it will be adjusted to this amount.</td> </tr> </table>  #### Optional Parameters (Fixed Amount OR RevShare)  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>deDupeSetting</code></td> <td>Determines how payouts will be handled for duplicate or repeat calls. This is an object containing one parameter</td> </tr> <tr> <td></td> <td><p><code>secondsFromLasCall</code></p><p>Has three options:<ul><li>-1 disables payouts for duplicate calls</li><li>0 enables payouts for all duplicate calls</li><li>any value greater than 0 allows payouts for duplicate calls that are separated by that number of seconds</li></ul></p></td> </tr> <tr> <td><code>allTimeCap</code></td> <td>Payouts will be credited until this number of calls is reached for the campaign. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>monthlyCap</code></td> <td>Payouts will be credited until this number of calls is reached for the campaign each month. Once a new month starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>dailyCap</code></td> <td>Payouts will be credited until this number of calls is reached for the campaign each day. Once a new day starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>hourlyCap</code></td> <td>Payouts will be credited until this number of calls is reached for the campaign each hour. Once a new hour starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>concurrencyCap</code></td> <td>Payouts will be credited until this number of concurrent calls is reached. Once a call is completed, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>allTimeSumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount. A value of \"-1\" will disable this limit. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>monthlySumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount each month. Once a new month starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>dailySumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount each day. Once a new day starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>hourlySumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount each day. Once a new hour starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>payoutHours</code></td> <td>sets the hours during which payouts will be credited for calls to this campaign. This parameter is an array of 7 objects, one for each day starting with Sunday. Each day object contains the following parameters:</td> </tr> <tr> <td></td> <td><p><code>openTime</code></p><p>Object with parameters <code>hour</code> and <code>minute</code> to decide what hours (in 24 hour format) payouts will start being credited</p><hr><p><code>closeTime</code></p><p>Object with parameters <code>hour</code> and <code>minute</code> to decide what hours (in 24 hour format) payouts will start being credited</p><hr><p><code>inverted</code></p><p>Set this value to \"false\"</p><hr><p><code>isClosed</code></p><p>If set to \"true\" this will disable payouts for the campaign for the entire day, regardless of the values for <code>openTime</code> or <code>closeTime</code>.</p><hr><p><b>NOTE:</b> See the \"Add New Default Payout With All Optional Parameters Specified\" example to the right to see how to set the hours of operation to Monday-Friday 9AM-5PM and closed Saturday and Sunday.</p></td> </tr>Ï <tr> <td><code>timeZoneId</code></td> <td>The time zone for the <code>payoutHours</code> limits for the campaign</td> </tr> <tr> <td><code>sendNotifications</code></td> <td>Boolean value. If set to true all publishers associated with the campaign will receive a notification about the new default payout settings being added.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsDefaultPayoutsForCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDefaultPayoutsPost($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsDefaultPayoutsForCampaignApi->accountIdCampaignsCampaignIdDefaultPayoutsPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdDefaultPayoutsPut()`

```php
accountIdCampaignsCampaignIdDefaultPayoutsPut($account_id, $campaign_id, $authorization, $body): object
```

Update ALL Default Payout Settings for a Campaign

Request to modify __ALL__ default payout settings for a specified campaign.  __NOTE:__ This request will modify all of the default payouts for the campaign, so if a default payout is not included in the request body it will be removed from the campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  The best way to ensure the fidelity of all the payouts associated with the campaign, it is recommended that you follow these steps in order to use this request:  1. Using the \"GET Get Information About a Single Campaign\" request above, you can retrieve the most current settings for the campaign's default payouts. See the example associated with that request and check out the `defaultPayouts` array, starting on line 27.  3. Once you run that request for the campaign you are interested in, take the objects (one for each default payout) in the `defaultPayouts` array and paste them into an array called `allPayouts` in the body of this request.  3. The `allPayouts` array needs to be put into a JSON object in the body of this request. See the example for implementation  4. At this point, you can modify any of the settings for any or all of the default payouts for the campaign. Check out the \"POST Add New Default Payout\" request above for an explanation of each setting and which ones are required for a Fixed or a RevShare Payout.  __NOTE:__ For this request, the `sendNotifications` parameter is specified one time outside of the `allPayouts` array to determine if publishers will be notified about the changes made using this request.  Following these steps will be the best way to use this request and ensure that none of the default payouts are lost by not being included in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsDefaultPayoutsForCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDefaultPayoutsPut($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsDefaultPayoutsForCampaignApi->accountIdCampaignsCampaignIdDefaultPayoutsPut: ', $e->getMessage(), PHP_EOL;
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
