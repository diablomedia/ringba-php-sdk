<?php
/**
 * Criteria
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
 * Criteria Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Criteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Criteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag_id' => 'string',
        'tag_ids' => 'string[]',
        'comparison_type' => 'string',
        'value' => 'string',
        'is_negative_match' => 'bool',
        'is_number' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag_id' => null,
        'tag_ids' => null,
        'comparison_type' => null,
        'value' => null,
        'is_negative_match' => null,
        'is_number' => null
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
        'tag_id' => 'tagId',
        'tag_ids' => 'tagIds',
        'comparison_type' => 'comparisonType',
        'value' => 'value',
        'is_negative_match' => 'isNegativeMatch',
        'is_number' => 'isNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tag_id' => 'setTagId',
        'tag_ids' => 'setTagIds',
        'comparison_type' => 'setComparisonType',
        'value' => 'setValue',
        'is_negative_match' => 'setIsNegativeMatch',
        'is_number' => 'setIsNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tag_id' => 'getTagId',
        'tag_ids' => 'getTagIds',
        'comparison_type' => 'getComparisonType',
        'value' => 'getValue',
        'is_negative_match' => 'getIsNegativeMatch',
        'is_number' => 'getIsNumber'
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

    const COMPARISON_TYPE_EQUALS = 'EQUALS';
    const COMPARISON_TYPE_CONTAINS = 'CONTAINS';
    const COMPARISON_TYPE_BEGINS_WITH = 'BEGINS_WITH';
    const COMPARISON_TYPE_GREATER_THAN = 'GREATER_THAN';
    const COMPARISON_TYPE_LESS_THAN = 'LESS_THAN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComparisonTypeAllowableValues()
    {
        return [
            self::COMPARISON_TYPE_EQUALS,
            self::COMPARISON_TYPE_CONTAINS,
            self::COMPARISON_TYPE_BEGINS_WITH,
            self::COMPARISON_TYPE_GREATER_THAN,
            self::COMPARISON_TYPE_LESS_THAN,
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
        $this->container['tag_id'] = isset($data['tag_id']) ? $data['tag_id'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['comparison_type'] = isset($data['comparison_type']) ? $data['comparison_type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['is_negative_match'] = isset($data['is_negative_match']) ? $data['is_negative_match'] : null;
        $this->container['is_number'] = isset($data['is_number']) ? $data['is_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getComparisonTypeAllowableValues();
        if (!is_null($this->container['comparison_type']) && !in_array($this->container['comparison_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'comparison_type', must be one of '%s'",
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
     * Gets tag_id
     *
     * @return string
     */
    public function getTagId()
    {
        return $this->container['tag_id'];
    }

    /**
     * Sets tag_id
     *
     * @param string $tag_id tag_id
     *
     * @return $this
     */
    public function setTagId($tag_id)
    {
        $this->container['tag_id'] = $tag_id;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return string[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param string[] $tag_ids tag_ids
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets comparison_type
     *
     * @return string
     */
    public function getComparisonType()
    {
        return $this->container['comparison_type'];
    }

    /**
     * Sets comparison_type
     *
     * @param string $comparison_type comparison_type
     *
     * @return $this
     */
    public function setComparisonType($comparison_type)
    {
        $allowedValues = $this->getComparisonTypeAllowableValues();
        if (!is_null($comparison_type) && !in_array($comparison_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'comparison_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['comparison_type'] = $comparison_type;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets is_negative_match
     *
     * @return bool
     */
    public function getIsNegativeMatch()
    {
        return $this->container['is_negative_match'];
    }

    /**
     * Sets is_negative_match
     *
     * @param bool $is_negative_match is_negative_match
     *
     * @return $this
     */
    public function setIsNegativeMatch($is_negative_match)
    {
        $this->container['is_negative_match'] = $is_negative_match;

        return $this;
    }

    /**
     * Gets is_number
     *
     * @return bool
     */
    public function getIsNumber()
    {
        return $this->container['is_number'];
    }

    /**
     * Sets is_number
     *
     * @param bool $is_number is_number
     *
     * @return $this
     */
    public function setIsNumber($is_number)
    {
        $this->container['is_number'] = $is_number;

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


