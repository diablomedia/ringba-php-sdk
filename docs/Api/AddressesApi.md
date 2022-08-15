# Ringba\AddressesApi

All URIs are relative to https://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewAddress()**](AddressesApi.md#createNewAddress) | **POST** /{accountId}/addresses | Create New Address
[**deleteAddress()**](AddressesApi.md#deleteAddress) | **DELETE** /{accountId}/addresses/{addressId} | Delete Address
[**editAddress()**](AddressesApi.md#editAddress) | **PATCH** /{accountId}/addresses/{addressId} | Edit Address
[**getAddressbyID()**](AddressesApi.md#getAddressbyID) | **GET** /{accountId}/addresses/{addressId} | Get Address by ID
[**getAddresses()**](AddressesApi.md#getAddresses) | **GET** /{accountId}/addresses | Get Addresses
[**getCountriesAssociatedWithAccount()**](AddressesApi.md#getCountriesAssociatedWithAccount) | **GET** /{accountId}/addresses/countries | Get Countries Associated With Account
[**getDetailsandRequirementsforaSpecificCountry()**](AddressesApi.md#getDetailsandRequirementsforaSpecificCountry) | **GET** /{accountId}/addresses/requirements/{countryCode} | Get Details and Requirements for a Specific Country
[**setDefaultAddress()**](AddressesApi.md#setDefaultAddress) | **POST** /{accountId}/addresses/{addressId}/SetDefault | Set Default Address


## `createNewAddress()`

```php
createNewAddress($accountId, $createNewAddressRequest, $authorization): \Ringba\Model\CreateNewAddress
```

Create New Address

Create a new address to associate with this account.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>name</code></td>         <td>The name you want to assign to this address to make it easier to identify later</td>     </tr>     <tr>         <td><code>countryName</code></td>         <td>The country this address is in</td>     </tr>     <tr>         <td><code>countryCode</code></td>         <td>The alphabetic country code for the country of the address</td>     </tr>     <tr>         <td><code>customerName</code></td>         <td>The name of the business associated with this address</td>     </tr>     <tr>         <td><code>streetAddress</code></td>         <td>The street address you want to add</td>     </tr>     <tr>         <td><code>city</code></td>         <td>The city the address is in</td>     </tr>     <tr>         <td><code>postalCode</code></td>         <td>The postal (zip) code for the address</td>     </tr> </table>  #### Optional Parameters <table> <tr>         <th>Parameter</th>         <th>Description</th>     </tr> <tr>         <td><code>region</code></td>         <td>The state or region for the address, if applicable</td>     </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$createNewAddressRequest = {"city":"Midlothian","countryCode":"US","countryName":"United States","customerName":"Paper Street Soap Company","name":"Test2","postalCode":"23112","region":"Virginia","streetAddress":"456 Paper St"}; // \Ringba\Model\CreateNewAddressRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->createNewAddress($accountId, $createNewAddressRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createNewAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **createNewAddressRequest** | [**\Ringba\Model\CreateNewAddressRequest**](../Model/CreateNewAddressRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\CreateNewAddress**](../Model/CreateNewAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAddress()`

```php
deleteAddress($authorization, $accountId, $addressId): \Ringba\Model\DeleteAddress
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
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#a63045f1-9e95-46cd-896d-1fa137b3abc2)
$accountId = 'accountId_example'; // string | 
$addressId = 'addressId_example'; // string | 

try {
    $result = $apiInstance->deleteAddress($authorization, $accountId, $addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Find your [apiToken](#a63045f1-9e95-46cd-896d-1fa137b3abc2) |
 **accountId** | **string**|  |
 **addressId** | **string**|  |

### Return type

[**\Ringba\Model\DeleteAddress**](../Model/DeleteAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editAddress()`

```php
editAddress($accountId, $addressId, $editAddressRequest, $authorization): \Ringba\Model\EditAddress
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
$accountId = 'accountId_example'; // string | 
$addressId = 'addressId_example'; // string | 
$editAddressRequest = {"name":"new name","customerName":"some business","streetAddress":"456 Example St","city":"San Diego","region":"California","postalCode":"92115","countryName":"United States","countryCode":"US"}; // \Ringba\Model\EditAddressRequest | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->editAddress($accountId, $addressId, $editAddressRequest, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->editAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **editAddressRequest** | [**\Ringba\Model\EditAddressRequest**](../Model/EditAddressRequest.md)|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\EditAddress**](../Model/EditAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressbyID()`

```php
getAddressbyID($accountId, $addressId, $authorization): \Ringba\Model\GetAddressbyID
```

Get Address by ID

Get details about a specific address.    ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ringba\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountId = 'accountId_example'; // string | 
$addressId = 'addressId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getAddressbyID($accountId, $addressId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressbyID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetAddressbyID**](../Model/GetAddressbyID.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddresses()`

```php
getAddresses($accountId, $authorization): \Ringba\Model\GetAddresses
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
$accountId = 'accountId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getAddresses($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetAddresses**](../Model/GetAddresses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountriesAssociatedWithAccount()`

```php
getCountriesAssociatedWithAccount($accountId, $authorization): \Ringba\Model\GetAddressesbyCountry[]
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
$accountId = 'accountId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getCountriesAssociatedWithAccount($accountId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getCountriesAssociatedWithAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetAddressesbyCountry[]**](../Model/GetAddressesbyCountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailsandRequirementsforaSpecificCountry()`

```php
getDetailsandRequirementsforaSpecificCountry($accountId, $countryCode, $authorization): \Ringba\Model\GetDetailsaboutaspecificcountry
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
$accountId = 'accountId_example'; // string | 
$countryCode = 'countryCode_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->getDetailsandRequirementsforaSpecificCountry($accountId, $countryCode, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getDetailsandRequirementsforaSpecificCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **countryCode** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\GetDetailsaboutaspecificcountry**](../Model/GetDetailsaboutaspecificcountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDefaultAddress()`

```php
setDefaultAddress($accountId, $addressId, $authorization): \Ringba\Model\SetDefaultAddress
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
$accountId = 'accountId_example'; // string | 
$addressId = 'addressId_example'; // string | 
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->setDefaultAddress($accountId, $addressId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->setDefaultAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**|  |
 **addressId** | **string**|  |
 **authorization** | **string**| Find your [apiToken](#get-or-create-api-token) | [optional]

### Return type

[**\Ringba\Model\SetDefaultAddress**](../Model/SetDefaultAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
