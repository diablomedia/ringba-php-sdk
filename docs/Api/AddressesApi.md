# Ringba\AddressesApi

All URIs are relative to https://api.ringba.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIdAddressesAddressIdDelete()**](AddressesApi.md#accountIdAddressesAddressIdDelete) | **DELETE** /{accountId}/addresses/{addressId} | Delete Address
[**accountIdAddressesAddressIdGet()**](AddressesApi.md#accountIdAddressesAddressIdGet) | **GET** /{accountId}/addresses/{addressId} | Get Address by ID
[**accountIdAddressesAddressIdPatch()**](AddressesApi.md#accountIdAddressesAddressIdPatch) | **PATCH** /{accountId}/addresses/{addressId} | Edit Address
[**accountIdAddressesAddressIdSetDefaultPost()**](AddressesApi.md#accountIdAddressesAddressIdSetDefaultPost) | **POST** /{accountId}/addresses/{addressId}/SetDefault | Set Default Address
[**accountIdAddressesCountriesGet()**](AddressesApi.md#accountIdAddressesCountriesGet) | **GET** /{accountId}/addresses/countries | Get Countries Associated With Account
[**accountIdAddressesGet()**](AddressesApi.md#accountIdAddressesGet) | **GET** /{accountId}/addresses | Get Addresses
[**accountIdAddressesPost()**](AddressesApi.md#accountIdAddressesPost) | **POST** /{accountId}/addresses | Create New Address
[**accountIdAddressesRequirementsCountryCodeGet()**](AddressesApi.md#accountIdAddressesRequirementsCountryCodeGet) | **GET** /{accountId}/addresses/requirements/{countryCode} | Get Details and Requirements for a Specific Country


## `accountIdAddressesAddressIdDelete()`

```php
accountIdAddressesAddressIdDelete($accountId, $addressId, $authorization): object
```

Delete Address

Users can delete addresses from the list associated with their account.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$addressId = 'addressId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#a63045f1-9e95-46cd-896d-1fa137b3abc2)

try {
    $result = $apiInstance->accountIdAddressesAddressIdDelete($accountId, $addressId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#a63045f1-9e95-46cd-896d-1fa137b3abc2) | [optional]

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

## `accountIdAddressesAddressIdGet()`

```php
accountIdAddressesAddressIdGet($accountId, $addressId, $authorization): object
```

Get Address by ID

Get details about a specific address.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$addressId = 'addressId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesAddressIdGet($accountId, $addressId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

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

## `accountIdAddressesAddressIdPatch()`

```php
accountIdAddressesAddressIdPatch($accountId, $addressId, $authorization, $body): object
```

Edit Address

Users can edit any address associated with the account   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>  ### Request Body <hr> <br>  This request can be used to modify any of the parameters described in the \"POST Create New Address\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$addressId = 'addressId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdAddressesAddressIdPatch($accountId, $addressId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **body** | **object**|  | [optional]

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

## `accountIdAddressesAddressIdSetDefaultPost()`

```php
accountIdAddressesAddressIdSetDefaultPost($accountId, $addressId, $authorization): object
```

Set Default Address

Modify which address is the default address for the account.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$addressId = 'addressId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesAddressIdSetDefaultPost($accountId, $addressId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdSetDefaultPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

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

## `accountIdAddressesCountriesGet()`

```php
accountIdAddressesCountriesGet($accountId, $authorization): object
```

Get Countries Associated With Account

View details about the countries associated with the account   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesCountriesGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

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

## `accountIdAddressesGet()`

```php
accountIdAddressesGet($accountId, $authorization): object
```

Get Addresses

### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesGet($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

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

## `accountIdAddressesPost()`

```php
accountIdAddressesPost($accountId, $authorization, $body): object
```

Create New Address

Create a new address to associate with this account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>name</code></td>         <td>The name you want to assign to this address to make it easier to identify later</td>     </tr>     <tr>         <td><code>countryName</code></td>         <td>The country this address is in</td>     </tr>     <tr>         <td><code>countryCode</code></td>         <td>The alphabetic country code for the country of the address</td>     </tr>     <tr>         <td><code>customerName</code></td>         <td>The name of the business associated with this address</td>     </tr>     <tr>         <td><code>streetAddress</code></td>         <td>The street address you want to add</td>     </tr>     <tr>         <td><code>city</code></td>         <td>The city the address is in</td>     </tr>     <tr>         <td><code>postalCode</code></td>         <td>The postal (zip) code for the address</td>     </tr> </table>  #### Optional Parameters <table> <tr>         <th>Parameter</th>         <th>Description</th>     </tr> <tr>         <td><code>region</code></td>         <td>The state or region for the address, if applicable</td>     </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdAddressesPost($accountId, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]
 **body** | **object**|  | [optional]

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

## `accountIdAddressesRequirementsCountryCodeGet()`

```php
accountIdAddressesRequirementsCountryCodeGet($accountId, $countryCode, $authorization): object
```

Get Details and Requirements for a Specific Country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string
$countryCode = 'countryCode_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesRequirementsCountryCodeGet($accountId, $countryCode, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesRequirementsCountryCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **countryCode** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

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
