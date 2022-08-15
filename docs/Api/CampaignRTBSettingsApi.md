# Ringba\CampaignRTBSettingsApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**disableRTBforaCampaign()**](CampaignRTBSettingsApi.md#disableRTBforaCampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/rtb | Disable RTB for a Campaign
[**editRTBSettingsforaCampaign()**](CampaignRTBSettingsApi.md#editRTBSettingsforaCampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/rtb | Edit RTB Settings for a Campaign
[**enableRTBforaCampaign()**](CampaignRTBSettingsApi.md#enableRTBforaCampaign) | **PUT** /{accountId}/campaigns/{campaignId}/rtb | Enable RTB for a Campaign
[**getRTBforCampaign()**](CampaignRTBSettingsApi.md#getRTBforCampaign) | **GET** /{accountId}/campaigns/{campaignId}/rtb | Get RTB for Campaign


## `disableRTBforaCampaign()`

```php
disableRTBforaCampaign($accountId, $campaignId, $authorization): \Ringba\Model\DisableRTBforaCampaign
```

Disable RTB for a Campaign

Request to disable RTB for a campaign. This request will remove all RTB settings so after it is sent successfully, you will need to use the \"PUT Enable RTB for a Campaign\" request in order to reactivate RTB for the campaign.   __NOTE:__ If you just want to pause RTB for the campaign without losing your previously established RTB settings, you can use the \"PATCH Edit RTB Settings for a Campaign\" request. See the \"Pause RTB for a Campaign\" example associated with that request.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignRTBSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->disableRTBforaCampaign($accountId, $campaignId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRTBSettingsApi->disableRTBforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\DisableRTBforaCampaign**](../Model/DisableRTBforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editRTBSettingsforaCampaign()`

```php
editRTBSettingsforaCampaign($accountId, $campaignId, $editRTBSettingsforaCampaignRequest, $authorization): \Ringba\Model\AddBulkModifiertoaCampaign
```

Edit RTB Settings for a Campaign

Request to modify RTB setting for a campaign that has RTB enabled. See the \"PUT Enable RTB for a Campaign for an explanation of what each parameter does. Any parameter can be modified using this request.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignRTBSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$editRTBSettingsforaCampaignRequest = {"bidAdjustments":[{"criteria":{"tagId":"{Demographics:Age}","comparisonType":"BULK","value":"1","isNegativeMatch":false},"adjustmentType":"Multiply","adjustmentValue":1.0,"bulkListId":"RTBLISTc5de66696f8142448b0f0de930c35acb"}]}; // \Ringba\Model\EditRTBSettingsforaCampaignRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->editRTBSettingsforaCampaign($accountId, $campaignId, $editRTBSettingsforaCampaignRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRTBSettingsApi->editRTBSettingsforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **editRTBSettingsforaCampaignRequest** | [**\Ringba\Model\EditRTBSettingsforaCampaignRequest**](../Model/EditRTBSettingsforaCampaignRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\AddBulkModifiertoaCampaign**](../Model/AddBulkModifiertoaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableRTBforaCampaign()`

```php
enableRTBforaCampaign($accountId, $campaignId, $enableRTBforaCampaignRequest, $authorization): \Ringba\Model\EnableRTBforaCampaign
```

Enable RTB for a Campaign

Request to enable RTB for a campaign __for the first time__ and to establish the RTB settings for that campaign. If you want to modify the RTB settings for a campaign that has previously had RTB enabled, use the \"PATCH Edit RTB Settings for a Campaign\" request below. <br>  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>enabled</code></td> <td>Boolean value, set to \"true\" to enable RTB for the campaign</td> </tr> <tr> <td><code>sipOnly</code></td> <td>Boolean value. If set to true, this will make it so that RTB for this campaign will only provide SIP URI numbers to be called</td> </tr> <tr> <td><code>callerIdRequired</code></td> <td>Boolean value. If set to true, a caller ID is required for every ping and any ping without a caller ID will be ignored.</td> </tr> <tr> <td><code>icp</code></td> <td>Stands for Instant Caller Profiles and has the following options:<p>\"Off\"</p><p>Disables ICP for the campaign RTB</p><hr><p>\"On\"</p><p>Enables ICP for the campaign RTB. If enabled, ICP will be used to enrich the call for every ping that contains a caller ID.</p><hr><p>\"Required\"</p><p>If set to \"Required\", no bid will be returned if the call didn't trigger ICP.</p></td> </tr> <tr> <td><code>bidExpirationPolicy</code></td> <td>An object to specify when bids expire and how to handle expired bids. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>bidExpirationInSeconds</code></p><p>The number of seconds that a bid will remain valid after its creation.</p><hr><p><code>routeCallsForStaleBids</code></p><p>Determines the behavior of bids after the <code>bidExpirationInSeconds</code> is reached. If set to \"false\" then calls will be rejected after they expire. If set to \"true\" then calls will be routed normally regardless of whether or not they have expired.</p></td> </tr> <tr> <td><code>rateLimit</code></td> <td>An object to set a limit to the number of RTB bids for the campaign. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>maxRequests</code></p><p>The maximum number of requests in a specified time period. To specify the time period see the options for the next parameter <code>perSeconds</code></p><hr><p><code>perSeconds</code></p><p>Specifies the time period for the <code>maxRequests</code> parameter. There are three options for the time period:</p><ul><li>\"60\" to specify <code>maxRequests</code> per minute</li><li>\"3600\" to specify <code>maxRequests</code> per hour</li><li>\"86400\" to specify <code>maxRequests</code> per day</li></ul></td> </tr> <tr> <td><code>bidSettings</code></td> <td>An object to specify the settings for RTB bids for the campaign. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>baseBidAmount</code></p><p>The dollar value of a bid before any adjustments are made</p><hr><p><code>maxBidAmount</code></p><p>The maximum dollar value for a bid regardless of adjustments made</p><hr><p><code>conversionType</code></p><p>Determines what event will convert a call and has the following options:</p><ul><li>\"incomingCall\" converts any incoming call</li><li>\"connectedCall\" converts any connected call</li><li>\"callLength\" converts a call based on length. If using this option, you need to include the <code>conversionArgs</code> parameter within the <code>bidSettings</code> object. See the <a href=\"#conversionargs-table\">ConversionArgs Table</a> below for more details</li></ul><hr><p><code>deDupeSetting</code></p><p>This determines if/when duplicate or repeat calls will be paid multiple times. It has three options:</p><ul><li>\"-1\" will allow payouts for repeat calls regardless of how much time passes between calls</li><li>\"0\" disables payouts for repeat calls</li><li>\"3600\" enables payouts for repeat calls as long as they are more than one hour (3600 seconds) apart. Any multiple of 3600 can be entered for this value.</li></ul></td> </tr> </table>  #### ConversionArgs Table If you use the `callLength` option for `conversionType` you must include the following object in the `bidSettings` object:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>conversionArgs</code></td> <td>An objects that specifies how long a call needs to last in order to convert. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>callLengthInSeconds</code></p><p>The number of seconds that a call needs to last in order to convert</p><hr><p><code>startTimerEvent</code></p><p>The event that will start the timer for the call length. It has three options:</p><ul><li>\"OnIncomingCall\" Starts the call as soon as it arrives at Ringba before any RTB or routing has been applied</li><li>\"OnDial\" Starts the timer once Ringba dials a target (and before the target answers)</li><li>\"OnCallConnected\" Starts the timer once a call is answered by the target</li></ul></td> </table>  #### Optional Parameters ##### Bid Adjustments You can add bid adjustments based on tags by adding a parameter called `bidAdjustments`, which is an array that contains an object for each adjustment. Each adjustment object contains the following parameters:  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>criteria</code></td> <td>An object the specifies the criteria that bids should be compared to for filtering. It has the following parameters:</td> </tr> <tr> <td></td> <td><p><code>tagId</code></p><p>The name of the tag you want to compare a bid to</p> <hr><p><code>comparisonType</code></p><p>Specifies the criteria that a tag must meet to trigger the bid modifier. This has the following value options:</p><ul><li>\"EQUALS\"</li><li>\"CONTAINS\"</li><li>\"GREATER_THAN\"</li><li>\"LESS_THAN\"</li><li>\"BULK\"</li><li>\"MATCH\"</li><li>\"REGEX\"</li><li>\"REQUIRED\"</li></ul><p>See the <a href=\"#comparisontype-table\">comparisonType Table</a> below for more information.</p><hr><p><code>value</code></p><p>The value you want to use for the comparison</p><hr><p><code>isNegativeMatch</code></p><p>Boolean value. If set to \"true\" then the comparison type is negated so \"EQUALS\" would become \"NOT EQUAL TO\" and \"GREATER_THAN\" would become \"LESS THAN OR EQUAL TO\"</p></td> </tr> <tr> <td><code>adjustmentType</code></td> <td>The type of adjustment to be made if the bid modifier is triggered. You can make the following adjustments to a bid:</td> </tr> <tr> <td></td> <td><p>\"Add\"</p><p>Adds a value to the bid, specified by the <code>adjustmentValue</code> parameter below. Adding a negative number will subtract that amount from the payout.</p><hr><p>\"Multiply\"</p><p>Multiplies the bid by the amount specified by the <code>adjustmentValue</code> parameter below.</p><hr><p>\"Override\"</p><p>Overrides the bid amount, changing it to the amount specified by the <code>adjustmentValue</code> parameter below.</p><hr><p>\"Reject\"</p><p>Causes the bid to be rejected if the modifier is triggered. If using \"Reject\" the <code>adjustmentValue</code> parameter needs to have a value of \"0\".</p></td> </tr> <tr> <td><code>adjustmentValue</code></td> <td>The amount by which you want to adjust the bid if the modifier is triggered.</td> </tr> </table>  #### comparisonType Table <table> <tr> <th>Option</th> <th>Description</th> </tr> <tr> <td>\"EQUALS\"</td> <td>Triggers if bids have a tag specified in the <code>tagId</code> equal to the <code>value</code> specified in the <code>criteria</code> object.</td> </tr> <tr> <td>\"CONTAINS\"</td> <td>Triggers if bids have a tag specified in the <code>tagId</code> containing the <code>value</code> specified in the <code>criteria</code> object.</td> </tr> <tr> <td>\"GREATER_THAN\"</td> <td>Triggers if bids have a tag specified in the <code>tagId</code> greater than the <code>value</code> specified in the <code>criteria</code> object.</td> </tr> <tr> <td>\"LESS_THAN\"</td> <td>Triggers if bids have a tag specified in the <code>tagId</code> less than the <code>value</code> specified in the <code>criteria</code> object.</td> </tr> <tr> <td>\"BULK\"</td> <td>Allows a user to set adjustments for multiple cases in one modifier. For example, if you want different adjustments based on age, you can do that with a bulk modifier. For more details, see the <a href=\"#bulk-modifiers\">Bulk Modifiers</a> section below or the \"Add Bulk Modifier to a Campaign\" example associated with the \"PATCH Edit RTB Settings for a Campaign\" request for implementation.</td> </tr> <tr> <td>\"MATCH\"</td> <td>Can be used for two cases:</td> </tr> <tr> <td></td> <td><p>To trigger in cases where the tag specified in <code>tagId</code> is NOT SET use a <code>comparisonType</code> of \"MATCH\", a <code>value</code> of \"?*\", and set <code>isNegativeMatch</code> to true.<p>See the tag with a <code>tagId</code> of \"tag four\" in the \"Enable RTB for a Campaign with adjustments\" example for implementation.<hr><p>To trigger based on a Wildcard Match. For example:<p>If you have a tag for the full name but only want calls with a surname of \"Smith\" you can use a <code>comparisonType</code> of \"MATCH\" and a <code>value</code> of \"*Smith*\"<p>See the tag with a <code>tagId</code> of \"full name\" in the \"Enable RTB for a Campaign with adjustments\" example for implementation.</p></p> </tr> <tr> <td>\"REGEX\"</td> <td><p>Triggers if bids have a tag specified in the <code>tagId</code> that contains a regular expression specified in the  <code>value</code> specified in the <code>criteria</code> object.  <p>For example if you want to modify bids from any IP address starting with 201 you can specify a <code>tagId</code> for IP address and a <code>value</code> of <code>201\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}</code> <p>For more information about the RegEx used by Ringba click <a href=\"https://docs.microsoft.com/en-us/dotnet/standard/base-types/regular-expression-language-quick-reference\" target=\"_blank\">here</a>.</td> </tr> <tr> <td>\"REQUIRED\"</td> <td>Rejects any bid that does not have the tag specified in the <code>tagId</code> in the <code>criteria</code> object.<p><b>NOTE:</b> If using the \"REQUIRED\" <code>comparisonType</code> the <code>value</code> needs to be a blank string (\"\"). The <code>adjustmentType</code> and <code>adjustmentValue</code> fields can be omitted.</td> </tr> <tr> </table>  #### Bulk Modifiers If you want to add a bulk modifier to specify different adjustment based on different values for one criteria, the first step is to create a CSV file to specify the adjustment criteria. If you wanted to adjust bids based on age, you could make a table like the following and download it as a CSV file:  <table> <tr> <td>16</td> <td>2.00</td> </tr> <tr> <td>17</td> <td>2.00</td> </tr> <tr> <td>18</td> <td>2.00</td> </tr> <tr> <td>19</td> <td>2.00</td> </tr> <tr> <td>20</td> <td>2.00</td> </tr> <tr> <td>21</td> <td>1.50</td> </tr> <tr> <td>22</td> <td>1.50</td> </tr> <tr> <td>23</td> <td>1.50</td> </tr> <tr> <td>24</td> <td>1.50</td> </tr> <tr> <td>25</td> <td>1.50</td> </tr> <tr> <td>26</td> <td>1.50</td> </tr> <tr> <td>27</td> <td>1.50</td> </tr> <tr> <td>28</td> <td>1.50</td> </tr> <tr> <td>29</td> <td>1.50</td> </tr> <tr> <td>30</td> <td>1.00</td> </tr> </table>  __NOTE:__ The first column in this table represents the age and in this case the second column represents the factor by which the bid will be multiplied because it uses an `adjustmentType` of \"Multiply\" (see below). You can use any of the available `adjustmentTypes` and the values in the second column will be the `adjustmentValue` for that criteria.  Once you have downloaded the table as a CSV file, use the \"PUT Create RTB Bulk Modifier from CSV\" request in the \"RTB Bulk Modifiers\" folder to upload the CSV file. This request will return and object called `rtbBulkModifierList` that will have an `id` starting with \"RTBLIST...\" which you will need for the next step. Once you have the `id` create an object like the following:  ``` {     \"criteria\": {         \"tagId\": \"Age Bulk Modifier\",         \"comparisonType\": \"BULK\",         \"value\": \"1\",         \"isNegativeMatch\": false     },     \"adjustmentType\": \"Multiply\",     \"adjustmentValue\": 1.0,     \"bulkListId\": \"RTBLISTc5de66696f8142448b0f0de930c35acb\" } ``` and add it to the `bidAdjustments` array. See the tag labelled \"Age Bulk Modifier\" in the \"Enable RTB for a Campaign with adjustments\" example for implementation.  __NOTE:__ The `bulkListId` is required if you are adding a bulk modifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignRTBSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$enableRTBforaCampaignRequest = {"enabled":true,"sipOnly":false,"callerIdRequired":false,"icp":"Off","customIntegrations":{"journayaTCPA":{"state":"Off"}},"bidExpirationPolicy":{"bidExpirationInSeconds":20,"routeCallsForStaleBids":false},"rateLimit":{"maxRequests":10,"perSeconds":60},"bidSettings":{"baseBidAmount":10,"maxBidAmount":25,"conversionType":"incomingCall","conversionArgs":{"callLengthInSeconds":30,"startTimerEvent":"OnIncomingCall"},"deDupeSetting":{"secondsFromLastCall":0}},"bidAdjustments":[]}; // \Ringba\Model\EnableRTBforaCampaignRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->enableRTBforaCampaign($accountId, $campaignId, $enableRTBforaCampaignRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRTBSettingsApi->enableRTBforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **enableRTBforaCampaignRequest** | [**\Ringba\Model\EnableRTBforaCampaignRequest**](../Model/EnableRTBforaCampaignRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\EnableRTBforaCampaign**](../Model/EnableRTBforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRTBforCampaign()`

```php
getRTBforCampaign($accountId, $campaignId, $authorization): \Ringba\Model\GetRTBforCampaignwithRTBenabled
```

Get RTB for Campaign

Request to get details about the real time bidding settings for a campaign. If RTB is not enabled for the campaign, you will see an error message like the one in the \"Get RTB for Campaign without RTB enabled\" example.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignRTBSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getRTBforCampaign($accountId, $campaignId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRTBSettingsApi->getRTBforCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetRTBforCampaignwithRTBenabled**](../Model/GetRTBforCampaignwithRTBenabled.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
