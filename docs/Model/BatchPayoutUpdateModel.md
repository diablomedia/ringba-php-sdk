# BatchPayoutUpdateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all_payouts** | [**\Ringba\Model\PayoutConversionModel[]**](PayoutConversionModel.md) | List of all payouts that should be present on the target object as a result of the bulk update operations.   Payouts that are missing from this list will be removed from the target object.   New payouts will be created, and payouts with matching ID will be updated. | [optional] 
**send_notifications** | **bool** | Specifies whether affected publishers should be notified about the change. Default is true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


