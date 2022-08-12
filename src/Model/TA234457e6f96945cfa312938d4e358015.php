<?php
/**
 * TA234457e6f96945cfa312938d4e358015
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
 * TA234457e6f96945cfa312938d4e358015 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TA234457e6f96945cfa312938d4e358015 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TA234457e6f96945cfa312938d4e358015';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'int',
        'currentMonth' => 'int',
        'currentDay' => 'int',
        'currentHour' => 'int',
        'currentLive' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'currentMonth' => 'int32',
        'currentDay' => 'int32',
        'currentHour' => 'int32',
        'currentLive' => 'int32'
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
        'total' => 'total',
        'currentMonth' => 'currentMonth',
        'currentDay' => 'currentDay',
        'currentHour' => 'currentHour',
        'currentLive' => 'currentLive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'currentMonth' => 'setCurrentMonth',
        'currentDay' => 'setCurrentDay',
        'currentHour' => 'setCurrentHour',
        'currentLive' => 'setCurrentLive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'currentMonth' => 'getCurrentMonth',
        'currentDay' => 'getCurrentDay',
        'currentHour' => 'getCurrentHour',
        'currentLive' => 'getCurrentLive'
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
        $this->container['total'] = $data['total'] ?? null;
        $this->container['currentMonth'] = $data['currentMonth'] ?? null;
        $this->container['currentDay'] = $data['currentDay'] ?? null;
        $this->container['currentHour'] = $data['currentHour'] ?? null;
        $this->container['currentLive'] = $data['currentLive'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['currentMonth'] === null) {
            $invalidProperties[] = "'currentMonth' can't be null";
        }
        if ($this->container['currentDay'] === null) {
            $invalidProperties[] = "'currentDay' can't be null";
        }
        if ($this->container['currentHour'] === null) {
            $invalidProperties[] = "'currentHour' can't be null";
        }
        if ($this->container['currentLive'] === null) {
            $invalidProperties[] = "'currentLive' can't be null";
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
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets currentMonth
     *
     * @return int
     */
    public function getCurrentMonth()
    {
        return $this->container['currentMonth'];
    }

    /**
     * Sets currentMonth
     *
     * @param int $currentMonth currentMonth
     *
     * @return self
     */
    public function setCurrentMonth($currentMonth)
    {
        $this->container['currentMonth'] = $currentMonth;

        return $this;
    }

    /**
     * Gets currentDay
     *
     * @return int
     */
    public function getCurrentDay()
    {
        return $this->container['currentDay'];
    }

    /**
     * Sets currentDay
     *
     * @param int $currentDay currentDay
     *
     * @return self
     */
    public function setCurrentDay($currentDay)
    {
        $this->container['currentDay'] = $currentDay;

        return $this;
    }

    /**
     * Gets currentHour
     *
     * @return int
     */
    public function getCurrentHour()
    {
        return $this->container['currentHour'];
    }

    /**
     * Sets currentHour
     *
     * @param int $currentHour currentHour
     *
     * @return self
     */
    public function setCurrentHour($currentHour)
    {
        $this->container['currentHour'] = $currentHour;

        return $this;
    }

    /**
     * Gets currentLive
     *
     * @return int
     */
    public function getCurrentLive()
    {
        return $this->container['currentLive'];
    }

    /**
     * Sets currentLive
     *
     * @param int $currentLive currentLive
     *
     * @return self
     */
    public function setCurrentLive($currentLive)
    {
        $this->container['currentLive'] = $currentLive;

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


