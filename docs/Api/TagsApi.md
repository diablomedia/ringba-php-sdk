# Ringba\TagsApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagsGetTags**](TagsApi.md#tagsGetTags) | **GET** /{accountId}/Tags | returns a list of Known Tags
[**tagsGetTagsFull**](TagsApi.md#tagsGetTagsFull) | **GET** /{accountId}/Tags/full | returns a list of Known Tags


# **tagsGetTags**
> object tagsGetTags($account_id)

returns a list of Known Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->tagsGetTags($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsGetTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagsGetTagsFull**
> object tagsGetTagsFull($account_id)

returns a list of Known Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 

try {
    $result = $apiInstance->tagsGetTagsFull($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsGetTagsFull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

