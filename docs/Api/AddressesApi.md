# OpenAPI\Client\AddressesApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountIdAddressesAddressIdDelete()**](AddressesApi.md#accountIdAddressesAddressIdDelete) | **DELETE** /{accountId}/addresses/{addressId} | Delete Address |
| [**accountIdAddressesAddressIdGet()**](AddressesApi.md#accountIdAddressesAddressIdGet) | **GET** /{accountId}/addresses/{addressId} | Get Address by ID |
| [**accountIdAddressesAddressIdPatch()**](AddressesApi.md#accountIdAddressesAddressIdPatch) | **PATCH** /{accountId}/addresses/{addressId} | Edit Address |
| [**accountIdAddressesAddressIdSetDefaultPost()**](AddressesApi.md#accountIdAddressesAddressIdSetDefaultPost) | **POST** /{accountId}/addresses/{addressId}/SetDefault | Set Default Address |
| [**accountIdAddressesCountriesGet()**](AddressesApi.md#accountIdAddressesCountriesGet) | **GET** /{accountId}/addresses/countries | Get Countries Associated With Account |
| [**accountIdAddressesGet()**](AddressesApi.md#accountIdAddressesGet) | **GET** /{accountId}/addresses | Get Addresses |
| [**accountIdAddressesPost()**](AddressesApi.md#accountIdAddressesPost) | **POST** /{accountId}/addresses | Create New Address |
| [**accountIdAddressesRequirementsCountryCodeGet()**](AddressesApi.md#accountIdAddressesRequirementsCountryCodeGet) | **GET** /{accountId}/addresses/requirements/{countryCode} | Get Details and Requirements for a Specific Country |


## `accountIdAddressesAddressIdDelete()`

```php
accountIdAddressesAddressIdDelete($account_id, $address_id, $authorization): object
```

Delete Address

Users can delete addresses from the list associated with their account.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$address_id = 'address_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#a63045f1-9e95-46cd-896d-1fa137b3abc2)

try {
    $result = $apiInstance->accountIdAddressesAddressIdDelete($account_id, $address_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **address_id** | **string**|  | |
| **authorization** | **string**| Find your [apiToken](#a63045f1-9e95-46cd-896d-1fa137b3abc2) | [optional] |

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
accountIdAddressesAddressIdGet($account_id, $address_id, $authorization): object
```

Get Address by ID

Get details about a specific address.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$address_id = 'address_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesAddressIdGet($account_id, $address_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **address_id** | **string**|  | |
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

## `accountIdAddressesAddressIdPatch()`

```php
accountIdAddressesAddressIdPatch($account_id, $address_id, $authorization, $body): object
```

Edit Address

Users can edit any address associated with the account   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>  ### Request Body <hr> <br>  This request can be used to modify any of the parameters described in the \"POST Create New Address\" request above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$address_id = 'address_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdAddressesAddressIdPatch($account_id, $address_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **address_id** | **string**|  | |
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

## `accountIdAddressesAddressIdSetDefaultPost()`

```php
accountIdAddressesAddressIdSetDefaultPost($account_id, $address_id, $authorization): object
```

Set Default Address

Modify which address is the default address for the account.   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br> ``addressId`` Find the [addressId](#get-addresses-associated-with-account) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$address_id = 'address_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesAddressIdSetDefaultPost($account_id, $address_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesAddressIdSetDefaultPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **address_id** | **string**|  | |
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

## `accountIdAddressesCountriesGet()`

```php
accountIdAddressesCountriesGet($account_id, $authorization): object
```

Get Countries Associated With Account

View details about the countries associated with the account   ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesCountriesGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesCountriesGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdAddressesGet()`

```php
accountIdAddressesGet($account_id, $authorization): object
```

Get Addresses

### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesGet($account_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesGet: ', $e->getMessage(), PHP_EOL;
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

## `accountIdAddressesPost()`

```php
accountIdAddressesPost($account_id, $authorization, $body): object
```

Create New Address

Create a new address to associate with this account.  ### Path Variables <hr> <br>  ``accountId`` Find your [accountId](#get-your-account-information) <br>  ### Request Body <hr>  #### Required Parameters <table>     <tr>         <th>Parameter</th>         <th>Description</th>     </tr>     <tr>         <td><code>name</code></td>         <td>The name you want to assign to this address to make it easier to identify later</td>     </tr>     <tr>         <td><code>countryName</code></td>         <td>The country this address is in</td>     </tr>     <tr>         <td><code>countryCode</code></td>         <td>The alphabetic country code for the country of the address</td>     </tr>     <tr>         <td><code>customerName</code></td>         <td>The name of the business associated with this address</td>     </tr>     <tr>         <td><code>streetAddress</code></td>         <td>The street address you want to add</td>     </tr>     <tr>         <td><code>city</code></td>         <td>The city the address is in</td>     </tr>     <tr>         <td><code>postalCode</code></td>         <td>The postal (zip) code for the address</td>     </tr> </table>  #### Optional Parameters <table> <tr>         <th>Parameter</th>         <th>Description</th>     </tr> <tr>         <td><code>region</code></td>         <td>The state or region for the address, if applicable</td>     </tr> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->accountIdAddressesPost($account_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesPost: ', $e->getMessage(), PHP_EOL;
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

## `accountIdAddressesRequirementsCountryCodeGet()`

```php
accountIdAddressesRequirementsCountryCodeGet($account_id, $country_code, $authorization): object
```

Get Details and Requirements for a Specific Country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string
$country_code = 'country_code_example'; // string
$authorization = Token {{apiToken}}; // string | Find your [apiToken](#get-or-create-api-token)

try {
    $result = $apiInstance->accountIdAddressesRequirementsCountryCodeGet($account_id, $country_code, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->accountIdAddressesRequirementsCountryCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **country_code** | **string**|  | |
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
