# ResponsePackage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_id** | **string** | The unique identifier of a package | 
**sim_iccid** | **string** | SIM ICCID | 
**date_created** | **int** | The created date of a package in epoch | 
**date_expiry** | **int** | The expiry date of a package in epoch | [optional] 
**date_activated** | **int** | The activation date of a package in epoch | [optional] 
**date_terminated** | **int** | The termination date of a package in epoch | [optional] 
**window_activation_start** | **int** | The date before which the package cannot be activated in epoch | [optional] 
**window_activation_end** | **int** | The time after which the package cannot be activated in epoch | [optional] 
**status** | **string** | The current status of a package | 
**voice_usage_remaining_in_seconds** | **int** | The number of seconds available to be used as part of this package | 
**data_usage_remaining_in_bytes** | **int** | The number of bytes available to be used as part of this package | 
**sms_usage_remaining_in_nums** | **int** | The number of SMSs available to be used as part of this package | 
**package_type_id** | **int** | The unique identifier of a package type that this package instance represents | 
**time_allowance_in_seconds** | **int** | The time period in seconds that a package lasts for after activation. This property and dynamicTimeAllowance are mutually exclusive. Only one of them must be set. | [optional] 
**dynamic_package_time_allowance** | [**\Swagger\Client\Model\ResponseDynamicPackageTimeAllowance**](ResponseDynamicPackageTimeAllowance.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

