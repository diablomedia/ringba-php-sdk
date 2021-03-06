<?php
/**
 * QueryPathMapCreateModel
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
 * QueryPathMapCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryPathMapCreateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryPathMapCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'incoming_query_string_name' => 'string',
        'map_to_tag_type' => 'string',
        'map_to_tag_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'incoming_query_string_name' => null,
        'map_to_tag_type' => null,
        'map_to_tag_name' => null
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
        'incoming_query_string_name' => 'incomingQueryStringName',
        'map_to_tag_type' => 'mapToTagType',
        'map_to_tag_name' => 'mapToTagName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'incoming_query_string_name' => 'setIncomingQueryStringName',
        'map_to_tag_type' => 'setMapToTagType',
        'map_to_tag_name' => 'setMapToTagName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'incoming_query_string_name' => 'getIncomingQueryStringName',
        'map_to_tag_type' => 'getMapToTagType',
        'map_to_tag_name' => 'getMapToTagName'
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
        $this->container['incoming_query_string_name'] = isset($data['incoming_query_string_name']) ? $data['incoming_query_string_name'] : null;
        $this->container['map_to_tag_type'] = isset($data['map_to_tag_type']) ? $data['map_to_tag_type'] : null;
        $this->container['map_to_tag_name'] = isset($data['map_to_tag_name']) ? $data['map_to_tag_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['incoming_query_string_name'] === null) {
            $invalidProperties[] = "'incoming_query_string_name' can't be null";
        }
        if ($this->container['map_to_tag_type'] === null) {
            $invalidProperties[] = "'map_to_tag_type' can't be null";
        }
        if ($this->container['map_to_tag_name'] === null) {
            $invalidProperties[] = "'map_to_tag_name' can't be null";
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
     * Gets incoming_query_string_name
     *
     * @return string
     */
    public function getIncomingQueryStringName()
    {
        return $this->container['incoming_query_string_name'];
    }

    /**
     * Sets incoming_query_string_name
     *
     * @param string $incoming_query_string_name incoming_query_string_name
     *
     * @return $this
     */
    public function setIncomingQueryStringName($incoming_query_string_name)
    {
        $this->container['incoming_query_string_name'] = $incoming_query_string_name;

        return $this;
    }

    /**
     * Gets map_to_tag_type
     *
     * @return string
     */
    public function getMapToTagType()
    {
        return $this->container['map_to_tag_type'];
    }

    /**
     * Sets map_to_tag_type
     *
     * @param string $map_to_tag_type map_to_tag_type
     *
     * @return $this
     */
    public function setMapToTagType($map_to_tag_type)
    {
        $this->container['map_to_tag_type'] = $map_to_tag_type;

        return $this;
    }

    /**
     * Gets map_to_tag_name
     *
     * @return string
     */
    public function getMapToTagName()
    {
        return $this->container['map_to_tag_name'];
    }

    /**
     * Sets map_to_tag_name
     *
     * @param string $map_to_tag_name map_to_tag_name
     *
     * @return $this
     */
    public function setMapToTagName($map_to_tag_name)
    {
        $this->container['map_to_tag_name'] = $map_to_tag_name;

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


