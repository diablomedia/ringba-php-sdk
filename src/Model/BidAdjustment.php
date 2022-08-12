<?php
/**
 * BidAdjustment
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
 * BidAdjustment Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BidAdjustment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BidAdjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'criteria' => '\Ringba\Model\Criteria',
        'adjustmentType' => 'string',
        'adjustmentValue' => '\Ringba\Model\AllPayoutPayoutAmount',
        'bulkListId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'criteria' => null,
        'adjustmentType' => null,
        'adjustmentValue' => null,
        'bulkListId' => null
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
        'criteria' => 'criteria',
        'adjustmentType' => 'adjustmentType',
        'adjustmentValue' => 'adjustmentValue',
        'bulkListId' => 'bulkListId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'criteria' => 'setCriteria',
        'adjustmentType' => 'setAdjustmentType',
        'adjustmentValue' => 'setAdjustmentValue',
        'bulkListId' => 'setBulkListId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'criteria' => 'getCriteria',
        'adjustmentType' => 'getAdjustmentType',
        'adjustmentValue' => 'getAdjustmentValue',
        'bulkListId' => 'getBulkListId'
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
        $this->container['criteria'] = $data['criteria'] ?? null;
        $this->container['adjustmentType'] = $data['adjustmentType'] ?? null;
        $this->container['adjustmentValue'] = $data['adjustmentValue'] ?? null;
        $this->container['bulkListId'] = $data['bulkListId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['criteria'] === null) {
            $invalidProperties[] = "'criteria' can't be null";
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
     * Gets criteria
     *
     * @return \Ringba\Model\Criteria
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     * @param \Ringba\Model\Criteria $criteria criteria
     *
     * @return self
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;

        return $this;
    }

    /**
     * Gets adjustmentType
     *
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustmentType'];
    }

    /**
     * Sets adjustmentType
     *
     * @param string|null $adjustmentType adjustmentType
     *
     * @return self
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->container['adjustmentType'] = $adjustmentType;

        return $this;
    }

    /**
     * Gets adjustmentValue
     *
     * @return \Ringba\Model\AllPayoutPayoutAmount|null
     */
    public function getAdjustmentValue()
    {
        return $this->container['adjustmentValue'];
    }

    /**
     * Sets adjustmentValue
     *
     * @param \Ringba\Model\AllPayoutPayoutAmount|null $adjustmentValue adjustmentValue
     *
     * @return self
     */
    public function setAdjustmentValue($adjustmentValue)
    {
        $this->container['adjustmentValue'] = $adjustmentValue;

        return $this;
    }

    /**
     * Gets bulkListId
     *
     * @return string|null
     */
    public function getBulkListId()
    {
        return $this->container['bulkListId'];
    }

    /**
     * Sets bulkListId
     *
     * @param string|null $bulkListId bulkListId
     *
     * @return self
     */
    public function setBulkListId($bulkListId)
    {
        $this->container['bulkListId'] = $bulkListId;

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


