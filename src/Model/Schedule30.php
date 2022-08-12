<?php
/**
 * Schedule30
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
 * Schedule30 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Schedule30 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Schedule30';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'concurrencyCap' => 'int',
        'timeZoneId' => 'string',
        'allTimeSumCap' => 'float',
        'monthlySumCap' => 'float',
        'dailySumCap' => 'float',
        'hourlySumCap' => 'float',
        'allTimeCap' => 'int',
        'monthlyCap' => 'int',
        'dailyCap' => 'int',
        'hourlyCap' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'concurrencyCap' => 'int32',
        'timeZoneId' => null,
        'allTimeSumCap' => null,
        'monthlySumCap' => null,
        'dailySumCap' => null,
        'hourlySumCap' => null,
        'allTimeCap' => 'int32',
        'monthlyCap' => 'int32',
        'dailyCap' => 'int32',
        'hourlyCap' => 'int32'
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
        'concurrencyCap' => 'concurrencyCap',
        'timeZoneId' => 'timeZoneId',
        'allTimeSumCap' => 'allTimeSumCap',
        'monthlySumCap' => 'monthlySumCap',
        'dailySumCap' => 'dailySumCap',
        'hourlySumCap' => 'hourlySumCap',
        'allTimeCap' => 'allTimeCap',
        'monthlyCap' => 'monthlyCap',
        'dailyCap' => 'dailyCap',
        'hourlyCap' => 'hourlyCap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'concurrencyCap' => 'setConcurrencyCap',
        'timeZoneId' => 'setTimeZoneId',
        'allTimeSumCap' => 'setAllTimeSumCap',
        'monthlySumCap' => 'setMonthlySumCap',
        'dailySumCap' => 'setDailySumCap',
        'hourlySumCap' => 'setHourlySumCap',
        'allTimeCap' => 'setAllTimeCap',
        'monthlyCap' => 'setMonthlyCap',
        'dailyCap' => 'setDailyCap',
        'hourlyCap' => 'setHourlyCap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'concurrencyCap' => 'getConcurrencyCap',
        'timeZoneId' => 'getTimeZoneId',
        'allTimeSumCap' => 'getAllTimeSumCap',
        'monthlySumCap' => 'getMonthlySumCap',
        'dailySumCap' => 'getDailySumCap',
        'hourlySumCap' => 'getHourlySumCap',
        'allTimeCap' => 'getAllTimeCap',
        'monthlyCap' => 'getMonthlyCap',
        'dailyCap' => 'getDailyCap',
        'hourlyCap' => 'getHourlyCap'
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
        $this->container['concurrencyCap'] = $data['concurrencyCap'] ?? null;
        $this->container['timeZoneId'] = $data['timeZoneId'] ?? null;
        $this->container['allTimeSumCap'] = $data['allTimeSumCap'] ?? null;
        $this->container['monthlySumCap'] = $data['monthlySumCap'] ?? null;
        $this->container['dailySumCap'] = $data['dailySumCap'] ?? null;
        $this->container['hourlySumCap'] = $data['hourlySumCap'] ?? null;
        $this->container['allTimeCap'] = $data['allTimeCap'] ?? null;
        $this->container['monthlyCap'] = $data['monthlyCap'] ?? null;
        $this->container['dailyCap'] = $data['dailyCap'] ?? null;
        $this->container['hourlyCap'] = $data['hourlyCap'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['concurrencyCap'] === null) {
            $invalidProperties[] = "'concurrencyCap' can't be null";
        }
        if ($this->container['timeZoneId'] === null) {
            $invalidProperties[] = "'timeZoneId' can't be null";
        }
        if ($this->container['allTimeSumCap'] === null) {
            $invalidProperties[] = "'allTimeSumCap' can't be null";
        }
        if ($this->container['monthlySumCap'] === null) {
            $invalidProperties[] = "'monthlySumCap' can't be null";
        }
        if ($this->container['dailySumCap'] === null) {
            $invalidProperties[] = "'dailySumCap' can't be null";
        }
        if ($this->container['hourlySumCap'] === null) {
            $invalidProperties[] = "'hourlySumCap' can't be null";
        }
        if ($this->container['allTimeCap'] === null) {
            $invalidProperties[] = "'allTimeCap' can't be null";
        }
        if ($this->container['monthlyCap'] === null) {
            $invalidProperties[] = "'monthlyCap' can't be null";
        }
        if ($this->container['dailyCap'] === null) {
            $invalidProperties[] = "'dailyCap' can't be null";
        }
        if ($this->container['hourlyCap'] === null) {
            $invalidProperties[] = "'hourlyCap' can't be null";
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
     * Gets concurrencyCap
     *
     * @return int
     */
    public function getConcurrencyCap()
    {
        return $this->container['concurrencyCap'];
    }

    /**
     * Sets concurrencyCap
     *
     * @param int $concurrencyCap concurrencyCap
     *
     * @return self
     */
    public function setConcurrencyCap($concurrencyCap)
    {
        $this->container['concurrencyCap'] = $concurrencyCap;

        return $this;
    }

    /**
     * Gets timeZoneId
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['timeZoneId'];
    }

    /**
     * Sets timeZoneId
     *
     * @param string $timeZoneId timeZoneId
     *
     * @return self
     */
    public function setTimeZoneId($timeZoneId)
    {
        $this->container['timeZoneId'] = $timeZoneId;

        return $this;
    }

    /**
     * Gets allTimeSumCap
     *
     * @return float
     */
    public function getAllTimeSumCap()
    {
        return $this->container['allTimeSumCap'];
    }

    /**
     * Sets allTimeSumCap
     *
     * @param float $allTimeSumCap allTimeSumCap
     *
     * @return self
     */
    public function setAllTimeSumCap($allTimeSumCap)
    {
        $this->container['allTimeSumCap'] = $allTimeSumCap;

        return $this;
    }

    /**
     * Gets monthlySumCap
     *
     * @return float
     */
    public function getMonthlySumCap()
    {
        return $this->container['monthlySumCap'];
    }

    /**
     * Sets monthlySumCap
     *
     * @param float $monthlySumCap monthlySumCap
     *
     * @return self
     */
    public function setMonthlySumCap($monthlySumCap)
    {
        $this->container['monthlySumCap'] = $monthlySumCap;

        return $this;
    }

    /**
     * Gets dailySumCap
     *
     * @return float
     */
    public function getDailySumCap()
    {
        return $this->container['dailySumCap'];
    }

    /**
     * Sets dailySumCap
     *
     * @param float $dailySumCap dailySumCap
     *
     * @return self
     */
    public function setDailySumCap($dailySumCap)
    {
        $this->container['dailySumCap'] = $dailySumCap;

        return $this;
    }

    /**
     * Gets hourlySumCap
     *
     * @return float
     */
    public function getHourlySumCap()
    {
        return $this->container['hourlySumCap'];
    }

    /**
     * Sets hourlySumCap
     *
     * @param float $hourlySumCap hourlySumCap
     *
     * @return self
     */
    public function setHourlySumCap($hourlySumCap)
    {
        $this->container['hourlySumCap'] = $hourlySumCap;

        return $this;
    }

    /**
     * Gets allTimeCap
     *
     * @return int
     */
    public function getAllTimeCap()
    {
        return $this->container['allTimeCap'];
    }

    /**
     * Sets allTimeCap
     *
     * @param int $allTimeCap allTimeCap
     *
     * @return self
     */
    public function setAllTimeCap($allTimeCap)
    {
        $this->container['allTimeCap'] = $allTimeCap;

        return $this;
    }

    /**
     * Gets monthlyCap
     *
     * @return int
     */
    public function getMonthlyCap()
    {
        return $this->container['monthlyCap'];
    }

    /**
     * Sets monthlyCap
     *
     * @param int $monthlyCap monthlyCap
     *
     * @return self
     */
    public function setMonthlyCap($monthlyCap)
    {
        $this->container['monthlyCap'] = $monthlyCap;

        return $this;
    }

    /**
     * Gets dailyCap
     *
     * @return int
     */
    public function getDailyCap()
    {
        return $this->container['dailyCap'];
    }

    /**
     * Sets dailyCap
     *
     * @param int $dailyCap dailyCap
     *
     * @return self
     */
    public function setDailyCap($dailyCap)
    {
        $this->container['dailyCap'] = $dailyCap;

        return $this;
    }

    /**
     * Gets hourlyCap
     *
     * @return int
     */
    public function getHourlyCap()
    {
        return $this->container['hourlyCap'];
    }

    /**
     * Sets hourlyCap
     *
     * @param int $hourlyCap hourlyCap
     *
     * @return self
     */
    public function setHourlyCap($hourlyCap)
    {
        $this->container['hourlyCap'] = $hourlyCap;

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

