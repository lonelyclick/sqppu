# Swagger\Client\PackageTypeApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackageType**](PackageTypeApi.md#getpackagetype) | **GET** /{distributorId}/packageType/{packageTypeId} | Get a package type information
[**updatePackageTypeStatus**](PackageTypeApi.md#updatepackagetypestatus) | **PUT** /{distributorId}/packageType/{packageTypeId}/status | Update the PackageType status

# **getPackageType**
> \Swagger\Client\Model\ResponsePackageType getPackageType($distributor_id, $package_type_id, $request_id)

Get a package type information

Package type is the package profile storing the detailed information for a package, e.g. types of services, usage allowance, supported countries, activation/allowance type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$package_type_id = 56; // int | The unique identifier of the package type
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getPackageType($distributor_id, $package_type_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypeApi->getPackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **package_type_id** | **int**| The unique identifier of the package type |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackageType**](../Model/ResponsePackageType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackageTypeStatus**
> updatePackageTypeStatus($distributor_id, $package_type_id, $body, $request_id)

Update the PackageType status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackageTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$package_type_id = 56; // int | The unique identifier of the package type
$body = new \Swagger\Client\Model\RequestUpdatePackageTypeStatus(); // \Swagger\Client\Model\RequestUpdatePackageTypeStatus | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updatePackageTypeStatus($distributor_id, $package_type_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypeApi->updatePackageTypeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **package_type_id** | **int**| The unique identifier of the package type |
 **body** | [**\Swagger\Client\Model\RequestUpdatePackageTypeStatus**](../Model/RequestUpdatePackageTypeStatus.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

