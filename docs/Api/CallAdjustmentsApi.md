# Ringba\CallAdjustmentsApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAnnotationtoaCall()**](CallAdjustmentsApi.md#addAnnotationtoaCall) | **POST** /{accountId}/calls/annotate | Add Annotation to a Call
[**adjustRevenueandOrPaymentforaCallWithabsoluteadjustments()**](CallAdjustmentsApi.md#adjustRevenueandOrPaymentforaCallWithabsoluteadjustments) | **POST** /{accountId}/calls/payments/override | Adjust Revenue and/or Payment for a Call (with absolute adjustments)
[**adjustRevenueandOrPaymentforaCallWithrelativeadjustments()**](CallAdjustmentsApi.md#adjustRevenueandOrPaymentforaCallWithrelativeadjustments) | **POST** /{accountId}/calls/payments | Adjust Revenue and/or Payment for a Call (with relative adjustments)
[**bUYERRequestforPayoutAdjustmentWithabsoluteadjustment()**](CallAdjustmentsApi.md#bUYERRequestforPayoutAdjustmentWithabsoluteadjustment) | **POST** /{buyerAccountId}/calls/requestConversionOverride | BUYER Request for Payout Adjustment (with absolute adjustment)
[**bUYERRequestforPayoutAdjustmentWithrelativeadjustment()**](CallAdjustmentsApi.md#bUYERRequestforPayoutAdjustmentWithrelativeadjustment) | **POST** /{buyerAccountId}/calls/requestConversionAdjustment | BUYER Request for Payout Adjustment (with relative adjustment)
[**voidRevenueandOrPaymentforaCall()**](CallAdjustmentsApi.md#voidRevenueandOrPaymentforaCall) | **POST** /{accountId}/calls/void | Void Revenue and/or Payment for a Call


## `addAnnotationtoaCall()`

```php
addAnnotationtoaCall($authorization, $accountId, $addAnnotationtoaCallRequest): \Ringba\Model\AddAnnotationtoaCall
```

Add Annotation to a Call

Request to add an annotation to a call to make it easier to find in the call log.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a></td> </tr> <tr> <td><code>tags</code></td> <td>An array containing an object for each of the tags you wish to add to the call. Each object in the array has the following required parameters:</td> </tr> <tr> <td></td> <td><p><code>tagType</code></p><p>This value should always be set to \"Annotations\"</p><hr><p><code>tagName</code></p><p>The name you want to assign to the tag</p><hr><p><code>tagValue</code></p><p>The value you want to assign to the tag</p> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$addAnnotationtoaCallRequest = {"inboundCallId":"{{InboundCallId}}","tags":[{"tagType":"Annotations","tagName":"Any Name","tagValue":"Any Value"}]}; // \Ringba\Model\AddAnnotationtoaCallRequest | 

try {
    $result = $apiInstance->addAnnotationtoaCall($authorization, $accountId, $addAnnotationtoaCallRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->addAnnotationtoaCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **addAnnotationtoaCallRequest** | [**\Ringba\Model\AddAnnotationtoaCallRequest**](../Model/AddAnnotationtoaCallRequest.md)|  |

### Return type

[**\Ringba\Model\AddAnnotationtoaCall**](../Model/AddAnnotationtoaCall.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustRevenueandOrPaymentforaCallWithabsoluteadjustments()`

```php
adjustRevenueandOrPaymentforaCallWithabsoluteadjustments($authorization, $accountId, $adjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest): \Ringba\Model\AdjustRevenueandorPaymentforaCallwithabsoluteadjustments
```

Adjust Revenue and/or Payment for a Call (with absolute adjustments)

This request can adjust the `revenue` received from a buyer for a call as well as the `payout` amount paid to a publisher for a call.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason that the adjustment is being made</td> </tr> <tr> <td><code>adjustConversion</code></td> <td>Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of <code>newConversionAmount</code> must have the new value you want to set for the revenue</td> </tr> <tr> <td><code>adjustPayout</code></td> <td>Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of <code>newPayoutAmount</code> must have the new value you want to set for the payout</td> </tr> </table>  #### Optional Parameters  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>newConversionAmount</code></td> <td>The new amount you want to set for the revenue received from the buyer. See the note below for further information</td> </tr> <tr> <td><code>newPayoutAmount</code></td> <td>The new amount you want to set for the payout amount paid to the publisher. See the note below for more information</td> </tr> </table>  __NOTE:__ This request will adjust the revenue/payout by an _absolute_ amount, meaning that if the `newConversionAmount` or `newPayoutAmount` fields have a value of \"0.10\" it will change the total amount to $0.10. To adjust these values _relatively_ check out the \"POST Adjust Revenue and/or Payment for a Call (with relative adjustments)\" request above.  __NOTE:__ The amounts for the adjustments cannot be negative number. If a request is sent with a negative value for either the `newConversionAmount` or `newPayoutAmount` fields you will receive an error with the message: \"Conversion would be brought below zero, the max refund is $0.1\".   <!-- #### Required Parameters `inboundCallId` The ID of the call you wish to make and adjustment for. You can get Call IDs using the [Call Log Requests](#get-logs-of-calls-associated-with-account).<br> `reason` The reason that the adjustment is being made. <br> `adjustConversion` Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of `newConversionAmount` must have the new value you want to set for the revenue.<br> `adjustPayout` Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of `newPayoutAmount` must have the new value you want to set for the payout.<br>  #### Optional Parameters  `newConversionAmount` The new amount you want to set for the revenue received from the buyer. See the note below for further information.<br> `newPayoutAmount` The new amount you want to set for the payout amount paid to the publisher. See the note below for more information.<br> <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$adjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest = {"inboundCallId":"{{InboundCallId}}","reason":"Call payments adjusted by acct. Admin.","adjustConversion":true,"adjustPayout":true,"newConversionAmount":0.1,"newPayoutAmount":0.1}; // \Ringba\Model\AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest | 

try {
    $result = $apiInstance->adjustRevenueandOrPaymentforaCallWithabsoluteadjustments($authorization, $accountId, $adjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->adjustRevenueandOrPaymentforaCallWithabsoluteadjustments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **adjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest** | [**\Ringba\Model\AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest**](../Model/AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest.md)|  |

### Return type

[**\Ringba\Model\AdjustRevenueandorPaymentforaCallwithabsoluteadjustments**](../Model/AdjustRevenueandorPaymentforaCallwithabsoluteadjustments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustRevenueandOrPaymentforaCallWithrelativeadjustments()`

```php
adjustRevenueandOrPaymentforaCallWithrelativeadjustments($authorization, $accountId, $adjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest): \Ringba\Model\AdjustRevenueandPaymentforaCallwithrelativeadjustment
```

Adjust Revenue and/or Payment for a Call (with relative adjustments)

This request can adjust the `revenue` received from a buyer for a call as well as the `payout` amount paid to a publisher for a call.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason that the adjustment is being made</td> </tr> <tr> <td><code>adjustConversion</code></td> <td>Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of <code>adjustConverionByAmount</code> must have the value by which you wish to adjust the revenue</td> </tr> <tr> <td><code>adjustPayout</code></td> <td>Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of <code>adjustPayoutByAmount</code> must have the value by which you wish to adjust the payout</td> </tr> </table>  #### Optional Parameters  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>adjustConverionByAmount</code></td> <td>The amount by which you want to adjust the revenue received from the buyer. See the note below for further information</td> </tr> <tr> <td><code>adjustPayoutByAmount</code></td> <td>The amount by which you want to adjust the payout amount paid to the publisher. See the note below for more information</td> </tr> </table>  __NOTE:__ This request will adjust the revenue/payout by a _relative_ amount, meaning that if the `adjustConverionByAmount` or `adjustPayoutByAmount` fields have a value of \"0.10\" it will add $0.10 to the total amount and if they have a value of \"-0.10\" it will subtract $0.10 from the total amount. To adjust these values _absolutely_ check out the \"POST Adjust Revenue and/or Payment for a Call (with absolute adjusments)\" request below.   <!-- `inboundCallId` The ID of the call you wish to make and adjustment for. You can get Call IDs using the [Call Log Requests](#get-logs-of-calls-associated-with-account).<br> `reason` The reason that the adjustment is being made. <br> `adjustConversion` Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of `adjustConverionByAmount` must have the value by which you wish to adjust the revenue.<br> `adjustPayout` Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of `adjustPayoutByAmount` must have the value by which you wish to adjust the payout.<br>  `adjustConverionByAmount` The amount by which you want to adjust the revenue received from the buyer. See the note below for further information.<br> `adjustPayoutByAmount` The amount by which you want to adjust the payout amount paid to the publisher. See the note below for more information.<br> <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$adjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest = {"inboundCallId":"{{InboundCallId}}","reason":"Call payments adjusted by acct. Admin.","adjustConversion":true,"adjustPayout":true,"adjustConverionByAmount":-0.01,"adjustPayoutByAmount":0.01}; // \Ringba\Model\AdjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest | 

try {
    $result = $apiInstance->adjustRevenueandOrPaymentforaCallWithrelativeadjustments($authorization, $accountId, $adjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->adjustRevenueandOrPaymentforaCallWithrelativeadjustments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **adjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest** | [**\Ringba\Model\AdjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest**](../Model/AdjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest.md)|  |

### Return type

[**\Ringba\Model\AdjustRevenueandPaymentforaCallwithrelativeadjustment**](../Model/AdjustRevenueandPaymentforaCallwithrelativeadjustment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bUYERRequestforPayoutAdjustmentWithabsoluteadjustment()`

```php
bUYERRequestforPayoutAdjustmentWithabsoluteadjustment($authorization, $buyerAccountId, $bUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest): \Ringba\Model\BUYERRequestforPayoutAdjustmentwithabsoluteadjustment
```

BUYER Request for Payout Adjustment (with absolute adjustment)

Request to allow a buyer to send a request to the admin for the account handling the specified call to have the revenue amount adjusted. This request will send a notice to the admin of the account handling the campaign requesting an adjustment to the revenue for this call. The account admin will have final say in how much the actual adjustment is. When the admin receives the requested adjustment, it will automatically be converted into a _relative_ adjustment to make the final amount equal to the _absolute_ amount specified in this request.  #### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason you are requesting the revenue amount be adjusted</td> </tr> <tr> <td><code>amount</code></td> <td>The new amount you want as the revenue. This must be a positive number</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{buyerApiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$buyerAccountId = 'buyerAccountId_example'; // string | 
$bUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest = {"inboundCallId":"{{InboundCallId}}","reason":"Test call revenue adjustment request","amount":0.4}; // \Ringba\Model\BUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest | 

try {
    $result = $apiInstance->bUYERRequestforPayoutAdjustmentWithabsoluteadjustment($authorization, $buyerAccountId, $bUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->bUYERRequestforPayoutAdjustmentWithabsoluteadjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **buyerAccountId** | **string**|  |
 **bUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest** | [**\Ringba\Model\BUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest**](../Model/BUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest.md)|  |

### Return type

[**\Ringba\Model\BUYERRequestforPayoutAdjustmentwithabsoluteadjustment**](../Model/BUYERRequestforPayoutAdjustmentwithabsoluteadjustment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bUYERRequestforPayoutAdjustmentWithrelativeadjustment()`

```php
bUYERRequestforPayoutAdjustmentWithrelativeadjustment($authorization, $buyerAccountId, $bUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest): \Ringba\Model\BUYERRequestforPayoutAdjustmentwithrelativeadjustment
```

BUYER Request for Payout Adjustment (with relative adjustment)

Request to allow a buyer to send a request to the admin for the account handling the specified call to have the revenue amount adjusted. This request will send a notice to the admin of the account handling the campaign requesting an adjustment to the revenue for this call. The account admin will have final say in how much the actual adjustment is.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason you are requesting the revenue amount be adjusted</td> </tr> <tr> <td><code>amount</code></td> <td>The amount by which you want the revenue to be adjusted. This value can be positive or negative to reflect a request increase or decrease in the total payout. This amount is a <i>relative</i> change so if this field has a value 0f \"0.20\" the admin will receive a notice requesting the revenue be increased by $0.20</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{buyerApiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$buyerAccountId = 'buyerAccountId_example'; // string | 
$bUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest = {"inboundCallId":"{{InboundCallId}}","reason":"Test call revenue adjustment request","amount":0.2}; // \Ringba\Model\BUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest | 

try {
    $result = $apiInstance->bUYERRequestforPayoutAdjustmentWithrelativeadjustment($authorization, $buyerAccountId, $bUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->bUYERRequestforPayoutAdjustmentWithrelativeadjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **buyerAccountId** | **string**|  |
 **bUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest** | [**\Ringba\Model\BUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest**](../Model/BUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest.md)|  |

### Return type

[**\Ringba\Model\BUYERRequestforPayoutAdjustmentwithrelativeadjustment**](../Model/BUYERRequestforPayoutAdjustmentwithrelativeadjustment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidRevenueandOrPaymentforaCall()`

```php
voidRevenueandOrPaymentforaCall($authorization, $accountId, $voidRevenueandorPaymentforaCallRequest): \Ringba\Model\VoidRevenueandPaymentforaCall
```

Void Revenue and/or Payment for a Call

Request to void (subtract) an amount from the revenue and/or payout for a call.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>voidReason</code></td> <td>The reason that the void is being made</td> </tr> <tr> <td><code>voidConversion</code></td> <td>Boolean value to determine whether this request is voiding some or all of the revenue received from the buyer of the call. If set to \"true\" the value of <code>voidConverionAmount</code> must have the amount you want to void from the revenue</td> </tr> <tr> <td><code>voidPayout</code></td> <td>Boolean value to determine whether this request is voiding some or all of the payout amount paid to the publisher. If set to \"true\" the value of <code>voidPayoutAmount</code> must have the amount you want to void from the payout</td> </tr> </table>  #### Optional Parameters  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>voidConverionAmount</code></td> <td>The amount you want to void from the revenue received from the buyer. This value needs to be a positive number that is less than or equal to the current <code>conversionAmount</code></td> </tr> <tr> <td><code>voidPayoutAmount</code></td> <td>The amount you want to void from the payout amount paid to the publisher. This value needs to be a positive number that is less than or equal to the current <code>payoutAmount</code></td> </tr> </table>  <!-- #### Required Parameters `inboundCallId` The ID of the call you wish to make and adjustment for. You can get Call IDs using the [Call Log Requests](#get-logs-of-calls-associated-with-account).<br> `voidReason` The reason that the void is being made. <br> `voidConversion` Boolean value to determine whether this request is voiding some or all of the revenue received from the buyer of the call. If set to \"true\" the value of `voidConverionAmount` must have the amount you want to void from the revenue.<br> `voidPayout` Boolean value to determine whether this request is voiding some or all of the payout amount paid to the publisher. If set to \"true\" the value of `voidPayoutAmount` must have the amount you want to void from the payout.<br>  #### Optional Parameters  `voidConverionAmount` The amount you want to void from the revenue received from the buyer. This value needs to be a positive that is less than or equal to the current `conversionAmount`.<br> `adjustPayoutByAmount` The amount you want to void from the payout amount paid to the publisher. This value needs to be a positive that is less than or equal to the current `payoutAmount`. <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$voidRevenueandorPaymentforaCallRequest = {"inboundCallId":"{{InboundCallId}}","voidReason":"Test call voiding","voidConversion":true,"voidPayout":true,"voidConverionAmount":0.03,"voidPayoutAmount":0.06}; // \Ringba\Model\VoidRevenueandorPaymentforaCallRequest | 

try {
    $result = $apiInstance->voidRevenueandOrPaymentforaCall($authorization, $accountId, $voidRevenueandorPaymentforaCallRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->voidRevenueandOrPaymentforaCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **voidRevenueandorPaymentforaCallRequest** | [**\Ringba\Model\VoidRevenueandorPaymentforaCallRequest**](../Model/VoidRevenueandorPaymentforaCallRequest.md)|  |

### Return type

[**\Ringba\Model\VoidRevenueandPaymentforaCall**](../Model/VoidRevenueandPaymentforaCall.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
