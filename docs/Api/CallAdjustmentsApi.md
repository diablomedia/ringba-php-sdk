# OpenAPI\Client\CallAdjustmentsApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCallsAnnotatePost()**](CallAdjustmentsApi.md#accountIdCallsAnnotatePost) | **POST** /{accountId}/calls/annotate | Add Annotation to a Call |
| [**accountIdCallsPaymentsOverridePost()**](CallAdjustmentsApi.md#accountIdCallsPaymentsOverridePost) | **POST** /{accountId}/calls/payments/override | Adjust Revenue and/or Payment for a Call (with absolute adjustments) |
| [**accountIdCallsPaymentsPost()**](CallAdjustmentsApi.md#accountIdCallsPaymentsPost) | **POST** /{accountId}/calls/payments | Adjust Revenue and/or Payment for a Call (with relative adjustments) |
| [**accountIdCallsVoidPost()**](CallAdjustmentsApi.md#accountIdCallsVoidPost) | **POST** /{accountId}/calls/void | Void Revenue and/or Payment for a Call |
| [**buyerAccountIdCallsRequestConversionAdjustmentPost()**](CallAdjustmentsApi.md#buyerAccountIdCallsRequestConversionAdjustmentPost) | **POST** /{buyerAccountId}/calls/requestConversionAdjustment | BUYER Request for Payout Adjustment (with relative adjustment) |
| [**buyerAccountIdCallsRequestConversionOverridePost()**](CallAdjustmentsApi.md#buyerAccountIdCallsRequestConversionOverridePost) | **POST** /{buyerAccountId}/calls/requestConversionOverride | BUYER Request for Payout Adjustment (with absolute adjustment) |


## `accountIdCallsAnnotatePost()`

```php
accountIdCallsAnnotatePost($account_id, $authorization, $body): object
```

Add Annotation to a Call

Request to add an annotation to a call to make it easier to find in the call log.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a></td> </tr> <tr> <td><code>tags</code></td> <td>An array containing an object for each of the tags you wish to add to the call. Each object in the array has the following required parameters:</td> </tr> <tr> <td></td> <td><p><code>tagType</code></p><p>This value should always be set to \"Annotations\"</p><hr><p><code>tagName</code></p><p>The name you want to assign to the tag</p><hr><p><code>tagValue</code></p><p>The value you want to assign to the tag</p> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCallsAnnotatePost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->accountIdCallsAnnotatePost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCallsPaymentsOverridePost()`

```php
accountIdCallsPaymentsOverridePost($account_id, $authorization, $body): object
```

Adjust Revenue and/or Payment for a Call (with absolute adjustments)

This request can adjust the `revenue` received from a buyer for a call as well as the `payout` amount paid to a publisher for a call.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason that the adjustment is being made</td> </tr> <tr> <td><code>adjustConversion</code></td> <td>Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of <code>newConversionAmount</code> must have the new value you want to set for the revenue</td> </tr> <tr> <td><code>adjustPayout</code></td> <td>Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of <code>newPayoutAmount</code> must have the new value you want to set for the payout</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>newConversionAmount</code></td> <td>The new amount you want to set for the revenue received from the buyer. See the note below for further information</td> </tr> <tr> <td><code>newPayoutAmount</code></td> <td>The new amount you want to set for the payout amount paid to the publisher. See the note below for more information</td> </tr> </table>  __NOTE:__ This request will adjust the revenue/payout by an _absolute_ amount, meaning that if the `newConversionAmount` or `newPayoutAmount` fields have a value of \"0.10\" it will change the total amount to $0.10. To adjust these values _relatively_ check out the \"POST Adjust Revenue and/or Payment for a Call (with relative adjustments)\" request above.  __NOTE:__ The amounts for the adjustments cannot be negative number. If a request is sent with a negative value for either the `newConversionAmount` or `newPayoutAmount` fields you will receive an error with the message: \"Conversion would be brought below zero, the max refund is $0.1\".   <!-- #### Required Parameters `inboundCallId` The ID of the call you wish to make and adjustment for. You can get Call IDs using the [Call Log Requests](#get-logs-of-calls-associated-with-account).<br> `reason` The reason that the adjustment is being made. <br> `adjustConversion` Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of `newConversionAmount` must have the new value you want to set for the revenue.<br> `adjustPayout` Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of `newPayoutAmount` must have the new value you want to set for the payout.<br>  #### Optional Parameters `newConversionAmount` The new amount you want to set for the revenue received from the buyer. See the note below for further information.<br> `newPayoutAmount` The new amount you want to set for the payout amount paid to the publisher. See the note below for more information.<br> <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCallsPaymentsOverridePost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->accountIdCallsPaymentsOverridePost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCallsPaymentsPost()`

```php
accountIdCallsPaymentsPost($account_id, $authorization, $body): object
```

Adjust Revenue and/or Payment for a Call (with relative adjustments)

This request can adjust the `revenue` received from a buyer for a call as well as the `payout` amount paid to a publisher for a call.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason that the adjustment is being made</td> </tr> <tr> <td><code>adjustConversion</code></td> <td>Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of <code>adjustConverionByAmount</code> must have the value by which you wish to adjust the revenue</td> </tr> <tr> <td><code>adjustPayout</code></td> <td>Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of <code>adjustPayoutByAmount</code> must have the value by which you wish to adjust the payout</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>adjustConverionByAmount</code></td> <td>The amount by which you want to adjust the revenue received from the buyer. See the note below for further information</td> </tr> <tr> <td><code>adjustPayoutByAmount</code></td> <td>The amount by which you want to adjust the payout amount paid to the publisher. See the note below for more information</td> </tr> </table>  __NOTE:__ This request will adjust the revenue/payout by a _relative_ amount, meaning that if the `adjustConverionByAmount` or `adjustPayoutByAmount` fields have a value of \"0.10\" it will add $0.10 to the total amount and if they have a value of \"-0.10\" it will subtract $0.10 from the total amount. To adjust these values _absolutely_ check out the \"POST Adjust Revenue and/or Payment for a Call (with absolute adjusments)\" request below.   <!-- `inboundCallId` The ID of the call you wish to make and adjustment for. You can get Call IDs using the [Call Log Requests](#get-logs-of-calls-associated-with-account).<br> `reason` The reason that the adjustment is being made. <br> `adjustConversion` Boolean value to determine whether this request is adjusting the revenue received from the buyer of the call. If set to \"true\" the value of `adjustConverionByAmount` must have the value by which you wish to adjust the revenue.<br> `adjustPayout` Boolean value to determine whether this request is adjusting to payout amount paid to the publisher. If set to \"true\" the value of `adjustPayoutByAmount` must have the value by which you wish to adjust the payout.<br>  `adjustConverionByAmount` The amount by which you want to adjust the revenue received from the buyer. See the note below for further information.<br> `adjustPayoutByAmount` The amount by which you want to adjust the payout amount paid to the publisher. See the note below for more information.<br> <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCallsPaymentsPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->accountIdCallsPaymentsPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCallsVoidPost()`

```php
accountIdCallsVoidPost($account_id, $authorization, $body): object
```

Void Revenue and/or Payment for a Call

Request to void (subtract) an amount from the revenue and/or payout for a call.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>voidReason</code></td> <td>The reason that the void is being made</td> </tr> <tr> <td><code>voidConversion</code></td> <td>Boolean value to determine whether this request is voiding some or all of the revenue received from the buyer of the call. If set to \"true\" the value of <code>voidConverionAmount</code> must have the amount you want to void from the revenue</td> </tr> <tr> <td><code>voidPayout</code></td> <td>Boolean value to determine whether this request is voiding some or all of the payout amount paid to the publisher. If set to \"true\" the value of <code>voidPayoutAmount</code> must have the amount you want to void from the payout</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>voidConverionAmount</code></td> <td>The amount you want to void from the revenue received from the buyer. This value needs to be a positive number that is less than or equal to the current <code>conversionAmount</code></td> </tr> <tr> <td><code>voidPayoutAmount</code></td> <td>The amount you want to void from the payout amount paid to the publisher. This value needs to be a positive number that is less than or equal to the current <code>payoutAmount</code></td> </tr> </table>  <!-- #### Required Parameters `inboundCallId` The ID of the call you wish to make and adjustment for. You can get Call IDs using the [Call Log Requests](#get-logs-of-calls-associated-with-account).<br> `voidReason` The reason that the void is being made. <br> `voidConversion` Boolean value to determine whether this request is voiding some or all of the revenue received from the buyer of the call. If set to \"true\" the value of `voidConverionAmount` must have the amount you want to void from the revenue.<br> `voidPayout` Boolean value to determine whether this request is voiding some or all of the payout amount paid to the publisher. If set to \"true\" the value of `voidPayoutAmount` must have the amount you want to void from the payout.<br>  #### Optional Parameters `voidConverionAmount` The amount you want to void from the revenue received from the buyer. This value needs to be a positive that is less than or equal to the current `conversionAmount`.<br> `adjustPayoutByAmount` The amount you want to void from the payout amount paid to the publisher. This value needs to be a positive that is less than or equal to the current `payoutAmount`. <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCallsVoidPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->accountIdCallsVoidPost: ', $e->getMessage(), PHP_EOL;
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

## `buyerAccountIdCallsRequestConversionAdjustmentPost()`

```php
buyerAccountIdCallsRequestConversionAdjustmentPost($buyer_account_id, $authorization, $body): object
```

BUYER Request for Payout Adjustment (with relative adjustment)

Request to allow a buyer to send a request to the admin for the account handling the specified call to have the revenue amount adjusted. This request will send a notice to the admin of the account handling the campaign requesting an adjustment to the revenue for this call. The account admin will have final say in how much the actual adjustment is.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason you are requesting the revenue amount be adjusted</td> </tr> <tr> <td><code>amount</code></td> <td>The amount by which you want the revenue to be adjusted. This value can be positive or negative to reflect a request increase or decrease in the total payout. This amount is a <i>relative</i> change so if this field has a value 0f \"0.20\" the admin will receive a notice requesting the revenue be increased by $0.20</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_account_id = 'buyer_account_id_example'; // string
$authorization = Token {{buyerApiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->buyerAccountIdCallsRequestConversionAdjustmentPost($buyer_account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->buyerAccountIdCallsRequestConversionAdjustmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buyer_account_id** | **string**|  | |
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

## `buyerAccountIdCallsRequestConversionOverridePost()`

```php
buyerAccountIdCallsRequestConversionOverridePost($buyer_account_id, $authorization, $body): object
```

BUYER Request for Payout Adjustment (with absolute adjustment)

Request to allow a buyer to send a request to the admin for the account handling the specified call to have the revenue amount adjusted. This request will send a notice to the admin of the account handling the campaign requesting an adjustment to the revenue for this call. The account admin will have final say in how much the actual adjustment is. When the admin receives the requested adjustment, it will automatically be converted into a _relative_ adjustment to make the final amount equal to the _absolute_ amount specified in this request.  #### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>inboundCallId</code></td> <td>The ID of the call you wish to make and adjustment for. You can get Call IDs using the <a href=\"#get-logs-of-calls-associated-with-account\">Call Log Requests</a> </tr> <tr> <td><code>reason</code></td> <td>The reason you are requesting the revenue amount be adjusted</td> </tr> <tr> <td><code>amount</code></td> <td>The new amount you want as the revenue. This must be a positive number</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CallAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_account_id = 'buyer_account_id_example'; // string
$authorization = Token {{buyerApiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->buyerAccountIdCallsRequestConversionOverridePost($buyer_account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallAdjustmentsApi->buyerAccountIdCallsRequestConversionOverridePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buyer_account_id** | **string**|  | |
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
