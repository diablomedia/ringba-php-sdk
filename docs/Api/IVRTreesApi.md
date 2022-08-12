# Ringba\IVRTreesApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdCampaignsCampaignIdIVRTreeDelete()**](IVRTreesApi.md#accountIdCampaignsCampaignIdIVRTreeDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/IVRTree | Remove IVR Tree from a Campaign
[**accountIdCampaignsCampaignIdIVRTreePost()**](IVRTreesApi.md#accountIdCampaignsCampaignIdIVRTreePost) | **POST** /{accountId}/campaigns/{campaignId}/IVRTree | Add IVR Tree to a Campaign
[**accountIdIvrtreeGet()**](IVRTreesApi.md#accountIdIvrtreeGet) | **GET** /{accountId}/ivrtree | Get IVR Trees Associated with Account


## `accountIdCampaignsCampaignIdIVRTreeDelete()`

```php
accountIdCampaignsCampaignIdIVRTreeDelete($accountId, $campaignId, $authorization): object
```

Remove IVR Tree from a Campaign

Request to remove an IVR tree from a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\IVRTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$campaignId = 'campaignId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdIVRTreeDelete($accountId, $campaignId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRTreesApi->accountIdCampaignsCampaignIdIVRTreeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
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

## `accountIdCampaignsCampaignIdIVRTreePost()`

```php
accountIdCampaignsCampaignIdIVRTreePost($accountId, $campaignId, $authorization, $body): object
```

Add IVR Tree to a Campaign

Request to add an IVR Tree associated with your account to the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\IVRTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$campaignId = 'campaignId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdIVRTreePost($accountId, $campaignId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRTreesApi->accountIdCampaignsCampaignIdIVRTreePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
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

## `accountIdIvrtreeGet()`

```php
accountIdIvrtreeGet($accountId, $authorization)
```

Get IVR Trees Associated with Account

Request to get the IVR Tree(s) associated with the specified account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\IVRTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $apiInstance->accountIdIvrtreeGet($accountId, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling IVRTreesApi->accountIdIvrtreeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
