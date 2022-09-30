# Swagger\Client\WhitelistApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**duplicateWhitelist**](WhitelistApi.md#duplicatewhitelist) | **POST** /{distributorId}/whitelist/{whitelistId}/duplicate | Duplicate whitelist
[**getWhitelistById**](WhitelistApi.md#getwhitelistbyid) | **GET** /{distributorId}/whitelist/{whitelistId} | Get Whitelist details
[**updateWhitelistEntries**](WhitelistApi.md#updatewhitelistentries) | **POST** /{distributorId}/whitelist/{whitelistId}/entry | Update whitelist entries
[**updateWhitelistImsis**](WhitelistApi.md#updatewhitelistimsis) | **POST** /{distributorId}/whitelist/{whitelistId}/imsis | Update whitelist IMSIs
[**updateWhitelistName**](WhitelistApi.md#updatewhitelistname) | **POST** /{distributorId}/whitelist/{whitelistId}/name | Update whitelist name
[**updateWhitelistSims**](WhitelistApi.md#updatewhitelistsims) | **POST** /{distributorId}/whitelist/{whitelistId}/sim | Update whitelist SIMs

# **duplicateWhitelist**
> \Swagger\Client\Model\ResponseSearchWhitelist duplicateWhitelist($distributor_id, $whitelist_id, $body, $request_id)

Duplicate whitelist

Duplicate whitelist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$whitelist_id = 56; // int | The unique identifier of a whitelist
$body = new \Swagger\Client\Model\RequestDuplicateWhitelist(); // \Swagger\Client\Model\RequestDuplicateWhitelist | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->duplicateWhitelist($distributor_id, $whitelist_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistApi->duplicateWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **whitelist_id** | **int**| The unique identifier of a whitelist |
 **body** | [**\Swagger\Client\Model\RequestDuplicateWhitelist**](../Model/RequestDuplicateWhitelist.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSearchWhitelist**](../Model/ResponseSearchWhitelist.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhitelistById**
> \Swagger\Client\Model\ResponseWhitelist getWhitelistById($distributor_id, $whitelist_id, $request_id)

Get Whitelist details

Retrieves the Whitelist details for the requested Whitelist ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$whitelist_id = 56; // int | The unique identifier of a whitelist
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getWhitelistById($distributor_id, $whitelist_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistApi->getWhitelistById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **whitelist_id** | **int**| The unique identifier of a whitelist |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWhitelist**](../Model/ResponseWhitelist.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWhitelistEntries**
> updateWhitelistEntries($distributor_id, $whitelist_id, $body, $request_id)

Update whitelist entries

Update whitelist entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$whitelist_id = 56; // int | The unique identifier of a whitelist
$body = new \Swagger\Client\Model\RequestUpdateWhitelistEntry(); // \Swagger\Client\Model\RequestUpdateWhitelistEntry | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateWhitelistEntries($distributor_id, $whitelist_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistApi->updateWhitelistEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **whitelist_id** | **int**| The unique identifier of a whitelist |
 **body** | [**\Swagger\Client\Model\RequestUpdateWhitelistEntry**](../Model/RequestUpdateWhitelistEntry.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWhitelistImsis**
> updateWhitelistImsis($distributor_id, $whitelist_id, $body, $request_id)

Update whitelist IMSIs

Update whitelist IMSIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$whitelist_id = 56; // int | The unique identifier of a whitelist
$body = new \Swagger\Client\Model\RequestUpdateWhitelistImsis(); // \Swagger\Client\Model\RequestUpdateWhitelistImsis | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateWhitelistImsis($distributor_id, $whitelist_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistApi->updateWhitelistImsis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **whitelist_id** | **int**| The unique identifier of a whitelist |
 **body** | [**\Swagger\Client\Model\RequestUpdateWhitelistImsis**](../Model/RequestUpdateWhitelistImsis.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWhitelistName**
> updateWhitelistName($distributor_id, $whitelist_id, $body, $request_id)

Update whitelist name

Update whitelist name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$whitelist_id = 56; // int | The unique identifier of a whitelist
$body = new \Swagger\Client\Model\RequestUpdateWhitelistName(); // \Swagger\Client\Model\RequestUpdateWhitelistName | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateWhitelistName($distributor_id, $whitelist_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistApi->updateWhitelistName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **whitelist_id** | **int**| The unique identifier of a whitelist |
 **body** | [**\Swagger\Client\Model\RequestUpdateWhitelistName**](../Model/RequestUpdateWhitelistName.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWhitelistSims**
> updateWhitelistSims($distributor_id, $whitelist_id, $body, $request_id)

Update whitelist SIMs

Update whitelist SIMs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$whitelist_id = 56; // int | The unique identifier of a whitelist
$body = new \Swagger\Client\Model\RequestUpdateWhitelistSims(); // \Swagger\Client\Model\RequestUpdateWhitelistSims | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateWhitelistSims($distributor_id, $whitelist_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistApi->updateWhitelistSims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **whitelist_id** | **int**| The unique identifier of a whitelist |
 **body** | [**\Swagger\Client\Model\RequestUpdateWhitelistSims**](../Model/RequestUpdateWhitelistSims.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

