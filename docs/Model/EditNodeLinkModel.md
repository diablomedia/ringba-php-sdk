# EditNodeLinkModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | the index you would like to add the child to. If there are two children,   then this node can be 0,1,2.  The number entered must be less than the number of children after this node is   added | [optional] 
**criteria** | [**\Ringba\Model\TagRoutableRule[]**](TagRoutableRule.md) | the criteria the call must meet to traverse the path to this node | [optional] 
**parent_node_id** | **string** | the parent node that you would like to update the link for | 
**on_success** | **bool** | set to true if this link is to be processed on a success step through   parent node. If false, this node link will be tested only if parent node  fails | [optional] 
**meta_data** | **map[string,object]** | arbritrary meta data to associate with the link | [optional] 
**node_id** | **string** | the id of the node in the tree to edit | 
**ivr_tree** | [**\Ringba\Model\IVRTree**](IVRTree.md) | the tree the request is associated to | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


