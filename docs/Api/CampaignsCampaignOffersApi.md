# OpenAPI\Client\CampaignsCampaignOffersApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdCampaignsCampaignIdOffersDraftDelete()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersDraftDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Draft | Delete a Draft Offer Before Publishing |
| [**accountIdCampaignsCampaignIdOffersDraftGet()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersDraftGet) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Draft | Get Draft Offers for a Campaign |
| [**accountIdCampaignsCampaignIdOffersDraftPublishPost()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersDraftPublishPost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Draft/Publish | Publish Draft Offers |
| [**accountIdCampaignsCampaignIdOffersDraftPut()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersDraftPut) | **PUT** /{accountId}/campaigns/{campaignId}/Offers/Draft | Create a Draft Offer for a Campaign |
| [**accountIdCampaignsCampaignIdOffersGet()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersGet) | **GET** /{accountId}/campaigns/{campaignId}/Offers | Get All Offers for a Campaign |
| [**accountIdCampaignsCampaignIdOffersPublishedDelete()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersPublishedDelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Published | Delete Published Offer for a Campaign |
| [**accountIdCampaignsCampaignIdOffersPublishedGet()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersPublishedGet) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published | Get Published Offers for a Campaign |
| [**accountIdCampaignsCampaignIdOffersPublishedInvitePost()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersPublishedInvitePost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Invite | Invite Publisher to Participate in Offer |
| [**accountIdCampaignsCampaignIdOffersPublishedParticipantsGet()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersPublishedParticipantsGet) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published/Participants | View Publishers Participating in Published Offer |
| [**accountIdCampaignsCampaignIdOffersPublishedPausePost()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersPublishedPausePost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Pause | Pause a Published Offer for a Campaign |
| [**accountIdCampaignsCampaignIdOffersPublishedResumePost()**](CampaignsCampaignOffersApi.md#accountIdCampaignsCampaignIdOffersPublishedResumePost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Resume | Resume a Paused Offer |


## `accountIdCampaignsCampaignIdOffersDraftDelete()`

```php
accountIdCampaignsCampaignIdOffersDraftDelete($account_id, $campaign_id, $authorization): object
```

Delete a Draft Offer Before Publishing

Request to delete the draft offer associated with the campaign before it has been published.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersDraftDelete($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersDraftDelete: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersDraftGet()`

```php
accountIdCampaignsCampaignIdOffersDraftGet($account_id, $campaign_id, $authorization): object
```

Get Draft Offers for a Campaign

Request to retrieve offers previously created but not yet published for the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersDraftGet($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersDraftGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersDraftPublishPost()`

```php
accountIdCampaignsCampaignIdOffersDraftPublishPost($account_id, $campaign_id, $authorization): object
```

Publish Draft Offers

Request to publish the draft offer created using the \"PUT Create a Draft Offer for a Campaign\" request above.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersDraftPublishPost($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersDraftPublishPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersDraftPut()`

```php
accountIdCampaignsCampaignIdOffersDraftPut($account_id, $campaign_id, $authorization, $body): object
```

Create a Draft Offer for a Campaign

Request to create a draft offer for a campaign. Once successful, this draft will be stored in your account until it is published or deleted. If you want to edit the draft before publishing, resend this request with the updated information.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name you want to assign to this offer</td> </tr> <tr> <td><code>description</code></td> <td>A description for the offer that will be shown when it is sent to the publishers</td> </tr> <tr> <td><code>category</code></td> <td>The industry category that the offer pertains to i.e. \"Automotive\\\\Car Insurance\" for an offer that will be sent to buyers in the car insurance industry</td> </tr> <tr> <td><code>offerVisibility</code></td> <td><p>Determines who can see the offer. This has two options:</p><ul><li>\"private\" makes the offer invitation-only</li><li>\"account\" makes the offer visible to any of your registered publishers</li></ul></td> </tr> <tr> <td><code>requireApproval</code></td> <td>Boolean value. If set to true then publishers must be approved by you before they can participate in an offer.</td> </tr> <tr> <td><code>languageCodes</code></td> <td>An array containing the codes for the languages of callers that should be routed through this offer</td> </tr> <tr> <td><code>numberRestrictions</code></td> <td>An object with the following parameters:</td> </tr> <tr> <td></td> <td><p><code>allowTF</code></p><p>Boolean value to determine if publishers can allocate Toll-Free numbers to this offer. This is the default setting that can be overridden per publisher.</p><hr><p><code>allowDID</code></p><p>Boolean value to determine if publishers can allocate Toll-Free numbers to this offer. This is the default setting that can be overridden per publisher.</p><hr><p><b>NOTE:</b> At least one of the <code>allowTF</code> or <code>allowDID</code> must be set to true</p><hr><p><code>maxNumbersPerPublisher</code></p><p>The maximum number of unique publisher numbers a participating publisher can allocate to this offer. This is the default setting that can be overridden per publisher. </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>notes</code></td> <td>Additional information about the offer that will only be visible when the publisher views the detail view for the offer</td> </tr> <tr> <td><code>expiration</code></td> <td>The offer will be discontinued at the specified date and time. It will no longer accept calls or new participants. It can be re-enabled after it expires. Publishers will be notified about the expiration immediately when they receive the offers and upon expiration. If you set an <code>expiation</code> you also need to add the following parameter called <code>timeZoneId</code></td> </tr> <tr> <td><code>timeZoneId</code></td> <td>The time zone that the <code>expiration</code> is set in</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersDraftPut($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersDraftPut: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersGet()`

```php
accountIdCampaignsCampaignIdOffersGet($account_id, $campaign_id, $authorization): object
```

Get All Offers for a Campaign

Request to view all offers associated with the campaign. If there are draft offers and published offers present, they will both be displayed in the `offers` object in the response.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersGet($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersPublishedDelete()`

```php
accountIdCampaignsCampaignIdOffersPublishedDelete($account_id, $campaign_id, $authorization): object
```

Delete Published Offer for a Campaign

Request to delete the published offer from a campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersPublishedDelete($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersPublishedDelete: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersPublishedGet()`

```php
accountIdCampaignsCampaignIdOffersPublishedGet($account_id, $campaign_id, $authorization): object
```

Get Published Offers for a Campaign

Request to view published offers associated with the campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersPublishedGet($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersPublishedGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersPublishedInvitePost()`

```php
accountIdCampaignsCampaignIdOffersPublishedInvitePost($account_id, $campaign_id, $authorization, $body): object
```

Invite Publisher to Participate in Offer

Request to invite a publisher to join the published offer associated with the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>publisherId</code></td> <td>The ID of the publisher you want to invite to participate in the published offer for the specified campaign. Get IDs of <a href=\"#get-information-about-publishers\">publishers</a> associated with your account.</td> </tr> <tr> <td><code>message</code></td> <td>The message you want the publisher to see when they receive the invite for the offer.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersPublishedInvitePost($account_id, $campaign_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersPublishedInvitePost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersPublishedParticipantsGet()`

```php
accountIdCampaignsCampaignIdOffersPublishedParticipantsGet($account_id, $campaign_id, $authorization): object
```

View Publishers Participating in Published Offer

Request to retrieve a list of publishers currently participating in the offer for the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersPublishedParticipantsGet($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersPublishedParticipantsGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersPublishedPausePost()`

```php
accountIdCampaignsCampaignIdOffersPublishedPausePost($account_id, $campaign_id, $authorization): object
```

Pause a Published Offer for a Campaign

Request to pause the offer you currently have published for the specified campaign.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersPublishedPausePost($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersPublishedPausePost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdCampaignsCampaignIdOffersPublishedResumePost()`

```php
accountIdCampaignsCampaignIdOffersPublishedResumePost($account_id, $campaign_id, $authorization): object
```

Resume a Paused Offer

Request to resume a published offer that has been paused.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CampaignsCampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdCampaignsCampaignIdOffersPublishedResumePost($account_id, $campaign_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsCampaignOffersApi->accountIdCampaignsCampaignIdOffersPublishedResumePost: ', $e->getMessage(), PHP_EOL;
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
