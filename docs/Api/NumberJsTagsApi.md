# Ringba\NumberJsTagsApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewJsTagforaNumber()**](NumberJsTagsApi.md#createNewJsTagforaNumber) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Create New Js Tag for a Number
[**getJsTagsforaNumber()**](NumberJsTagsApi.md#getJsTagsforaNumber) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Get Js Tags for a Number
[**modifyJsTagforaNumber()**](NumberJsTagsApi.md#modifyJsTagforaNumber) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag/{JsTagId} | Modify Js Tag for a Number
[**removeaJsTagfromaNumber()**](NumberJsTagsApi.md#removeaJsTagfromaNumber) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Remove a Js Tag from a Number


## `createNewJsTagforaNumber()`

```php
createNewJsTagforaNumber($accountId, $campaignId, $publisherId, $numberId, $createNewJsTagforaNumberRequest, $authorization): \Ringba\Model\CreateNewJsTagforaNumber
```

Create New Js Tag for a Number

Request to create a new Js Tag for the specified number  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `numberId` get IDs of [numbers](#get-numbers-associated-with-your-account) associated with your account. The response returned form that request will contain an object for each number. Each number object will have a `id` which is the ID needed for this request.  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>name</code></td> <td>The name you want to assign to this Js Tag</td> </tr> <tr> <td><code>e164ExistingNumber</code></td> <td>The number that you will be displaying on your webpage that you want to link to the campaign number specified in the request.</td> </tr> <tr> <td><code>hasNumberPool</code></td> <td>Boolean value to determine if this Js Tag is linking to a number pool. Set to false if you are linking it to a single number</td> </tr> <tr> <td><code>numberPoolId</code></td> <td>If <code>hasNumberPool</code> is set to true, put the ID of the number pool here</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$createNewJsTagforaNumberRequest = {"name":"Example Tag","e164ExistingNumber":"+18885551234","hasNumberPool":false,"numberPoolId":null}; // \Ringba\Model\CreateNewJsTagforaNumberRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->createNewJsTagforaNumber($accountId, $campaignId, $publisherId, $numberId, $createNewJsTagforaNumberRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberJsTagsApi->createNewJsTagforaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **numberId** | **string**|  |
 **createNewJsTagforaNumberRequest** | [**\Ringba\Model\CreateNewJsTagforaNumberRequest**](../Model/CreateNewJsTagforaNumberRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\CreateNewJsTagforaNumber**](../Model/CreateNewJsTagforaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJsTagsforaNumber()`

```php
getJsTagsforaNumber($accountId, $campaignId, $publisherId, $numberId, $authorization): \Ringba\Model\GetJsTagsforaNumber
```

Get Js Tags for a Number

Request to get Js Tags associated with a specified number.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `numberId` get IDs of [numbers](#get-numbers-associated-with-your-account) associated with your account. The response returned form that request will contain an object for each number. Each number object will have a `id` which is the ID needed for this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getJsTagsforaNumber($accountId, $campaignId, $publisherId, $numberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberJsTagsApi->getJsTagsforaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **numberId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetJsTagsforaNumber**](../Model/GetJsTagsforaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyJsTagforaNumber()`

```php
modifyJsTagforaNumber($accountId, $campaignId, $publisherId, $numberId, $jsTagId, $modifyJsTagforaNumberRequest, $authorization): \Ringba\Model\ModifyJsTagforaNumber
```

Modify Js Tag for a Number

### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$jsTagId = 'jsTagId_example'; // string | 
$modifyJsTagforaNumberRequest = {"name":"New Name","e164ExistingNumber":"+18885559876"}; // \Ringba\Model\ModifyJsTagforaNumberRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->modifyJsTagforaNumber($accountId, $campaignId, $publisherId, $numberId, $jsTagId, $modifyJsTagforaNumberRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberJsTagsApi->modifyJsTagforaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **numberId** | **string**|  |
 **jsTagId** | **string**|  |
 **modifyJsTagforaNumberRequest** | [**\Ringba\Model\ModifyJsTagforaNumberRequest**](../Model/ModifyJsTagforaNumberRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\ModifyJsTagforaNumber**](../Model/ModifyJsTagforaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeaJsTagfromaNumber()`

```php
removeaJsTagfromaNumber($accountId, $campaignId, $publisherId, $numberId, $authorization): \Ringba\Model\RemoveaJsTagfromaNumber
```

Remove a Js Tag from a Number

Request to remove a Js Tag from the specified number.  ### Path Variables  <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  `campaignId` get IDs of your [campaigns](#get-campaign-information) <br>  `publisherId` get IDs of [publishers](#get-information-about-publishers) associated with your account  `numberId` get IDs of [numbers](#get-numbers-associated-with-your-account) associated with your account. The response returned form that request will contain an object for each number. Each number object will have a `id` which is the ID needed for this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumberJsTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$campaignId = 'campaignId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->removeaJsTagfromaNumber($accountId, $campaignId, $publisherId, $numberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberJsTagsApi->removeaJsTagfromaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **campaignId** | **string**|  |
 **publisherId** | **string**|  |
 **numberId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\RemoveaJsTagfromaNumber**](../Model/RemoveaJsTagfromaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
