# Swagger\Client\SIMApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustSimBalance**](SIMApi.md#adjustsimbalance) | **POST** /{distributorId}/sim/{iccid}/adjustBalance | Adjust the balance of a SIM
[**cancelSimLocationUpdate**](SIMApi.md#cancelsimlocationupdate) | **POST** /{distributorId}/sim/{iccid}/cancelLocationUpdate | Cancel SIM location update
[**createSimPackage**](SIMApi.md#createsimpackage) | **POST** /{distributorId}/sim/{iccid}/addPackage | Add a package to a SIM
[**getRoutingConfiguration**](SIMApi.md#getroutingconfiguration) | **GET** /{distributorId}/sim/{iccid}/routingConfiguration | Get the routing configuration
[**getSim**](SIMApi.md#getsim) | **GET** /{distributorId}/sim/{iccid}/info | Get a SIM information
[**getSimBalance**](SIMApi.md#getsimbalance) | **GET** /{distributorId}/sim/{iccid}/balance | Get the balance of a SIM
[**getSimBalanceDrain**](SIMApi.md#getsimbalancedrain) | **GET** /{distributorId}/sim/{iccid}/balanceDrain | Get the balance drain of a SIM
[**getSimByIccid**](SIMApi.md#getsimbyiccid) | **GET** /{distributorId}/sim/{iccid} | Get a SIM information
[**getSimCli**](SIMApi.md#getsimcli) | **GET** /{distributorId}/sim/{iccid}/cli | Get calling line identification of a SIM
[**getSimDids**](SIMApi.md#getsimdids) | **GET** /{distributorId}/sim/{iccid}/dids | Get DID numbers of a SIM
[**getSimOverdraft**](SIMApi.md#getsimoverdraft) | **GET** /{distributorId}/sim/{iccid}/overdraft | Get the overdraft of a SIM
[**getSimPackages**](SIMApi.md#getsimpackages) | **GET** /{distributorId}/sim/{iccid}/package/infos | Get packages owned by a SIM
[**getSimStatus**](SIMApi.md#getsimstatus) | **GET** /{distributorId}/sim/{iccid}/status | Get the status of a SIM
[**getSimThrottle**](SIMApi.md#getsimthrottle) | **GET** /{distributorId}/sim/{iccid}/throttle | Get the throttle speed of a SIM
[**purge**](SIMApi.md#purge) | **DELETE** /{distributorId}/sim/{iccid}/purge | Terminate a SIM
[**sendSms**](SIMApi.md#sendsms) | **POST** /{distributorId}/sim/{iccid}/sendSms | Send an SMS
[**sendSmsBinary**](SIMApi.md#sendsmsbinary) | **POST** /{distributorId}/sim/{iccid}/sendSmsBinary | Send an SMS in binary
[**sendSmsBinaryCustom**](SIMApi.md#sendsmsbinarycustom) | **POST** /{distributorId}/sim/{iccid}/sendSmsBinaryCustom | Send a binary SMS with custom SMPP and GSM SMS parameters
[**setSimBalanceDrain**](SIMApi.md#setsimbalancedrain) | **POST** /{distributorId}/sim/{iccid}/balanceDrain | Set the balance drain of a SIM
[**setSimOverdraft**](SIMApi.md#setsimoverdraft) | **POST** /{distributorId}/sim/{iccid}/overdraft | Set the overdraft of a SIM
[**setSimParent**](SIMApi.md#setsimparent) | **POST** /{distributorId}/sim/{iccid}/setParent | Set a SIM parent
[**setSimStatus**](SIMApi.md#setsimstatus) | **POST** /{distributorId}/sim/{iccid}/status | Set the status of a SIM
[**setSimThrottle**](SIMApi.md#setsimthrottle) | **POST** /{distributorId}/sim/{iccid}/throttle | Set the throttle speed of a SIM
[**switchProfileOTA**](SIMApi.md#switchprofileota) | **POST** /{distributorId}/sim/{iccid}/switchProfileOTA | Switch IMSI profile Over-The-Air
[**updateRoutingConfiguration**](SIMApi.md#updateroutingconfiguration) | **POST** /{distributorId}/sim/{iccid}/updateRoutingConfiguration | Update the routing configuration for a sim ICCID

# **adjustSimBalance**
> adjustSimBalance($distributor_id, $iccid, $body, $request_id)

Adjust the balance of a SIM

Increase or decrease the balance of a SIM, which is the amount of credit in it, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestAdjustBalance(); // \Swagger\Client\Model\RequestAdjustBalance | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->adjustSimBalance($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->adjustSimBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestAdjustBalance**](../Model/RequestAdjustBalance.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSimLocationUpdate**
> cancelSimLocationUpdate($distributor_id, $iccid, $request_id)

Cancel SIM location update

Location update indicates its current location, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->cancelSimLocationUpdate($distributor_id, $iccid, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->cancelSimLocationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSimPackage**
> \Swagger\Client\Model\ResponsePackage createSimPackage($distributor_id, $iccid, $body, $request_id)

Add a package to a SIM

Assign and activate a package to a SIM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestCreatePackage(); // \Swagger\Client\Model\RequestCreatePackage | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createSimPackage($distributor_id, $iccid, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->createSimPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestCreatePackage**](../Model/RequestCreatePackage.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePackage**](../Model/ResponsePackage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingConfiguration**
> \Swagger\Client\Model\ResponseSimRouteConfiguration getRoutingConfiguration($distributor_id, $iccid, $request_id)

Get the routing configuration

Get the routing configuration for a given ICCID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getRoutingConfiguration($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getRoutingConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimRouteConfiguration**](../Model/ResponseSimRouteConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSim**
> \Swagger\Client\Model\ResponseSim getSim($distributor_id, $iccid, $request_id)

Get a SIM information

A SIM belongs to one group and inventory and it may contain multiple IMSIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSim($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSim**](../Model/ResponseSim.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimBalance**
> \Swagger\Client\Model\ResponseBalance getSimBalance($distributor_id, $iccid, $request_id)

Get the balance of a SIM

Group, Inventory and SIM have its balance, which is the amount of credit in it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimBalance($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseBalance**](../Model/ResponseBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimBalanceDrain**
> \Swagger\Client\Model\ResponseBalanceDrain getSimBalanceDrain($distributor_id, $iccid, $request_id)

Get the balance drain of a SIM

Return the drain from the parent of a SIM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimBalanceDrain($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimBalanceDrain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseBalanceDrain**](../Model/ResponseBalanceDrain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimByIccid**
> \Swagger\Client\Model\ResponseSim getSimByIccid($distributor_id, $iccid, $request_id)

Get a SIM information

A SIM belongs to one group and inventory and it may contain multiple IMSIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimByIccid($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimByIccid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSim**](../Model/ResponseSim.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimCli**
> \Swagger\Client\Model\ResponseSimCli getSimCli($distributor_id, $iccid, $request_id)

Get calling line identification of a SIM

Calling line identification is a number that identifies the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimCli($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimCli: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimCli**](../Model/ResponseSimCli.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimDids**
> \Swagger\Client\Model\ResponseSimDids getSimDids($distributor_id, $iccid, $request_id)

Get DID numbers of a SIM

Direct inward dialing numbers (DIDs) are virtual numbers that allow you to route calls to your existing telephone lines

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimDids($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimDids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimDids**](../Model/ResponseSimDids.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimOverdraft**
> \Swagger\Client\Model\ResponseOverdraft getSimOverdraft($distributor_id, $iccid, $request_id)

Get the overdraft of a SIM

Group, Inventory and SIM have its overdraft, which is the limit that can go beyond zero balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimOverdraft($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimOverdraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseOverdraft**](../Model/ResponseOverdraft.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimPackages**
> \Swagger\Client\Model\ResponseListResponsePackage getSimPackages($distributor_id, $iccid, $request_id, $package_statuses, $offset, $count, $sort_field, $sort_order)

Get packages owned by a SIM

Return all packages subscribed by a SIM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$package_statuses = array("package_statuses_example"); // string[] | A list of target package status
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return
$sort_field = "packageId"; // string | The field to sort the results
$sort_order = "ASC"; // string | The order to sort the results

try {
    $result = $apiInstance->getSimPackages($distributor_id, $iccid, $request_id, $package_statuses, $offset, $count, $sort_field, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **package_statuses** | [**string[]**](../Model/string.md)| A list of target package status | [optional]
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [optional] [default to 0]
 **count** | **int**| The maximum number of rows to return | [optional] [default to 10]
 **sort_field** | **string**| The field to sort the results | [optional] [default to packageId]
 **sort_order** | **string**| The order to sort the results | [optional] [default to ASC]

### Return type

[**\Swagger\Client\Model\ResponseListResponsePackage**](../Model/ResponseListResponsePackage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimStatus**
> \Swagger\Client\Model\ResponseSimStatus getSimStatus($distributor_id, $iccid, $request_id)

Get the status of a SIM

Return the status of Data, Voice and SMS of a SIM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimStatus($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimStatus**](../Model/ResponseSimStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSimThrottle**
> \Swagger\Client\Model\ResponseSimThrottle getSimThrottle($distributor_id, $iccid, $request_id)

Get the throttle speed of a SIM

Speed throttling is a purposeful slowing of available speed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSimThrottle($distributor_id, $iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getSimThrottle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseSimThrottle**](../Model/ResponseSimThrottle.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purge**
> purge($distributor_id, $iccid, $request_id)

Terminate a SIM

Terminate a SIM, the service will be immediately interrupted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->purge($distributor_id, $iccid, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->purge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSms**
> sendSms($distributor_id, $iccid, $body, $request_id)

Send an SMS

Send an SMS to a SIM, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSendSms(); // \Swagger\Client\Model\RequestSendSms | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->sendSms($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
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
> sendSmsBinary($distributor_id, $iccid, $body, $request_id)

Send an SMS in binary

Send an SMS in binary to a SIM, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSendSmsBinary(); // \Swagger\Client\Model\RequestSendSmsBinary | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->sendSmsBinary($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->sendSmsBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
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
> sendSmsBinaryCustom($distributor_id, $iccid, $body, $request_id)

Send a binary SMS with custom SMPP and GSM SMS parameters

Send a binary SMS with custom SMPP and GSM SMS parameters to a SIM, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSendSmsBinaryCustom(); // \Swagger\Client\Model\RequestSendSmsBinaryCustom | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->sendSmsBinaryCustom($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->sendSmsBinaryCustom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
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

# **setSimBalanceDrain**
> setSimBalanceDrain($distributor_id, $iccid, $body, $request_id)

Set the balance drain of a SIM

Set the balance drain of a SIM, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSetBalanceDrain(); // \Swagger\Client\Model\RequestSetBalanceDrain | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setSimBalanceDrain($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->setSimBalanceDrain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestSetBalanceDrain**](../Model/RequestSetBalanceDrain.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSimOverdraft**
> setSimOverdraft($distributor_id, $iccid, $body, $request_id)

Set the overdraft of a SIM

Group, Inventory and SIM have its overdraft, which is the limit that can go beyond zero balance, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSimOverdraft(); // \Swagger\Client\Model\RequestSimOverdraft | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setSimOverdraft($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->setSimOverdraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestSimOverdraft**](../Model/RequestSimOverdraft.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSimParent**
> setSimParent($distributor_id, $iccid, $body, $request_id)

Set a SIM parent

Change to another group owning a SIM, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSimParent(); // \Swagger\Client\Model\RequestSimParent | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setSimParent($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->setSimParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestSimParent**](../Model/RequestSimParent.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSimStatus**
> setSimStatus($distributor_id, $iccid, $body, $request_id)

Set the status of a SIM

Set the status of Data, Voice and SMS, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSimStatus(); // \Swagger\Client\Model\RequestSimStatus | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setSimStatus($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->setSimStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestSimStatus**](../Model/RequestSimStatus.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSimThrottle**
> setSimThrottle($distributor_id, $iccid, $body, $request_id)

Set the throttle speed of a SIM

Speed throttling is a purposeful slowing of available speed, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSimThrottle(); // \Swagger\Client\Model\RequestSimThrottle | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setSimThrottle($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->setSimThrottle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestSimThrottle**](../Model/RequestSimThrottle.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **switchProfileOTA**
> switchProfileOTA($distributor_id, $iccid, $body, $request_id)

Switch IMSI profile Over-The-Air

Switch the IMSI profile Over-The-Air of Telna SIMs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestSwitchProfileOTA(); // \Swagger\Client\Model\RequestSwitchProfileOTA | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->switchProfileOTA($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->switchProfileOTA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestSwitchProfileOTA**](../Model/RequestSwitchProfileOTA.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoutingConfiguration**
> updateRoutingConfiguration($distributor_id, $iccid, $body, $request_id)

Update the routing configuration for a sim ICCID

Update SIM routing configuration, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$iccid = "iccid_example"; // string | The unique identifier of a SIM
$body = new \Swagger\Client\Model\RequestUpdateRouteConfiguration(); // \Swagger\Client\Model\RequestUpdateRouteConfiguration | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateRoutingConfiguration($distributor_id, $iccid, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->updateRoutingConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **iccid** | **string**| The unique identifier of a SIM |
 **body** | [**\Swagger\Client\Model\RequestUpdateRouteConfiguration**](../Model/RequestUpdateRouteConfiguration.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

