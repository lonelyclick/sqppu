# Swagger\Client\GroupApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustGroupBalance**](GroupApi.md#adjustgroupbalance) | **POST** /{distributorId}/group/{groupId}/adjustBalance | Modify the balance of a group
[**createGroupSubgroup**](GroupApi.md#creategroupsubgroup) | **POST** /{distributorId}/group/{groupId}/subGroup | Create a sub-group
[**deleteGroup**](GroupApi.md#deletegroup) | **DELETE** /{distributorId}/group/{groupId} | Delete a group
[**getALegDataEntries**](GroupApi.md#getalegdataentries) | **GET** /{distributorId}/group/{groupId}/dataalegrates | Get a list of A Leg rates for a given Group for Data service
[**getALegSmsEntries**](GroupApi.md#getalegsmsentries) | **GET** /{distributorId}/group/{groupId}/smsalegrates | Get a list of A Leg rates for a given Group for SMS service
[**getALegVoiceEntries**](GroupApi.md#getalegvoiceentries) | **GET** /{distributorId}/group/{groupId}/voicealegrates | Get a list of A Leg rates for a given Group for Voice service
[**getBLegSmsEntries**](GroupApi.md#getblegsmsentries) | **GET** /{distributorId}/group/{groupId}/smsblegrates | Get a list of B Leg rates for a given Group for SMS service
[**getBLegVoiceEntries**](GroupApi.md#getblegvoiceentries) | **GET** /{distributorId}/group/{groupId}/voiceblegrates | Get a list of B Leg rates for a given Group for Voice service
[**getGroup**](GroupApi.md#getgroup) | **GET** /{distributorId}/group/{groupId}/info | Get a group information
[**getGroupBalance**](GroupApi.md#getgroupbalance) | **GET** /{distributorId}/group/{groupId}/balance | Get a group balance
[**getGroupDetails**](GroupApi.md#getgroupdetails) | **GET** /{distributorId}/group/{groupId} | Get the details of a group
[**getGroupOverdraft**](GroupApi.md#getgroupoverdraft) | **GET** /{distributorId}/group/{groupId}/overdraft | Get the overdraft of a group
[**getGroupSims**](GroupApi.md#getgroupsims) | **GET** /{distributorId}/group/{groupId}/sims | Get SIMs owned by a group
[**getGroupSubgroups**](GroupApi.md#getgroupsubgroups) | **GET** /{distributorId}/group/{groupId}/subGroups | Get sub-groups owned by a group
[**setGroupOverdraft**](GroupApi.md#setgroupoverdraft) | **POST** /{distributorId}/group/{groupId}/overdraft | Set the overdraft of a group
[**setGroupParent**](GroupApi.md#setgroupparent) | **POST** /{distributorId}/group/{groupId}/setParent | Set a group parent
[**updateALegDataEntries**](GroupApi.md#updatealegdataentries) | **PUT** /{distributorId}/group/{groupId}/dataalegrates | Update (or create if non-existent) rate entries of A Leg for a given Group for Data service
[**updateALegSmsEntries**](GroupApi.md#updatealegsmsentries) | **PUT** /{distributorId}/group/{groupId}/smsalegrates | Update (or create if non-existent) rate entries of A Leg for a given Group for SMS service
[**updateALegVoiceEntries**](GroupApi.md#updatealegvoiceentries) | **PUT** /{distributorId}/group/{groupId}/voicealegrates | Update (or create if non-existent) rate entries of A Leg for a given Group for Voice service

# **adjustGroupBalance**
> adjustGroupBalance($distributor_id, $group_id, $body, $request_id)

Modify the balance of a group

Increase or decrease the balance of a group, which is the amount of credit in it, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = new \Swagger\Client\Model\RequestAdjustBalance(); // \Swagger\Client\Model\RequestAdjustBalance | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->adjustGroupBalance($distributor_id, $group_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->adjustGroupBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
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

# **createGroupSubgroup**
> \Swagger\Client\Model\ResponseGroup createGroupSubgroup($distributor_id, $group_id, $body, $request_id)

Create a sub-group

A group can contain mulitple sub-groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = new \Swagger\Client\Model\RequestSubgroup(); // \Swagger\Client\Model\RequestSubgroup | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createGroupSubgroup($distributor_id, $group_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroupSubgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **body** | [**\Swagger\Client\Model\RequestSubgroup**](../Model/RequestSubgroup.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseGroup**](../Model/ResponseGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($distributor_id, $group_id, $request_id)

Delete a group

A group contains a bunch of SIMs, belongs to one distributor and inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->deleteGroup($distributor_id, $group_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getALegDataEntries**
> \Swagger\Client\Model\ResponseListResponseRateEntryALegData getALegDataEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort)

Get a list of A Leg rates for a given Group for Data service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$start = 0; // int | The number of leading results to skip
$rows = 1000000; // int | The number of elements to return
$sort = "sort_example"; // string | The field to sort the elements and the order (asc or desc)

try {
    $result = $apiInstance->getALegDataEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getALegDataEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **start** | **int**| The number of leading results to skip | [optional] [default to 0]
 **rows** | **int**| The number of elements to return | [optional] [default to 1000000]
 **sort** | **string**| The field to sort the elements and the order (asc or desc) | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseRateEntryALegData**](../Model/ResponseListResponseRateEntryALegData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getALegSmsEntries**
> \Swagger\Client\Model\ResponseListResponseRateEntryALegSms getALegSmsEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort)

Get a list of A Leg rates for a given Group for SMS service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$start = 0; // int | The number of leading results to skip
$rows = 1000000; // int | The number of elements to return
$sort = "sort_example"; // string | The field to sort the elements and the order (asc or desc)

try {
    $result = $apiInstance->getALegSmsEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getALegSmsEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **start** | **int**| The number of leading results to skip | [optional] [default to 0]
 **rows** | **int**| The number of elements to return | [optional] [default to 1000000]
 **sort** | **string**| The field to sort the elements and the order (asc or desc) | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseRateEntryALegSms**](../Model/ResponseListResponseRateEntryALegSms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getALegVoiceEntries**
> \Swagger\Client\Model\ResponseListResponseRateEntryALegVoice getALegVoiceEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort)

Get a list of A Leg rates for a given Group for Voice service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$start = 0; // int | The number of leading results to skip
$rows = 1000000; // int | The number of elements to return
$sort = "sort_example"; // string | The field to sort the elements and the order (asc or desc)

try {
    $result = $apiInstance->getALegVoiceEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getALegVoiceEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **start** | **int**| The number of leading results to skip | [optional] [default to 0]
 **rows** | **int**| The number of elements to return | [optional] [default to 1000000]
 **sort** | **string**| The field to sort the elements and the order (asc or desc) | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseRateEntryALegVoice**](../Model/ResponseListResponseRateEntryALegVoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBLegSmsEntries**
> \Swagger\Client\Model\ResponseListResponseRateEntryBLegSms getBLegSmsEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort)

Get a list of B Leg rates for a given Group for SMS service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$start = 0; // int | The number of leading results to skip
$rows = 10; // int | The number of elements to return
$sort = "sort_example"; // string | The field to sort the elements and the order (asc or desc)

try {
    $result = $apiInstance->getBLegSmsEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getBLegSmsEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **start** | **int**| The number of leading results to skip | [optional] [default to 0]
 **rows** | **int**| The number of elements to return | [optional] [default to 10]
 **sort** | **string**| The field to sort the elements and the order (asc or desc) | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseRateEntryBLegSms**](../Model/ResponseListResponseRateEntryBLegSms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBLegVoiceEntries**
> \Swagger\Client\Model\ResponseListResponseRateEntryBLegVoice getBLegVoiceEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort)

Get a list of B Leg rates for a given Group for Voice service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$start = 0; // int | The number of leading results to skip
$rows = 1000000; // int | The number of elements to return
$sort = "sort_example"; // string | The field to sort the elements and the order (asc or desc)

try {
    $result = $apiInstance->getBLegVoiceEntries($distributor_id, $group_id, $request_id, $start, $rows, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getBLegVoiceEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **start** | **int**| The number of leading results to skip | [optional] [default to 0]
 **rows** | **int**| The number of elements to return | [optional] [default to 1000000]
 **sort** | **string**| The field to sort the elements and the order (asc or desc) | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseRateEntryBLegVoice**](../Model/ResponseListResponseRateEntryBLegVoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \Swagger\Client\Model\ResponseGroup getGroup($distributor_id, $group_id, $request_id)

Get a group information

A group contains a bunch of SIMs, belongs to one distributor and inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getGroup($distributor_id, $group_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseGroup**](../Model/ResponseGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupBalance**
> \Swagger\Client\Model\ResponseBalance getGroupBalance($distributor_id, $group_id, $request_id)

Get a group balance

Group, Inventory and SIM have its balance, which is the amount of credit in it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getGroupBalance($distributor_id, $group_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseBalance**](../Model/ResponseBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupDetails**
> \Swagger\Client\Model\ResponseGroupDetails getGroupDetails($distributor_id, $group_id, $request_id)

Get the details of a group

Get the details about the group such as: parent group, balance, overdraft, date of creation, date of last modification, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getGroupDetails($distributor_id, $group_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseGroupDetails**](../Model/ResponseGroupDetails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupOverdraft**
> \Swagger\Client\Model\ResponseOverdraft getGroupOverdraft($distributor_id, $group_id, $request_id)

Get the overdraft of a group

Group, Inventory and SIM have its overdraft, which is the limit that can go beyond zero balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getGroupOverdraft($distributor_id, $group_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupOverdraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseOverdraft**](../Model/ResponseOverdraft.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupSims**
> \Swagger\Client\Model\ResponseListResponseSim getGroupSims($distributor_id, $group_id, $request_id, $offset, $count)

Get SIMs owned by a group

Return SIMs directly owned by a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return

try {
    $result = $apiInstance->getGroupSims($distributor_id, $group_id, $request_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupSims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [optional] [default to 0]
 **count** | **int**| The maximum number of rows to return | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSim**](../Model/ResponseListResponseSim.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupSubgroups**
> \Swagger\Client\Model\ResponseListResponseGroup getGroupSubgroups($distributor_id, $group_id, $request_id, $offset, $count)

Get sub-groups owned by a group

Get sub-groups directly owned by a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$offset = 0; // int | The offset of the first row to return, the first row is 0, not 1
$count = 10; // int | The maximum number of rows to return

try {
    $result = $apiInstance->getGroupSubgroups($distributor_id, $group_id, $request_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupSubgroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **offset** | **int**| The offset of the first row to return, the first row is 0, not 1 | [optional] [default to 0]
 **count** | **int**| The maximum number of rows to return | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\ResponseListResponseGroup**](../Model/ResponseListResponseGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupOverdraft**
> setGroupOverdraft($distributor_id, $group_id, $body, $request_id)

Set the overdraft of a group

Group, Inventory and SIM have its overdraft, which is the limit that can go beyond zero balance, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = new \Swagger\Client\Model\RequestGroupOverdraft(); // \Swagger\Client\Model\RequestGroupOverdraft | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setGroupOverdraft($distributor_id, $group_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupOverdraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **body** | [**\Swagger\Client\Model\RequestGroupOverdraft**](../Model/RequestGroupOverdraft.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupParent**
> setGroupParent($distributor_id, $group_id, $body, $request_id)

Set a group parent

Given a new group to be the parent of a group, return HTTP code 204 if success

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = new \Swagger\Client\Model\RequestGroupParent(); // \Swagger\Client\Model\RequestGroupParent | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->setGroupParent($distributor_id, $group_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->setGroupParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
 **body** | [**\Swagger\Client\Model\RequestGroupParent**](../Model/RequestGroupParent.md)|  | [optional]
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
> updateALegDataEntries($distributor_id, $group_id, $body, $request_id)

Update (or create if non-existent) rate entries of A Leg for a given Group for Data service

Use 'null' as the rate value or omit the rate field ('rate') to disable the service. If 'rate' is 0,  it means that the user will not be charged for the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = array(new \Swagger\Client\Model\RequestALegDataEntry()); // \Swagger\Client\Model\RequestALegDataEntry[] | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateALegDataEntries($distributor_id, $group_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateALegDataEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
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
> updateALegSmsEntries($distributor_id, $group_id, $body, $request_id)

Update (or create if non-existent) rate entries of A Leg for a given Group for SMS service

Use 'null' as the rate value or omit the rate field ('moRate' and/or 'mtRate') to disable the service. If 'moRate' and/or 'mtRate' is 0, it means that the user will not be charged for the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = array(new \Swagger\Client\Model\RequestALegSmsEntry()); // \Swagger\Client\Model\RequestALegSmsEntry[] | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateALegSmsEntries($distributor_id, $group_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateALegSmsEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
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
> updateALegVoiceEntries($distributor_id, $group_id, $body, $request_id)

Update (or create if non-existent) rate entries of A Leg for a given Group for Voice service

Use 'null' as the rate value or omit the rate field ('moRate' and/or 'mtRate') to disable the service. If 'moRate' and/or 'mtRate' is 0, it means that the user will not be charged for the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$group_id = 56; // int | The unique identifier of a group
$body = array(new \Swagger\Client\Model\RequestALegVoiceEntry()); // \Swagger\Client\Model\RequestALegVoiceEntry[] | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $apiInstance->updateALegVoiceEntries($distributor_id, $group_id, $body, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateALegVoiceEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **group_id** | **int**| The unique identifier of a group |
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

