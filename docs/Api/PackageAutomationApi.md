# Swagger\Client\PackageAutomationApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPackageAutomation**](PackageAutomationApi.md#createpackageautomation) | **POST** /{distributorId}/package-automation | Create a Package Automation for the logged in Distributor
[**deactivatePackageAutomation**](PackageAutomationApi.md#deactivatepackageautomation) | **DELETE** /{distributorId}/package-automation/{packageAutomationId} | Deactivate a Package Automation for the logged in Distributor
[**getPackageAutomation**](PackageAutomationApi.md#getpackageautomation) | **GET** /{distributorId}/package-automation/{packageAutomationId} | Get a Package Automation for the logged in Distributor
[**getPackageAutomations**](PackageAutomationApi.md#getpackageautomations) | **GET** /{distributorId}/package-automation | Get a paginated list of Package Automations for the logged in Distributor.The results are sorted descending by ID

# **createPackageAutomation**
> \Swagger\Client\Model\ResponsePackageAutomation createPackageAutomation($distributor_id, $body, $request_id)

Create a Package Automation for the logged in Distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageAutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$body = new \Swagger\Client\Model\RequestPackageAutomation(); // \Swagger\Client\Model\RequestPackageAutomation | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createPackageAutomation($distributor_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageAutomationApi->createPackageAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **body** | [**\Swagger\Client\Model\RequestPackageAutomation**](../Model/RequestPackageAutomation.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackageAutomation**](../Model/ResponsePackageAutomation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivatePackageAutomation**
> \Swagger\Client\Model\ResponsePackageAutomation deactivatePackageAutomation($distributor_id, $package_automation_id, $request_id)

Deactivate a Package Automation for the logged in Distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageAutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$package_automation_id = 56; // int | Unique Identifier of a Package Automation
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->deactivatePackageAutomation($distributor_id, $package_automation_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageAutomationApi->deactivatePackageAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **package_automation_id** | **int**| Unique Identifier of a Package Automation |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackageAutomation**](../Model/ResponsePackageAutomation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageAutomation**
> \Swagger\Client\Model\ResponsePackageAutomation getPackageAutomation($distributor_id, $package_automation_id, $request_id)

Get a Package Automation for the logged in Distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageAutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$package_automation_id = 56; // int | Unique Identifier of a Package Automation
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getPackageAutomation($distributor_id, $package_automation_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageAutomationApi->getPackageAutomation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **package_automation_id** | **int**| Unique Identifier of a Package Automation |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackageAutomation**](../Model/ResponsePackageAutomation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageAutomations**
> \Swagger\Client\Model\PagedResultResponsePackageAutomation getPackageAutomations($distributor_id, $request_id, $offset, $count)

Get a paginated list of Package Automations for the logged in Distributor.The results are sorted descending by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageAutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$offset = 56; // int | Skip this amount of results
$count = 56; // int | Return this amount of results

try {
    $result = $apiInstance->getPackageAutomations($distributor_id, $request_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageAutomationApi->getPackageAutomations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **offset** | **int**| Skip this amount of results | [optional]
 **count** | **int**| Return this amount of results | [optional]

### Return type

[**\Swagger\Client\Model\PagedResultResponsePackageAutomation**](../Model/PagedResultResponsePackageAutomation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

