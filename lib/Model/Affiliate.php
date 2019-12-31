<?php
/**
 * Affiliate
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
 * Swagger Codegen version: 2.4.10
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
 * Affiliate Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Affiliate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Affiliate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'id' => 'string',
        'sub_id' => 'string',
        'create_numbers' => 'bool',
        'access_to_recordings' => 'bool',
        'login_id' => 'string',
        'users' => '\Ringba\Model\RingbaUser[]',
        'user_ids' => 'string[]',
        'default_payout_settings' => '\Ringba\Model\PayoutSetting',
        'is_self' => 'bool',
        'criteria' => '\Ringba\Model\TagRoutableRule[]',
        'integrations' => '\Ringba\Model\Integration[]',
        'block_calls_if_capped' => 'bool',
        'name' => 'string',
        'enabled' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'id' => null,
        'sub_id' => null,
        'create_numbers' => null,
        'access_to_recordings' => null,
        'login_id' => null,
        'users' => null,
        'user_ids' => null,
        'default_payout_settings' => null,
        'is_self' => null,
        'criteria' => null,
        'integrations' => null,
        'block_calls_if_capped' => null,
        'name' => null,
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
        'account_id' => 'accountId',
        'id' => 'id',
        'sub_id' => 'subId',
        'create_numbers' => 'createNumbers',
        'access_to_recordings' => 'accessToRecordings',
        'login_id' => 'loginId',
        'users' => 'users',
        'user_ids' => 'userIds',
        'default_payout_settings' => 'defaultPayoutSettings',
        'is_self' => 'isSelf',
        'criteria' => 'criteria',
        'integrations' => 'integrations',
        'block_calls_if_capped' => 'blockCallsIfCapped',
        'name' => 'name',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'id' => 'setId',
        'sub_id' => 'setSubId',
        'create_numbers' => 'setCreateNumbers',
        'access_to_recordings' => 'setAccessToRecordings',
        'login_id' => 'setLoginId',
        'users' => 'setUsers',
        'user_ids' => 'setUserIds',
        'default_payout_settings' => 'setDefaultPayoutSettings',
        'is_self' => 'setIsSelf',
        'criteria' => 'setCriteria',
        'integrations' => 'setIntegrations',
        'block_calls_if_capped' => 'setBlockCallsIfCapped',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'id' => 'getId',
        'sub_id' => 'getSubId',
        'create_numbers' => 'getCreateNumbers',
        'access_to_recordings' => 'getAccessToRecordings',
        'login_id' => 'getLoginId',
        'users' => 'getUsers',
        'user_ids' => 'getUserIds',
        'default_payout_settings' => 'getDefaultPayoutSettings',
        'is_self' => 'getIsSelf',
        'criteria' => 'getCriteria',
        'integrations' => 'getIntegrations',
        'block_calls_if_capped' => 'getBlockCallsIfCapped',
        'name' => 'getName',
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sub_id'] = isset($data['sub_id']) ? $data['sub_id'] : null;
        $this->container['create_numbers'] = isset($data['create_numbers']) ? $data['create_numbers'] : null;
        $this->container['access_to_recordings'] = isset($data['access_to_recordings']) ? $data['access_to_recordings'] : null;
        $this->container['login_id'] = isset($data['login_id']) ? $data['login_id'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['user_ids'] = isset($data['user_ids']) ? $data['user_ids'] : null;
        $this->container['default_payout_settings'] = isset($data['default_payout_settings']) ? $data['default_payout_settings'] : null;
        $this->container['is_self'] = isset($data['is_self']) ? $data['is_self'] : null;
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['integrations'] = isset($data['integrations']) ? $data['integrations'] : null;
        $this->container['block_calls_if_capped'] = isset($data['block_calls_if_capped']) ? $data['block_calls_if_capped'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
     * Gets sub_id
     *
     * @return string
     */
    public function getSubId()
    {
        return $this->container['sub_id'];
    }

    /**
     * Sets sub_id
     *
     * @param string $sub_id sub_id
     *
     * @return $this
     */
    public function setSubId($sub_id)
    {
        $this->container['sub_id'] = $sub_id;

        return $this;
    }

    /**
     * Gets create_numbers
     *
     * @return bool
     */
    public function getCreateNumbers()
    {
        return $this->container['create_numbers'];
    }

    /**
     * Sets create_numbers
     *
     * @param bool $create_numbers create_numbers
     *
     * @return $this
     */
    public function setCreateNumbers($create_numbers)
    {
        $this->container['create_numbers'] = $create_numbers;

        return $this;
    }

    /**
     * Gets access_to_recordings
     *
     * @return bool
     */
    public function getAccessToRecordings()
    {
        return $this->container['access_to_recordings'];
    }

    /**
     * Sets access_to_recordings
     *
     * @param bool $access_to_recordings access_to_recordings
     *
     * @return $this
     */
    public function setAccessToRecordings($access_to_recordings)
    {
        $this->container['access_to_recordings'] = $access_to_recordings;

        return $this;
    }

    /**
     * Gets login_id
     *
     * @return string
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param string $login_id login_id
     *
     * @return $this
     */
    public function setLoginId($login_id)
    {
        $this->container['login_id'] = $login_id;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Ringba\Model\RingbaUser[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Ringba\Model\RingbaUser[] $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets user_ids
     *
     * @return string[]
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string[] $user_ids user_ids
     *
     * @return $this
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets default_payout_settings
     *
     * @return \Ringba\Model\PayoutSetting
     */
    public function getDefaultPayoutSettings()
    {
        return $this->container['default_payout_settings'];
    }

    /**
     * Sets default_payout_settings
     *
     * @param \Ringba\Model\PayoutSetting $default_payout_settings default_payout_settings
     *
     * @return $this
     */
    public function setDefaultPayoutSettings($default_payout_settings)
    {
        $this->container['default_payout_settings'] = $default_payout_settings;

        return $this;
    }

    /**
     * Gets is_self
     *
     * @return bool
     */
    public function getIsSelf()
    {
        return $this->container['is_self'];
    }

    /**
     * Sets is_self
     *
     * @param bool $is_self is_self
     *
     * @return $this
     */
    public function setIsSelf($is_self)
    {
        $this->container['is_self'] = $is_self;

        return $this;
    }

    /**
     * Gets criteria
     *
     * @return \Ringba\Model\TagRoutableRule[]
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     * @param \Ringba\Model\TagRoutableRule[] $criteria criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;

        return $this;
    }

    /**
     * Gets integrations
     *
     * @return \Ringba\Model\Integration[]
     */
    public function getIntegrations()
    {
        return $this->container['integrations'];
    }

    /**
     * Sets integrations
     *
     * @param \Ringba\Model\Integration[] $integrations integrations
     *
     * @return $this
     */
    public function setIntegrations($integrations)
    {
        $this->container['integrations'] = $integrations;

        return $this;
    }

    /**
     * Gets block_calls_if_capped
     *
     * @return bool
     */
    public function getBlockCallsIfCapped()
    {
        return $this->container['block_calls_if_capped'];
    }

    /**
     * Sets block_calls_if_capped
     *
     * @param bool $block_calls_if_capped block_calls_if_capped
     *
     * @return $this
     */
    public function setBlockCallsIfCapped($block_calls_if_capped)
    {
        $this->container['block_calls_if_capped'] = $block_calls_if_capped;

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

