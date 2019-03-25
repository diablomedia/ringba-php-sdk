# Ringba\FileAssetApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileAssetCreateAsset**](FileAssetApi.md#fileAssetCreateAsset) | **POST** /{accountid}/assets | Creates an Asset  The request must be a mulipart form request with the first item being the   json body of the request labeled asset, then the file attached second as file
[**fileAssetDelete**](FileAssetApi.md#fileAssetDelete) | **DELETE** /{accountid}/assets/{id} | Deletes the asset
[**fileAssetDownloadItem**](FileAssetApi.md#fileAssetDownloadItem) | **GET** /{accountid}/assets/{id}/download | Returns the asset for the account
[**fileAssetGet**](FileAssetApi.md#fileAssetGet) | **GET** /{accountid}/assets | Returns all Assests for a given account
[**fileAssetGetItem**](FileAssetApi.md#fileAssetGetItem) | **GET** /{accountid}/assets/{id} | Returns the asset for the account


# **fileAssetCreateAsset**
> \Ringba\Model\FileAssetCreationResponse fileAssetCreateAsset($accountid)

Creates an Asset  The request must be a mulipart form request with the first item being the   json body of the request labeled asset, then the file attached second as file

Sample request:           var form = new FormData();          form.append(\"asset\", \"{\\\"fileType\\\":\\\"ivr-upload\\\", \\\"isPublic\\\":true, \\\"links\\\":[]}\");          form.append(\"file\", \"[path to file]\");                        var settings = {              \"async\": true,              \"crossDomain\": true,              \"url\": \"{accountId}/assets\",              \"method\": \"POST\",              \"headers\": {                  \"Cache-Control\": \"no-cache\",              },              \"processData\": false,              \"contentType\": false,              \"mimeType\": \"multipart/form-data\",              \"data\": form          }                        $.ajax(settings).done(function (response) {              console.log(response);          });

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\FileAssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->fileAssetCreateAsset($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAssetApi->fileAssetCreateAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

[**\Ringba\Model\FileAssetCreationResponse**](../Model/FileAssetCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileAssetDelete**
> object fileAssetDelete($id, $accountid)

Deletes the asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\FileAssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->fileAssetDelete($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAssetApi->fileAssetDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileAssetDownloadItem**
> object fileAssetDownloadItem($id, $accountid, $inline)

Returns the asset for the account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\FileAssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 
$inline = true; // bool | 

try {
    $result = $apiInstance->fileAssetDownloadItem($id, $accountid, $inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAssetApi->fileAssetDownloadItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |
 **inline** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileAssetGet**
> object fileAssetGet($accountid)

Returns all Assests for a given account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\FileAssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->fileAssetGet($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAssetApi->fileAssetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileAssetGetItem**
> object fileAssetGetItem($id, $accountid)

Returns the asset for the account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\FileAssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->fileAssetGetItem($id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAssetApi->fileAssetGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

