# RequestCreatePackageType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of a package type | 
**traffic_policy_id** | **int** | The unique identifier of a traffic policy which is applied to a package type | [optional] 
**supported_countries** | **string[]** | A list of countries this package is supported in (Country is in ISO 3) | 
**preferred_imsi_id** | **int** | The preferred IMSI ID | [optional] 
**voice_usage_allowance_in_seconds** | **int** | Seconds of voice usage allowed as part of this package | 
**data_usage_allowance_in_bytes** | **int** | Bytes of data usage allowed as part of this package | 
**sms_usage_allowance_in_nums** | **int** | Numbers of SMS usage allowed as part of this package | 
**time_allowance_in_seconds** | **int** | The time period in seconds that a package lasts for after activation. This property and {@code timeAllowance} are mutually exclusive. Only one of them must be set | [optional] 
**activation_time_allowance_in_seconds** | **int** | After created a package, the package can only be activated within a certain time period in seconds | 
**activation_type** | **string** | The activation type of a package type | 
**date_earliest_activation** | **int** | The earliest activation date of a package (Date is in Epoch) | 
**date_earliest_available** | **int** | The earliest available date of a package (Date is in Epoch) | 
**date_latest_available** | **int** | The latest available date of a package (Date is in Epoch) | 
**notes** | **string** | Notes of a package | [optional] 
**data_usage_allowance_type** | **string** | The type of data usage allowance | 
**voice_usage_allowance_type** | **string** | The type of voice usage allowance | 
**sms_usage_allowance_type** | **string** | The type of SMS usage allowance | 
**time_allowance** | [**\Swagger\Client\Model\RequestTimeAllowance**](RequestTimeAllowance.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

