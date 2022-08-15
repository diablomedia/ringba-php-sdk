# Ringba\CampaignNumbersApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPublisherNumbertoaCampaign()**](CampaignNumbersApi.md#addPublisherNumbertoaCampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliateNumbers | Add Publisher Number to a Campaign
[**addaDefaultNumberforaCampaign()**](CampaignNumbersApi.md#addaDefaultNumberforaCampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/defaultNumber | Add a Default Number for a Campaign
[**removeDefaultNumberfromaCampaign()**](CampaignNumbersApi.md#removeDefaultNumberfromaCampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/defaultNumber | Remove Default Number from a Campaign


## `addPublisherNumbertoaCampaign()`

```php
addPublisherNumbertoaCampaign($authorization, $accountId, $campaignId, $addPublisherNumbertoaCampaignRequest): \Ringba\Model\AddPublisherNumbertoaCampaign
```

Add Publisher Number to a Campaign

Request to add a publisher's number associated with your account to the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to make the default number for the campaign. You can find IDs of <a href=#get-numbers-associated-with-your-account>numbers</a> associated with your account. The response returned from that request will contain an object for each number. Each number object will have a <code>id</code> which is the ID needed for this request.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$addPublisherNumbertoaCampaignRequest = {"numberId":"{{numberId}}"}; // \Ringba\Model\AddPublisherNumbertoaCampaignRequest | 

try {
    $result = $apiInstance->addPublisherNumbertoaCampaign($authorization, $accountId, $campaignId, $addPublisherNumbertoaCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignNumbersApi->addPublisherNumbertoaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **addPublisherNumbertoaCampaignRequest** | [**\Ringba\Model\AddPublisherNumbertoaCampaignRequest**](../Model/AddPublisherNumbertoaCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\AddPublisherNumbertoaCampaign**](../Model/AddPublisherNumbertoaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addaDefaultNumberforaCampaign()`

```php
addaDefaultNumberforaCampaign($authorization, $accountId, $campaignId, $addaDefaultNumberforaCampaignRequest): \Ringba\Model\AddaDefaultNumberforaCampaign
```

Add a Default Number for a Campaign

Request to add a default number to a campaign. This number will be used if your number pool is locked or if you do not a number pool for the campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to make the default number for the campaign. You can find IDs of <a href=#get-numbers-associated-with-your-account>numbers</a> associated with your account associated with your account. The response returned from that request will contain an object for each number. Each number object will have a <code>id</code> which is the ID needed for this request.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$addaDefaultNumberforaCampaignRequest = {"numberId":"{{numberId}}"}; // \Ringba\Model\AddaDefaultNumberforaCampaignRequest | 

try {
    $result = $apiInstance->addaDefaultNumberforaCampaign($authorization, $accountId, $campaignId, $addaDefaultNumberforaCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignNumbersApi->addaDefaultNumberforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **addaDefaultNumberforaCampaignRequest** | [**\Ringba\Model\AddaDefaultNumberforaCampaignRequest**](../Model/AddaDefaultNumberforaCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\AddaDefaultNumberforaCampaign**](../Model/AddaDefaultNumberforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeDefaultNumberfromaCampaign()`

```php
removeDefaultNumberfromaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\RemoveDefaultNumberfromaCampaign
```

Remove Default Number from a Campaign

Request to remove a default number from a campaign  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to make the default number for the campaign. You can find IDs of numbers associated with your account using the \"GET Get Numbers Associated with Your Account\" request found in the \"Numbers\" folder above. The response returned from that request will contain an object for each number. Each number object will have a <code>id</code> which is the ID needed for this request.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->removeDefaultNumberfromaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignNumbersApi->removeDefaultNumberfromaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\RemoveDefaultNumberfromaCampaign**](../Model/RemoveDefaultNumberfromaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
