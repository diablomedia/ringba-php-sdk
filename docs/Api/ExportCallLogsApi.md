# Ringba\ExportCallLogsApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportCSVByJobId()**](ExportCallLogsApi.md#exportCSVByJobId) | **GET** /{accountId}/calllogs/export/{CSVJobId} | Export CSV By Job Id
[**exportCallLogCSV()**](ExportCallLogsApi.md#exportCallLogCSV) | **POST** /{accountId}/calllogs/export/csv | Export Call Log - CSV


## `exportCSVByJobId()`

```php
exportCSVByJobId($authorization, $accountId, $cSVJobId): \Ringba\Model\ExportByJobId
```

Export CSV By Job Id

This request takes the `id` from the previous request in the place of {CSVJobId}.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Response Overview <hr> <br>  This request will return an object with a \"status\". If the \"status\" is \"Error\" that means there is a problem with the CSV you attempted to generate in the previous request. If the \"status\" is \"Pending\" that means your report is not yet ready and you need to try again until the \"status\" changes to \"Ready\". Once you get a \"status\" of \"Ready\" the response will also have a \"url\". Copy this \"url\" and paste it into a browser window which will automatically initiate a download of a zip file. Download and unzip this file to see the CSV report you just generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\ExportCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$cSVJobId = 'cSVJobId_example'; // string | 

try {
    $result = $apiInstance->exportCSVByJobId($authorization, $accountId, $cSVJobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportCallLogsApi->exportCSVByJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **cSVJobId** | **string**|  |

### Return type

[**\Ringba\Model\ExportByJobId**](../Model/ExportByJobId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportCallLogCSV()`

```php
exportCallLogCSV($authorization, $accountId, $exportCallLogCSVRequest): \Ringba\Model\ExportCallLogCSV
```

Export Call Log - CSV

Request to generate a CSV table for the call log.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>reportStart</code></td>         <td>Beginning of report time period in UTC format</td>     </tr>     <tr>         <td><code>reportEnd</code></td>         <td>Beginning of report time period in UTC format</td>     </tr>     <tr>         <td><code>valueColumns</code></td>         <td>Columns desired on the report, at least one is required. The example to the right shows all columns available, but you only need to include the ones you want displayed on the report</td>     </tr> </table>  #### Optional Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>orderByColumns</code></td>         <td>Sorts the report in ascending or descending order by using `asc` or `desc` as the direction</td>     </tr> </table>  __NOTE:__ The report can be sorted by multiple columns and will prioritize them by their order in the array. So in the following example, the report will have all available columns displayed, sorted by `numberId` then if there are multiple rows with the same `numberId`, those columns will be sorted by `callDt`.  ### Response Overview <hr> <br>  If successful, this request will return something like `\"id\": EJ772657c816e54f4face3c917f2a5f28c`. This `id` can then be used in the next request \"GET Export CSV By Job Id\" in order to retrieve the CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\ExportCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$exportCallLogCSVRequest = {"reportEnd":"2021-02-02T07:59:59Z","reportStart":"2021-02-01T08:00:00Z","orderByColumns":[{"column":"numberId","direction":"desc"},{"column":"callDt","direction":"desc"}],"valueColumns":[{"column":"campaignName"},{"column":"publisherName"},{"column":"targetName"},{"column":"targetNumber"},{"column":"buyer"},{"column":"targetGroupName"},{"column":"campaignId"},{"column":"publisherId"},{"column":"publisherSubId"},{"column":"targetId"},{"column":"targetSubId"},{"column":"buyerId"},{"column":"targetBuyerSubId"},{"column":"targetGroupId"},{"column":"inboundCallId"},{"column":"callDt"},{"column":"inboundPhoneNumber"},{"column":"number"},{"column":"numberId"},{"column":"callCompletedDt"},{"column":"callConnectionDt"},{"column":"endCallSource"},{"column":"hasConnected"},{"column":"isIncomplete"},{"column":"hasRecording"},{"column":"isLive"},{"column":"recordingUrl"},{"column":"isFromNumberPool"},{"column":"numberPoolId"},{"column":"numberPoolName"},{"column":"timeToCallInSeconds"},{"column":"callLengthInSeconds"},{"column":"connectedCallLengthInSeconds"},{"column":"timeToConnectInSeconds"},{"column":"noPayoutReason"},{"column":"noConversionReason"},{"column":"blockReason"},{"column":"incompleteCallReason"},{"column":"offlineConversionUploaded"},{"column":"hasPayout"},{"column":"isDuplicate"},{"column":"hasPreviouslyConnected"},{"column":"hasConverted"},{"column":"wasBlocked"},{"column":"convAdjustmentsApprovedAmount"},{"column":"conversionAmount"},{"column":"profitNet"},{"column":"profitGross"},{"column":"payoutAmount"},{"column":"hasVoiceMail"},{"column":"totalCost"},{"column":"telcoCost"},{"column":"wasConversionAdjusted"},{"column":"conversionAdjustedCalls"},{"column":"wasPayoutAdjusted"},{"column":"hasAnnotations"},{"column":"convAdjustmentsRejectedCount"},{"column":"convAdjustmentRequestCount"},{"column":"convAdjustmentsApproved"},{"column":"tcpaCount"},{"column":"wasBlockedByTCPA"},{"column":"tcpaCost"},{"column":"dataEnrichmentCount"},{"column":"icpCost"},{"column":"ivrDepth"},{"column":"pingSuccessCount"},{"column":"pingFailCount"},{"column":"pingTotalBidAmount"},{"column":"pingDynamicCallLengthInSeconds"},{"column":"avgPingTreeBidAmount"},{"column":"winningBid"},{"column":"winningBidCallAccepted"},{"column":"winningBidCallRejected"}]}; // \Ringba\Model\ExportCallLogCSVRequest | 

try {
    $result = $apiInstance->exportCallLogCSV($authorization, $accountId, $exportCallLogCSVRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportCallLogsApi->exportCallLogCSV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **exportCallLogCSVRequest** | [**\Ringba\Model\ExportCallLogCSVRequest**](../Model/ExportCallLogCSVRequest.md)|  |

### Return type

[**\Ringba\Model\ExportCallLogCSV**](../Model/ExportCallLogCSV.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
