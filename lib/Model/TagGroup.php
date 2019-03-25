<?php
/**
 * TagGroup
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
 * TagGroup Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TagGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'capture_type' => 'string',
        'tags' => '\Ringba\Model\Tag[]',
        'is_negative_match' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'capture_type' => null,
        'tags' => null,
        'is_negative_match' => null
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
        'capture_type' => 'captureType',
        'tags' => 'tags',
        'is_negative_match' => 'isNegativeMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capture_type' => 'setCaptureType',
        'tags' => 'setTags',
        'is_negative_match' => 'setIsNegativeMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capture_type' => 'getCaptureType',
        'tags' => 'getTags',
        'is_negative_match' => 'getIsNegativeMatch'
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

    const CAPTURE_TYPE__AND = 'AND';
    const CAPTURE_TYPE__OR = 'OR';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCaptureTypeAllowableValues()
    {
        return [
            self::CAPTURE_TYPE__AND,
            self::CAPTURE_TYPE__OR,
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
        $this->container['capture_type'] = isset($data['capture_type']) ? $data['capture_type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['is_negative_match'] = isset($data['is_negative_match']) ? $data['is_negative_match'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCaptureTypeAllowableValues();
        if (!is_null($this->container['capture_type']) && !in_array($this->container['capture_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'capture_type', must be one of '%s'",
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
     * Gets capture_type
     *
     * @return string
     */
    public function getCaptureType()
    {
        return $this->container['capture_type'];
    }

    /**
     * Sets capture_type
     *
     * @param string $capture_type capture_type
     *
     * @return $this
     */
    public function setCaptureType($capture_type)
    {
        $allowedValues = $this->getCaptureTypeAllowableValues();
        if (!is_null($capture_type) && !in_array($capture_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'capture_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['capture_type'] = $capture_type;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Ringba\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Ringba\Model\Tag[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


