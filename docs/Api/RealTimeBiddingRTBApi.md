# OpenAPI\Client\RealTimeBiddingRTBApi

All URIs are relative to https://api.ringba.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1EnvironmentRtbIdJsonGet()**](RealTimeBiddingRTBApi.md#v1EnvironmentRtbIdJsonGet) | **GET** /v1/{environment}/{rtbId}.json | GET JSON |
| [**v1EnvironmentRtbIdJsonPost()**](RealTimeBiddingRTBApi.md#v1EnvironmentRtbIdJsonPost) | **POST** /v1/{environment}/{rtbId}.json | POST JSON |
| [**v1EnvironmentRtbIdXmlGet()**](RealTimeBiddingRTBApi.md#v1EnvironmentRtbIdXmlGet) | **GET** /v1/{environment}/{rtbId}.xml | GET XML |
| [**v1EnvironmentRtbIdXmlPost()**](RealTimeBiddingRTBApi.md#v1EnvironmentRtbIdXmlPost) | **POST** /v1/{environment}/{rtbId}.xml | POST XML |


## `v1EnvironmentRtbIdJsonGet()`

```php
v1EnvironmentRtbIdJsonGet($environment, $rtb_id, $cid, $sip_ok): object
```

GET JSON

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.  `CID` - The Caller ID associated with the inbound call.  `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.  1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment = 'environment_example'; // string
$rtb_id = 'rtb_id_example'; // string
$cid = 140615719531; // int
$sip_ok = yes; // string

try {
    $result = $apiInstance->v1EnvironmentRtbIdJsonGet($environment, $rtb_id, $cid, $sip_ok);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->v1EnvironmentRtbIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment** | **string**|  | |
| **rtb_id** | **string**|  | |
| **cid** | **int**|  | [optional] |
| **sip_ok** | **string**|  | [optional] |

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

## `v1EnvironmentRtbIdJsonPost()`

```php
v1EnvironmentRtbIdJsonPost($environment, $rtb_id, $content_type, $body): object
```

POST JSON

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.  `CID` - The Caller ID associated with the inbound call.  `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.  1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button.  ----  As the example \"POST JSON using a XML body\" shows, it is possible to send a XML body to this JSON endpoint using the header \"Content-Type\" = \"application/xml\". This can be useful if you need to send a XML body in the request, but wants to receive a JSON response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment = 'environment_example'; // string
$rtb_id = 'rtb_id_example'; // string
$content_type = application/xml; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->v1EnvironmentRtbIdJsonPost($environment, $rtb_id, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->v1EnvironmentRtbIdJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment** | **string**|  | |
| **rtb_id** | **string**|  | |
| **content_type** | **string**|  | [optional] |
| **body** | **string**|  | [optional] |

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

## `v1EnvironmentRtbIdXmlGet()`

```php
v1EnvironmentRtbIdXmlGet($environment, $rtb_id, $cid, $sip_ok): string
```

GET XML

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.  `CID` - The Caller ID associated with the inbound call.  `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.  1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment = 'environment_example'; // string
$rtb_id = 'rtb_id_example'; // string
$cid = 140615719531; // int
$sip_ok = yes; // string

try {
    $result = $apiInstance->v1EnvironmentRtbIdXmlGet($environment, $rtb_id, $cid, $sip_ok);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->v1EnvironmentRtbIdXmlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment** | **string**|  | |
| **rtb_id** | **string**|  | |
| **cid** | **int**|  | [optional] |
| **sip_ok** | **string**|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EnvironmentRtbIdXmlPost()`

```php
v1EnvironmentRtbIdXmlPost($environment, $rtb_id, $content_type, $body): string
```

POST XML

### Path Variables <hr>  `environment` For more information about environments see the [Selecting Your Environment](#selecting-your-environment) section above  `rtbId` For more information about rtb ID see the [Configuring your RTB ID](#configuring-your-rtb-id) section above  ### Request Details <hr>  This example request uses only the **CID** and **sipOk** tags, but bid requests can contain an unlimited combination of optional or required tags. If required tags are missing no bid will be returned.  `CID` - The Caller ID associated with the inbound call.  `sipOk` - If the request contains \"sipOk=yes\", a SIP address will be returned instead of a DID.  To see what tags are required on your campaign please see the request examples provided inside of your Ringba account.  1. **For Admins:** Go to the campaign page and click on the documentation icon for the publisher you want to view.  2. **For Publishers:** Go to the campaign page, click the RTB tab, and then click the RTB documentation button. ----  As the example \"POST XML using a JSON body\" shows, it is possible to send a JSON body to this XML endpoint using the header \"Content-Type\" = \"application/json\". This can be useful if you need to send a JSON body in the request, but wants to receive a XML response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RealTimeBiddingRTBApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment = 'environment_example'; // string
$rtb_id = 'rtb_id_example'; // string
$content_type = application/json; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->v1EnvironmentRtbIdXmlPost($environment, $rtb_id, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeBiddingRTBApi->v1EnvironmentRtbIdXmlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment** | **string**|  | |
| **rtb_id** | **string**|  | |
| **content_type** | **string**|  | [optional] |
| **body** | **object**|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
