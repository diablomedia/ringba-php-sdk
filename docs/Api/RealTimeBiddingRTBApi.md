# Ringba\RealTimeBiddingRTBApi

All URIs are relative to http://api.ringba.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETJSON()**](RealTimeBiddingRTBApi.md#gETJSON) | **GET** /{rtbId}.json | GET JSON
[**gETXML()**](RealTimeBiddingRTBApi.md#gETXML) | **GET** /{rtbId}.xml | GET XML
[**pOSTJSON()**](RealTimeBiddingRTBApi.md#pOSTJSON) | **POST** /{rtbId}.json | POST JSON
[**pOSTXML()**](RealTimeBiddingRTBApi.md#pOSTXML) | **POST** /{rtbId}.xml | POST XML


## `gETJSON()`

```php
gETJSON($cID, $sipOk, $rtbId): \Ringba\Model\GETJSONwithCIDandSipOk
```

GET JSON

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.   `CID` - The Caller ID associated with the inbound call.   `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.   1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cID = 140615719531; // int | 
$sipOk = yes; // string | 
$rtbId = 'rtbId_example'; // string | 

try {
    $result = $apiInstance->gETJSON($cID, $sipOk, $rtbId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->gETJSON: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cID** | **int**|  |
 **sipOk** | **string**|  |
 **rtbId** | **string**|  |

### Return type

[**\Ringba\Model\GETJSONwithCIDandSipOk**](../Model/GETJSONwithCIDandSipOk.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gETXML()`

```php
gETXML($cID, $sipOk, $rtbId): \Ringba\Model\Bid
```

GET XML

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.   `CID` - The Caller ID associated with the inbound call.   `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.   1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cID = 140615719531; // int | 
$sipOk = yes; // string | 
$rtbId = 'rtbId_example'; // string | 

try {
    $result = $apiInstance->gETXML($cID, $sipOk, $rtbId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->gETXML: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cID** | **int**|  |
 **sipOk** | **string**|  |
 **rtbId** | **string**|  |

### Return type

[**\Ringba\Model\Bid**](../Model/Bid.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pOSTJSON()`

```php
pOSTJSON($contentType, $rtbId, $bidRequest): \Ringba\Model\POSTJSONwithCIDandsipOk
```

POST JSON

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.   `CID` - The Caller ID associated with the inbound call.   `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.   1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button.  ----  As the example \"POST JSON using a XML body\" shows, it is possible to send a XML body to this JSON endpoint using the header \"Content-Type\" = \"application/xml\". This can be useful if you need to send a XML body in the request, but wants to receive a JSON response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = application/xml; // string | 
$rtbId = 'rtbId_example'; // string | 
$bidRequest = <bid_request>
  <Tag1>tag1value</Tag1>
  <Tag2>tag2value</Tag2>
</bid_request>; // \Ringba\Model\BidRequest | 

try {
    $result = $apiInstance->pOSTJSON($contentType, $rtbId, $bidRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->pOSTJSON: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  |
 **rtbId** | **string**|  |
 **bidRequest** | [**\Ringba\Model\BidRequest**](../Model/BidRequest.md)|  |

### Return type

[**\Ringba\Model\POSTJSONwithCIDandsipOk**](../Model/POSTJSONwithCIDandsipOk.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pOSTXML()`

```php
pOSTXML($rtbId, $pOSTXMLREQUEST): \Ringba\Model\Bid
```

POST XML

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.   `CID` - The Caller ID associated with the inbound call.   `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.   1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button. ----  As the example \"POST XML using a JSON body\" shows, it is possible to send a JSON body to this XML endpoint using the header \"Content-Type\" = \"application/json\". This can be useful if you need to send a JSON body in the request, but wants to receive a XML response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rtbId = 'rtbId_example'; // string | 
$pOSTXMLREQUEST = {"Tag1":"tag1value","Tag2":"tag2value"}; // \Ringba\Model\POSTXMLREQUEST | 

try {
    $result = $apiInstance->pOSTXML($rtbId, $pOSTXMLREQUEST);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->pOSTXML: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rtbId** | **string**|  |
 **pOSTXMLREQUEST** | [**\Ringba\Model\POSTXMLREQUEST**](../Model/POSTXMLREQUEST.md)|  |

### Return type

[**\Ringba\Model\Bid**](../Model/Bid.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
