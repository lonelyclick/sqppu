# ResponseSim

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iccid** | **string** | The unique identifier of a SIM | [optional] 
**parent_group_id** | **int** | The unique identifier of a parent group which owned a SIM | [optional] 
**inventory_id** | **int** | The unique identifier of an inventory which owned a SIM | [optional] 
**epoch_created** | **int** | The timestamp when this SIM has been provisioned | [optional] 
**epoch_modified** | **int** | The timestamp when this SIM was last modified | [optional] 
**epoch_removed** | **int** | The timestamp when this SIM was removed | [optional] 
**imsis** | [**\Swagger\Client\Model\ResponseImsi[]**](ResponseImsi.md) | A list of IMSIs assigned to a SIM | [optional] 
**mapped_imsi** | **int** | The mapped IMSI associated to the provided ICCID | [optional] 
**whitelist_id** | **int** | The Whitelist ID that this SIM is using | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

