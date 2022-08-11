# OpenAPI\Client\NumbersApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdNumbersGet()**](NumbersApi.md#accountIdNumbersGet) | **GET** /{accountId}/numbers | Get Numbers Associated with Account |
| [**accountIdNumbersNumberIdAffiliatePublisherIdDelete()**](NumbersApi.md#accountIdNumbersNumberIdAffiliatePublisherIdDelete) | **DELETE** /{accountId}/numbers/{numberId}/Affiliate/{publisherId} | Remove a Publisher from a Number |
| [**accountIdNumbersNumberIdAffiliatePut()**](NumbersApi.md#accountIdNumbersNumberIdAffiliatePut) | **PUT** /{accountId}/numbers/{numberId}/affiliate | Add a Publisher to a Number |
| [**accountIdNumbersNumberIdDelete()**](NumbersApi.md#accountIdNumbersNumberIdDelete) | **DELETE** /{accountId}/numbers/{numberId} | Delete a Number From Your Account |
| [**accountIdNumbersNumberIdGet()**](NumbersApi.md#accountIdNumbersNumberIdGet) | **GET** /{accountId}/numbers/{numberId} | Get Details About a Specific Number |
| [**accountIdNumbersNumberIdInboundReferencesGet()**](NumbersApi.md#accountIdNumbersNumberIdInboundReferencesGet) | **GET** /{accountId}/numbers/{numberId}/InboundReferences | Get Inbound References for a Specific Number |
| [**accountIdNumbersPost()**](NumbersApi.md#accountIdNumbersPost) | **POST** /{accountId}/numbers | Create New Number |
| [**accountIdNumbersReleaseNonUsedNumbersDelete()**](NumbersApi.md#accountIdNumbersReleaseNonUsedNumbersDelete) | **DELETE** /{accountId}/numbers/ReleaseNonUsedNumbers | Delete Unused Numbers From Your Account |
| [**accountIdNumbersUCLTDOMQPatch()**](NumbersApi.md#accountIdNumbersUCLTDOMQPatch) | **PATCH** /{accountId}/numbers/UCLTDOMQ | Edit Information About a Number |


## `accountIdNumbersGet()`

```php
accountIdNumbersGet($account_id, $authorization): object
```

Get Numbers Associated with Account

Get all numbers associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumbersGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersNumberIdAffiliatePublisherIdDelete()`

```php
accountIdNumbersNumberIdAffiliatePublisherIdDelete($account_id, $number_id, $publisher_id, $authorization): object
```

Remove a Publisher from a Number

Request to remove a publisher from a number associated with your account.   ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request.  `publisherID` The ID of the publisher that is currently assigned to the specified number. You can see what publisher is assigned to the number using the \"GET Get Details About a Specific Number\" request above. The response from that request will have an object called `affiliate` which will contain an `id` which is the ID of the publisher associated with the number. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$number_id = 'number_id_example'; // string
$publisher_id = 'publisher_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumbersNumberIdAffiliatePublisherIdDelete($account_id, $number_id, $publisher_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersNumberIdAffiliatePublisherIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **number_id** | **string**|  | |
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

## `accountIdNumbersNumberIdAffiliatePut()`

```php
accountIdNumbersNumberIdAffiliatePut($account_id, $number_id, $authorization, $body): object
```

Add a Publisher to a Number

Request to add a publisher to a number associated with your account.   ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>affiliateId<code></td> <td>The ID of the <a href=#get-information-about-publishers>publisher</a> that you want to assign to the number specified in the request URL</td> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumbersNumberIdAffiliatePut($account_id, $number_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersNumberIdAffiliatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersNumberIdDelete()`

```php
accountIdNumbersNumberIdDelete($account_id, $number_id, $authorization): object
```

Delete a Number From Your Account

Request to delete a specific number from your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>  __NOTE:__ If the number you are attempting to delete is linked to other objects (publishers, campaigns, etc.) this request will fail (see the \"Delete a Number From Your Account (failed because number is linked to other objects)\" example). One way to solve this is to manually unlink the number from anything it is linked to. Another option is to use the following optional query parameter:  `?unlink=true` See the \"Delete a Number From Your Account with unlink query parameter\" example.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumbersNumberIdDelete($account_id, $number_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersNumberIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersNumberIdGet()`

```php
accountIdNumbersNumberIdGet($account_id, $number_id, $authorization): object
```

Get Details About a Specific Number

Get information about a single phone number associated with your account.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumbersNumberIdGet($account_id, $number_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersNumberIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersNumberIdInboundReferencesGet()`

```php
accountIdNumbersNumberIdInboundReferencesGet($account_id, $number_id, $authorization): object
```

Get Inbound References for a Specific Number

Request to view the references to a specific number.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$number_id = 'number_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumbersNumberIdInboundReferencesGet($account_id, $number_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersNumberIdInboundReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersPost()`

```php
accountIdNumbersPost($account_id, $authorization, $body): object
```

Create New Number

Request to allocate a new number for use with your account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> <br>  ### Request Body <hr> <br>  #### Required Parameters <table> <tr> <th>Paramter</th> <th>Description</th> </tr> <tr> <td><code>countryCode</code></td> <td>The code for the country in which you want to purchase a phone number</td> </tr> <tr> <tr> <td><code>chargeAccountIfNeeded</code></td> <td>Boolean value. If set to true, your default credit card will be billed if your account balance is not sufficient to complete the transaction. If set to false the request will fail if your account balance is not sufficient to complete the transaction.</td> </tr> <td><code>isTollFree</code><p><b>US numbers only</b></td> <td>Boolean value. Determines whether this number will be a toll-free number.</td> </tr> </table>  #### Optional Parameters <table> <tr> <th>Paramter</th> <th>Description</th> </tr> <tr> <td><code>areaCode</code><p><b>US numbers only</b></td> <td>The three digit prefix that you want for this number. Must be a valid US area code. If you are creating a toll-free number, you can only use valid toll-free prefixes for this value (800, 888, 877, 866, 855, 844, 833). <p><b>NOTE:</b> To add an 800 number, you need to contact your sales account manager. <p><b>NOTE:</b> If you are getting an error message of \"could not allocate new number from telco provider\" (See the \"Create New Number failed due to lack of inventory\" example) you can try allocating a number without specifying the prefix. If you want the prefix that you are trying to specify, you must contact you sales account manager.</td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumbersPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersReleaseNonUsedNumbersDelete()`

```php
accountIdNumbersReleaseNonUsedNumbersDelete($account_id, $authorization): object
```

Delete Unused Numbers From Your Account

Request to deallocate any numbers associated with your account that are not currently assigned to a publisher, campaign, or JsTag.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdNumbersReleaseNonUsedNumbersDelete($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersReleaseNonUsedNumbersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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

## `accountIdNumbersUCLTDOMQPatch()`

```php
accountIdNumbersUCLTDOMQPatch($account_id, $authorization, $body): object
```

Edit Information About a Number

Request to edit information about a specific number.  ### Path Variables <hr> <br>  `accountId` Find your [accountId](#get-your-account-information)  `numberId` Find your [numberIds](#get-numbers-associated-with-your-account). The response returned from the \"GET Get Numbers Associated With Your Account\" request will contain an object for each number. Each number object will have a id which is the ID needed for this request. <br> <br>  ### Request Body <hr> <br>  #### Optional Parameters <table> <tr> <th>Parameter</th> <th>Description</th> </tr> <tr> <td><code>enabled</code></td> <td>Boolean value. If se to false, calls to the number will be paused but the number will remain associated with your account.</td> </tr> <tr> <td><code>name</code></td> <td>The name of the number to make it easier to find in reports</td> </tr> <tr> <td><code>tags</code></td> <td>An object containing two parameters.</td> </tr> <tr> <td></td> <td><p><code>tagName</code></p><p>The name of the tag you want associated with this number</p><hr><p><code>tagValue</code></p><p>The value for the tag that you want associated with this number</p></td> </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdNumbersUCLTDOMQPatch($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->accountIdNumbersUCLTDOMQPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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
