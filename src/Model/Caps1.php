<?php
/**
 * Caps1
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
 * Caps1 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Caps1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Caps1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hourSum' => 'int',
        'daySum' => 'int',
        'monthSum' => 'int',
        'totalSum' => 'int',
        'live' => 'int',
        'isGroup' => 'bool',
        'hour' => 'int',
        'day' => 'int',
        'month' => 'int',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hourSum' => 'int32',
        'daySum' => 'int32',
        'monthSum' => 'int32',
        'totalSum' => 'int32',
        'live' => 'int32',
        'isGroup' => null,
        'hour' => 'int32',
        'day' => 'int32',
        'month' => 'int32',
        'total' => 'int32'
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
        'hourSum' => 'hourSum',
        'daySum' => 'daySum',
        'monthSum' => 'monthSum',
        'totalSum' => 'totalSum',
        'live' => 'live',
        'isGroup' => 'isGroup',
        'hour' => 'hour',
        'day' => 'day',
        'month' => 'month',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hourSum' => 'setHourSum',
        'daySum' => 'setDaySum',
        'monthSum' => 'setMonthSum',
        'totalSum' => 'setTotalSum',
        'live' => 'setLive',
        'isGroup' => 'setIsGroup',
        'hour' => 'setHour',
        'day' => 'setDay',
        'month' => 'setMonth',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hourSum' => 'getHourSum',
        'daySum' => 'getDaySum',
        'monthSum' => 'getMonthSum',
        'totalSum' => 'getTotalSum',
        'live' => 'getLive',
        'isGroup' => 'getIsGroup',
        'hour' => 'getHour',
        'day' => 'getDay',
        'month' => 'getMonth',
        'total' => 'getTotal'
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
        $this->container['hourSum'] = $data['hourSum'] ?? null;
        $this->container['daySum'] = $data['daySum'] ?? null;
        $this->container['monthSum'] = $data['monthSum'] ?? null;
        $this->container['totalSum'] = $data['totalSum'] ?? null;
        $this->container['live'] = $data['live'] ?? null;
        $this->container['isGroup'] = $data['isGroup'] ?? null;
        $this->container['hour'] = $data['hour'] ?? null;
        $this->container['day'] = $data['day'] ?? null;
        $this->container['month'] = $data['month'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hourSum'] === null) {
            $invalidProperties[] = "'hourSum' can't be null";
        }
        if ($this->container['daySum'] === null) {
            $invalidProperties[] = "'daySum' can't be null";
        }
        if ($this->container['monthSum'] === null) {
            $invalidProperties[] = "'monthSum' can't be null";
        }
        if ($this->container['totalSum'] === null) {
            $invalidProperties[] = "'totalSum' can't be null";
        }
        if ($this->container['live'] === null) {
            $invalidProperties[] = "'live' can't be null";
        }
        if ($this->container['isGroup'] === null) {
            $invalidProperties[] = "'isGroup' can't be null";
        }
        if ($this->container['hour'] === null) {
            $invalidProperties[] = "'hour' can't be null";
        }
        if ($this->container['day'] === null) {
            $invalidProperties[] = "'day' can't be null";
        }
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets hourSum
     *
     * @return int
     */
    public function getHourSum()
    {
        return $this->container['hourSum'];
    }

    /**
     * Sets hourSum
     *
     * @param int $hourSum hourSum
     *
     * @return self
     */
    public function setHourSum($hourSum)
    {
        $this->container['hourSum'] = $hourSum;

        return $this;
    }

    /**
     * Gets daySum
     *
     * @return int
     */
    public function getDaySum()
    {
        return $this->container['daySum'];
    }

    /**
     * Sets daySum
     *
     * @param int $daySum daySum
     *
     * @return self
     */
    public function setDaySum($daySum)
    {
        $this->container['daySum'] = $daySum;

        return $this;
    }

    /**
     * Gets monthSum
     *
     * @return int
     */
    public function getMonthSum()
    {
        return $this->container['monthSum'];
    }

    /**
     * Sets monthSum
     *
     * @param int $monthSum monthSum
     *
     * @return self
     */
    public function setMonthSum($monthSum)
    {
        $this->container['monthSum'] = $monthSum;

        return $this;
    }

    /**
     * Gets totalSum
     *
     * @return int
     */
    public function getTotalSum()
    {
        return $this->container['totalSum'];
    }

    /**
     * Sets totalSum
     *
     * @param int $totalSum totalSum
     *
     * @return self
     */
    public function setTotalSum($totalSum)
    {
        $this->container['totalSum'] = $totalSum;

        return $this;
    }

    /**
     * Gets live
     *
     * @return int
     */
    public function getLive()
    {
        return $this->container['live'];
    }

    /**
     * Sets live
     *
     * @param int $live live
     *
     * @return self
     */
    public function setLive($live)
    {
        $this->container['live'] = $live;

        return $this;
    }

    /**
     * Gets isGroup
     *
     * @return bool
     */
    public function getIsGroup()
    {
        return $this->container['isGroup'];
    }

    /**
     * Sets isGroup
     *
     * @param bool $isGroup isGroup
     *
     * @return self
     */
    public function setIsGroup($isGroup)
    {
        $this->container['isGroup'] = $isGroup;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return int
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param int $hour hour
     *
     * @return self
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets day
     *
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int $day day
     *
     * @return self
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month month
     *
     * @return self
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
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


