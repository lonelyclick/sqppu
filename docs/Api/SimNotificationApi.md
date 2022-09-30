# Swagger\Client\SimNotificationApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSimNotification**](SimNotificationApi.md#createsimnotification) | **POST** /{userDistributorId}/sim-notification | Create a Sim Notification entity
[**getSimNotification**](SimNotificationApi.md#getsimnotification) | **GET** /{userDistributorId}/sim-notification/{id} | Get a single Sim Notification
[**getSimNotifications**](SimNotificationApi.md#getsimnotifications) | **GET** /{userDistributorId}/sim-notification | Get a list of Sim Notifications
[**updateSimNotification**](SimNotificationApi.md#updatesimnotification) | **PUT** /{userDistributorId}/sim-notification/{id} | Update a Sim Notification entity

# **createSimNotification**
> \Swagger\Client\Model\ResponseSimNotification createSimNotification($user_distributor_id, $body, $request_id)

Create a Sim Notification entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SimNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_distributor_id = 56; // int | The unique identifier of a distributor
$body = new \Swagger\Client\Model\RequestSimNotification(); // \Swagger\Client\Model\RequestSimNotification | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createSimNotification($user_distributor_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimNotificationApi->createSimNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_distributor_id** | **int**| The unique identifier of a distributor |
 **body** | [**\Swagger\Client\Model\RequestSimNotification**](../Model/RequestSimNotification.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimNotification**](../Model/ResponseSimNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimNotification**
> \Swagger\Client\Model\ResponseSimNotification getSimNotification($user_distributor_id, $id, $request_id)

Get a single Sim Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SimNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_distributor_id = 56; // int | The unique identifier of a distributor
$id = 789; // int | ID of the Sim Notification to be retrieved
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimNotification($user_distributor_id, $id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimNotificationApi->getSimNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| ID of the Sim Notification to be retrieved |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimNotification**](../Model/ResponseSimNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimNotifications**
> \Swagger\Client\Model\PagedResultResponseSimNotification getSimNotifications($user_distributor_id, $request_id, $offset, $rows, $with_iccids, $sort)

Get a list of Sim Notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SimNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$offset = 789; // int | If present, the answer will skip the first <offset> results
$rows = 789; // int | If present, the answer will contain a maximum of <rows> results
$with_iccids = true; // bool | If present, the answer will contain the list of ICCIDs
$sort = "sort_example"; // string | Sort field or function with asc|desc

try {
    $result = $apiInstance->getSimNotifications($user_distributor_id, $request_id, $offset, $rows, $with_iccids, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimNotificationApi->getSimNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **offset** | **int**| If present, the answer will skip the first &lt;offset&gt; results | [optional]
 **rows** | **int**| If present, the answer will contain a maximum of &lt;rows&gt; results | [optional]
 **with_iccids** | **bool**| If present, the answer will contain the list of ICCIDs | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]

### Return type

[**\Swagger\Client\Model\PagedResultResponseSimNotification**](../Model/PagedResultResponseSimNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSimNotification**
> \Swagger\Client\Model\ResponseSimNotification updateSimNotification($user_distributor_id, $id, $body, $request_id)

Update a Sim Notification entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SimNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_distributor_id = 56; // int | The unique identifier of a distributor
$id = 789; // int | ID of the Sim Notification to be modified
$body = new \Swagger\Client\Model\RequestSimNotification(); // \Swagger\Client\Model\RequestSimNotification | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->updateSimNotification($user_distributor_id, $id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimNotificationApi->updateSimNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| ID of the Sim Notification to be modified |
 **body** | [**\Swagger\Client\Model\RequestSimNotification**](../Model/RequestSimNotification.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimNotification**](../Model/ResponseSimNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

