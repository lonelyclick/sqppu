# Swagger\Client\NetworkApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNetworkMccMncPairs**](NetworkApi.md#getnetworkmccmncpairs) | **GET** /{distributorId}/network/{networkId}/mcc-mnc-pair | Get network mcc/mnc pairs

# **getNetworkMccMncPairs**
> \Swagger\Client\Model\ResponseMccMncPair[] getNetworkMccMncPairs($distributor_id, $network_id, $request_id)

Get network mcc/mnc pairs

Get network mcc/mnc pairs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$network_id = 56; // int | The unique identifier of a network
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getNetworkMccMncPairs($distributor_id, $network_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworkMccMncPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **network_id** | **int**| The unique identifier of a network |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseMccMncPair[]**](../Model/ResponseMccMncPair.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

