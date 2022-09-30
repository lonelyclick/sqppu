# ResponseGroupDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_group_id** | **int** | The unique identifier of a group | 
**name** | **string** | The group name | 
**parent_group_id** | **int** | The unique identifier of a group of the parent group | 
**parent_group_name** | **string** | The name of this groups&#x27; parent | 
**inventory_id** | **int** | The inventory ID the group belongs to | 
**inventory_name** | **string** | The inventory name the group belongs to | 
**ocs_group_id** | **int** | The OCS group ID the group maps to | 
**distributor_id** | **int** | The distributor ID the group belongs to | 
**distributor_name** | **string** | The distributor name the group belongs to | 
**balance_cent** | **float** | The current balance of the group (in cents) | 
**balance_currency** | **string** | The currency of the group&#x27;s balance | 
**balance_modify_epoch_milli** | **int** | The timestamp of the last modification to the balance (UTC) | 
**overdraft_cent** | **float** | The current overdraft of the group (in cents) | 
**overdraft_currency** | **string** | The currency of the group&#x27;s overdraft | 
**overdraft_modify_epoch_milli** | **int** | The timestamp of the last modification to the overdraft (UTC) | 
**create_epoch_milli** | **int** | The timestamp of the last modification to the group (UTC) | 
**modify_epoch_milli** | **int** | The timestamp of the last modification to the group (UTC) disregarding balance and overdraft | 
**number_of_subgroups** | **int** | The number of child groups | 
**number_of_sims** | **int** | The number of Sims under this group | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

