# Ringba\IVRTreesApi

All URIs are relative to http://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addIVRTreetoaCampaign()**](IVRTreesApi.md#addIVRTreetoaCampaign) | **POST** /{accountId}/campaigns/{campaignId}/IVRTree | Add IVR Tree to a Campaign
[**getIVRTreesAssociatedwithAccount()**](IVRTreesApi.md#getIVRTreesAssociatedwithAccount) | **GET** /{accountId}/ivrtree | Get IVR Trees Associated with Account
[**removeIVRTreefromaCampaign()**](IVRTreesApi.md#removeIVRTreefromaCampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/IVRTree | Remove IVR Tree from a Campaign


## `addIVRTreetoaCampaign()`

```php
addIVRTreetoaCampaign($authorization, $accountId, $campaignId, $addIVRTreetoaCampaignRequest): \Ringba\Model\AddIVRTreetoaCampaign
```

Add IVR Tree to a Campaign

Request to add an IVR Tree associated with your account to the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\IVRTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$addIVRTreetoaCampaignRequest = {"ivrTreeId":"{{IVRTreeId}}"}; // \Ringba\Model\AddIVRTreetoaCampaignRequest | 

try {
    $result = $apiInstance->addIVRTreetoaCampaign($authorization, $accountId, $campaignId, $addIVRTreetoaCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRTreesApi->addIVRTreetoaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **addIVRTreetoaCampaignRequest** | [**\Ringba\Model\AddIVRTreetoaCampaignRequest**](../Model/AddIVRTreetoaCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\AddIVRTreetoaCampaign**](../Model/AddIVRTreetoaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIVRTreesAssociatedwithAccount()`

```php
getIVRTreesAssociatedwithAccount($authorization, $accountId)
```

Get IVR Trees Associated with Account

Request to get the IVR Tree(s) associated with the specified account.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\IVRTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 

try {
    $apiInstance->getIVRTreesAssociatedwithAccount($authorization, $accountId);
} catch (Exception $e) {
    echo 'Exception when calling IVRTreesApi->getIVRTreesAssociatedwithAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeIVRTreefromaCampaign()`

```php
removeIVRTreefromaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\RemoveIVRTreefromaCampaign
```

Remove IVR Tree from a Campaign

Request to remove an IVR tree from a campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\IVRTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->removeIVRTreefromaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IVRTreesApi->removeIVRTreefromaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\RemoveIVRTreefromaCampaign**](../Model/RemoveIVRTreefromaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
