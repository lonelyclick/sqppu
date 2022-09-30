# Swagger\Client\ImsiSlotProfilesApi

All URIs are relative to */ds/u/distributorPPUService/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImsiSlotProfile**](ImsiSlotProfilesApi.md#createimsislotprofile) | **POST** /{distributorId}/imsi-slot-profiles | Create IMSI to Slot Profile
[**getImsiSlotProfileById**](ImsiSlotProfilesApi.md#getimsislotprofilebyid) | **GET** /{distributorId}/imsi-slot-profiles/{imsiSlotProfileId} | Get IMSI to Slot Profile by ID

# **createImsiSlotProfile**
> \Swagger\Client\Model\ResponseImsiSlotProfile createImsiSlotProfile($distributor_id, $body, $request_id)

Create IMSI to Slot Profile

Create IMSI to Slot Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImsiSlotProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$body = new \Swagger\Client\Model\RequestCreateImsiSlotProfile(); // \Swagger\Client\Model\RequestCreateImsiSlotProfile | 
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->createImsiSlotProfile($distributor_id, $body, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImsiSlotProfilesApi->createImsiSlotProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **body** | [**\Swagger\Client\Model\RequestCreateImsiSlotProfile**](../Model/RequestCreateImsiSlotProfile.md)|  | [optional]
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseImsiSlotProfile**](../Model/ResponseImsiSlotProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImsiSlotProfileById**
> \Swagger\Client\Model\ResponseImsiSlotProfile getImsiSlotProfileById($distributor_id, $imsi_slot_profile_id, $request_id)

Get IMSI to Slot Profile by ID

Get IMSI to Slot Profile by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImsiSlotProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$distributor_id = 56; // int | The unique identifier of a distributor
$imsi_slot_profile_id = "imsi_slot_profile_id_example"; // string | The unique identifier of a IMSI Slot Profile ID
$request_id = "request_id_example"; // string | It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system

try {
    $result = $apiInstance->getImsiSlotProfileById($distributor_id, $imsi_slot_profile_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImsiSlotProfilesApi->getImsiSlotProfileById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **int**| The unique identifier of a distributor |
 **imsi_slot_profile_id** | **string**| The unique identifier of a IMSI Slot Profile ID |
 **request_id** | **string**| It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system | [optional]

### Return type

[**\Swagger\Client\Model\ResponseImsiSlotProfile**](../Model/ResponseImsiSlotProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

