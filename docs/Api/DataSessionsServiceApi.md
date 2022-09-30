# Swagger\Client\DataSessionsServiceApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOpenedDataSession**](DataSessionsServiceApi.md#getopeneddatasession) | **GET** /openDataSessions | Get opened data session

# **getOpenedDataSession**
> \Swagger\Client\Model\ResponseDataSession[] getOpenedDataSession($icc_id_or_imsi, $request_id)

Get opened data session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataSessionsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$icc_id_or_imsi = "icc_id_or_imsi_example"; // string | ICCID or IMSI of an sim card
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getOpenedDataSession($icc_id_or_imsi, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSessionsServiceApi->getOpenedDataSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **icc_id_or_imsi** | **string**| ICCID or IMSI of an sim card |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDataSession[]**](../Model/ResponseDataSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

