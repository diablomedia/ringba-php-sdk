# Ringba\StatsApi

All URIs are relative to *http://api.ringba.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statsGetAccountCount**](StatsApi.md#statsGetAccountCount) | **GET** /{accountid}/stats | 
[**statsGetAllCounts**](StatsApi.md#statsGetAllCounts) | **GET** /{accountid}/stats/allCampaigns | 
[**statsGetLiveCalls**](StatsApi.md#statsGetLiveCalls) | **GET** /{accountid}/stats/live | 
[**statsGetLiveCallsByAffiliate**](StatsApi.md#statsGetLiveCallsByAffiliate) | **GET** /{accountid}/stats/live/publisher/{affiliateId} | 
[**statsGetLiveCallsByCampaign**](StatsApi.md#statsGetLiveCallsByCampaign) | **GET** /{accountid}/stats/live/campaign/{campaignId} | 
[**statsGetStats**](StatsApi.md#statsGetStats) | **GET** /{accountid}/stats/byDay | 
[**statsGetStatsRolledUp**](StatsApi.md#statsGetStatsRolledUp) | **GET** /{accountid}/stats/Sum | 
[**statsGetTopStats**](StatsApi.md#statsGetTopStats) | **GET** /{accountid}/stats/TopByDay | 
[**statsGetTopStatsByHours**](StatsApi.md#statsGetTopStatsByHours) | **GET** /{accountid}/stats/TopByHour | 


# **statsGetAccountCount**
> object statsGetAccountCount($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->statsGetAccountCount($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetAccountCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetAllCounts**
> object statsGetAllCounts($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->statsGetAllCounts($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetAllCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetLiveCalls**
> object statsGetLiveCalls($accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->statsGetLiveCalls($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetLiveCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetLiveCallsByAffiliate**
> object statsGetLiveCallsByAffiliate($affiliate_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = "affiliate_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->statsGetLiveCallsByAffiliate($affiliate_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetLiveCallsByAffiliate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetLiveCallsByCampaign**
> object statsGetLiveCallsByCampaign($campaign_id, $accountid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = "campaign_id_example"; // string | 
$accountid = "accountid_example"; // string | 

try {
    $result = $apiInstance->statsGetLiveCallsByCampaign($campaign_id, $accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetLiveCallsByCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**|  |
 **accountid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetStats**
> object statsGetStats($accountid, $past, $days, $type, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$past = 56; // int | 
$days = 56; // int | 
$type = "type_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->statsGetStats($accountid, $past, $days, $type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **past** | **int**|  | [optional]
 **days** | **int**|  | [optional]
 **type** | **string**|  | [optional]
 **id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetStatsRolledUp**
> object statsGetStatsRolledUp($accountid, $past, $days, $type, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$past = 56; // int | 
$days = 56; // int | 
$type = "type_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->statsGetStatsRolledUp($accountid, $past, $days, $type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetStatsRolledUp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **past** | **int**|  | [optional]
 **days** | **int**|  | [optional]
 **type** | **string**|  | [optional]
 **id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetTopStats**
> object statsGetTopStats($accountid, $past, $days)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$past = 56; // int | 
$days = 56; // int | 

try {
    $result = $apiInstance->statsGetTopStats($accountid, $past, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetTopStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **past** | **int**|  | [optional]
 **days** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGetTopStatsByHours**
> object statsGetTopStatsByHours($accountid, $hours)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ringba\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountid = "accountid_example"; // string | 
$hours = 56; // int | 

try {
    $result = $apiInstance->statsGetTopStatsByHours($accountid, $hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetTopStatsByHours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountid** | **string**|  |
 **hours** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

