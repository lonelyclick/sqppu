# ResponseInventory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of an inventory | 
**name** | **string** | The name of an inventory | 
**note** | **string** | The note of an inventory | [optional] 
**date_created_epoch** | **int** | The created date of an inventory in epoch | 
**date_modified_epoch** | **int** | Last modified date of an inventory in epoch | 
**date_deleted_epoch** | **int** | Date when an inventory was deleted in epoch | [optional] 
**distributor_id** | **int** | The unique identifier of the distributor | 
**parent_inventory_id** | **int** | The unique identifier of the parent inventory | 
**ocs_group_id** | **int** | The unique identifier of the Inventory in OCS | 
**type** | **string** | The inventory type this inventory has. Cannot be changed. Defaults to WHOLESALE | [optional] 
**status** | **string** | The status of an inventory | 
**date_deactivated** | **int** | The date when the inventory was deactivtaed in epoch | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

