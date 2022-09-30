# Swagger\Client\DistributorApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventory**](DistributorApi.md#createinventory) | **POST** /{distributorId}/distributor/{id}/inventories | Creates Inventory under a child Distributor
[**getDistributor**](DistributorApi.md#getdistributor) | **GET** /{distributorId}/distributor/{id} | Returns the Distributor by Distributor Id
[**getDistributors**](DistributorApi.md#getdistributors) | **GET** /{distributorId}/distributor | Returns the list of Distributors that are accessible to the user performing the request
[**getInventories**](DistributorApi.md#getinventories) | **GET** /{distributorId}/distributor/{id}/inventories | Retrieve Inventories
[**getSimHistory**](DistributorApi.md#getsimhistory) | **GET** /{distributorId}/distributor/{id}/sim-history | Fetch SIM history of a given distributor
[**provisionDistributor**](DistributorApi.md#provisiondistributor) | **POST** /{distributorId}/distributor | Provision a new distributor
[**updateDistributorStatus**](DistributorApi.md#updatedistributorstatus) | **PUT** /{distributorId}/distributor/{id}/status | Update the Distributor&#x27;s status

# **createInventory**
> \Swagger\Client\Model\ResponseInventory createInventory($distributor_id, $id, $body, $request_id)

Creates Inventory under a child Distributor

Creates an Inventory with the specified information under a Distributor. It's not possible to create an Inventoryfor the Distributor that's making the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$id = 56; // int | Id of the Distributor that will have the new Inventory
$body = new \Swagger\Client\Model\RequestCreateInventory(); // \Swagger\Client\Model\RequestCreateInventory | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createInventory($distributor_id, $id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->createInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| Id of the Distributor that will have the new Inventory |
 **body** | [**\Swagger\Client\Model\RequestCreateInventory**](../Model/RequestCreateInventory.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseInventory**](../Model/ResponseInventory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistributor**
> \Swagger\Client\Model\ResponseDistributor getDistributor($distributor_id, $id, $request_id)

Returns the Distributor by Distributor Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$id = 56; // int | Id of the Distributor to be returned
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getDistributor($distributor_id, $id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->getDistributor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| Id of the Distributor to be returned |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDistributor**](../Model/ResponseDistributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistributors**
> \Swagger\Client\Model\ResponseDistributor[] getDistributors($distributor_id, $request_id, $compute_path)

Returns the list of Distributors that are accessible to the user performing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$compute_path = false; // bool | If 'true', the the hierarchy path of each returned Distributor will be computed and returned. When absent, it defaults to 'false'.

try {
    $result = $apiInstance->getDistributors($distributor_id, $request_id, $compute_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->getDistributors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **compute_path** | **bool**| If &#x27;true&#x27;, the the hierarchy path of each returned Distributor will be computed and returned. When absent, it defaults to &#x27;false&#x27;. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ResponseDistributor[]**](../Model/ResponseDistributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventories**
> \Swagger\Client\Model\ResponseListResponseInventory getInventories($distributor_id, $id, $offset, $count, $request_id)

Retrieve Inventories

Return a list of Inventories that are accessible by the user making the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$id = 56; // int | The Distributor Id whose inventories are going to be fetched
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventories($distributor_id, $id, $offset, $count, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->getInventories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| The Distributor Id whose inventories are going to be fetched |
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [default to 0]
 **count** | **int**| The maximum number of rows to return | [default to 10]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseInventory**](../Model/ResponseListResponseInventory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimHistory**
> \Swagger\Client\Model\ResponseListResponseSimHistory getSimHistory($distributor_id, $id, $request_id, $offset, $count)

Fetch SIM history of a given distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return

try {
    $result = $apiInstance->getSimHistory($distributor_id, $id, $request_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->getSimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [optional] [default to 0]
 **count** | **int**| The maximum number of rows to return | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSimHistory**](../Model/ResponseListResponseSimHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisionDistributor**
> \Swagger\Client\Model\ResponseProvisionDistributor provisionDistributor($distributor_id, $body, $request_id)

Provision a new distributor

Provision a new distributor under its parent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$body = new \Swagger\Client\Model\RequestCreateDistributor(); // \Swagger\Client\Model\RequestCreateDistributor | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->provisionDistributor($distributor_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->provisionDistributor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **body** | [**\Swagger\Client\Model\RequestCreateDistributor**](../Model/RequestCreateDistributor.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseProvisionDistributor**](../Model/ResponseProvisionDistributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDistributorStatus**
> updateDistributorStatus($distributor_id, $id, $body, $request_id)

Update the Distributor's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$id = 56; // int | The unique identifier of the distributor
$body = new \Swagger\Client\Model\RequestUpdateDistributorStatus(); // \Swagger\Client\Model\RequestUpdateDistributorStatus | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateDistributorStatus($distributor_id, $id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling DistributorApi->updateDistributorStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **id** | **int**| The unique identifier of the distributor |
 **body** | [**\Swagger\Client\Model\RequestUpdateDistributorStatus**](../Model/RequestUpdateDistributorStatus.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

