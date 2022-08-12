<?php
/**
 * Stats
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ringba API Documentation
 *
 * Ringba’s APIs allow you to interact, gather information, and make dynamic changes in real-time. All functions found within the Ringba portal are also available programmatically through our API.   If this is your first time using our API, please read the __Getting Started__ section below.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ringba\Model;

use \ArrayAccess;
use \Ringba\ObjectSerializer;

/**
 * Stats Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Stats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cA9f6800fa2f074f41afde0aadd88292bd' => '\Ringba\Model\CA9f6800fa2f074f41afde0aadd88292bd',
        'cA74c0b7f1f3824246b73e72a9238b4bfc' => '\Ringba\Model\CA74c0b7f1f3824246b73e72a9238b4bfc',
        'cAa2714586592f464f817efc493f3a4b50' => '\Ringba\Model\CAa2714586592f464f817efc493f3a4b50'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cA9f6800fa2f074f41afde0aadd88292bd' => null,
        'cA74c0b7f1f3824246b73e72a9238b4bfc' => null,
        'cAa2714586592f464f817efc493f3a4b50' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cA9f6800fa2f074f41afde0aadd88292bd' => 'cA9f6800fa2f074f41afde0aadd88292bd',
        'cA74c0b7f1f3824246b73e72a9238b4bfc' => 'cA74c0b7f1f3824246b73e72a9238b4bfc',
        'cAa2714586592f464f817efc493f3a4b50' => 'cAa2714586592f464f817efc493f3a4b50'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cA9f6800fa2f074f41afde0aadd88292bd' => 'setCA9f6800fa2f074f41afde0aadd88292bd',
        'cA74c0b7f1f3824246b73e72a9238b4bfc' => 'setCA74c0b7f1f3824246b73e72a9238b4bfc',
        'cAa2714586592f464f817efc493f3a4b50' => 'setCAa2714586592f464f817efc493f3a4b50'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cA9f6800fa2f074f41afde0aadd88292bd' => 'getCA9f6800fa2f074f41afde0aadd88292bd',
        'cA74c0b7f1f3824246b73e72a9238b4bfc' => 'getCA74c0b7f1f3824246b73e72a9238b4bfc',
        'cAa2714586592f464f817efc493f3a4b50' => 'getCAa2714586592f464f817efc493f3a4b50'
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
        return self::$openAPIModelName;
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
        $this->container['cA9f6800fa2f074f41afde0aadd88292bd'] = $data['cA9f6800fa2f074f41afde0aadd88292bd'] ?? null;
        $this->container['cA74c0b7f1f3824246b73e72a9238b4bfc'] = $data['cA74c0b7f1f3824246b73e72a9238b4bfc'] ?? null;
        $this->container['cAa2714586592f464f817efc493f3a4b50'] = $data['cAa2714586592f464f817efc493f3a4b50'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cA9f6800fa2f074f41afde0aadd88292bd'] === null) {
            $invalidProperties[] = "'cA9f6800fa2f074f41afde0aadd88292bd' can't be null";
        }
        if ($this->container['cA74c0b7f1f3824246b73e72a9238b4bfc'] === null) {
            $invalidProperties[] = "'cA74c0b7f1f3824246b73e72a9238b4bfc' can't be null";
        }
        if ($this->container['cAa2714586592f464f817efc493f3a4b50'] === null) {
            $invalidProperties[] = "'cAa2714586592f464f817efc493f3a4b50' can't be null";
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
     * Gets cA9f6800fa2f074f41afde0aadd88292bd
     *
     * @return \Ringba\Model\CA9f6800fa2f074f41afde0aadd88292bd
     */
    public function getCA9f6800fa2f074f41afde0aadd88292bd()
    {
        return $this->container['cA9f6800fa2f074f41afde0aadd88292bd'];
    }

    /**
     * Sets cA9f6800fa2f074f41afde0aadd88292bd
     *
     * @param \Ringba\Model\CA9f6800fa2f074f41afde0aadd88292bd $cA9f6800fa2f074f41afde0aadd88292bd cA9f6800fa2f074f41afde0aadd88292bd
     *
     * @return self
     */
    public function setCA9f6800fa2f074f41afde0aadd88292bd($cA9f6800fa2f074f41afde0aadd88292bd)
    {
        $this->container['cA9f6800fa2f074f41afde0aadd88292bd'] = $cA9f6800fa2f074f41afde0aadd88292bd;

        return $this;
    }

    /**
     * Gets cA74c0b7f1f3824246b73e72a9238b4bfc
     *
     * @return \Ringba\Model\CA74c0b7f1f3824246b73e72a9238b4bfc
     */
    public function getCA74c0b7f1f3824246b73e72a9238b4bfc()
    {
        return $this->container['cA74c0b7f1f3824246b73e72a9238b4bfc'];
    }

    /**
     * Sets cA74c0b7f1f3824246b73e72a9238b4bfc
     *
     * @param \Ringba\Model\CA74c0b7f1f3824246b73e72a9238b4bfc $cA74c0b7f1f3824246b73e72a9238b4bfc cA74c0b7f1f3824246b73e72a9238b4bfc
     *
     * @return self
     */
    public function setCA74c0b7f1f3824246b73e72a9238b4bfc($cA74c0b7f1f3824246b73e72a9238b4bfc)
    {
        $this->container['cA74c0b7f1f3824246b73e72a9238b4bfc'] = $cA74c0b7f1f3824246b73e72a9238b4bfc;

        return $this;
    }

    /**
     * Gets cAa2714586592f464f817efc493f3a4b50
     *
     * @return \Ringba\Model\CAa2714586592f464f817efc493f3a4b50
     */
    public function getCAa2714586592f464f817efc493f3a4b50()
    {
        return $this->container['cAa2714586592f464f817efc493f3a4b50'];
    }

    /**
     * Sets cAa2714586592f464f817efc493f3a4b50
     *
     * @param \Ringba\Model\CAa2714586592f464f817efc493f3a4b50 $cAa2714586592f464f817efc493f3a4b50 cAa2714586592f464f817efc493f3a4b50
     *
     * @return self
     */
    public function setCAa2714586592f464f817efc493f3a4b50($cAa2714586592f464f817efc493f3a4b50)
    {
        $this->container['cAa2714586592f464f817efc493f3a4b50'] = $cAa2714586592f464f817efc493f3a4b50;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


