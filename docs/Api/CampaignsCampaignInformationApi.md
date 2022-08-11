# OpenAPI\Client\CampaignsCampaignInformationApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdClonePost()**](CampaignsCampaignInformationApi.md#accountIdCampaignsCampaignIdClonePost) | **POST** /{accountId}/campaigns/{campaignId}/clone | Clone a Campaign |
| [**accountIdCampaignsCampaignIdDelete()**](CampaignsCampaignInformationApi.md#accountIdCampaignsCampaignIdDelete) | **DELETE** /{accountId}/campaigns/{campaignId} | Delete a Campaign |
| [**accountIdCampaignsCampaignIdGet()**](CampaignsCampaignInformationApi.md#accountIdCampaignsCampaignIdGet) | **GET** /{accountId}/campaigns/{campaignId} | Get Information About a Single Campaign |
| [**accountIdCampaignsCampaignIdInboundReferencesGet()**](CampaignsCampaignInformationApi.md#accountIdCampaignsCampaignIdInboundReferencesGet) | **GET** /{accountId}/campaigns/{campaignId}/InboundReferences | Get Inbound References for a Single Campaign |
| [**accountIdCampaignsCampaignIdPatch()**](CampaignsCampaignInformationApi.md#accountIdCampaignsCampaignIdPatch) | **PATCH** /{accountId}/campaigns/{campaignId} | Update a Campaign |
| [**accountIdCampaignsGet()**](CampaignsCampaignInformationApi.md#accountIdCampaignsGet) | **GET** /{accountId}/campaigns | Get Campaigns |
| [**accountIdCampaignsPost()**](CampaignsCampaignInformationApi.md#accountIdCampaignsPost) | **POST** /{accountId}/campaigns | Create New Campaign |
| [**accountIdCampaignsStatsGet()**](CampaignsCampaignInformationApi.md#accountIdCampaignsStatsGet) | **GET** /{accountId}/campaigns/stats | Get Campaigns Stats only |


## `accountIdCampaignsCampaignIdClonePost()`

```php
accountIdCampaignsCampaignIdClonePost($account_id, $campaign_id, $authorization): object
```

Clone a Campaign

Request to clone a campaign. This will create an a copy of the campaign with all the setting exactly the same and automatically add \"- Copy\" to the end of the name.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdClonePost($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsCampaignIdClonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdDelete()`

```php
accountIdCampaignsCampaignIdDelete($account_id, $campaign_id, $authorization): object
```

Delete a Campaign

Request to delete a campaign from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDelete($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsCampaignIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdGet()`

```php
accountIdCampaignsCampaignIdGet($account_id, $campaign_id, $authorization): object
```

Get Information About a Single Campaign

Request to retrieve information about a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  #### Optional Query Parameters `includeIntegrationSetting=true` After a ? in the url will add integration setting to the response if any are associated with the campaign. See the \"Get Information About a Single Campaign with Integration Settings\" example to the right for implementation.<br> <br>   __NOTE:__ The `campaignId` must have a capital \"CA\" at the beginning. If the \"CA\" is not capitalized you will receive an error message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdGet($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsCampaignIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdInboundReferencesGet()`

```php
accountIdCampaignsCampaignIdInboundReferencesGet($account_id, $campaign_id, $authorization): object
```

Get Inbound References for a Single Campaign

Request to retrieve a list of all the publishers, buyers, and targets that reference the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdInboundReferencesGet($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsCampaignIdInboundReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdPatch()`

```php
accountIdCampaignsCampaignIdPatch($account_id, $campaign_id, $authorization, $body): object
```

Update a Campaign

Request to update information about a campaign.  __NOTE:__ This request will not modify any settings that are not explicitly stated. It also will not affect any of the other settings such as Targets, Default Number, Default Payouts, Offers, RTB settings, Publishers, Publisher Numbers, or Publisher Payout Overrides. To modify those settings you need to use the other requests found in the appropriate sub-folder of the \"Campaigns\" folder of this documentation  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br> <br>  ### Request Body <hr> <br>  You can use this request to update any of the required or optional parameters specified in the description of the \"POST Create New Campaign\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdPatch($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsCampaignIdPatch: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsGet()`

```php
accountIdCampaignsGet($account_id, $authorization): object
```

Get Campaigns

Request to get information about all active campaigns in your account. This request will not display information about any campaigns that you have deleted from your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdCampaignsPost()`

```php
accountIdCampaignsPost($account_id, $authorization, $body): object
```

Create New Campaign

Request to create a new campaign. If the request is sent using just the required parameters, the optional parameters will default to the values listed with each parameter. If you want to modify these default values later, you can do so with the \"PATCH Update a Campaign\" request below. In order to modify anything else, such as Targets, Default Number, Default Payouts, Offers, RTB settings, Publishers, Publisher Numbers, or Publisher Payout Overrides you will need to use the other requests in the \"Campaigns\" folder.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name of the campaign as it will be displayed in the Ringba portal. This is how publishers will identify the campaign.</td> </tr> <tr> <td><code>countryCode</code></td> <td>The country you want the phone number for this campaign to be in.</td> </tr> </table>  #### Optional Parameters _Default values listed in italics below each parameter's decription_  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>userCampaignId</code></td> <td>A custom ID that you will be able to use to track this campaign in reports. <p><i>Default: NONE</i></td> </tr> <tr> <td><code>numberDisplayFormat</code></td> <td>The format you want the numbers for the campaign to be displayed by using an 'n' for each number. For example(nnn) nnn-nnnn will display as (212) 332-2345 <p><i>Default: (nnn) nnn-nnnn</i></td> </tr> <tr> <td><code>duplicateSettings</code></td> <td>An object to configure the criteria that will make a call from a number that has already called be counted as a duplicate. It has two parameters:</td> </tr> <tr> <td></td> <td><p><code>duplicateSetting</code></p><p>The criteria to make a call from a number that has already called count as a duplicate. This has three options:</p><ul><li>\"ON_CONNECT\" will count any connected call form a repeat number</li><li>\"ON_INCOMING\" will count ant incoming call from a repeat number</li><li>\"ON_CALL_LENGTH\" will count any call that last longer than the number of seconds specified in the next parameter</li><p><i>Default: \"ON_CONNECT\"</i></ul><hr><p><code>callLengthInSeconds</code></p><p>Is using \"ON_CONNECT\" or \"ON_INCOMING\" set this value to 0.</p><p>If using \"ON_CALL_LENGTH\" this number specifies the number of seconds a call needs to last to be counted as a duplicate</p><p><i>Default: 0</i></td> </tr> <tr> <td><code>deDupeSettings</code></td> <td>An object to specify what should be done with calls that are deemed to be a duplicate call. It has three parameters:</td> </tr> <tr> <td></td> <td><p><code>routeToOriginal</code></p><p>Boolean value. If set to true, duplicate calls will be routed to the target to which they were originally routed</p><p><i>Default: false</i><hr><p><code>routeToDifferent</code></p><p>Boolean value. If set to true, duplicate calls will be routed to a different target than the one to which they were originally routed</p><p><i>Default: false</i><p><b>NOTE:</b> If both of these are set to false, then calls will be routed normally according to the campaign's routing plan.</p><hr><p><code>strict</code></p><p>Boolean value. If set to true, the rules established will be strictly adhered to even if the target is not accepting calls. If set to false, calls to targets not accepting calls will be automatically rerouted.</p><p><i>Default: true</i></td> </tr> <tr> <td><code>dialSettings</code></td> <td>An object that has one parameter:</td> </tr> <tr> <td></td> <td><p><code>dialAttempts</code></p><p>The number of attempts to reach a target before routing to a different target</p><p><i>Default: 3</i></td> </tr> <tr> <td><code>evalAnonymDuplication</code></td> <td>Boolean value. If set to true anonymous calls will be handled as duplicate calls. <p><i>Default: true</i></td> </tr> <tr> <td><code>payoutDupesGlobal</code></td> <td>Boolean value. If set to true, only one payout will be allowed per Caller ID, regardless of what publisher generates the call.<p><i>Default: false</i></td> </tr> <tr> <td><code>recordSetting</code></td> <td>An object to specify call recording settings for the campaign. It has three parameters:</td> </tr> <tr> <td></td> <td><p><code>record</code></p><p>Boolean value. If set to true, calls will be recorded for the campaign</p><p><i>Default: true</i><hr><p><code>recordFromAnswer</code></p><p>Boolean value. If set to true, call recordings will start once the call is answered. If set to false the entire call will be recorded.</p><p><i>Default: true</i><hr><p><code>trimSilence</code></p><p>Boolean value. If set to true, silence will be trimmed from the recording</p><p><i>Default: false</i><p><b>NOTE:</b> If you set <code>recordFromAnswer</code> or <code>trimSilence</code> to true, you must also set <code>record</code> to true. </tr> <tr> <td><code>spamDetection</code></td> <td>An object that specifies how to handle potential spam calls. It has two parameters:</td> </tr> <tr> <td></td> <td><p><code>blockDuplicatesForSeconds</code></p><p>Automatically blocks calls with the same Caller ID for the specified number of seconds.</p><p><i>Default: 2</i><hr><p><code>trackAnonymous</code></p><p>Boolean value. If set to true then anonymous calls (e.g.: +anonymous, +restricted, +unavailable, etc.) as the same Caller ID to be blocked for the specified number of seconds.</p><p><i>Default: false</i></td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdCampaignsStatsGet()`

```php
accountIdCampaignsStatsGet($account_id, $authorization): object
```

Get Campaigns Stats only

Request to retrieve the stats for all campaigns associated with your account that have ever received calls, even if they have been deleted. Any active campaigns that have not yet received calls will not be displayed. To get stats for active campaigns without any calls, see the \"GET Get Campaigns\" request above and check out the optional query parameter `includeStats=true`.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsStatsGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignInformationApi->accountIdCampaignsStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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
