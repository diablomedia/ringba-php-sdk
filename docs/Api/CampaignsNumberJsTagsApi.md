# OpenAPI\Client\CampaignsNumberJsTagsApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete()**](CampaignsNumberJsTagsApi.md#accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Remove a Js Tag from a Number |
| [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet()**](CampaignsNumberJsTagsApi.md#accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Get Js Tags for a Number |
| [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch()**](CampaignsNumberJsTagsApi.md#accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag/{JsTagId} | Modify Js Tag for a Number |
| [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost()**](CampaignsNumberJsTagsApi.md#accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Create New Js Tag for a Number |


## `accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete()`

```php
accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete($account_id, $campaign_id, $publisher_id, $number_id, $authorization): object
```

Remove a Js Tag from a Number

Request to remove a Js Tag from the specified number.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `numberId` get IDs of [numbers](#get-numbers-associated-with-your-account) associated with your account. The response returned form that request will contain an object for each number. Each number object will have a `id` which is the ID needed for this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsNumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete($account_id, $campaign_id, $publisher_id, $number_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsNumberJsTagsApi->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **number_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet()`

```php
accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet($account_id, $campaign_id, $publisher_id, $number_id, $authorization): object
```

Get Js Tags for a Number

Request to get Js Tags associated with a specified number.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `numberId` get IDs of [numbers](#get-numbers-associated-with-your-account) associated with your account. The response returned form that request will contain an object for each number. Each number object will have a `id` which is the ID needed for this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsNumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet($account_id, $campaign_id, $publisher_id, $number_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsNumberJsTagsApi->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **number_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch()`

```php
accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch($account_id, $campaign_id, $publisher_id, $number_id, $js_tag_id, $authorization, $body): object
```

Modify Js Tag for a Number

### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsNumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$number_id = 'number_id_example'; // string
$js_tag_id = 'js_tag_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch($account_id, $campaign_id, $publisher_id, $number_id, $js_tag_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsNumberJsTagsApi->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **number_id** | **string**|  | |
| **js_tag_id** | **string**|  | |
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

## `accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost()`

```php
accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost($account_id, $campaign_id, $publisher_id, $number_id, $authorization, $body): object
```

Create New Js Tag for a Number

Request to create a new Js Tag for the specified number  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `numberId` get IDs of [numbers](#get-numbers-associated-with-your-account) associated with your account. The response returned form that request will contain an object for each number. Each number object will have a `id` which is the ID needed for this request.  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name you want to assign to this Js Tag</td> </tr> <tr> <td><code>e164ExistingNumber</code></td> <td>The number that you will be displaying on your webpage that you want to link to the campaign number specified in the request.</td> </tr> <tr> <td><code>hasNumberPool</code></td> <td>Boolean value to determine if this Js Tag is linking to a number pool. Set to false if you are linking it to a single number</td> </tr> <tr> <td><code>numberPoolId</code></td> <td>If <code>hasNumberPool</code> is set to true, put the ID of the number pool here</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsNumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost($account_id, $campaign_id, $publisher_id, $number_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsNumberJsTagsApi->accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **number_id** | **string**|  | |
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
