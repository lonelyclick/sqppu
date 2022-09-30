# RequestCreateDistributor

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distributor_name** | **string** | The name of a distributor | 
**parent_distributor_id** | **int** | The distributor ID of the parent | 
**distributor_note** | **string** | The note of a distributor | [optional] 
**login_username** | **string** | The username of a distributor login | 
**login_email** | **string** | The email of a distributor login | 
**inventory_name** | **string** | The name of an inventory under a distributor | 
**parent_inventory_id** | **int** | The unique identifier of a parent&#x27;s inventory | 
**inventory_balance_in_cents** | **float** | The balance of an inventory under a distributor (Unit is in cents) | 
**inventory_balance_currency** | **string** | The balance currency of an inventory under a distributor (Currency is in ISO 4217) | 
**inventory_overdraft_in_cents** | **float** | The overdraft of an inventory under a distributor (Unit is in cents) | 
**inventory_overdraft_currency** | **string** | The overdraft currency of an inventory under a distributor (Currency is in ISO 4217) | 
**inventory_type** | **string** | The inventory type this inventory will have. Cannot be changed. Defaults to WHOLESALE | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

