# Swagger\Client\SearchApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchDataCdr**](SearchApi.md#searchdatacdr) | **GET** /{distributorId}/search/cdr/data | Search Data CDRs
[**searchDistributors**](SearchApi.md#searchdistributors) | **GET** /{distributorId}/search/distributor | Search distributors
[**searchGroups**](SearchApi.md#searchgroups) | **GET** /{distributorId}/search/group | Search Groups
[**searchImis**](SearchApi.md#searchimis) | **GET** /{distributorId}/search/imsis | Search IMSIs
[**searchImsiSlotProfiles**](SearchApi.md#searchimsislotprofiles) | **GET** /{distributorId}/search/imsi-slot-profiles | Get IMSI Slot Profile entries
[**searchInventories**](SearchApi.md#searchinventories) | **GET** /{distributorId}/search/inventory | Search inventories
[**searchLu**](SearchApi.md#searchlu) | **GET** /{distributorId}/search/lu | Search Location Updates
[**searchPackageTypes**](SearchApi.md#searchpackagetypes) | **GET** /{distributorId}/search/packageType | Search package types
[**searchPackages**](SearchApi.md#searchpackages) | **GET** /{distributorId}/search/package | Search packages
[**searchSims**](SearchApi.md#searchsims) | **GET** /{distributorId}/search/sim | Search SIMs
[**searchSmsCdr**](SearchApi.md#searchsmscdr) | **GET** /{distributorId}/search/cdr/sms | Search SMS CDRs
[**searchTrafficPolicies**](SearchApi.md#searchtrafficpolicies) | **GET** /{distributorId}/search/trafficPolicy | Search traffic policies
[**searchVoiceCdr**](SearchApi.md#searchvoicecdr) | **GET** /{distributorId}/search/cdr/voice | Search Voice CDRs
[**searchWhitelistEntries**](SearchApi.md#searchwhitelistentries) | **GET** /{distributorId}/search/whitelistEntry | Get whitelist entries
[**searchWhitelists**](SearchApi.md#searchwhitelists) | **GET** /{distributorId}/search/whitelist | Search whitelists

# **searchDataCdr**
> \Swagger\Client\Model\ResponseListResponseDataCdr searchDataCdr($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_data_cdr)

Search Data CDRs

Search Data CDR by fields, with filter options and sorting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$q = "*:*"; // string | The query string
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$start = 0; // int | Number of leading records to skip
$rows = 10; // int | Number of records to return after 'start'
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_data_cdr = true; // bool | include the children data cdr to the response

try {
    $result = $apiInstance->searchDataCdr($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_data_cdr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDataCdr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **q** | **string**| The query string | [optional] [default to *:*]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **start** | **int**| Number of leading records to skip | [optional] [default to 0]
 **rows** | **int**| Number of records to return after &#x27;start&#x27; | [optional] [default to 10]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_data_cdr** | **bool**| include the children data cdr to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseDataCdr**](../Model/ResponseListResponseDataCdr.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDistributors**
> \Swagger\Client\Model\ResponseListResponseSearchDistributor searchDistributors($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_distributor)

Search distributors

Return first level children and its information belonging to a parent distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_distributor = true; // bool | include the children distributor to the response

try {
    $result = $apiInstance->searchDistributors($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_distributor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDistributors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_distributor** | **bool**| include the children distributor to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchDistributor**](../Model/ResponseListResponseSearchDistributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGroups**
> \Swagger\Client\Model\ResponseListResponseGroupDetails searchGroups($distributor_id, $q, $start, $rows, $request_id, $sort, $with_children_groups, $fq)

Search Groups

Return all Groups belonging to a distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading elements to skip
$rows = 56; // int | Number of elements to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$sort = "sort_example"; // string | Sort field or function with asc|desc
$with_children_groups = true; // bool | include the children groups to the response
$fq = array("fq_example"); // string[] | Filter query

try {
    $result = $apiInstance->searchGroups($distributor_id, $q, $start, $rows, $request_id, $sort, $with_children_groups, $fq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading elements to skip |
 **rows** | **int**| Number of elements to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **with_children_groups** | **bool**| include the children groups to the response | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseGroupDetails**](../Model/ResponseListResponseGroupDetails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchImis**
> \Swagger\Client\Model\ResponseListResponseImsiRecord searchImis($distributor_id, $request_id, $search_key, $search_value, $page, $page_size, $sort_by, $sort_order, $whitelist_id, $imsi_id_from, $imsi_id_to, $with_children_imsis)

Search IMSIs

Return all IMSIs and its information belonging to a distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$search_key = "search_key_example"; // string | Column to be search
$search_value = "search_value_example"; // string | Text to be search
$page = 0; // int | The Page Number
$page_size = 10; // int | Size of the page
$sort_by = "createEpochMilli"; // string | Sort field
$sort_order = "DESC"; // string | Sort order i.e. ASC|DESC
$whitelist_id = 56; // int | Whitelist ID
$imsi_id_from = 789; // int | IMSI value From
$imsi_id_to = 789; // int | IMSI value To
$with_children_imsis = true; // bool | include the children IMSIs to the response

try {
    $result = $apiInstance->searchImis($distributor_id, $request_id, $search_key, $search_value, $page, $page_size, $sort_by, $sort_order, $whitelist_id, $imsi_id_from, $imsi_id_to, $with_children_imsis);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchImis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **search_key** | **string**| Column to be search | [optional]
 **search_value** | **string**| Text to be search | [optional]
 **page** | **int**| The Page Number | [optional] [default to 0]
 **page_size** | **int**| Size of the page | [optional] [default to 10]
 **sort_by** | **string**| Sort field | [optional] [default to createEpochMilli]
 **sort_order** | **string**| Sort order i.e. ASC|DESC | [optional] [default to DESC]
 **whitelist_id** | **int**| Whitelist ID | [optional]
 **imsi_id_from** | **int**| IMSI value From | [optional]
 **imsi_id_to** | **int**| IMSI value To | [optional]
 **with_children_imsis** | **bool**| include the children IMSIs to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseImsiRecord**](../Model/ResponseListResponseImsiRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchImsiSlotProfiles**
> \Swagger\Client\Model\ResponseListResponseSearchImsiSlotProfiles searchImsiSlotProfiles($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df)

Get IMSI Slot Profile entries

Get IMSI Slot Profile entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field

try {
    $result = $apiInstance->searchImsiSlotProfiles($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchImsiSlotProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchImsiSlotProfiles**](../Model/ResponseListResponseSearchImsiSlotProfiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchInventories**
> \Swagger\Client\Model\ResponseListResponseSearchInventory searchInventories($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_inventory)

Search inventories

Return all inventories and its information belonging to a distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_inventory = true; // bool | include the children inventories to the response

try {
    $result = $apiInstance->searchInventories($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchInventories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_inventory** | **bool**| include the children inventories to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchInventory**](../Model/ResponseListResponseSearchInventory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLu**
> \Swagger\Client\Model\ResponseListResponseLocationUpdate searchLu($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_lu)

Search Location Updates

Search LUs by fields, with filter options and sorting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$q = "*:*"; // string | The query string
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$start = 0; // int | Number of leading records to skip
$rows = 10; // int | Number of records to return after 'start'
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_lu = true; // bool | include the children location updates to the response

try {
    $result = $apiInstance->searchLu($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_lu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchLu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **q** | **string**| The query string | [optional] [default to *:*]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **start** | **int**| Number of leading records to skip | [optional] [default to 0]
 **rows** | **int**| Number of records to return after &#x27;start&#x27; | [optional] [default to 10]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_lu** | **bool**| include the children location updates to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseLocationUpdate**](../Model/ResponseListResponseLocationUpdate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPackageTypes**
> \Swagger\Client\Model\ResponseListResponseSearchPackageType searchPackageTypes($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_package_type)

Search package types

Return all package types and its information belonging to a distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_package_type = true; // bool | include the children package type to the response

try {
    $result = $apiInstance->searchPackageTypes($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_package_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPackageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_package_type** | **bool**| include the children package type to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchPackageType**](../Model/ResponseListResponseSearchPackageType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPackages**
> \Swagger\Client\Model\ResponseListResponseSearchPackage searchPackages($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_packages)

Search packages

Return all purchased packages including its information of a distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_packages = true; // bool | include the children packages to the response

try {
    $result = $apiInstance->searchPackages($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_packages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_packages** | **bool**| include the children packages to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchPackage**](../Model/ResponseListResponseSearchPackage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSims**
> \Swagger\Client\Model\ResponseListResponseSearchSim searchSims($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_sims, $with_deactivated_sims)

Search SIMs

Return all SIMs and its information belonging to a distributor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_sims = true; // bool | include the children sims to the response
$with_deactivated_sims = true; // bool | include the deactivated sims to the response

try {
    $result = $apiInstance->searchSims($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_sims, $with_deactivated_sims);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchSims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_sims** | **bool**| include the children sims to the response | [optional]
 **with_deactivated_sims** | **bool**| include the deactivated sims to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchSim**](../Model/ResponseListResponseSearchSim.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSmsCdr**
> \Swagger\Client\Model\ResponseListResponseSmsCdr searchSmsCdr($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_sms_cdr)

Search SMS CDRs

Search SMS CDR by fields, with filter options and sorting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$q = "*:*"; // string | The query string
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$start = 0; // int | Number of leading records to skip
$rows = 10; // int | Number of records to return after 'start'
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_sms_cdr = true; // bool | include the children SMS CDR to the response

try {
    $result = $apiInstance->searchSmsCdr($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_sms_cdr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchSmsCdr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **q** | **string**| The query string | [optional] [default to *:*]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **start** | **int**| Number of leading records to skip | [optional] [default to 0]
 **rows** | **int**| Number of records to return after &#x27;start&#x27; | [optional] [default to 10]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_sms_cdr** | **bool**| include the children SMS CDR to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSmsCdr**](../Model/ResponseListResponseSmsCdr.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTrafficPolicies**
> \Swagger\Client\Model\ResponseListResponseSearchTrafficPolicy searchTrafficPolicies($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df)

Search traffic policies

Return all traffic policies, which are rules to apply speed throttle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field

try {
    $result = $apiInstance->searchTrafficPolicies($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchTrafficPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchTrafficPolicy**](../Model/ResponseListResponseSearchTrafficPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchVoiceCdr**
> \Swagger\Client\Model\ResponseListResponseVoiceCdr searchVoiceCdr($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_voice_cdr)

Search Voice CDRs

Search Voice CDR by fields, with filter options and sorting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$q = "*:*"; // string | The query string
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$start = 0; // int | Number of leading records to skip
$rows = 10; // int | Number of records to return after 'start'
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_voice_cdr = true; // bool | include the children voice CDR to the response

try {
    $result = $apiInstance->searchVoiceCdr($distributor_id, $request_id, $q, $fq, $sort, $start, $rows, $fl, $df, $with_children_voice_cdr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchVoiceCdr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **q** | **string**| The query string | [optional] [default to *:*]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **start** | **int**| Number of leading records to skip | [optional] [default to 0]
 **rows** | **int**| Number of records to return after &#x27;start&#x27; | [optional] [default to 10]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_voice_cdr** | **bool**| include the children voice CDR to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseVoiceCdr**](../Model/ResponseListResponseVoiceCdr.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchWhitelistEntries**
> \Swagger\Client\Model\ResponseListResponseWhitelistEntry searchWhitelistEntries($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df)

Get whitelist entries

Get whitelist entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field

try {
    $result = $apiInstance->searchWhitelistEntries($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchWhitelistEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseWhitelistEntry**](../Model/ResponseListResponseWhitelistEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchWhitelists**
> \Swagger\Client\Model\ResponseListResponseSearchWhitelist searchWhitelists($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_whitelist)

Search whitelists

Search whitelists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$q = "q_example"; // string | The query string
$start = 56; // int | Number of leading records to skip
$rows = 56; // int | Number of records to return after 'start'
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system
$fq = array("fq_example"); // string[] | Filter query
$sort = "sort_example"; // string | Sort field or function with asc|desc
$fl = "fl_example"; // string | Field list, comma separated
$df = "df_example"; // string | Default search field
$with_children_whitelist = true; // bool | include the children whitelists to the response

try {
    $result = $apiInstance->searchWhitelists($distributor_id, $q, $start, $rows, $request_id, $fq, $sort, $fl, $df, $with_children_whitelist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchWhitelists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **q** | **string**| The query string |
 **start** | **int**| Number of leading records to skip |
 **rows** | **int**| Number of records to return after &#x27;start&#x27; |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]
 **fq** | [**string[]**](../Model/string.md)| Filter query | [optional]
 **sort** | **string**| Sort field or function with asc|desc | [optional]
 **fl** | **string**| Field list, comma separated | [optional]
 **df** | **string**| Default search field | [optional]
 **with_children_whitelist** | **bool**| include the children whitelists to the response | [optional]

### Return type

[**\Swagger\Client\Model\ResponseListResponseSearchWhitelist**](../Model/ResponseListResponseSearchWhitelist.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

