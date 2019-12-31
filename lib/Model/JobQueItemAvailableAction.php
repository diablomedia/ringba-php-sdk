<?php
/**
 * JobQueItemAvailableAction
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
 * JobQueItemAvailableAction Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobQueItemAvailableAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobQueItem_AvailableAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_name' => 'string',
        'action_description' => 'string',
        'is_default_action' => 'bool',
        'action_type' => 'string',
        'action_args' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_name' => null,
        'action_description' => null,
        'is_default_action' => null,
        'action_type' => null,
        'action_args' => null
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
        'action_name' => 'actionName',
        'action_description' => 'actionDescription',
        'is_default_action' => 'isDefaultAction',
        'action_type' => 'actionType',
        'action_args' => 'actionArgs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_name' => 'setActionName',
        'action_description' => 'setActionDescription',
        'is_default_action' => 'setIsDefaultAction',
        'action_type' => 'setActionType',
        'action_args' => 'setActionArgs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_name' => 'getActionName',
        'action_description' => 'getActionDescription',
        'is_default_action' => 'getIsDefaultAction',
        'action_type' => 'getActionType',
        'action_args' => 'getActionArgs'
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

    const ACTION_TYPE_POSITIVE = 'Positive';
    const ACTION_TYPE_NEGATIVE = 'Negative';
    const ACTION_TYPE_NEUTRAL = 'Neutral';
    const ACTION_TYPE_RESPONSE = 'Response';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_POSITIVE,
            self::ACTION_TYPE_NEGATIVE,
            self::ACTION_TYPE_NEUTRAL,
            self::ACTION_TYPE_RESPONSE,
        ];
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
        $this->container['action_name'] = isset($data['action_name']) ? $data['action_name'] : null;
        $this->container['action_description'] = isset($data['action_description']) ? $data['action_description'] : null;
        $this->container['is_default_action'] = isset($data['is_default_action']) ? $data['is_default_action'] : null;
        $this->container['action_type'] = isset($data['action_type']) ? $data['action_type'] : null;
        $this->container['action_args'] = isset($data['action_args']) ? $data['action_args'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActionTypeAllowableValues();
        if (!is_null($this->container['action_type']) && !in_array($this->container['action_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets action_name
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->container['action_name'];
    }

    /**
     * Sets action_name
     *
     * @param string $action_name action_name
     *
     * @return $this
     */
    public function setActionName($action_name)
    {
        $this->container['action_name'] = $action_name;

        return $this;
    }

    /**
     * Gets action_description
     *
     * @return string
     */
    public function getActionDescription()
    {
        return $this->container['action_description'];
    }

    /**
     * Sets action_description
     *
     * @param string $action_description action_description
     *
     * @return $this
     */
    public function setActionDescription($action_description)
    {
        $this->container['action_description'] = $action_description;

        return $this;
    }

    /**
     * Gets is_default_action
     *
     * @return bool
     */
    public function getIsDefaultAction()
    {
        return $this->container['is_default_action'];
    }

    /**
     * Sets is_default_action
     *
     * @param bool $is_default_action is_default_action
     *
     * @return $this
     */
    public function setIsDefaultAction($is_default_action)
    {
        $this->container['is_default_action'] = $is_default_action;

        return $this;
    }

    /**
     * Gets action_type
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string $action_type action_type
     *
     * @return $this
     */
    public function setActionType($action_type)
    {
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!is_null($action_type) && !in_array($action_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets action_args
     *
     * @return object[]
     */
    public function getActionArgs()
    {
        return $this->container['action_args'];
    }

    /**
     * Sets action_args
     *
     * @param object[] $action_args action_args
     *
     * @return $this
     */
    public function setActionArgs($action_args)
    {
        $this->container['action_args'] = $action_args;

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


