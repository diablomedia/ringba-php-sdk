# Ringba\NumbersApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addaPublishertoaNumber()**](NumbersApi.md#addaPublishertoaNumber) | **PUT** /{accountId}/numbers/{numberId}/affiliate | Add a Publisher to a Number
[**createNewNumber()**](NumbersApi.md#createNewNumber) | **POST** /{accountId}/numbers | Create New Number
[**deleteUnusedNumbersFromYourAccount()**](NumbersApi.md#deleteUnusedNumbersFromYourAccount) | **DELETE** /{accountId}/numbers/ReleaseNonUsedNumbers | Delete Unused Numbers From Your Account
[**deleteaNumberFromYourAccount()**](NumbersApi.md#deleteaNumberFromYourAccount) | **DELETE** /{accountId}/numbers/{numberId} | Delete a Number From Your Account
[**editInformationAboutaNumber()**](NumbersApi.md#editInformationAboutaNumber) | **PATCH** /{accountId}/numbers/UCLTDOMQ | Edit Information About a Number
[**getDetailsAboutaSpecificNumber()**](NumbersApi.md#getDetailsAboutaSpecificNumber) | **GET** /{accountId}/numbers/{numberId} | Get Details About a Specific Number
[**getInboundReferencesforaSpecificNumber()**](NumbersApi.md#getInboundReferencesforaSpecificNumber) | **GET** /{accountId}/numbers/{numberId}/InboundReferences | Get Inbound References for a Specific Number
[**getNumbersAssociatedwithAccount()**](NumbersApi.md#getNumbersAssociatedwithAccount) | **GET** /{accountId}/numbers | Get Numbers Associated with Account
[**removeaPublisherfromaNumber()**](NumbersApi.md#removeaPublisherfromaNumber) | **DELETE** /{accountId}/numbers/{numberId}/Affiliate/{publisherId} | Remove a Publisher from a Number


## `addaPublishertoaNumber()`

```php
addaPublishertoaNumber($accountId, $numberId, $addaPublishertoaNumberRequest, $authorization): \Ringba\Model\AddaPublishertoaNumber
```

Add a Publisher to a Number

Request to add a publisher to a number associated with your account.   ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>affiliateId<code></td> <td>The ID of the <a href=#get-information-about-publishers>publisher</a> that you want to assign to the number specified in the request URL</td> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$addaPublishertoaNumberRequest = {"affiliateId":"{{publisherId}}"}; // \Ringba\Model\AddaPublishertoaNumberRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->addaPublishertoaNumber($accountId, $numberId, $addaPublishertoaNumberRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->addaPublishertoaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberId** | **string**|  |
 **addaPublishertoaNumberRequest** | [**\Ringba\Model\AddaPublishertoaNumberRequest**](../Model/AddaPublishertoaNumberRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\AddaPublishertoaNumber**](../Model/AddaPublishertoaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewNumber()`

```php
createNewNumber($accountId, $createNewNumberRequest, $authorization): \Ringba\Model\CreateNewNumberNotTollFree
```

Create New Number

Request to allocate a new number for use with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Paramter</th> <th>Description</th> </tr> <tr> <td><code>countryCode</code></td> <td>The code for the country in which you want to purchase a phone number</td> </tr> <tr> <tr> <td><code>chargeAccountIfNeeded</code></td> <td>Boolean value. If set to true, your default credit card will be billed if your account balance is not sufficient to complete the transaction. If set to false the request will fail if your account balance is not sufficient to complete the transaction.</td> </tr> <td><code>isTollFree</code><p><b>US numbers only</b></td> <td>Boolean value. Determines whether this number will be a toll-free number.</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Paramter</th> <th>Description</th> </tr> <tr> <td><code>areaCode</code><p><b>US numbers only</b></td> <td>The three digit prefix that you want for this number. Must be a valid US area code. If you are creating a toll-free number, you can only use valid toll-free prefixes for this value (800, 888, 877, 866, 855, 844, 833). <p><b>NOTE:</b> To add an 800 number, you need to contact your sales account manager. <p><b>NOTE:</b> If you are getting an error message of \"could not allocate new number from telco provider\" (See the \"Create New Number failed due to lack of inventory\" example) you can try allocating a number without specifying the prefix. If you want the prefix that you are trying to specify, you must contact you sales account manager.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$createNewNumberRequest = {"countryCode":"US","chargeAccountIfNeeded":true,"isTollFree":true,"areaCode":"877"}; // \Ringba\Model\CreateNewNumberRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->createNewNumber($accountId, $createNewNumberRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->createNewNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **createNewNumberRequest** | [**\Ringba\Model\CreateNewNumberRequest**](../Model/CreateNewNumberRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\CreateNewNumberNotTollFree**](../Model/CreateNewNumberNotTollFree.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUnusedNumbersFromYourAccount()`

```php
deleteUnusedNumbersFromYourAccount($accountId, $authorization): \Ringba\Model\DeleteUnusedNumbersFromYourAccount
```

Delete Unused Numbers From Your Account

Request to deallocate any numbers associated with your account that are not currently assigned to a publisher, campaign, or JsTag.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->deleteUnusedNumbersFromYourAccount($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->deleteUnusedNumbersFromYourAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\DeleteUnusedNumbersFromYourAccount**](../Model/DeleteUnusedNumbersFromYourAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteaNumberFromYourAccount()`

```php
deleteaNumberFromYourAccount($accountId, $numberId, $authorization): \Ringba\Model\DeleteaNumberFromYourAccountwithunlinkqueryparameter
```

Delete a Number From Your Account

Request to delete a specific number from your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>  __NOTE:__ If the number you are attempting to delete is linked to other objects (publishers, campaigns, etc.) this request will fail (see the \"Delete a Number From Your Account (failed because number is linked to other objects)\" example). One way to solve this is to manually unlink the number from anything it is linked to. Another option is to use the following optional query parameter:  `?unlink=true` See the \"Delete a Number From Your Account with unlink query parameter\" example.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->deleteaNumberFromYourAccount($accountId, $numberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->deleteaNumberFromYourAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\DeleteaNumberFromYourAccountwithunlinkqueryparameter**](../Model/DeleteaNumberFromYourAccountwithunlinkqueryparameter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editInformationAboutaNumber()`

```php
editInformationAboutaNumber($accountId, $editInformationAboutaNumberRequest, $authorization): \Ringba\Model\EditInformationAboutaNumber
```

Edit Information About a Number

Request to edit information about a specific number.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>  ### Request Body <hr> <br>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>enabled</code></td> <td>Boolean value. If se to false, calls to the number will be paused but the number will remain associated with your account.</td> </tr> <tr> <td><code>name</code></td> <td>The name of the number to make it easier to find in reports</td> </tr> <tr> <td><code>tags</code></td> <td>An object containing two parameters.</td> </tr> <tr> <td></td> <td><p><code>tagName</code></p><p>The name of the tag you want associated with this number</p><hr><p><code>tagValue</code></p><p>The value for the tag that you want associated with this number</p></td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$editInformationAboutaNumberRequest = {"enabled":true,"name":"New Name","tags":[{"tagName":"TagName","tagValue":"TagValue"}]}; // \Ringba\Model\EditInformationAboutaNumberRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->editInformationAboutaNumber($accountId, $editInformationAboutaNumberRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->editInformationAboutaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **editInformationAboutaNumberRequest** | [**\Ringba\Model\EditInformationAboutaNumberRequest**](../Model/EditInformationAboutaNumberRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\EditInformationAboutaNumber**](../Model/EditInformationAboutaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsAboutaSpecificNumber()`

```php
getDetailsAboutaSpecificNumber($accountId, $numberId, $authorization): \Ringba\Model\GetDetailsAboutaSpecificNumber
```

Get Details About a Specific Number

Get information about a single phone number associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getDetailsAboutaSpecificNumber($accountId, $numberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getDetailsAboutaSpecificNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetDetailsAboutaSpecificNumber**](../Model/GetDetailsAboutaSpecificNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundReferencesforaSpecificNumber()`

```php
getInboundReferencesforaSpecificNumber($accountId, $numberId, $authorization): \Ringba\Model\GetInboundReferencesforaSpecificNumberwithaJsTag
```

Get Inbound References for a Specific Number

Request to view the references to a specific number.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getInboundReferencesforaSpecificNumber($accountId, $numberId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getInboundReferencesforaSpecificNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetInboundReferencesforaSpecificNumberwithaJsTag**](../Model/GetInboundReferencesforaSpecificNumberwithaJsTag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNumbersAssociatedwithAccount()`

```php
getNumbersAssociatedwithAccount($accountId, $authorization): \Ringba\Model\GetNumbersAssociatedwithAccount
```

Get Numbers Associated with Account

Get all numbers associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getNumbersAssociatedwithAccount($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->getNumbersAssociatedwithAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetNumbersAssociatedwithAccount**](../Model/GetNumbersAssociatedwithAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeaPublisherfromaNumber()`

```php
removeaPublisherfromaNumber($accountId, $numberId, $publisherId, $authorization): \Ringba\Model\RemoveaPublisherfromaNumber
```

Remove a Publisher from a Number

Request to remove a publisher from a number associated with your account.   ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request.  `publisherID` The ID of the publisher that is currently assigned to the specified number. You can see what publisher is assigned to the number using the \"GET Get Details About a Specific Number\" request above. The response from that request will have an object called `affiliate` which will contain an `id` which is the ID of the publisher associated with the number. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$numberId = 'numberId_example'; // string | 
$publisherId = 'publisherId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->removeaPublisherfromaNumber($accountId, $numberId, $publisherId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->removeaPublisherfromaNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **numberId** | **string**|  |
 **publisherId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\RemoveaPublisherfromaNumber**](../Model/RemoveaPublisherfromaNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
