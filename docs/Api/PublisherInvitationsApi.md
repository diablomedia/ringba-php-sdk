# OpenAPI\Client\PublisherInvitationsApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdAffiliatesPublisherIdInvitationsGet()**](PublisherInvitationsApi.md#accountIdAffiliatesPublisherIdInvitationsGet) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations | Get Invitations for a Publisher |
| [**accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete()**](PublisherInvitationsApi.md#accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete) | **DELETE** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Delete an Invitation |
| [**accountIdAffiliatesPublisherIdInvitationsInvitationIdGet()**](PublisherInvitationsApi.md#accountIdAffiliatesPublisherIdInvitationsInvitationIdGet) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Get Details About an Invitation |
| [**accountIdAffiliatesPublisherIdInvitationsPost()**](PublisherInvitationsApi.md#accountIdAffiliatesPublisherIdInvitationsPost) | **POST** /{accountId}/Affiliates/{publisherId}/Invitations | Invite User to Join Publisher |


## `accountIdAffiliatesPublisherIdInvitationsGet()`

```php
accountIdAffiliatesPublisherIdInvitationsGet($account_id, $publisher_id, $authorization): object
```

Get Invitations for a Publisher

Request to view a list of invitations currently associated with a publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAffiliatesPublisherIdInvitationsGet($account_id, $publisher_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->accountIdAffiliatesPublisherIdInvitationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **publisher_id** | **string**|  | |
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

## `accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete()`

```php
accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete($account_id, $publisher_id, $invitation_id, $authorization): object
```

Delete an Invitation

Request to remove an invitation that has not yet been accepted.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account. <br>  `invitationId` Find IDs of invitations to join a publisher using the \"GET Get Invitations for a Publisher\" request above

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$invitation_id = 'invitation_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete($account_id, $publisher_id, $invitation_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **invitation_id** | **string**|  | |
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

## `accountIdAffiliatesPublisherIdInvitationsInvitationIdGet()`

```php
accountIdAffiliatesPublisherIdInvitationsInvitationIdGet($account_id, $publisher_id, $invitation_id, $authorization): object
```

Get Details About an Invitation

Request to view details about a single invitation to join a publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account. <br>  `invitationId` Find IDs of invitations to join a publisher using the \"GET Get Invitations for a Publisher\" request above

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$invitation_id = 'invitation_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAffiliatesPublisherIdInvitationsInvitationIdGet($account_id, $publisher_id, $invitation_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->accountIdAffiliatesPublisherIdInvitationsInvitationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **publisher_id** | **string**|  | |
| **invitation_id** | **string**|  | |
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

## `accountIdAffiliatesPublisherIdInvitationsPost()`

```php
accountIdAffiliatesPublisherIdInvitationsPost($account_id, $publisher_id, $authorization, $body): object
```

Invite User to Join Publisher

Request to invite a Ringba user to join a publisher associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>email</code></td> <td>The email address of the Ringba user you want to send the invitation to.</td> </tr> <tr> <td><code>confirmEmail</code></td> <td>This must match the value of <code>email</code></td> </tr> <tr> <td><code>firstName</code></td> <td>The first name of the Ringba user you are inviting to join the publisher.</td> </tr> <tr> <td><code>lastName</code></td> <td>The last name of the Ringba user you are inviting to join the publisher.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdAffiliatesPublisherIdInvitationsPost($account_id, $publisher_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->accountIdAffiliatesPublisherIdInvitationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **publisher_id** | **string**|  | |
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
