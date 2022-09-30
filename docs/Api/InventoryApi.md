# Swagger\Client\InventoryApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryGroup**](InventoryApi.md#createinventorygroup) | **POST** /{distributorId}/inventory/{inventoryId}/createGroup | Create a new group under the inventory
[**createPackageType**](InventoryApi.md#createpackagetype) | **POST** /{distributorId}/inventory/{inventoryId}/packageType | Create a package type
[**createPayment**](InventoryApi.md#createpayment) | **POST** /{distributorId}/inventory/{inventoryId}/payments | Create a payment to top up the Inventory balance
[**createWhitelist**](InventoryApi.md#createwhitelist) | **POST** /{distributorId}/inventory/{inventoryId}/whitelist | Create a whitelist
[**getInventory**](InventoryApi.md#getinventory) | **GET** /{distributorId}/inventory/{inventoryId} | Get Inventory
[**getInventoryBalance**](InventoryApi.md#getinventorybalance) | **GET** /{distributorId}/inventory/{inventoryId}/balance | Get the balance of an inventory
[**getInventoryCurrency**](InventoryApi.md#getinventorycurrency) | **GET** /{distributorId}/inventory/{inventoryId}/currency | Get the Inventory&#x27;s currency
[**getInventoryDataRates**](InventoryApi.md#getinventorydatarates) | **GET** /{distributorId}/inventory/{inventoryId}/datarates | Retrieves the Data Rates for the inventory
[**getInventoryGroups**](InventoryApi.md#getinventorygroups) | **GET** /{distributorId}/inventory/{inventoryId}/groups | Get groups owned by an inventory
[**getInventoryOverdraft**](InventoryApi.md#getinventoryoverdraft) | **GET** /{distributorId}/inventory/{inventoryId}/overdraft | Get the overdraft of an inventory
[**getInventoryPackageTypes**](InventoryApi.md#getinventorypackagetypes) | **GET** /{distributorId}/inventory/{inventoryId}/packageTypes | Get all package types within an inventory
[**getInventoryRouteConfig**](InventoryApi.md#getinventoryrouteconfig) | **GET** /{distributorId}/inventory/{inventoryId}/routeconfig | Get the Inventory&#x27;s route config details
[**getInventorySmsRates**](InventoryApi.md#getinventorysmsrates) | **GET** /{distributorId}/inventory/{inventoryId}/smsrates | Retrieves the SMS Rates for the inventory
[**getInventoryStatus**](InventoryApi.md#getinventorystatus) | **GET** /{distributorId}/inventory/{inventoryId}/status | Get the Inventory&#x27;s status
[**getInventoryVoiceRates**](InventoryApi.md#getinventoryvoicerates) | **GET** /{distributorId}/inventory/{inventoryId}/voicerates | Retrieves the Voice Rates for the inventory
[**getNetworkAccessEntries**](InventoryApi.md#getnetworkaccessentries) | **GET** /{distributorId}/inventory/{inventoryId}/networkaccess | Get the Network Access entries
[**listInventories**](InventoryApi.md#listinventories) | **GET** /{distributorId}/inventory/list | List inventories
[**provisionSimsOnInventory**](InventoryApi.md#provisionsimsoninventory) | **POST** /{distributorId}/inventory/{inventoryId}/sims | Provision SIMs under an inventory
[**removeSimsFromInventory**](InventoryApi.md#removesimsfrominventory) | **DELETE** /{distributorId}/inventory/{inventoryId}/sims | Remove SIMs under an inventory
[**updateALegDataEntries**](InventoryApi.md#updatealegdataentries) | **PUT** /{distributorId}/inventory/{inventoryId}/datarates | Update (or create if non-existent) rate entries of A Leg for a given Inventory for Data service
[**updateALegSmsEntries**](InventoryApi.md#updatealegsmsentries) | **PUT** /{distributorId}/inventory/{inventoryId}/smsrates | Update (or create if non-existent) rate entries of A Leg for a given Inventory for SMS service
[**updateALegVoiceEntries**](InventoryApi.md#updatealegvoiceentries) | **PUT** /{distributorId}/inventory/{inventoryId}/voicerates | Update (or create if non-existent) rate entries of A Leg for a given Inventory for Voice service
[**updateInventoryStatus**](InventoryApi.md#updateinventorystatus) | **PUT** /{distributorId}/inventory/{inventoryId}/status | Update the Inventory&#x27;s status
[**updateNetworkAccessEntries**](InventoryApi.md#updatenetworkaccessentries) | **PUT** /{distributorId}/inventory/{inventoryId}/networkaccess | Add or Update the Network Access entries

# **createInventoryGroup**
> \Swagger\Client\Model\ResponseGroup createInventoryGroup($distributor_id, $inventory_id, $body, $request_id)

Create a new group under the inventory

An inventory contains many groups and each group belongs to one inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestInventoryGroup(); // \Swagger\Client\Model\RequestInventoryGroup | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createInventoryGroup($distributor_id, $inventory_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createInventoryGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestInventoryGroup**](../Model/RequestInventoryGroup.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseGroup**](../Model/ResponseGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPackageType**
> \Swagger\Client\Model\ResponsePackageType createPackageType($distributor_id, $inventory_id, $body, $request_id)

Create a package type

Package type is the package profile storing the detailed information for a package, e.g. types of services, usage allowance, supported countries, activation/allowance type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestCreatePackageType(); // \Swagger\Client\Model\RequestCreatePackageType | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createPackageType($distributor_id, $inventory_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createPackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestCreatePackageType**](../Model/RequestCreatePackageType.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackageType**](../Model/ResponsePackageType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayment**
> \Swagger\Client\Model\ResponsePayment createPayment($distributor_id, $inventory_id, $body, $request_id)

Create a payment to top up the Inventory balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestCreatePayment(); // \Swagger\Client\Model\RequestCreatePayment | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createPayment($distributor_id, $inventory_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestCreatePayment**](../Model/RequestCreatePayment.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePayment**](../Model/ResponsePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWhitelist**
> \Swagger\Client\Model\ResponseWhitelist createWhitelist($distributor_id, $inventory_id, $body, $request_id)

Create a whitelist

create a new whitelist for the inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestWhitelist(); // \Swagger\Client\Model\RequestWhitelist | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createWhitelist($distributor_id, $inventory_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestWhitelist**](../Model/RequestWhitelist.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWhitelist**](../Model/ResponseWhitelist.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventory**
> \Swagger\Client\Model\ResponseInventory getInventory($distributor_id, $inventory_id, $request_id)

Get Inventory

Return an inventory by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventory($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseInventory**](../Model/ResponseInventory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryBalance**
> \Swagger\Client\Model\ResponseBalance getInventoryBalance($distributor_id, $inventory_id, $request_id)

Get the balance of an inventory

Group, Inventory and SIM have its balance, which is the amount of credit in it, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryBalance($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseBalance**](../Model/ResponseBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryCurrency**
> \Swagger\Client\Model\ResponseInventoryCurrency getInventoryCurrency($distributor_id, $inventory_id, $request_id)

Get the Inventory's currency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryCurrency($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseInventoryCurrency**](../Model/ResponseInventoryCurrency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryDataRates**
> \Swagger\Client\Model\ResponseListResponseInventoryRateEntryALegData getInventoryDataRates($distributor_id, $inventory_id, $request_id)

Retrieves the Data Rates for the inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryDataRates($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryDataRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseInventoryRateEntryALegData**](../Model/ResponseListResponseInventoryRateEntryALegData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryGroups**
> \Swagger\Client\Model\ResponseListResponseGroup getInventoryGroups($distributor_id, $inventory_id, $offset, $count, $request_id)

Get groups owned by an inventory

An inventory contains many groups and each group belongs to one inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryGroups($distributor_id, $inventory_id, $offset, $count, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [default to 0]
 **count** | **int**| The maximum number of rows to return | [default to 10]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseGroup**](../Model/ResponseListResponseGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryOverdraft**
> \Swagger\Client\Model\ResponseOverdraft getInventoryOverdraft($distributor_id, $inventory_id, $request_id)

Get the overdraft of an inventory

Group, Inventory and SIM have its overdraft, which is the limit that can go beyond zero balance, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryOverdraft($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryOverdraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseOverdraft**](../Model/ResponseOverdraft.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryPackageTypes**
> \Swagger\Client\Model\ResponseListResponsePackageType getInventoryPackageTypes($distributor_id, $inventory_id, $offset, $count, $request_id)

Get all package types within an inventory

Package type is the package profile storing the detailed information for a package, e.g. types of services, usage allowance, supported countries, activation/allowance type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryPackageTypes($distributor_id, $inventory_id, $offset, $count, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryPackageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [default to 0]
 **count** | **int**| The maximum number of rows to return | [default to 10]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponsePackageType**](../Model/ResponseListResponsePackageType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryRouteConfig**
> \Swagger\Client\Model\ResponseRouteConfig getInventoryRouteConfig($distributor_id, $inventory_id, $request_id)

Get the Inventory's route config details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryRouteConfig($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryRouteConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRouteConfig**](../Model/ResponseRouteConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventorySmsRates**
> \Swagger\Client\Model\ResponseListResponseInventoryRateEntryALegSms getInventorySmsRates($distributor_id, $inventory_id, $request_id)

Retrieves the SMS Rates for the inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventorySmsRates($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventorySmsRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseInventoryRateEntryALegSms**](../Model/ResponseListResponseInventoryRateEntryALegSms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryStatus**
> \Swagger\Client\Model\ResponseInventoryStatus getInventoryStatus($distributor_id, $inventory_id, $request_id)

Get the Inventory's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryStatus($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseInventoryStatus**](../Model/ResponseInventoryStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryVoiceRates**
> \Swagger\Client\Model\ResponseListResponseInventoryRateEntryALegVoice getInventoryVoiceRates($distributor_id, $inventory_id, $request_id)

Retrieves the Voice Rates for the inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryVoiceRates($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryVoiceRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseInventoryRateEntryALegVoice**](../Model/ResponseListResponseInventoryRateEntryALegVoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkAccessEntries**
> \Swagger\Client\Model\ResponseListResponseNetworkAccessEntry getNetworkAccessEntries($distributor_id, $inventory_id, $request_id)

Get the Network Access entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getNetworkAccessEntries($distributor_id, $inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getNetworkAccessEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseNetworkAccessEntry**](../Model/ResponseListResponseNetworkAccessEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInventories**
> \Swagger\Client\Model\ResponseListResponseInventory listInventories($distributor_id, $offset, $count, $request_id)

List inventories

Return the inventory list of a distributor. Each inventory contains many groups and belongs to one distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->listInventories($distributor_id, $offset, $count, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->listInventories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
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

# **provisionSimsOnInventory**
> provisionSimsOnInventory($distributor_id, $inventory_id, $body, $request_id)

Provision SIMs under an inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestProvisionInventorySim(); // \Swagger\Client\Model\RequestProvisionInventorySim | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->provisionSimsOnInventory($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->provisionSimsOnInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestProvisionInventorySim**](../Model/RequestProvisionInventorySim.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSimsFromInventory**
> removeSimsFromInventory($distributor_id, $inventory_id, $body, $request_id)

Remove SIMs under an inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestRemoveInventorySim(); // \Swagger\Client\Model\RequestRemoveInventorySim | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->removeSimsFromInventory($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->removeSimsFromInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestRemoveInventorySim**](../Model/RequestRemoveInventorySim.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateALegDataEntries**
> updateALegDataEntries($distributor_id, $inventory_id, $body, $request_id)

Update (or create if non-existent) rate entries of A Leg for a given Inventory for Data service

Use 'null' as the rate value or omit the rate field ('rate') to disable the service. If 'rate' is 0,  it means that the distributor will not be charged for the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = array(new \Swagger\Client\Model\RequestALegDataEntry()); // \Swagger\Client\Model\RequestALegDataEntry[] | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateALegDataEntries($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateALegDataEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestALegDataEntry[]**](../Model/RequestALegDataEntry.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateALegSmsEntries**
> updateALegSmsEntries($distributor_id, $inventory_id, $body, $request_id)

Update (or create if non-existent) rate entries of A Leg for a given Inventory for SMS service

Use 'null' as the rate value or omit the rate field ('moRate' and/or 'mtRate') to disable the service. If 'moRate' and/or 'mtRate' is 0, it means that the distributor will not be charged for the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = array(new \Swagger\Client\Model\RequestALegSmsEntry()); // \Swagger\Client\Model\RequestALegSmsEntry[] | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateALegSmsEntries($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateALegSmsEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestALegSmsEntry[]**](../Model/RequestALegSmsEntry.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateALegVoiceEntries**
> updateALegVoiceEntries($distributor_id, $inventory_id, $body, $request_id)

Update (or create if non-existent) rate entries of A Leg for a given Inventory for Voice service

Use 'null' as the rate value or omit the rate field ('moRate' and/or 'mtRate') to disable the service. If 'moRate' and/or 'mtRate' is 0, it means that the distributor will not be charged for the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = array(new \Swagger\Client\Model\RequestALegVoiceEntry()); // \Swagger\Client\Model\RequestALegVoiceEntry[] | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateALegVoiceEntries($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateALegVoiceEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestALegVoiceEntry[]**](../Model/RequestALegVoiceEntry.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventoryStatus**
> updateInventoryStatus($distributor_id, $inventory_id, $body, $request_id)

Update the Inventory's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestUpdateInventoryStatus(); // \Swagger\Client\Model\RequestUpdateInventoryStatus | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateInventoryStatus($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateInventoryStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestUpdateInventoryStatus**](../Model/RequestUpdateInventoryStatus.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNetworkAccessEntries**
> updateNetworkAccessEntries($distributor_id, $inventory_id, $body, $request_id)

Add or Update the Network Access entries

Return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$inventory_id = 56; // int | The unique identifier of an inventory
$body = new \Swagger\Client\Model\RequestUpdateNetworkAccessEntries(); // \Swagger\Client\Model\RequestUpdateNetworkAccessEntries | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateNetworkAccessEntries($distributor_id, $inventory_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateNetworkAccessEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **inventory_id** | **int**| The unique identifier of an inventory |
 **body** | [**\Swagger\Client\Model\RequestUpdateNetworkAccessEntries**](../Model/RequestUpdateNetworkAccessEntries.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

