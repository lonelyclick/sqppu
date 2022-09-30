# Swagger\Client\CompanyTopUpApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayment**](CompanyTopUpApi.md#getpayment) | **GET** /{distributorId}/payments/{paymentId} | Get a Payment

# **getPayment**
> \Swagger\Client\Model\ResponsePayment getPayment($distributor_id, $payment_id, $request_id, $with_secret)

Get a Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyTopUpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$payment_id = 789; // int | Unique Identifier of the payment
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$with_secret = true; // bool | 

try {
    $result = $apiInstance->getPayment($distributor_id, $payment_id, $request_id, $with_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTopUpApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **payment_id** | **int**| Unique Identifier of the payment |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **with_secret** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePayment**](../Model/ResponsePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

