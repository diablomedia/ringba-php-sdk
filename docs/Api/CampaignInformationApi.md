# Ringba\CampaignInformationApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneaCampaign()**](CampaignInformationApi.md#cloneaCampaign) | **POST** /{accountId}/campaigns/{campaignId}/clone | Clone a Campaign
[**createNewCampaign()**](CampaignInformationApi.md#createNewCampaign) | **POST** /{accountId}/campaigns | Create New Campaign
[**deleteaCampaign()**](CampaignInformationApi.md#deleteaCampaign) | **DELETE** /{accountId}/campaigns/{campaignId} | Delete a Campaign
[**getCampaigns()**](CampaignInformationApi.md#getCampaigns) | **GET** /{accountId}/campaigns | Get Campaigns
[**getCampaignsStatsonly()**](CampaignInformationApi.md#getCampaignsStatsonly) | **GET** /{accountId}/campaigns/stats | Get Campaigns Stats only
[**getInboundReferencesforaSingleCampaign()**](CampaignInformationApi.md#getInboundReferencesforaSingleCampaign) | **GET** /{accountId}/campaigns/{campaignId}/InboundReferences | Get Inbound References for a Single Campaign
[**getInformationAboutaSingleCampaign()**](CampaignInformationApi.md#getInformationAboutaSingleCampaign) | **GET** /{accountId}/campaigns/{campaignId} | Get Information About a Single Campaign
[**updateaCampaign()**](CampaignInformationApi.md#updateaCampaign) | **PATCH** /{accountId}/campaigns/{campaignId} | Update a Campaign


## `cloneaCampaign()`

```php
cloneaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\CloneaCampaign
```

Clone a Campaign

Request to clone a campaign. This will create an a copy of the campaign with all the setting exactly the same and automatically add \"- Copy\" to the end of the name.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->cloneaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->cloneaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\CloneaCampaign**](../Model/CloneaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewCampaign()`

```php
createNewCampaign($authorization, $accountId, $createNewCampaignRequest): \Ringba\Model\CreateNewCampaignwithallavailableparametersspecified
```

Create New Campaign

Request to create a new campaign. If the request is sent using just the required parameters, the optional parameters will default to the values listed with each parameter. If you want to modify these default values later, you can do so with the \"PATCH Update a Campaign\" request below. In order to modify anything else, such as Targets, Default Number, Default Payouts, Offers, RTB settings, Publishers, Publisher Numbers, or Publisher Payout Overrides you will need to use the other requests in the \"Campaigns\" folder.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name of the campaign as it will be displayed in the Ringba portal. This is how publishers will identify the campaign.</td> </tr> <tr> <td><code>countryCode</code></td> <td>The country you want the phone number for this campaign to be in.</td> </tr> </table>  #### Optional Parameters _Default values listed in italics below each parameter's decription_  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>userCampaignId</code></td> <td>A custom ID that you will be able to use to track this campaign in reports. <p><i>Default: NONE</i></td> </tr> <tr> <td><code>numberDisplayFormat</code></td> <td>The format you want the numbers for the campaign to be displayed by using an 'n' for each number. For example(nnn) nnn-nnnn will display as (212) 332-2345 <p><i>Default: (nnn) nnn-nnnn</i></td> </tr> <tr> <td><code>duplicateSettings</code></td> <td>An object to configure the criteria that will make a call from a number that has already called be counted as a duplicate. It has two parameters:</td> </tr> <tr> <td></td> <td><p><code>duplicateSetting</code></p><p>The criteria to make a call from a number that has already called count as a duplicate. This has three options:</p><ul><li>\"ON_CONNECT\" will count any connected call form a repeat number</li><li>\"ON_INCOMING\" will count ant incoming call from a repeat number</li><li>\"ON_CALL_LENGTH\" will count any call that last longer than the number of seconds specified in the next parameter</li><p><i>Default: \"ON_CONNECT\"</i></ul><hr><p><code>callLengthInSeconds</code></p><p>Is using \"ON_CONNECT\" or \"ON_INCOMING\" set this value to 0.</p><p>If using \"ON_CALL_LENGTH\" this number specifies the number of seconds a call needs to last to be counted as a duplicate</p><p><i>Default: 0</i></td> </tr> <tr> <td><code>deDupeSettings</code></td> <td>An object to specify what should be done with calls that are deemed to be a duplicate call. It has three parameters:</td> </tr> <tr> <td></td> <td><p><code>routeToOriginal</code></p><p>Boolean value. If set to true, duplicate calls will be routed to the target to which they were originally routed</p><p><i>Default: false</i><hr><p><code>routeToDifferent</code></p><p>Boolean value. If set to true, duplicate calls will be routed to a different target than the one to which they were originally routed</p><p><i>Default: false</i><p><b>NOTE:</b> If both of these are set to false, then calls will be routed normally according to the campaign's routing plan.</p><hr><p><code>strict</code></p><p>Boolean value. If set to true, the rules established will be strictly adhered to even if the target is not accepting calls. If set to false, calls to targets not accepting calls will be automatically rerouted.</p><p><i>Default: true</i></td> </tr> <tr> <td><code>dialSettings</code></td> <td>An object that has one parameter:</td> </tr> <tr> <td></td> <td><p><code>dialAttempts</code></p><p>The number of attempts to reach a target before routing to a different target</p><p><i>Default: 3</i></td> </tr> <tr> <td><code>evalAnonymDuplication</code></td> <td>Boolean value. If set to true anonymous calls will be handled as duplicate calls. <p><i>Default: true</i></td> </tr> <tr> <td><code>payoutDupesGlobal</code></td> <td>Boolean value. If set to true, only one payout will be allowed per Caller ID, regardless of what publisher generates the call.<p><i>Default: false</i></td> </tr> <tr> <td><code>recordSetting</code></td> <td>An object to specify call recording settings for the campaign. It has three parameters:</td> </tr> <tr> <td></td> <td><p><code>record</code></p><p>Boolean value. If set to true, calls will be recorded for the campaign</p><p><i>Default: true</i><hr><p><code>recordFromAnswer</code></p><p>Boolean value. If set to true, call recordings will start once the call is answered. If set to false the entire call will be recorded.</p><p><i>Default: true</i><hr><p><code>trimSilence</code></p><p>Boolean value. If set to true, silence will be trimmed from the recording</p><p><i>Default: false</i><p><b>NOTE:</b> If you set <code>recordFromAnswer</code> or <code>trimSilence</code> to true, you must also set <code>record</code> to true. </tr> <tr> <td><code>spamDetection</code></td> <td>An object that specifies how to handle potential spam calls. It has two parameters:</td> </tr> <tr> <td></td> <td><p><code>blockDuplicatesForSeconds</code></p><p>Automatically blocks calls with the same Caller ID for the specified number of seconds.</p><p><i>Default: 2</i><hr><p><code>trackAnonymous</code></p><p>Boolean value. If set to true then anonymous calls (e.g.: +anonymous, +restricted, +unavailable, etc.) as the same Caller ID to be blocked for the specified number of seconds.</p><p><i>Default: false</i></td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$createNewCampaignRequest = {"name":"New Campaign","userCampaignId":"Test Campaign","numberDisplayFormat":"(nnn) nnn-nnnn","countryCode":"US","duplicateSettings":{"duplicateSetting":"ON_CALL_LENGTH","callLengthInSeconds":21},"deDupeSettings":{"routeToOriginal":true,"routeToDifferent":false,"strict":true},"dialSettings":{"dialAttempts":7},"evalAnonymDuplication":false,"payoutDupesGlobal":true,"recordSetting":{"record":true,"recordFromAnswer":false,"trimSilence":true},"spamDetection":{"blockDuplicatesForSeconds":"3","trackAnonymous":true}}; // \Ringba\Model\CreateNewCampaignRequest | 

try {
    $result = $apiInstance->createNewCampaign($authorization, $accountId, $createNewCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->createNewCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **createNewCampaignRequest** | [**\Ringba\Model\CreateNewCampaignRequest**](../Model/CreateNewCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\CreateNewCampaignwithallavailableparametersspecified**](../Model/CreateNewCampaignwithallavailableparametersspecified.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaCampaign()`

```php
deleteaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\DeleteaCampaign
```

Delete a Campaign

Request to delete a campaign from your account.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->deleteaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->deleteaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteaCampaign**](../Model/DeleteaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($authorization, $accountId): \Ringba\Model\GetCampaigns
```

Get Campaigns

Request to get information about all active campaigns in your account. This request will not display information about any campaigns that you have deleted from your account.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getCampaigns($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetCampaigns**](../Model/GetCampaigns.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignsStatsonly()`

```php
getCampaignsStatsonly($authorization, $accountId): \Ringba\Model\GetCampaignsStatsOnly
```

Get Campaigns Stats only

Request to retrieve the stats for all campaigns associated with your account that have ever received calls, even if they have been deleted. Any active campaigns that have not yet received calls will not be displayed. To get stats for active campaigns without any calls, see the \"GET Get Campaigns\" request above and check out the optional query parameter `includeStats=true`.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getCampaignsStatsonly($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->getCampaignsStatsonly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetCampaignsStatsOnly**](../Model/GetCampaignsStatsOnly.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundReferencesforaSingleCampaign()`

```php
getInboundReferencesforaSingleCampaign($authorization, $accountId, $campaignId): \Ringba\Model\GetInboundReferencesforaSingleCampaign
```

Get Inbound References for a Single Campaign

Request to retrieve a list of all the publishers, buyers, and targets that reference the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->getInboundReferencesforaSingleCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->getInboundReferencesforaSingleCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\GetInboundReferencesforaSingleCampaign**](../Model/GetInboundReferencesforaSingleCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInformationAboutaSingleCampaign()`

```php
getInformationAboutaSingleCampaign($authorization, $accountId, $campaignId): \Ringba\Model\GetInformationAboutaSingleCampaign
```

Get Information About a Single Campaign

Request to retrieve information about a campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  #### Optional Query Parameters `includeIntegrationSetting=true` After a ? in the url will add integration setting to the response if any are associated with the campaign. See the \"Get Information About a Single Campaign with Integration Settings\" example to the right for implementation.<br> <br>   __NOTE:__ The `campaignId` must have a capital \"CA\" at the beginning. If the \"CA\" is not capitalized you will receive an error message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->getInformationAboutaSingleCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->getInformationAboutaSingleCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\GetInformationAboutaSingleCampaign**](../Model/GetInformationAboutaSingleCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateaCampaign()`

```php
updateaCampaign($authorization, $accountId, $campaignId, $updateaCampaignRequest): \Ringba\Model\UpdateaCampaign
```

Update a Campaign

Request to update information about a campaign.  __NOTE:__ This request will not modify any settings that are not explicitly stated. It also will not affect any of the other settings such as Targets, Default Number, Default Payouts, Offers, RTB settings, Publishers, Publisher Numbers, or Publisher Payout Overrides. To modify those settings you need to use the other requests found in the appropriate sub-folder of the \"Campaigns\" folder of this documentation  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br> <br>  ### Request Body <hr> <br>  You can use this request to update any of the required or optional parameters specified in the description of the \"POST Create New Campaign\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$updateaCampaignRequest = {"name":"New Name","userCampaignId":"New ID","numberDisplayFormat":"nnn-nnn-nnnn","countryCode":"US","duplicateSettings":{"duplicateSetting":"ON_CONNECT","callLengthInSeconds":0},"deDupeSettings":{"routeToOriginal":false,"routeToDifferent":true,"strict":false},"dialSettings":{"dialAttempts":3},"evalAnonymDuplication":true,"payoutDupesGlobal":false,"recordSetting":{"record":false,"recordFromAnswer":false,"trimSilence":false},"spamDetection":{"blockDuplicatesForSeconds":"7","trackAnonymous":false}}; // \Ringba\Model\UpdateaCampaignRequest | 

try {
    $result = $apiInstance->updateaCampaign($authorization, $accountId, $campaignId, $updateaCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignInformationApi->updateaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **updateaCampaignRequest** | [**\Ringba\Model\UpdateaCampaignRequest**](../Model/UpdateaCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\UpdateaCampaign**](../Model/UpdateaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
