# RequestInventorySimImsi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile** | **string** | Indicates which profile to set the &#x27;imsi&#x27; number | 
**imsi** | **int** | Indicates the International mobile subscriber identity | 
**override_existing** | **bool** | Used when the provided IMSI is already in the database and not used anymore. In such cases, this flag can be used to explicitly inform the willingness to reuse the IMSI number. If set to &#x27;true&#x27; but the IMSI does not exist on the database, an error will be returned.If set to &#x27;false&#x27; or omitted, only provisions the SIM if the IMSI is not present on the database. You should only set to &#x27;true&#x27; when you know the IMSI was used before and want it to be reused. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

