<?php
/**
 * OfferNumberRestrictions
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
 * OfferNumberRestrictions Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfferNumberRestrictions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OfferNumberRestrictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_numbers_per_publisher' => 'int',
        'allow_tf' => 'bool',
        'allow_did' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_numbers_per_publisher' => 'int32',
        'allow_tf' => null,
        'allow_did' => null
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
        'max_numbers_per_publisher' => 'maxNumbersPerPublisher',
        'allow_tf' => 'allowTF',
        'allow_did' => 'allowDID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_numbers_per_publisher' => 'setMaxNumbersPerPublisher',
        'allow_tf' => 'setAllowTf',
        'allow_did' => 'setAllowDid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_numbers_per_publisher' => 'getMaxNumbersPerPublisher',
        'allow_tf' => 'getAllowTf',
        'allow_did' => 'getAllowDid'
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
        $this->container['max_numbers_per_publisher'] = isset($data['max_numbers_per_publisher']) ? $data['max_numbers_per_publisher'] : null;
        $this->container['allow_tf'] = isset($data['allow_tf']) ? $data['allow_tf'] : null;
        $this->container['allow_did'] = isset($data['allow_did']) ? $data['allow_did'] : null;
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
     * Gets max_numbers_per_publisher
     *
     * @return int
     */
    public function getMaxNumbersPerPublisher()
    {
        return $this->container['max_numbers_per_publisher'];
    }

    /**
     * Sets max_numbers_per_publisher
     *
     * @param int $max_numbers_per_publisher max_numbers_per_publisher
     *
     * @return $this
     */
    public function setMaxNumbersPerPublisher($max_numbers_per_publisher)
    {
        $this->container['max_numbers_per_publisher'] = $max_numbers_per_publisher;

        return $this;
    }

    /**
     * Gets allow_tf
     *
     * @return bool
     */
    public function getAllowTf()
    {
        return $this->container['allow_tf'];
    }

    /**
     * Sets allow_tf
     *
     * @param bool $allow_tf allow_tf
     *
     * @return $this
     */
    public function setAllowTf($allow_tf)
    {
        $this->container['allow_tf'] = $allow_tf;

        return $this;
    }

    /**
     * Gets allow_did
     *
     * @return bool
     */
    public function getAllowDid()
    {
        return $this->container['allow_did'];
    }

    /**
     * Sets allow_did
     *
     * @param bool $allow_did allow_did
     *
     * @return $this
     */
    public function setAllowDid($allow_did)
    {
        $this->container['allow_did'] = $allow_did;

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


