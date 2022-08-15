# Ringba\GetCallLogsApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCallLog()**](GetCallLogsApi.md#getCallLog) | **POST** /{accountId}/calllogs | Get Call Log
[**getColumnNames()**](GetCallLogsApi.md#getColumnNames) | **GET** /{accountId}/calllogs/columns | Get Column Names
[**getDetailsAboutSpecificCalls()**](GetCallLogsApi.md#getDetailsAboutSpecificCalls) | **POST** /{accountId}/calllogs/detail | Get Details About Specific Calls
[**getTagsforFilteringCallLog()**](GetCallLogsApi.md#getTagsforFilteringCallLog) | **GET** /{accountId}/calllogs/tags | Get Tags for Filtering Call Log


## `getCallLog()`

```php
getCallLog($authorization, $accountId, $getCallLogRequest): \Ringba\Model\GetCallLogWithFilters
```

Get Call Log

Request to get a log of the calls associated with this account. This log can be exported as a CSV using the \"POST Export Call Log - CSV\" request below to be more useful for human consumption. The call log must have a date range, which will return all calls within the date range and by default they will be sorted by \"Call Date\" in descending order. By default, all available columns will be displayed. Using the optional parameters will allow you to choose which columns are displayed, how the results are sorted, and filter by columns or available tags.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>reportStart</code></td>         <td>Beginning of report time period in UTC format</td>     </tr>     <tr>         <td><code>reportEnd</code></td>         <td>Beginning of report time period in UTC format</td>     </tr> </table>  #### Optional Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>valueColumns</code></td>         <td>Array of objects to select which columns are displayed. A list of available columns can be found by using the \"GET Get Column Names\" request above. See \"Get Call Log With Specified Columns\" example to the right for implementation.</td>     </tr>     <tr>         <td><code>orderByColumns</code></td>         <td>Sorts the report in ascending or descending order by using <code>asc</code> or <code>desc</code> as the direction. Report can be sorted by multiple column and will prioritize them by their order in the array. So in the \"Get Call Log Sorted\" example to the right, the report will have all available columns displayed, sorted by <code>numberId</code> then if there are multiple rows with the same <code>numberId</code>, those columns will be sorted by <code>callDt</code>.     </tr> <tr> <td><code>size</code></td> <td>The maximum number of calls you want to display on the report. The maximum size for reports is 1000. If you want a report with more than 100 calls, see the \"POST Export Call Log-CSV\" request below.</td> </tr> <tr> <td><code>offset</code></td> <td>The number of calls you want to omit from the beginning of the report. So an offset value of 100 will make the report start with what would otherwise be call number 101.<p>* For more information on size/offset and how to create a paginated report, see the note below.</td> </tr>     <tr>         <td><code>filters</code></td>         <td>Array of filters to apply to the report. Within the array, filters are grouped into sub-arrays with the key of <code>anyConditionToMatch</code> and can be broken down by the following:</td>     </tr>     <tr>         <td></td>         <td><p><code>column</code></p><p>Filter by a value in any of the columns included in the call log or by a tag.</p><hr><p><code>value</code></p><p>The value you want to filter based on</p><hr><p><code>isNegativeMatch</code></p><p>Boolean value if set to \"true\" this will make the filter the opposite.</p><hr><p><code>comparisonType</code></p><p>The type of comparison you want to apply to the value for the filter</p><hr><p>See the <b>notes</b> below for more information about implementing filters.</p></td>     </tr> </table> <br>  __Note About Pagination:__ If you want to create a report with multiple pages, you can do that using the `size` and `offset` parameters. If you have a report with 1000 calls and want it broken into 10 pages with 100 calls each, you will need to make 10 requests with `size:100` and the following values for `offset`: * `offset:0` will return calls 1-100 * `offset:100` will return calls 101-200 * `offset:200` will return calls 201-300  Continue increasing the `offset` by 100 for each page until you have all 10 pages of the report.    __Notes About Filters:__<br> The `comparisonType` has the following options: * \"EQUALS\" * \"CONTAINS\" * \"BEGINS_WITH\" * \"GREATER_THAN\" * \"LESS_THAN\"  Each `comparisonType` can be negated by changing the `isNegativeMatch` value to \"true\". For example:<br> ``` \"column\": \"tag:Date:Day\", \"value\": \"1\", \"isNegativeMatch\": false, \"comparisonType\": \"EQUALS\" ```  will return all calls with a day value equal to 1, while<br> ``` \"column\": \"tag:Date:Day\", \"value\": \"1\", \"isNegativeMatch\": true, \"comparisonType\": \"EQUALS\" ```  will return calls from all other days of the month.<br> <br>  __Combining Filters:__<br> Filters can be combined as an __OR__ statement by putting them in the same `anyConditionToMatch` sub-array. <br> Filters can be combined as an __AND__ statement by putting them in separate `anyConditionToMatch` sub-arrays.<br> The \"Get Call Log with Filters\" example to the right shows how to filter for calls made on the 1st __OR__ 3rd day of the month __AND__ with a `hasConnected` value of \"yes\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\GetCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$getCallLogRequest = {"reportEnd":"2021-02-04T07:59:59Z","reportStart":"2021-02-01T08:00:00Z"}; // \Ringba\Model\GetCallLogRequest | 

try {
    $result = $apiInstance->getCallLog($authorization, $accountId, $getCallLogRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetCallLogsApi->getCallLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **getCallLogRequest** | [**\Ringba\Model\GetCallLogRequest**](../Model/GetCallLogRequest.md)|  |

### Return type

[**\Ringba\Model\GetCallLogWithFilters**](../Model/GetCallLogWithFilters.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColumnNames()`

```php
getColumnNames($authorization, $accountId): \Ringba\Model\GetColumnNames
```

Get Column Names

This request will show you all of the available columns that can be inculded in the Call Log.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)  ### Response Overview <hr> <br>  The body of the response to this request will contatain an array of objects. Each of the objects in this array is for one column available on the report and has some details to help you use them. If you want to include a column and/or sort by it, you will pull the `id` from the object for that column.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\GetCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getColumnNames($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetCallLogsApi->getColumnNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetColumnNames**](../Model/GetColumnNames.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutSpecificCalls()`

```php
getDetailsAboutSpecificCalls($authorization, $accountId, $getDetailsAboutSpecificCallsRequest): \Ringba\Model\GetDetailsAboutSingleCall
```

Get Details About Specific Calls

Request to view more detail about specific calls using the `InboundCallId` which can be found using the \"POST Get Call Log\" request above.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters  <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>InboundCallId</code></td>         <td>IDs of one or more calls</td>     </tr> </table> <br>  __NOTE:__ Even if the request body only contains one `InboundCallId` it must be in an array. If requesting details for more than one `InboundCallId` separate each Id with a comma.  <!-- `InboundCallId` IDs of one or more calls <br> -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\GetCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$getDetailsAboutSpecificCallsRequest = {"InboundCallIds":["{{InboundCallId}}","{{InboundCallId2}}","{{InboundCallId3}}"]}; // \Ringba\Model\GetDetailsAboutSpecificCallsRequest | 

try {
    $result = $apiInstance->getDetailsAboutSpecificCalls($authorization, $accountId, $getDetailsAboutSpecificCallsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetCallLogsApi->getDetailsAboutSpecificCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **getDetailsAboutSpecificCallsRequest** | [**\Ringba\Model\GetDetailsAboutSpecificCallsRequest**](../Model/GetDetailsAboutSpecificCallsRequest.md)|  |

### Return type

[**\Ringba\Model\GetDetailsAboutSingleCall**](../Model/GetDetailsAboutSingleCall.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagsforFilteringCallLog()`

```php
getTagsforFilteringCallLog($authorization, $accountId): \Ringba\Model\GetTagNamesforTypeInboundNumbers
```

Get Tags for Filtering Call Log

This request will allow you to view all tags available for filtering the call log by specific values. Tags are broken down by `Type` and each `Type` is broken down by `Name`. In order to filter by a tag you must include the `Type` `Name` and a `Value`. <br> <br>  The first example to the right shows a list of all of the tag `Types`. The subsequent examples to the right show the breakdown of the `Names` available for a few of the `Types`. To see how to implement these tags, check out the \"Get Call Log With Filters\" example to the right of the \"POST Get Call Log\" request below.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\GetCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $result = $apiInstance->getTagsforFilteringCallLog($authorization, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetCallLogsApi->getTagsforFilteringCallLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

[**\Ringba\Model\GetTagNamesforTypeInboundNumbers**](../Model/GetTagNamesforTypeInboundNumbers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
