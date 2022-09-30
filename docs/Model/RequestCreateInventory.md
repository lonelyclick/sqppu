# RequestCreateInventory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name the Inventory to be created | 
**parent_inventory_id** | **int** | The Id of the Inventory that the new Inventory should be created under | 
**overdraft_in_cents** | **float** | The amount (in cents) that this Inventory&#x27;s balance can go below 0 | 
**overdraft_currency** | **string** | The currency of the Inventory overdraft | 
**balance_in_cents** | **float** | The initial balance to be set for the new Inventory (in cents) | 
**balance_currency** | **string** | The currency of the Inventory balance | 
**whitelist_name** | **string** | The name of the default Whitelist that will be assigned to the new Inventory | 
**type** | **string** | The inventory type this inventory will have. Cannot be changed. Defaults to WHOLESALE | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

