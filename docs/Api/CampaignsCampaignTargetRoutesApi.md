# Ringba\CampaignsCampaignTargetRoutesApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdCampaignsCampaignIdRoutesDelete()**](CampaignsCampaignTargetRoutesApi.md#accountIdCampaignsCampaignIdRoutesDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Routes | Remove Target Route from a Campaign
[**accountIdCampaignsCampaignIdRoutesPost()**](CampaignsCampaignTargetRoutesApi.md#accountIdCampaignsCampaignIdRoutesPost) | **POST** /{accountId}/campaigns/{campaignId}/Routes | Add Target Group Route to a Campaign


## `accountIdCampaignsCampaignIdRoutesDelete()`

```php
accountIdCampaignsCampaignIdRoutesDelete($accountId, $campaignId, $authorization): object
```

Remove Target Route from a Campaign

Request to remove a target or a target group from a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>id</code></td> <td>The campaign route ID</td> </tr> </table>  __NOTE:__ This is _not_ the target/target group ID. It is the ID for the route on the campaign. You can retrieve this ID using the \"GET Get Information About a Single Campaign\" request above. Each route will have an ID beginning with \"CR\", this is the campaign route ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignsCampaignTargetRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$campaignId = 'campaignId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdRoutesDelete($accountId, $campaignId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignTargetRoutesApi->accountIdCampaignsCampaignIdRoutesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

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

## `accountIdCampaignsCampaignIdRoutesPost()`

```php
accountIdCampaignsCampaignIdRoutesPost($accountId, $campaignId, $authorization, $body): object
```

Add Target Group Route to a Campaign

Request to add a target group to a campaign.<br>  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>targetGroupId</code></td> <td>The ID of target group you want to add to the campaign</td> </tr> <tr> <td><code>priority</code></td> <td>An object with two parameters:</td> </tr> <tr> <td></td> <td><p><code>priority</code></p><p>The priority you want to assign to the target group. This is used to select target groups, with 1 being the highest priority.</p><hr><p><code>weight</code></p><p>The weight assigned to a target group in case there are two targets with the same priority. __NOTE:__ The weight is a _relative_ value so if two targets with the same priority each have a weight of 10, they will each receive 50% of calls. If one has a weight of 5 and one has a weight of 10 then the one with a weight of 5 will receive twice the amount of calls as the one with a weight of 10.</p></td> </tr> <tr> <td><code>callConversion</code></td> <td>An object with multiple options. See the <a href=\"#target-group-conversion-options\">Target Group Conversion Options</a> section below for more information.</td> </tr> </table>  #### Target Group Conversion Options If you want the call to convert on any dialed call, use the following parameters in the `callConversion` object:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionType</code></td> <td>Set value to \"dialed\"</td> </tr> <tr> <td><code>conversionValue</code></td> <td>The amount of money generated when this target group is dialed</td> </tr> </table>  <hr>  If you want the call to convert on any connected call, use the following parameters in the `callConversion` object:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionType</code></td> <td>Set value to \"connectedCall\"</td> </tr> <tr> <td><code>conversionValue</code></td> <td>The amount of money generated when a target in this target group has a call connect</td> </tr> </table>  <hr>  If you want the call to convert based on a postback or webhook use the following parameters in the `callConversion` object:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionType</code></td> <td>Set value to \"postBack\"</td> </tr> <tr> <td><code>conversionValue</code></td> <td>The amount of money generated when the webhook or postback endpoint is reached</td> </tr> </table>  __NOTE:__ If you elect to convert based on a webhook or postback, you will need to set up the endpoint for the webhook using the requests in the \"Webhooks\" section of this documentation  <hr>  If you want the call to convert based on call length use the following parameters in the `callConversion` object:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionType</code></td> <td>Set value to \"callLength\"</td> </tr> <tr> <td><code>conversionValue</code></td> <td>The amount of money generated when the call length is satisfied</td> </tr> <tr> <td><code>conversionArgs</code></td> <td>An object with the following parameters:</td> </tr> <tr> <td></td> <td><p><code>startTimerEvent</code></p><p>The event which will trigger the timer to measure call length. This has three options: <ul><li>\"OnIncomingCall\"</li><li>\"OnDial\"</li><li>\"OnConnectedCall\"</li></ul><hr><p><code>callLengthInSeconds</code></p><p>The number of seconds after the timer has been triggered until the call will convert</p> </table>  Check out the \"Add Target Group converting on call length\" example to see how to add a target group that converts 30 seconds after a call has connected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignsCampaignTargetRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$campaignId = 'campaignId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdRoutesPost($accountId, $campaignId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignTargetRoutesApi->accountIdCampaignsCampaignIdRoutesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **body** | **object**|  | [optional]

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
