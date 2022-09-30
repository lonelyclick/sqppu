# Swagger\Client\AuthorizationApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDistributorAuthorization**](AuthorizationApi.md#getdistributorauthorization) | **GET** /authorization/distributor/{distributorId} | Returns the permissions the logged in user has on the Distributor
[**getGroupAuthorization**](AuthorizationApi.md#getgroupauthorization) | **GET** /authorization/group/{groupId} | Returns the permissions the logged in user has on the Group
[**getIccidAuthorization**](AuthorizationApi.md#geticcidauthorization) | **GET** /authorization/iccid/{iccid} | Returns the permissions the logged in user has on the ICCID
[**getInventoryAuthorization**](AuthorizationApi.md#getinventoryauthorization) | **GET** /authorization/inventory/{inventoryId} | Returns the permissions the logged in user has on the Inventory
[**getPackageAuthorization**](AuthorizationApi.md#getpackageauthorization) | **GET** /authorization/package/{packageId} | Returns the permissions the logged in user has on the Package
[**getPackageTemplateAuthorization**](AuthorizationApi.md#getpackagetemplateauthorization) | **GET** /authorization/packageTemplate/{packageTemplateId} | Returns the permissions the logged in user has on the Package Template
[**getSponsoredImsiAuthorization**](AuthorizationApi.md#getsponsoredimsiauthorization) | **GET** /authorization/networkSubscriber/{sponsoredImsi} | Returns the permissions the logged in user has on the Sponsored IMSI
[**getWhitelistAuthorization**](AuthorizationApi.md#getwhitelistauthorization) | **GET** /authorization/whitelist/{whitelistId} | Returns the permissions the logged in user has on the Whitelist

# **getDistributorAuthorization**
> \Swagger\Client\Model\ResponsePermission getDistributorAuthorization($distributor_id, $request_id)

Returns the permissions the logged in user has on the Distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The ID of the Distributor to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getDistributorAuthorization($distributor_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getDistributorAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The ID of the Distributor to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupAuthorization**
> \Swagger\Client\Model\ResponsePermission getGroupAuthorization($group_id, $request_id)

Returns the permissions the logged in user has on the Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | The ID of the Group to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getGroupAuthorization($group_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getGroupAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| The ID of the Group to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIccidAuthorization**
> \Swagger\Client\Model\ResponsePermission getIccidAuthorization($iccid, $request_id)

Returns the permissions the logged in user has on the ICCID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$iccid = "iccid_example"; // string | The ID of the ICCID to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getIccidAuthorization($iccid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getIccidAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iccid** | **string**| The ID of the ICCID to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryAuthorization**
> \Swagger\Client\Model\ResponsePermission getInventoryAuthorization($inventory_id, $request_id)

Returns the permissions the logged in user has on the Inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inventory_id = 56; // int | The ID of the Inventory to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getInventoryAuthorization($inventory_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getInventoryAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **int**| The ID of the Inventory to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageAuthorization**
> \Swagger\Client\Model\ResponsePermission getPackageAuthorization($package_id, $request_id)

Returns the permissions the logged in user has on the Package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = "package_id_example"; // string | The ID of (UUID4) the Package to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getPackageAuthorization($package_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getPackageAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The ID of (UUID4) the Package to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageTemplateAuthorization**
> \Swagger\Client\Model\ResponsePermission getPackageTemplateAuthorization($package_template_id, $request_id)

Returns the permissions the logged in user has on the Package Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_template_id = 56; // int | The ID of the Package Template to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getPackageTemplateAuthorization($package_template_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getPackageTemplateAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_template_id** | **int**| The ID of the Package Template to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSponsoredImsiAuthorization**
> \Swagger\Client\Model\ResponsePermission getSponsoredImsiAuthorization($sponsored_imsi, $request_id)

Returns the permissions the logged in user has on the Sponsored IMSI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sponsored_imsi = 789; // int | The Sponsored IMSI to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getSponsoredImsiAuthorization($sponsored_imsi, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getSponsoredImsiAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sponsored_imsi** | **int**| The Sponsored IMSI to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhitelistAuthorization**
> \Swagger\Client\Model\ResponsePermission getWhitelistAuthorization($whitelist_id, $request_id)

Returns the permissions the logged in user has on the Whitelist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$whitelist_id = 56; // int | The ID of the Whitelist to check the authorization
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getWhitelistAuthorization($whitelist_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getWhitelistAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whitelist_id** | **int**| The ID of the Whitelist to check the authorization |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePermission**](../Model/ResponsePermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

