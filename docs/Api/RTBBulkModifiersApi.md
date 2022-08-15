# Ringba\RTBBulkModifiersApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRTBBulkAdjustmentfromCSV()**](RTBBulkModifiersApi.md#createRTBBulkAdjustmentfromCSV) | **PUT** /{accountId}/rtb/bulk-modifiers/fromCSV | Create RTB Bulk Adjustment from CSV


## `createRTBBulkAdjustmentfromCSV()`

```php
createRTBBulkAdjustmentfromCSV($name, $authorization, $accountId, $file): \Ringba\Model\CreateRTBBulkAdjustmentfromCSV
```

Create RTB Bulk Adjustment from CSV

Request to upload a CSV file that specifies the adjustments for different values. This request is related to the <a href=\"#bulk-modifiers\">Bulk Modifiers</a> section of the \"PUT Enable RTB for a Campaign\" request above. Check out the description of that request for more information.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>   ### Request Body <hr> <br>  #### Required Parameters  This request only has one required parameter, which is the CSV file you created with the adjustments for different criteria. In Postman it can be uploaded using the \"binary\" option for the Body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\RTBBulkModifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = Age-Bulk-Modifier; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createRTBBulkAdjustmentfromCSV($name, $authorization, $accountId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RTBBulkModifiersApi->createRTBBulkAdjustmentfromCSV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **file** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\Ringba\Model\CreateRTBBulkAdjustmentfromCSV**](../Model/CreateRTBBulkAdjustmentfromCSV.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
