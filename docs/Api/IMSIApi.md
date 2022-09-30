# Swagger\Client\IMSIApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImsiByImsiId**](IMSIApi.md#getimsibyimsiid) | **GET** /{distributorId}/imsis/{imsiId} | Get a IMSI information
[**updateImsiWhiteList**](IMSIApi.md#updateimsiwhitelist) | **POST** /{distributorId}/imsis/{imsiId}/whitelist | Update Whitelist information for IMSI

# **getImsiByImsiId**
> \Swagger\Client\Model\ResponseImsiRecord getImsiByImsiId($distributor_id, $imsi_id, $request_id)

Get a IMSI information

Return all information of IMSI based on the ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMSIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$imsi_id = 789; // int | The unique identifier of a IMSI
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getImsiByImsiId($distributor_id, $imsi_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMSIApi->getImsiByImsiId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **imsi_id** | **int**| The unique identifier of a IMSI |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseImsiRecord**](../Model/ResponseImsiRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImsiWhiteList**
> updateImsiWhiteList($distributor_id, $imsi_id, $body, $request_id)

Update Whitelist information for IMSI

Update Whitelist information for IMSI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IMSIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$imsi_id = 789; // int | The unique identifier of a IMSI
$body = new \Swagger\Client\Model\RequestImsiWhitelist(); // \Swagger\Client\Model\RequestImsiWhitelist | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateImsiWhiteList($distributor_id, $imsi_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling IMSIApi->updateImsiWhiteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **imsi_id** | **int**| The unique identifier of a IMSI |
 **body** | [**\Swagger\Client\Model\RequestImsiWhitelist**](../Model/RequestImsiWhitelist.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

