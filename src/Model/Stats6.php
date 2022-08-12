<?php
/**
 * Stats6
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
 * Stats6 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Stats6 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Stats6';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tAc915194e11ab428f91178e897e1d67cb' => '\Ringba\Model\TAc915194e11ab428f91178e897e1d67cb',
        'tAfa4c37e44a274af8b8927ed67d536d89' => '\Ringba\Model\TAfa4c37e44a274af8b8927ed67d536d89'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tAc915194e11ab428f91178e897e1d67cb' => null,
        'tAfa4c37e44a274af8b8927ed67d536d89' => null
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
        'tAc915194e11ab428f91178e897e1d67cb' => 'tAc915194e11ab428f91178e897e1d67cb',
        'tAfa4c37e44a274af8b8927ed67d536d89' => 'tAfa4c37e44a274af8b8927ed67d536d89'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tAc915194e11ab428f91178e897e1d67cb' => 'setTAc915194e11ab428f91178e897e1d67cb',
        'tAfa4c37e44a274af8b8927ed67d536d89' => 'setTAfa4c37e44a274af8b8927ed67d536d89'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tAc915194e11ab428f91178e897e1d67cb' => 'getTAc915194e11ab428f91178e897e1d67cb',
        'tAfa4c37e44a274af8b8927ed67d536d89' => 'getTAfa4c37e44a274af8b8927ed67d536d89'
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
        $this->container['tAc915194e11ab428f91178e897e1d67cb'] = $data['tAc915194e11ab428f91178e897e1d67cb'] ?? null;
        $this->container['tAfa4c37e44a274af8b8927ed67d536d89'] = $data['tAfa4c37e44a274af8b8927ed67d536d89'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tAc915194e11ab428f91178e897e1d67cb'] === null) {
            $invalidProperties[] = "'tAc915194e11ab428f91178e897e1d67cb' can't be null";
        }
        if ($this->container['tAfa4c37e44a274af8b8927ed67d536d89'] === null) {
            $invalidProperties[] = "'tAfa4c37e44a274af8b8927ed67d536d89' can't be null";
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
     * Gets tAc915194e11ab428f91178e897e1d67cb
     *
     * @return \Ringba\Model\TAc915194e11ab428f91178e897e1d67cb
     */
    public function getTAc915194e11ab428f91178e897e1d67cb()
    {
        return $this->container['tAc915194e11ab428f91178e897e1d67cb'];
    }

    /**
     * Sets tAc915194e11ab428f91178e897e1d67cb
     *
     * @param \Ringba\Model\TAc915194e11ab428f91178e897e1d67cb $tAc915194e11ab428f91178e897e1d67cb tAc915194e11ab428f91178e897e1d67cb
     *
     * @return self
     */
    public function setTAc915194e11ab428f91178e897e1d67cb($tAc915194e11ab428f91178e897e1d67cb)
    {
        $this->container['tAc915194e11ab428f91178e897e1d67cb'] = $tAc915194e11ab428f91178e897e1d67cb;

        return $this;
    }

    /**
     * Gets tAfa4c37e44a274af8b8927ed67d536d89
     *
     * @return \Ringba\Model\TAfa4c37e44a274af8b8927ed67d536d89
     */
    public function getTAfa4c37e44a274af8b8927ed67d536d89()
    {
        return $this->container['tAfa4c37e44a274af8b8927ed67d536d89'];
    }

    /**
     * Sets tAfa4c37e44a274af8b8927ed67d536d89
     *
     * @param \Ringba\Model\TAfa4c37e44a274af8b8927ed67d536d89 $tAfa4c37e44a274af8b8927ed67d536d89 tAfa4c37e44a274af8b8927ed67d536d89
     *
     * @return self
     */
    public function setTAfa4c37e44a274af8b8927ed67d536d89($tAfa4c37e44a274af8b8927ed67d536d89)
    {
        $this->container['tAfa4c37e44a274af8b8927ed67d536d89'] = $tAfa4c37e44a274af8b8927ed67d536d89;

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


