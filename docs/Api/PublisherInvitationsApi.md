# Ringba\PublisherInvitationsApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteanInvitation()**](PublisherInvitationsApi.md#deleteanInvitation) | **DELETE** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Delete an Invitation
[**getDetailsAboutanInvitation()**](PublisherInvitationsApi.md#getDetailsAboutanInvitation) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Get Details About an Invitation
[**getInvitationsforaPublisher()**](PublisherInvitationsApi.md#getInvitationsforaPublisher) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations | Get Invitations for a Publisher
[**inviteUsertoJoinPublisher()**](PublisherInvitationsApi.md#inviteUsertoJoinPublisher) | **POST** /{accountId}/Affiliates/{publisherId}/Invitations | Invite User to Join Publisher


## `deleteanInvitation()`

```php
deleteanInvitation($authorization, $accountId, $publisherId, $invitationId): \Ringba\Model\DeleteanInvitation
```

Delete an Invitation

Request to remove an invitation that has not yet been accepted.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account. <br>  `invitationId` Find IDs of invitations to join a publisher using the \"GET Get Invitations for a Publisher\" request above

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$invitationId = 'invitationId_example'; // string | 

try {
    $result = $apiInstance->deleteanInvitation($authorization, $accountId, $publisherId, $invitationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->deleteanInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
 **invitationId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteanInvitation**](../Model/DeleteanInvitation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutanInvitation()`

```php
getDetailsAboutanInvitation($authorization, $accountId, $publisherId, $invitationId): \Ringba\Model\GetDetailsAboutanInvitation
```

Get Details About an Invitation

Request to view details about a single invitation to join a publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account. <br>  `invitationId` Find IDs of invitations to join a publisher using the \"GET Get Invitations for a Publisher\" request above

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$invitationId = 'invitationId_example'; // string | 

try {
    $result = $apiInstance->getDetailsAboutanInvitation($authorization, $accountId, $publisherId, $invitationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->getDetailsAboutanInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
 **invitationId** | **string**|  |

### Return type

[**\Ringba\Model\GetDetailsAboutanInvitation**](../Model/GetDetailsAboutanInvitation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvitationsforaPublisher()`

```php
getInvitationsforaPublisher($authorization, $accountId, $publisherId): \Ringba\Model\GetInvitationsforaPublisher
```

Get Invitations for a Publisher

Request to view a list of invitations currently associated with a publisher.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 

try {
    $result = $apiInstance->getInvitationsforaPublisher($authorization, $accountId, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->getInvitationsforaPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |

### Return type

[**\Ringba\Model\GetInvitationsforaPublisher**](../Model/GetInvitationsforaPublisher.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteUsertoJoinPublisher()`

```php
inviteUsertoJoinPublisher($authorization, $accountId, $publisherId, $inviteUsertoJoinPublisherRequest): \Ringba\Model\InviteUser
```

Invite User to Join Publisher

Request to invite a Ringba user to join a publisher associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>  `publisherId` Find a list of [publishers](#get-information-about-publishers) associated with your account.  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>email</code></td> <td>The email address of the Ringba user you want to send the invitation to.</td> </tr> <tr> <td><code>confirmEmail</code></td> <td>This must match the value of <code>email</code></td> </tr> <tr> <td><code>firstName</code></td> <td>The first name of the Ringba user you are inviting to join the publisher.</td> </tr> <tr> <td><code>lastName</code></td> <td>The last name of the Ringba user you are inviting to join the publisher.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\PublisherInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$accountId = 'accountId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$inviteUsertoJoinPublisherRequest = {"email":"new.publisher@email.com","confirmEmail":"new.publisher@email.com","firstName":"New","lastName":"Pub"}; // \Ringba\Model\InviteUsertoJoinPublisherRequest | 

try {
    $result = $apiInstance->inviteUsertoJoinPublisher($authorization, $accountId, $publisherId, $inviteUsertoJoinPublisherRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublisherInvitationsApi->inviteUsertoJoinPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) |
 **accountId** | **string**|  |
 **publisherId** | **string**|  |
 **inviteUsertoJoinPublisherRequest** | [**\Ringba\Model\InviteUsertoJoinPublisherRequest**](../Model/InviteUsertoJoinPublisherRequest.md)|  |

### Return type

[**\Ringba\Model\InviteUser**](../Model/InviteUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
