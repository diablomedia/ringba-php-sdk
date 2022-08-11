# OpenAPI\Client\CampaignsCampaignNumbersApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdAffiliateNumbersPatch()**](CampaignsCampaignNumbersApi.md#accountIdCampaignsCampaignIdAffiliateNumbersPatch) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliateNumbers | Add Publisher Number to a Campaign |
| [**accountIdCampaignsCampaignIdDefaultNumberDelete()**](CampaignsCampaignNumbersApi.md#accountIdCampaignsCampaignIdDefaultNumberDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/defaultNumber | Remove Default Number from a Campaign |
| [**accountIdCampaignsCampaignIdDefaultNumberPatch()**](CampaignsCampaignNumbersApi.md#accountIdCampaignsCampaignIdDefaultNumberPatch) | **PATCH** /{accountId}/campaigns/{campaignId}/defaultNumber | Add a Default Number for a Campaign |


## `accountIdCampaignsCampaignIdAffiliateNumbersPatch()`

```php
accountIdCampaignsCampaignIdAffiliateNumbersPatch($account_id, $campaign_id, $authorization, $body): object
```

Add Publisher Number to a Campaign

Request to add a publisher's number associated with your account to the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to make the default number for the campaign. You can find IDs of <a href=#get-numbers-associated-with-your-account>numbers</a> associated with your account. The response returned from that request will contain an object for each number. Each number object will have a <code>id</code> which is the ID needed for this request.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliateNumbersPatch($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignNumbersApi->accountIdCampaignsCampaignIdAffiliateNumbersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |
| **body** | **object**|  | [optional] |

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

## `accountIdCampaignsCampaignIdDefaultNumberDelete()`

```php
accountIdCampaignsCampaignIdDefaultNumberDelete($account_id, $campaign_id, $authorization): object
```

Remove Default Number from a Campaign

Request to remove a default number from a campaign  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to make the default number for the campaign. You can find IDs of numbers associated with your account using the \"GET Get Numbers Associated with Your Account\" request found in the \"Numbers\" folder above. The response returned from that request will contain an object for each number. Each number object will have a <code>id</code> which is the ID needed for this request.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDefaultNumberDelete($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignNumbersApi->accountIdCampaignsCampaignIdDefaultNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |

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

## `accountIdCampaignsCampaignIdDefaultNumberPatch()`

```php
accountIdCampaignsCampaignIdDefaultNumberPatch($account_id, $campaign_id, $authorization, $body): object
```

Add a Default Number for a Campaign

Request to add a default number to a campaign. This number will be used if your number pool is locked or if you do not a number pool for the campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>numberId</code></td> <td>The ID of the number you want to make the default number for the campaign. You can find IDs of <a href=#get-numbers-associated-with-your-account>numbers</a> associated with your account associated with your account. The response returned from that request will contain an object for each number. Each number object will have a <code>id</code> which is the ID needed for this request.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdDefaultNumberPatch($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignNumbersApi->accountIdCampaignsCampaignIdDefaultNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional] |
| **body** | **object**|  | [optional] |

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
