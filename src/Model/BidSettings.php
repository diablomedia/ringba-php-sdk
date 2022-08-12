<?php
/**
 * BidSettings
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
 * BidSettings Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BidSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BidSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'baseBidAmount' => 'int',
        'maxBidAmount' => 'int',
        'deDupeSetting' => '\Ringba\Model\DeDupeSetting',
        'conversionType' => 'string',
        'conversionArgs' => '\Ringba\Model\ConversionArgs1'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'baseBidAmount' => 'int32',
        'maxBidAmount' => 'int32',
        'deDupeSetting' => null,
        'conversionType' => null,
        'conversionArgs' => null
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
        'baseBidAmount' => 'baseBidAmount',
        'maxBidAmount' => 'maxBidAmount',
        'deDupeSetting' => 'deDupeSetting',
        'conversionType' => 'conversionType',
        'conversionArgs' => 'conversionArgs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseBidAmount' => 'setBaseBidAmount',
        'maxBidAmount' => 'setMaxBidAmount',
        'deDupeSetting' => 'setDeDupeSetting',
        'conversionType' => 'setConversionType',
        'conversionArgs' => 'setConversionArgs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseBidAmount' => 'getBaseBidAmount',
        'maxBidAmount' => 'getMaxBidAmount',
        'deDupeSetting' => 'getDeDupeSetting',
        'conversionType' => 'getConversionType',
        'conversionArgs' => 'getConversionArgs'
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
        $this->container['baseBidAmount'] = $data['baseBidAmount'] ?? null;
        $this->container['maxBidAmount'] = $data['maxBidAmount'] ?? null;
        $this->container['deDupeSetting'] = $data['deDupeSetting'] ?? null;
        $this->container['conversionType'] = $data['conversionType'] ?? null;
        $this->container['conversionArgs'] = $data['conversionArgs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['baseBidAmount'] === null) {
            $invalidProperties[] = "'baseBidAmount' can't be null";
        }
        if ($this->container['maxBidAmount'] === null) {
            $invalidProperties[] = "'maxBidAmount' can't be null";
        }
        if ($this->container['deDupeSetting'] === null) {
            $invalidProperties[] = "'deDupeSetting' can't be null";
        }
        if ($this->container['conversionType'] === null) {
            $invalidProperties[] = "'conversionType' can't be null";
        }
        if ($this->container['conversionArgs'] === null) {
            $invalidProperties[] = "'conversionArgs' can't be null";
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
     * Gets baseBidAmount
     *
     * @return int
     */
    public function getBaseBidAmount()
    {
        return $this->container['baseBidAmount'];
    }

    /**
     * Sets baseBidAmount
     *
     * @param int $baseBidAmount baseBidAmount
     *
     * @return self
     */
    public function setBaseBidAmount($baseBidAmount)
    {
        $this->container['baseBidAmount'] = $baseBidAmount;

        return $this;
    }

    /**
     * Gets maxBidAmount
     *
     * @return int
     */
    public function getMaxBidAmount()
    {
        return $this->container['maxBidAmount'];
    }

    /**
     * Sets maxBidAmount
     *
     * @param int $maxBidAmount maxBidAmount
     *
     * @return self
     */
    public function setMaxBidAmount($maxBidAmount)
    {
        $this->container['maxBidAmount'] = $maxBidAmount;

        return $this;
    }

    /**
     * Gets deDupeSetting
     *
     * @return \Ringba\Model\DeDupeSetting
     */
    public function getDeDupeSetting()
    {
        return $this->container['deDupeSetting'];
    }

    /**
     * Sets deDupeSetting
     *
     * @param \Ringba\Model\DeDupeSetting $deDupeSetting deDupeSetting
     *
     * @return self
     */
    public function setDeDupeSetting($deDupeSetting)
    {
        $this->container['deDupeSetting'] = $deDupeSetting;

        return $this;
    }

    /**
     * Gets conversionType
     *
     * @return string
     */
    public function getConversionType()
    {
        return $this->container['conversionType'];
    }

    /**
     * Sets conversionType
     *
     * @param string $conversionType conversionType
     *
     * @return self
     */
    public function setConversionType($conversionType)
    {
        $this->container['conversionType'] = $conversionType;

        return $this;
    }

    /**
     * Gets conversionArgs
     *
     * @return \Ringba\Model\ConversionArgs1
     */
    public function getConversionArgs()
    {
        return $this->container['conversionArgs'];
    }

    /**
     * Sets conversionArgs
     *
     * @param \Ringba\Model\ConversionArgs1 $conversionArgs conversionArgs
     *
     * @return self
     */
    public function setConversionArgs($conversionArgs)
    {
        $this->container['conversionArgs'] = $conversionArgs;

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

