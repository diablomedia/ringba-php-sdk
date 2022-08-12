# Ringba\PublisherPayoutOverridesApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewPublisherPayoutOverride()**](PublisherPayoutOverridesApi.md#createNewPublisherPayoutOverride) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Create New Publisher Payout Override
[**getPublisherPayoutOverrides()**](PublisherPayoutOverridesApi.md#getPublisherPayoutOverrides) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Get Publisher Payout Overrides
[**removeaPublisherPayoutOverride()**](PublisherPayoutOverridesApi.md#removeaPublisherPayoutOverride) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts/{payoutId} | Remove a Publisher Payout Override
[**updateALLPublisherPayoutOverrides()**](PublisherPayoutOverridesApi.md#updateALLPublisherPayoutOverrides) | **PUT** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Update ALL Publisher Payout Overrides
[**updateSinglePublisherPayoutOverride()**](PublisherPayoutOverridesApi.md#updateSinglePublisherPayoutOverride) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts/{payoutId} | Update Single Publisher Payout Override


## `createNewPublisherPayoutOverride()`

```php
createNewPublisherPayoutOverride($authorization, $accountId, $campaignId, $publisherId, $createNewPublisherPayoutOverrideRequest): \Ringba\Model\CreateNewPublisherPayoutOverride
```

Create New Publisher Payout Override

Request to create a new payout override for a specified publisher.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  ### Request Body <hr> <br> There are two types of payout override you can use for a publisher:  1. \"Fixed Amount\" will modify the payout to a specific amount based on the parameters provided. For more information see the [Fixed Amount](#fixed-amount-publisher-override) Section below.  2. \"Revenue Share\" will modify the payout to a percentage of what the payout would otherwise be based on the parameters provided. For more information see the [Revenue Share](#revenue-share-publisher-override) Section below.  ##### Fixed Amount Publisher Override <hr>  #### Fixed Amount Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>isRevShare</code></td> <td>Set this value to false.</td> </tr> <tr> <td><code>priority</code></td> <td><p>The order in which default payouts will be prioritized if a call meets the criteria of more than one.</p><p><b>NOTE:</b> if this is the first payout override you are setting up for the publisher, set the <code>priority</code> to \"0\", which is the highest priority. If you already have payout override(s) associated with this publisher, make sure you each one has a different priority.</p></td> </tr> <tr> <td><code>payoutAmount</code></td> <td>The fixed amount that will be paid for calls meeting the criteria of the payout override</td> </tr> <tr> <td><code>payoutConversionType</code></td> <td><p>The event that will trigger a payout to the publisher. This has four options:</p><ul><li>\"connectedCall\" will trigger on any call that connects</li><li>\"incomingCall\" will trigger on any incoming call.</li><li>\"convertedCall\" will trigger on any call that converts</li><li>\"callLength\" will convert based on the length of the call.</li></ul><p><b>NOTE:</b> if using the \"callLength\" option, the <code>payoutConversionArgs</code> parameter is also required. See the <a href=\"#payout-conversion-args\">Payout Conversion Args</a> below for more information.</td> </tr> </table>  #### Fixed Amount Payout Conversion Args This parameter is required only if you are using a `payoutConversionType` of \"callLength\".  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>payoutConversionArgs</code></td> <td>An object that contains the following parameters:</td> </tr> <tr> <td></td> <td><p><code>callLengthInSeconds</code></p>The number of seconds that a call needs to last in order to convert</p><hr><p><code>startTimerEvent</code></p><p>The event that will start the clock for the call length. This has three options:</p><ul><li>\"OnIncomingCall\" Starts the call as soon as it arrives at Ringba before any RTB or routing has been applied</li><li>\"OnDial\" Starts the timer once Ringba dials a target (and before the target answers)</li><li>\"OnCallConnected\" Starts the timer once a call is answered by the target</li></ul></td> </tr> </table>  ##### Revenue Share Publisher Override <hr>  #### RevShare Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>isRevShare</code></td> <td>Set this value to true.</td> </tr> <tr> <td><code>priority</code></td> <td><p>The order in which payout overrides will be prioritized if a call meets the criteria of more than one.</p><p><b>NOTE:</b> if this is the first payout override you are setting up for the publisher, set the <code>priority</code> to \"0\", which is the highest priority. If you already have payout override(s) associated with this publisher, make sure you each one has a different priority.</p></td> </tr> <tr> <td><code>revSharePercentage</code></td> <td>The percent amount of the standard payout that you want to pay for calls to this publisher in this campaign</td> </tr> </table>  #### RevShare Optional Parameters If you are using the Revenue Share Payout option, you can also add a minimum and maximum payout amount using the following parameters.  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>revShareMinPayoutAmount</code></td> <td>The minimum payment for calls to this publisher though this campaign. If the <code>revSharePercentage</code> would otherwise make the payment lower than this amount, it will be adjusted to this amount.</td> </tr> <tr> <td><code>revShareMaxPayoutAmount</code></td> <td>The maximum payment for calls to this publisher through this campaign. If the <code>revSharePercentage</code> would otherwise make the payment higher than this amount, it will be adjusted to this amount.</td> </tr> </table>  #### Optional Parameters (Fixed Amount OR RevShare)  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>deDupeSetting</code></td> <td>Determines how payouts will be handled for duplicate or repeat calls. This is an object containing one parameter</td> </tr> <tr> <td></td> <td><p><code>secondsFromLasCall</code></p><p>Has three options:<ul><li>-1 disables payouts for duplicate calls</li><li>0 enables payouts for all duplicate calls</li><li>any value greater than 0 allows payouts for duplicate calls that are separated by that number of seconds</li></ul></p></td> </tr> <tr> <td><code>allTimeCap</code></td> <td>Payouts will be credited until this number of calls is reached for the publisher. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>monthlyCap</code></td> <td>Payouts will be credited until this number of calls is reached for the publisher each month. Once a new month starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>dailyCap</code></td> <td>Payouts will be credited until this number of calls is reached for the publisher each day. Once a new day starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>hourlyCap</code></td> <td>Payouts will be credited until this number of calls is reached for the publisher each hour. Once a new hour starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>concurrencyCap</code></td> <td>Payouts will be credited until this number of concurrent calls is reached for this publisher. Once a call is completed, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>allTimeSumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount for this publisher. A value of \"-1\" will disable this limit. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>monthlySumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount for this publisher each month. Once a new month starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>dailySumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount for this publisher each day. Once a new day starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>hourlySumCap</code></td> <td>Payouts will continue to be credited until the payouts reach this dollar amount for this publisher each day. Once a new hour starts, payouts will continue to accrue. A value of \"-1\" will disable this limit.</td> </tr> <tr> <td><code>payoutHours</code></td> <td>sets the hours during which payouts will be credited for calls to this publisher. This parameter is an array of 7 objects, one for each day starting with Sunday. Each day object contains the following parameters:</td> </tr> <tr> <td></td> <td><p><code>openTime</code></p><p>Object with parameters <code>hour</code> and <code>minute</code> to decide what hours (in 24 hour format) payouts will start being credited</p><hr><p><code>closeTime</code></p><p>Object with parameters <code>hour</code> and <code>minute</code> to decide what hours (in 24 hour format) payouts will start being credited</p><hr><p><code>inverted</code></p><p>Set this value to \"false\"</p><hr><p><code>isClosed</code></p><p>If set to \"true\" this will disable payouts for the publisher for the entire day, regardless of the values for <code>openTime</code> or <code>closeTime</code>.</p><hr><p><b>NOTE:</b> See the \"Add New Publisher Payout Override With All Optional Parameters Specified\" example to the right to see how to set the hours of operation to Monday-Friday 9AM-5PM and closed Saturday and Sunday.</p></td> </tr>Ï <tr> <td><code>timeZoneId</code></td> <td>The time zone for the <code>payoutHours</code> limits for the campaign</td> </tr> <tr> <td><code>sendNotifications</code></td> <td>Boolean value. If set to true the publishers associated with the override will receive a notification about the new default payout settings being added.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherPayoutOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$createNewPublisherPayoutOverrideRequest = {"deDupeSetting":{"secondsFromLastCall":0},"isRevShare":false,"priority":0,"allTimeCap":-1,"monthlyCap":-1,"dailyCap":-1,"hourlyCap":-1,"concurrencyCap":-1,"allTimeSumCap":-1,"monthlySumCap":-1,"dailySumCap":-1,"hourlySumCap":-1,"payoutConversionType":"connectedCall","payoutAmount":12,"notUsedPayout":false,"sendNotifications":false}; // \Ringba\Model\CreateNewPublisherPayoutOverrideRequest | 

try {
    $result = $apiInstance->createNewPublisherPayoutOverride($authorization, $accountId, $campaignId, $publisherId, $createNewPublisherPayoutOverrideRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherPayoutOverridesApi->createNewPublisherPayoutOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **createNewPublisherPayoutOverrideRequest** | [**\Ringba\Model\CreateNewPublisherPayoutOverrideRequest**](../Model/CreateNewPublisherPayoutOverrideRequest.md)|  |

### Return type

[**\Ringba\Model\CreateNewPublisherPayoutOverride**](../Model/CreateNewPublisherPayoutOverride.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublisherPayoutOverrides()`

```php
getPublisherPayoutOverrides($authorization, $accountId, $campaignId, $publisherId)
```

Get Publisher Payout Overrides

Request to view the payout overrides for a publisher associated with a specific campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  ### Response Overview The response will show you what overrides exist for the publisher and campaign you specify in the request. Any field with a value of \"-1\" means that there is no override set for the publisher and that the campaign payout settings apply for that setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherPayoutOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $apiInstance->getPublisherPayoutOverrides($authorization, $accountId, $campaignId, $publisherId);
} catch (Exception $e) {
    echo 'Exception when calling PublisherPayoutOverridesApi->getPublisherPayoutOverrides: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeaPublisherPayoutOverride()`

```php
removeaPublisherPayoutOverride($authorization, $accountId, $campaignId, $publisherId, $payoutId): \Ringba\Model\RemoveaPublisherPayoutOverride
```

Remove a Publisher Payout Override

Request to remove a payout override from the specified publisher.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  \\####`publisherId` get IDs of [publishers](#?????) associated with your account  `payoutId` can be found using the \"GET Get Publisher Payout Overrides\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherPayoutOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$payoutId = 'payoutId_example'; // string | 

try {
    $result = $apiInstance->removeaPublisherPayoutOverride($authorization, $accountId, $campaignId, $publisherId, $payoutId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherPayoutOverridesApi->removeaPublisherPayoutOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **payoutId** | **string**|  |

### Return type

[**\Ringba\Model\RemoveaPublisherPayoutOverride**](../Model/RemoveaPublisherPayoutOverride.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateALLPublisherPayoutOverrides()`

```php
updateALLPublisherPayoutOverrides($authorization, $accountId, $campaignId, $publisherId, $updateALLPublisherPayoutOverridesRequest): \Ringba\Model\UpdateALLPublisherPayoutOverrides
```

Update ALL Publisher Payout Overrides

Request to modify __all__ publisher payout overrides. This request will modify all payout overrides for the specified publisher, so if an override is not included in the request body, it will be removed.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  ### Request Body <hr> <br>  The best way to ensure the fidelity of all the payouts associated with the campaign, it is recommended that you follow these steps in order to use this request:  1. Using the \"GET Get Publisher Payout Overrides\" request above, you can retrieve the most current settings for the publisher's payout overrides. See the example associated with that request and check out the `payoutSettings` array, starting on line 3.   3. Once you run that request for the campaign you are interested in, take the objects (one for each default payout) in the `payoutSettings` array and paste them into an array called `allPayouts` in the body of this request.  3. The `allPayouts` array needs to be put into a JSON object in the body of this request. See the example for implementation  4. At this point, you can modify any of the settings for any or all of the default payouts for the campaign. Check out the \"POST Create New Publisher Payout Override\" request above for an explanation of each setting and which ones are required for a Fixed or a RevShare Payout.  __NOTE:__ For this request, the `sendNotifications` parameter is specified one time outside of the `allPayouts` array to determine if publisher will be notified about the changes made using this request.  Following these steps will be the best way to use this request and ensure that none of the payout overrides are lost by not being included in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherPayoutOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$updateALLPublisherPayoutOverridesRequest = {"allPayouts":[{"deDupeSetting":{"secondsFromLastCall":0},"isRevShare":false,"priority":0,"allTimeCap":-1,"monthlyCap":-1,"dailyCap":-1,"hourlyCap":-1,"concurrencyCap":-1,"allTimeSumCap":-1,"monthlySumCap":-1,"dailySumCap":-1,"hourlySumCap":-1,"payoutConversionType":"connectedCall","payoutAmount":12,"notUsedPayout":false},{"deDupeSetting":{"secondsFromLastCall":21600},"isRevShare":true,"priority":1,"revSharePercentage":95,"allTimeCap":10,"monthlyCap":-1,"dailyCap":-1,"hourlyCap":-1,"concurrencyCap":-1,"allTimeSumCap":2000,"monthlySumCap":-1,"dailySumCap":200,"hourlySumCap":-1,"payoutConversionType":"convertedCall","payoutAmount":-1,"payoutHours":[{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false},{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false},{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false},{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false},{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false},{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false},{"openTime":{"hour":9,"minute":0},"closeTime":{"hour":17,"minute":0},"inverted":false,"isClosed":false}],"timeZoneId":"Mountain Standard Time","notUsedPayout":false}],"sendNotifications":false}; // \Ringba\Model\UpdateALLPublisherPayoutOverridesRequest | 

try {
    $result = $apiInstance->updateALLPublisherPayoutOverrides($authorization, $accountId, $campaignId, $publisherId, $updateALLPublisherPayoutOverridesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherPayoutOverridesApi->updateALLPublisherPayoutOverrides: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **updateALLPublisherPayoutOverridesRequest** | [**\Ringba\Model\UpdateALLPublisherPayoutOverridesRequest**](../Model/UpdateALLPublisherPayoutOverridesRequest.md)|  |

### Return type

[**\Ringba\Model\UpdateALLPublisherPayoutOverrides**](../Model/UpdateALLPublisherPayoutOverrides.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSinglePublisherPayoutOverride()`

```php
updateSinglePublisherPayoutOverride($authorization, $accountId, $campaignId, $publisherId, $payoutId, $updateSinglePublisherPayoutOverrideRequest): \Ringba\Model\UpdateSinglePublisherPayoutOverride
```

Update Single Publisher Payout Override

Request to modify a __single__ payout override from the specified publisher.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `payoutId` can be found using the \"GET Get Publisher Payout Overrides\" request above.  ### Request Body <hr> <br>  This request can be used to modify any of the settings for a publisher payout override. Check out the \"POST Add New Publisher Payout Override\" request above for an explanation of all the parameters for a publisher payout override. You can include as many of the parameters as you would like but make sure you at least have the following parameters:  `isRevShare` must be included even if it is not being changed  If true, you must include `revSharePercentage` even if it is not being changed  If false, you must include `payoutAmount` and `payoutConversionType` even if they are not being changed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherPayoutOverridesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$payoutId = 'payoutId_example'; // string | 
$updateSinglePublisherPayoutOverrideRequest = {"priority":1,"isRevShare":false,"payoutAmount":7,"revShareMaxPayoutAmount":-1,"revShareMinPayoutAmount":-1,"payoutConversionType":"incomingCall","isGlobal":false,"allTimeCap":100,"monthlyCap":-1,"dailyCap":-1,"hourlyCap":-1,"allTimeSumCap":-1,"monthlySumCap":700,"dailySumCap":-1,"hourlySumCap":-1,"concurrencyCap":-1,"deDupeSetting":{"secondsFromLastCall":0},"notUsedPayout":false,"sendNotifications":false}; // \Ringba\Model\UpdateSinglePublisherPayoutOverrideRequest | 

try {
    $result = $apiInstance->updateSinglePublisherPayoutOverride($authorization, $accountId, $campaignId, $publisherId, $payoutId, $updateSinglePublisherPayoutOverrideRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherPayoutOverridesApi->updateSinglePublisherPayoutOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **payoutId** | **string**|  |
 **updateSinglePublisherPayoutOverrideRequest** | [**\Ringba\Model\UpdateSinglePublisherPayoutOverrideRequest**](../Model/UpdateSinglePublisherPayoutOverrideRequest.md)|  |

### Return type

[**\Ringba\Model\UpdateSinglePublisherPayoutOverride**](../Model/UpdateSinglePublisherPayoutOverride.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
