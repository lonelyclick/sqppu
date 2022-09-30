# Swagger\Client\TrafficPolicyApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTrafficPolicy**](TrafficPolicyApi.md#gettrafficpolicy) | **GET** /{distributorId}/trafficPolicy/{trafficPolicyId} | Get a traffic policy

# **getTrafficPolicy**
> \Swagger\Client\Model\ResponseTrafficPolicy getTrafficPolicy($distributor_id, $traffic_policy_id, $request_id)

Get a traffic policy

Return a traffic policy, which is a rule to apply speed throttle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TrafficPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$traffic_policy_id = 56; // int | The unique identifier of a traffic policy
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getTrafficPolicy($distributor_id, $traffic_policy_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficPolicyApi->getTrafficPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **traffic_policy_id** | **int**| The unique identifier of a traffic policy |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseTrafficPolicy**](../Model/ResponseTrafficPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

