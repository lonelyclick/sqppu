# Swagger\Client\PackageApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackage**](PackageApi.md#getpackage) | **GET** /{distributorId}/package/{packageId}/info | Get a package information
[**setPackageStatus**](PackageApi.md#setpackagestatus) | **POST** /{distributorId}/package/{packageId}/status | Set a package status

# **getPackage**
> \Swagger\Client\Model\ResponsePackage getPackage($distributor_id, $package_id, $request_id)

Get a package information

Package is a subscription of one package type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$package_id = "package_id_example"; // string | The unique identifier of the package
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getPackage($distributor_id, $package_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->getPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **package_id** | **string**| The unique identifier of the package |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackage**](../Model/ResponsePackage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPackageStatus**
> setPackageStatus($distributor_id, $package_id, $body, $request_id)

Set a package status

Update a package status to Active, Not Active or Terminated, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$package_id = "package_id_example"; // string | The unique identifier of the package
$body = new \Swagger\Client\Model\RequestPackageStatus(); // \Swagger\Client\Model\RequestPackageStatus | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setPackageStatus($distributor_id, $package_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->setPackageStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **package_id** | **string**| The unique identifier of the package |
 **body** | [**\Swagger\Client\Model\RequestPackageStatus**](../Model/RequestPackageStatus.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

