<?php
/**
 * RingbaUser
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * api.ringba.com
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ringba\Model;

use \ArrayAccess;
use \Ringba\ObjectSerializer;

/**
 * RingbaUser Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RingbaUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RingbaUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'accounts' => '\Ringba\Model\UserAccountAccess[]',
        'ui_json_values' => 'string',
        'mobile_number' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'skype_handle' => 'string',
        'affiliate_combined_i_ds' => 'string[]',
        'buyer_combined_i_ds' => 'string[]',
        'id' => 'string',
        'name' => 'string',
        'account_id' => 'string',
        'enabled' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'accounts' => null,
        'ui_json_values' => null,
        'mobile_number' => null,
        'first_name' => null,
        'last_name' => null,
        'skype_handle' => null,
        'affiliate_combined_i_ds' => null,
        'buyer_combined_i_ds' => null,
        'id' => null,
        'name' => null,
        'account_id' => null,
        'enabled' => null,
        'version' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'email' => 'email',
        'accounts' => 'accounts',
        'ui_json_values' => 'uiJsonValues',
        'mobile_number' => 'mobileNumber',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'skype_handle' => 'skypeHandle',
        'affiliate_combined_i_ds' => 'affiliateCombinedIDs',
        'buyer_combined_i_ds' => 'buyerCombinedIDs',
        'id' => 'id',
        'name' => 'name',
        'account_id' => 'accountId',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'accounts' => 'setAccounts',
        'ui_json_values' => 'setUiJsonValues',
        'mobile_number' => 'setMobileNumber',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'skype_handle' => 'setSkypeHandle',
        'affiliate_combined_i_ds' => 'setAffiliateCombinedIDs',
        'buyer_combined_i_ds' => 'setBuyerCombinedIDs',
        'id' => 'setId',
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'accounts' => 'getAccounts',
        'ui_json_values' => 'getUiJsonValues',
        'mobile_number' => 'getMobileNumber',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'skype_handle' => 'getSkypeHandle',
        'affiliate_combined_i_ds' => 'getAffiliateCombinedIDs',
        'buyer_combined_i_ds' => 'getBuyerCombinedIDs',
        'id' => 'getId',
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'enabled' => 'getEnabled',
        'version' => 'getVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['ui_json_values'] = isset($data['ui_json_values']) ? $data['ui_json_values'] : null;
        $this->container['mobile_number'] = isset($data['mobile_number']) ? $data['mobile_number'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['skype_handle'] = isset($data['skype_handle']) ? $data['skype_handle'] : null;
        $this->container['affiliate_combined_i_ds'] = isset($data['affiliate_combined_i_ds']) ? $data['affiliate_combined_i_ds'] : null;
        $this->container['buyer_combined_i_ds'] = isset($data['buyer_combined_i_ds']) ? $data['buyer_combined_i_ds'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \Ringba\Model\UserAccountAccess[]
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \Ringba\Model\UserAccountAccess[] $accounts accounts
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets ui_json_values
     *
     * @return string
     */
    public function getUiJsonValues()
    {
        return $this->container['ui_json_values'];
    }

    /**
     * Sets ui_json_values
     *
     * @param string $ui_json_values ui_json_values
     *
     * @return $this
     */
    public function setUiJsonValues($ui_json_values)
    {
        $this->container['ui_json_values'] = $ui_json_values;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string $mobile_number mobile_number
     *
     * @return $this
     */
    public function setMobileNumber($mobile_number)
    {
        $this->container['mobile_number'] = $mobile_number;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets skype_handle
     *
     * @return string
     */
    public function getSkypeHandle()
    {
        return $this->container['skype_handle'];
    }

    /**
     * Sets skype_handle
     *
     * @param string $skype_handle skype_handle
     *
     * @return $this
     */
    public function setSkypeHandle($skype_handle)
    {
        $this->container['skype_handle'] = $skype_handle;

        return $this;
    }

    /**
     * Gets affiliate_combined_i_ds
     *
     * @return string[]
     */
    public function getAffiliateCombinedIDs()
    {
        return $this->container['affiliate_combined_i_ds'];
    }

    /**
     * Sets affiliate_combined_i_ds
     *
     * @param string[] $affiliate_combined_i_ds affiliate_combined_i_ds
     *
     * @return $this
     */
    public function setAffiliateCombinedIDs($affiliate_combined_i_ds)
    {
        $this->container['affiliate_combined_i_ds'] = $affiliate_combined_i_ds;

        return $this;
    }

    /**
     * Gets buyer_combined_i_ds
     *
     * @return string[]
     */
    public function getBuyerCombinedIDs()
    {
        return $this->container['buyer_combined_i_ds'];
    }

    /**
     * Sets buyer_combined_i_ds
     *
     * @param string[] $buyer_combined_i_ds buyer_combined_i_ds
     *
     * @return $this
     */
    public function setBuyerCombinedIDs($buyer_combined_i_ds)
    {
        $this->container['buyer_combined_i_ds'] = $buyer_combined_i_ds;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


