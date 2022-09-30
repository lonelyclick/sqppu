# ResponseSimNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the Sim Notification | 
**name** | **string** | The name of the Sim Notification | 
**date_created** | **int** | The timestamp this Sim Notification was created | 
**date_modified** | **int** | The timestamp this Sim Notification was last updated | 
**data_threshold** | **int** | The data threshold that will trigger a notification | 
**iccids** | **string[]** | The list of ICCIDs that will be monitored by the Sim Notification | 
**num_of_iccids** | **int** | The number of ICCIDs being monitored by the Sim Notification | 
**recipients** | [**\Swagger\Client\Model\RequestSimNotificationRecipient[]**](RequestSimNotificationRecipient.md) | The list of recipients to be notified | 
**num_of_recipients** | **int** | The number of recipients on the Sim Notification | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

