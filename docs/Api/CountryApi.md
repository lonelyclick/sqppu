# Swagger\Client\CountryApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](CountryApi.md#getcountries) | **GET** /country | Get the list of Countries

# **getCountries**
> \Swagger\Client\Model\ResponseListResponseCountry getCountries($request_id, $offset, $count)

Get the list of Countries

The result is always sorted ascendingly by Country name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$offset = 0; // int | Number of results to skip
$count = 1000; // int | Max number of results to return

try {
    $result = $apiInstance->getCountries($request_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **offset** | **int**| Number of results to skip | [optional] [default to 0]
 **count** | **int**| Max number of results to return | [optional] [default to 1000]

### Return type

[**\Swagger\Client\Model\ResponseListResponseCountry**](../Model/ResponseListResponseCountry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

