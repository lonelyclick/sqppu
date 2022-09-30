# Swagger\Client\NetworkSubscriberApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendSms**](NetworkSubscriberApi.md#sendsms) | **POST** /{distributorId}/networkSubscriber/{imsi}/sendSms | Send an SMS
[**sendSmsBinary**](NetworkSubscriberApi.md#sendsmsbinary) | **POST** /{distributorId}/networkSubscriber/{imsi}/sendSmsBinary | Send an SMS in binary
[**sendSmsBinaryCustom**](NetworkSubscriberApi.md#sendsmsbinarycustom) | **POST** /{distributorId}/networkSubscriber/{imsi}/sendSmsBinaryCustom | Send a binary SMS with custom SMPP and GSM SMS parameters

# **sendSms**
> sendSms($distributor_id, $imsi, $body, $request_id)

Send an SMS

Send an SMS to a network subscriber, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$imsi = 789; // int | The unique identifier of a network subscriber
$body = new \Swagger\Client\Model\RequestSendSms(); // \Swagger\Client\Model\RequestSendSms | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->sendSms($distributor_id, $imsi, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSubscriberApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **imsi** | **int**| The unique identifier of a network subscriber |
 **body** | [**\Swagger\Client\Model\RequestSendSms**](../Model/RequestSendSms.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsBinary**
> sendSmsBinary($distributor_id, $imsi, $body, $request_id)

Send an SMS in binary

Send an SMS in binary to a network subscriber, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$imsi = 789; // int | The unique identifier of a network subscriber
$body = new \Swagger\Client\Model\RequestSendSmsBinary(); // \Swagger\Client\Model\RequestSendSmsBinary | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->sendSmsBinary($distributor_id, $imsi, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSubscriberApi->sendSmsBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **imsi** | **int**| The unique identifier of a network subscriber |
 **body** | [**\Swagger\Client\Model\RequestSendSmsBinary**](../Model/RequestSendSmsBinary.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsBinaryCustom**
> sendSmsBinaryCustom($distributor_id, $imsi, $body, $request_id)

Send a binary SMS with custom SMPP and GSM SMS parameters

Send a binary SMS with custom SMPP and GSM SMS parameters to a network subscriber, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworkSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$imsi = 789; // int | The unique identifier of a network subscriber
$body = new \Swagger\Client\Model\RequestSendSmsBinaryCustom(); // \Swagger\Client\Model\RequestSendSmsBinaryCustom | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->sendSmsBinaryCustom($distributor_id, $imsi, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSubscriberApi->sendSmsBinaryCustom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **imsi** | **int**| The unique identifier of a network subscriber |
 **body** | [**\Swagger\Client\Model\RequestSendSmsBinaryCustom**](../Model/RequestSendSmsBinaryCustom.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

