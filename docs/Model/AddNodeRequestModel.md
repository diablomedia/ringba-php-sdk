# AddNodeRequestModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fail_on_error** | **bool** | if false, the node will be added to the tree  even if the node fails validation | [optional] 
**parent_node_id** | **string** | the parent node that you would like to add a new  node to | 
**node** | [**\Ringba\Model\IVRNodeRequestModel**](IVRNodeRequestModel.md) | the node that you would like to add to the tree | 
**index** | **int** | the index you would like to add the child to. If there are two children,   then this node can be 0,1,2.  The number entered must be less than the number of children after this node is   added | [optional] 
**criteria** | [**\Ringba\Model\TagRoutableRule[]**](TagRoutableRule.md) | the criteris the call must meet to travers the path to this node | [optional] 
**on_success** | **bool** | set to true if this link is to be processed on a success step through   parent node. If false, this node link will be tested only if parent node  fails | [optional] 
**name** | **string** | the name that will be assigned to the link for this new node to the   parent node | [optional] 
**meta_data** | **map[string,object]** | arbritrary meta data to associate with the link from the new node to its parent | [optional] 
**ivr_tree** | [**\Ringba\Model\IVRTree**](IVRTree.md) | the tree the request is associated to | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


