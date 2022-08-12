# Ringba\CallLogsExportCallLogsApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdCalllogsExportCSVJobIdGet()**](CallLogsExportCallLogsApi.md#accountIdCalllogsExportCSVJobIdGet) | **GET** /{accountId}/calllogs/export/{CSVJobId} | Export CSV By Job Id
[**accountIdCalllogsExportCsvPost()**](CallLogsExportCallLogsApi.md#accountIdCalllogsExportCsvPost) | **POST** /{accountId}/calllogs/export/csv | Export Call Log - CSV


## `accountIdCalllogsExportCSVJobIdGet()`

```php
accountIdCalllogsExportCSVJobIdGet($accountId, $cSVJobId, $authorization): object
```

Export CSV By Job Id

This request takes the `id` from the previous request in the place of {CSVJobId}.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Response Overview <hr> <br>  This request will return an object with a \"status\". If the \"status\" is \"Error\" that means there is a problem with the CSV you attempted to generate in the previous request. If the \"status\" is \"Pending\" that means your report is not yet ready and you need to try again until the \"status\" changes to \"Ready\". Once you get a \"status\" of \"Ready\" the response will also have a \"url\". Copy this \"url\" and paste it into a browser window which will automatically initiate a download of a zip file. Download and unzip this file to see the CSV report you just generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallLogsExportCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$cSVJobId = 'cSVJobId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCalllogsExportCSVJobIdGet($accountId, $cSVJobId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogsExportCallLogsApi->accountIdCalllogsExportCSVJobIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **cSVJobId** | **string**|  |
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

## `accountIdCalllogsExportCsvPost()`

```php
accountIdCalllogsExportCsvPost($accountId, $authorization, $body): object
```

Export Call Log - CSV

Request to generate a CSV table for the call log.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>reportStart</code></td>         <td>Beginning of report time period in UTC format</td>     </tr>     <tr>         <td><code>reportEnd</code></td>         <td>Beginning of report time period in UTC format</td>     </tr>     <tr>         <td><code>valueColumns</code></td>         <td>Columns desired on the report, at least one is required. The example to the right shows all columns available, but you only need to include the ones you want displayed on the report</td>     </tr> </table>  #### Optional Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>orderByColumns</code></td>         <td>Sorts the report in ascending or descending order by using `asc` or `desc` as the direction</td>     </tr> </table>  __NOTE:__ The report can be sorted by multiple columns and will prioritize them by their order in the array. So in the following example, the report will have all available columns displayed, sorted by `numberId` then if there are multiple rows with the same `numberId`, those columns will be sorted by `callDt`.  ### Response Overview <hr> <br>  If successful, this request will return something like `\"id\": EJ772657c816e54f4face3c917f2a5f28c`. This `id` can then be used in the next request \"GET Export CSV By Job Id\" in order to retrieve the CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CallLogsExportCallLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCalllogsExportCsvPost($accountId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallLogsExportCallLogsApi->accountIdCalllogsExportCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
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
