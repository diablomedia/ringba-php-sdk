<?php
/**
 * CreateBuyerModel
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
 * CreateBuyerModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateBuyerModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateBuyerModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_pause_targets' => 'bool',
        'can_set_concurrency_caps' => 'bool',
        'can_dispute_conversions' => 'bool',
        'sub_id' => 'string',
        'email' => 'string',
        'confirm_email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'name' => 'string',
        'do_not_create_user' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_pause_targets' => null,
        'can_set_concurrency_caps' => null,
        'can_dispute_conversions' => null,
        'sub_id' => null,
        'email' => null,
        'confirm_email' => null,
        'first_name' => null,
        'last_name' => null,
        'name' => null,
        'do_not_create_user' => null
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
        'can_pause_targets' => 'canPauseTargets',
        'can_set_concurrency_caps' => 'canSetConcurrencyCaps',
        'can_dispute_conversions' => 'canDisputeConversions',
        'sub_id' => 'subId',
        'email' => 'email',
        'confirm_email' => 'confirmEmail',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'name' => 'name',
        'do_not_create_user' => 'doNotCreateUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_pause_targets' => 'setCanPauseTargets',
        'can_set_concurrency_caps' => 'setCanSetConcurrencyCaps',
        'can_dispute_conversions' => 'setCanDisputeConversions',
        'sub_id' => 'setSubId',
        'email' => 'setEmail',
        'confirm_email' => 'setConfirmEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'name' => 'setName',
        'do_not_create_user' => 'setDoNotCreateUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_pause_targets' => 'getCanPauseTargets',
        'can_set_concurrency_caps' => 'getCanSetConcurrencyCaps',
        'can_dispute_conversions' => 'getCanDisputeConversions',
        'sub_id' => 'getSubId',
        'email' => 'getEmail',
        'confirm_email' => 'getConfirmEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'name' => 'getName',
        'do_not_create_user' => 'getDoNotCreateUser'
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
        $this->container['can_pause_targets'] = isset($data['can_pause_targets']) ? $data['can_pause_targets'] : null;
        $this->container['can_set_concurrency_caps'] = isset($data['can_set_concurrency_caps']) ? $data['can_set_concurrency_caps'] : null;
        $this->container['can_dispute_conversions'] = isset($data['can_dispute_conversions']) ? $data['can_dispute_conversions'] : null;
        $this->container['sub_id'] = isset($data['sub_id']) ? $data['sub_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['confirm_email'] = isset($data['confirm_email']) ? $data['confirm_email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['do_not_create_user'] = isset($data['do_not_create_user']) ? $data['do_not_create_user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * Gets can_pause_targets
     *
     * @return bool
     */
    public function getCanPauseTargets()
    {
        return $this->container['can_pause_targets'];
    }

    /**
     * Sets can_pause_targets
     *
     * @param bool $can_pause_targets can_pause_targets
     *
     * @return $this
     */
    public function setCanPauseTargets($can_pause_targets)
    {
        $this->container['can_pause_targets'] = $can_pause_targets;

        return $this;
    }

    /**
     * Gets can_set_concurrency_caps
     *
     * @return bool
     */
    public function getCanSetConcurrencyCaps()
    {
        return $this->container['can_set_concurrency_caps'];
    }

    /**
     * Sets can_set_concurrency_caps
     *
     * @param bool $can_set_concurrency_caps can_set_concurrency_caps
     *
     * @return $this
     */
    public function setCanSetConcurrencyCaps($can_set_concurrency_caps)
    {
        $this->container['can_set_concurrency_caps'] = $can_set_concurrency_caps;

        return $this;
    }

    /**
     * Gets can_dispute_conversions
     *
     * @return bool
     */
    public function getCanDisputeConversions()
    {
        return $this->container['can_dispute_conversions'];
    }

    /**
     * Sets can_dispute_conversions
     *
     * @param bool $can_dispute_conversions can_dispute_conversions
     *
     * @return $this
     */
    public function setCanDisputeConversions($can_dispute_conversions)
    {
        $this->container['can_dispute_conversions'] = $can_dispute_conversions;

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
     * Gets confirm_email
     *
     * @return string
     */
    public function getConfirmEmail()
    {
        return $this->container['confirm_email'];
    }

    /**
     * Sets confirm_email
     *
     * @param string $confirm_email confirm_email
     *
     * @return $this
     */
    public function setConfirmEmail($confirm_email)
    {
        $this->container['confirm_email'] = $confirm_email;

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
     * Gets do_not_create_user
     *
     * @return bool
     */
    public function getDoNotCreateUser()
    {
        return $this->container['do_not_create_user'];
    }

    /**
     * Sets do_not_create_user
     *
     * @param bool $do_not_create_user do_not_create_user
     *
     * @return $this
     */
    public function setDoNotCreateUser($do_not_create_user)
    {
        $this->container['do_not_create_user'] = $do_not_create_user;

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


