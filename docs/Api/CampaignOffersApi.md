# Ringba\CampaignOffersApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createaDraftOfferforaCampaign()**](CampaignOffersApi.md#createaDraftOfferforaCampaign) | **PUT** /{accountId}/campaigns/{campaignId}/Offers/Draft | Create a Draft Offer for a Campaign
[**deletePublishedOfferforaCampaign()**](CampaignOffersApi.md#deletePublishedOfferforaCampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Published | Delete Published Offer for a Campaign
[**deleteaDraftOfferBeforePublishing()**](CampaignOffersApi.md#deleteaDraftOfferBeforePublishing) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Draft | Delete a Draft Offer Before Publishing
[**getAllOffersforaCampaign()**](CampaignOffersApi.md#getAllOffersforaCampaign) | **GET** /{accountId}/campaigns/{campaignId}/Offers | Get All Offers for a Campaign
[**getDraftOffersforaCampaign()**](CampaignOffersApi.md#getDraftOffersforaCampaign) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Draft | Get Draft Offers for a Campaign
[**getPublishedOffersforaCampaign()**](CampaignOffersApi.md#getPublishedOffersforaCampaign) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published | Get Published Offers for a Campaign
[**invitePublishertoParticipateinOffer()**](CampaignOffersApi.md#invitePublishertoParticipateinOffer) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Invite | Invite Publisher to Participate in Offer
[**pauseaPublishedOfferforaCampaign()**](CampaignOffersApi.md#pauseaPublishedOfferforaCampaign) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Pause | Pause a Published Offer for a Campaign
[**publishDraftOffers()**](CampaignOffersApi.md#publishDraftOffers) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Draft/Publish | Publish Draft Offers
[**resumeaPausedOffer()**](CampaignOffersApi.md#resumeaPausedOffer) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Resume | Resume a Paused Offer
[**viewPublishersParticipatinginPublishedOffer()**](CampaignOffersApi.md#viewPublishersParticipatinginPublishedOffer) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published/Participants | View Publishers Participating in Published Offer


## `createaDraftOfferforaCampaign()`

```php
createaDraftOfferforaCampaign($authorization, $accountId, $campaignId, $createaDraftOfferforaCampaignRequest): \Ringba\Model\CreateaDraftOffer
```

Create a Draft Offer for a Campaign

Request to create a draft offer for a campaign. Once successful, this draft will be stored in your account until it is published or deleted. If you want to edit the draft before publishing, resend this request with the updated information.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters  <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name you want to assign to this offer</td> </tr> <tr> <td><code>description</code></td> <td>A description for the offer that will be shown when it is sent to the publishers</td> </tr> <tr> <td><code>category</code></td> <td>The industry category that the offer pertains to i.e. \"Automotive\\\\Car Insurance\" for an offer that will be sent to buyers in the car insurance industry</td> </tr> <tr> <td><code>offerVisibility</code></td> <td><p>Determines who can see the offer. This has two options:</p><ul><li>\"private\" makes the offer invitation-only</li><li>\"account\" makes the offer visible to any of your registered publishers</li></ul></td> </tr> <tr> <td><code>requireApproval</code></td> <td>Boolean value. If set to true then publishers must be approved by you before they can participate in an offer.</td> </tr> <tr> <td><code>languageCodes</code></td> <td>An array containing the codes for the languages of callers that should be routed through this offer</td> </tr> <tr> <td><code>numberRestrictions</code></td> <td>An object with the following parameters:</td> </tr> <tr> <td></td> <td><p><code>allowTF</code></p><p>Boolean value to determine if publishers can allocate Toll-Free numbers to this offer. This is the default setting that can be overridden per publisher.</p><hr><p><code>allowDID</code></p><p>Boolean value to determine if publishers can allocate Toll-Free numbers to this offer. This is the default setting that can be overridden per publisher.</p><hr><p><b>NOTE:</b> At least one of the <code>allowTF</code> or <code>allowDID</code> must be set to true</p><hr><p><code>maxNumbersPerPublisher</code></p><p>The maximum number of unique publisher numbers a participating publisher can allocate to this offer. This is the default setting that can be overridden per publisher. </tr> </table>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>notes</code></td> <td>Additional information about the offer that will only be visible when the publisher views the detail view for the offer</td> </tr> <tr> <td><code>expiration</code></td> <td>The offer will be discontinued at the specified date and time. It will no longer accept calls or new participants. It can be re-enabled after it expires. Publishers will be notified about the expiration immediately when they receive the offers and upon expiration. If you set an <code>expiation</code> you also need to add the following parameter called <code>timeZoneId</code></td> </tr> <tr> <td><code>timeZoneId</code></td> <td>The time zone that the <code>expiration</code> is set in</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$createaDraftOfferforaCampaignRequest = {"numberRestrictions":{"allowTF":true,"allowDID":true,"maxNumbersPerPublisher":1},"offerVisibility":"private","languageCodes":["EN"],"requireApproval":false,"name":"New Offer","description":"This is an offer to be sent to publishers","notes":"These notes can only be seen in the detail view","category":"Home Services\\Tree Removal","expiration":"03/10/2021 03:48 PM","timeZoneId":"Mountain Standard Time"}; // \Ringba\Model\CreateaDraftOfferforaCampaignRequest | 

try {
    $result = $apiInstance->createaDraftOfferforaCampaign($authorization, $accountId, $campaignId, $createaDraftOfferforaCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->createaDraftOfferforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **createaDraftOfferforaCampaignRequest** | [**\Ringba\Model\CreateaDraftOfferforaCampaignRequest**](../Model/CreateaDraftOfferforaCampaignRequest.md)|  |

### Return type

[**\Ringba\Model\CreateaDraftOffer**](../Model/CreateaDraftOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePublishedOfferforaCampaign()`

```php
deletePublishedOfferforaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\DeletePublishedOfferforaCampaign
```

Delete Published Offer for a Campaign

Request to delete the published offer from a campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->deletePublishedOfferforaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->deletePublishedOfferforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\DeletePublishedOfferforaCampaign**](../Model/DeletePublishedOfferforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaDraftOfferBeforePublishing()`

```php
deleteaDraftOfferBeforePublishing($authorization, $accountId, $campaignId): \Ringba\Model\DeleteaDraftOfferBeforePublishing
```

Delete a Draft Offer Before Publishing

Request to delete the draft offer associated with the campaign before it has been published.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->deleteaDraftOfferBeforePublishing($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->deleteaDraftOfferBeforePublishing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteaDraftOfferBeforePublishing**](../Model/DeleteaDraftOfferBeforePublishing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllOffersforaCampaign()`

```php
getAllOffersforaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\GetAllOffersforaCampaign
```

Get All Offers for a Campaign

Request to view all offers associated with the campaign. If there are draft offers and published offers present, they will both be displayed in the `offers` object in the response.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->getAllOffersforaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->getAllOffersforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\GetAllOffersforaCampaign**](../Model/GetAllOffersforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDraftOffersforaCampaign()`

```php
getDraftOffersforaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\GetDraftOffersforaCampaignwithnodraftoffersincampaign
```

Get Draft Offers for a Campaign

Request to retrieve offers previously created but not yet published for the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->getDraftOffersforaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->getDraftOffersforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\GetDraftOffersforaCampaignwithnodraftoffersincampaign**](../Model/GetDraftOffersforaCampaignwithnodraftoffersincampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublishedOffersforaCampaign()`

```php
getPublishedOffersforaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\GetPublishedOffersforaCampaign
```

Get Published Offers for a Campaign

Request to view published offers associated with the campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->getPublishedOffersforaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->getPublishedOffersforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\GetPublishedOffersforaCampaign**](../Model/GetPublishedOffersforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invitePublishertoParticipateinOffer()`

```php
invitePublishertoParticipateinOffer($authorization, $accountId, $campaignId, $invitePublishertoParticipateinOfferRequest): \Ringba\Model\InvitePublishertoParticipateinOffer
```

Invite Publisher to Participate in Offer

Request to invite a publisher to join the published offer associated with the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>publisherId</code></td> <td>The ID of the publisher you want to invite to participate in the published offer for the specified campaign. Get IDs of <a href=\"#get-information-about-publishers\">publishers</a> associated with your account.</td> </tr> <tr> <td><code>message</code></td> <td>The message you want the publisher to see when they receive the invite for the offer.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$invitePublishertoParticipateinOfferRequest = {"publisherId":"{{publisherId}}","message":"Please join my new offer"}; // \Ringba\Model\InvitePublishertoParticipateinOfferRequest | 

try {
    $result = $apiInstance->invitePublishertoParticipateinOffer($authorization, $accountId, $campaignId, $invitePublishertoParticipateinOfferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->invitePublishertoParticipateinOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **invitePublishertoParticipateinOfferRequest** | [**\Ringba\Model\InvitePublishertoParticipateinOfferRequest**](../Model/InvitePublishertoParticipateinOfferRequest.md)|  |

### Return type

[**\Ringba\Model\InvitePublishertoParticipateinOffer**](../Model/InvitePublishertoParticipateinOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseaPublishedOfferforaCampaign()`

```php
pauseaPublishedOfferforaCampaign($authorization, $accountId, $campaignId): \Ringba\Model\PauseaPublishedOfferforaCampaign
```

Pause a Published Offer for a Campaign

Request to pause the offer you currently have published for the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->pauseaPublishedOfferforaCampaign($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->pauseaPublishedOfferforaCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\PauseaPublishedOfferforaCampaign**](../Model/PauseaPublishedOfferforaCampaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishDraftOffers()`

```php
publishDraftOffers($authorization, $accountId, $campaignId): \Ringba\Model\PublishDraftOffers
```

Publish Draft Offers

Request to publish the draft offer created using the \"PUT Create a Draft Offer for a Campaign\" request above.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->publishDraftOffers($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->publishDraftOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\PublishDraftOffers**](../Model/PublishDraftOffers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeaPausedOffer()`

```php
resumeaPausedOffer($authorization, $accountId, $campaignId): \Ringba\Model\ResumeaPausedOffer
```

Resume a Paused Offer

Request to resume a published offer that has been paused.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->resumeaPausedOffer($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->resumeaPausedOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\ResumeaPausedOffer**](../Model/ResumeaPausedOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPublishersParticipatinginPublishedOffer()`

```php
viewPublishersParticipatinginPublishedOffer($authorization, $accountId, $campaignId): \Ringba\Model\ViewPublishersParticipatinginPublishedOffers
```

View Publishers Participating in Published Offer

Request to retrieve a list of publishers currently participating in the offer for the specified campaign.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\CampaignOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 

try {
    $result = $apiInstance->viewPublishersParticipatinginPublishedOffer($authorization, $accountId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignOffersApi->viewPublishersParticipatinginPublishedOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **campaignId** | **string**|  |

### Return type

[**\Ringba\Model\ViewPublishersParticipatinginPublishedOffers**](../Model/ViewPublishersParticipatinginPublishedOffers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
