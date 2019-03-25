# Ringba\PhoneLookupApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**phoneLookupTestPhoneSettings**](PhoneLookupApi.md#phoneLookupTestPhoneSettings) | **POST** /{accountid}/phoneNumberLookup | The params to get available Numbers


# **phoneLookupTestPhoneSettings**
> object phoneLookupTestPhoneSettings($request, $accountid)

The params to get available Numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\PhoneLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Ringba\Model\CreateNumberRequestModel(); // \Ringba\Model\CreateNumberRequestModel | The Request
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->phoneLookupTestPhoneSettings($request, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneLookupApi->phoneLookupTestPhoneSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Ringba\Model\CreateNumberRequestModel**](../Model/CreateNumberRequestModel.md)| The Request |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

