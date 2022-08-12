<?php
/**
 * Target6
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
 * Target6 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Target6 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Target6';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'highRateCPM' => 'int',
        'instructions' => '\Ringba\Model\Instructions',
        'isHighRateTarget' => 'bool',
        'subId' => 'string',
        'targetCallIncrement' => 'string',
        'conversionTimerOffset' => 'int',
        'schedule' => '\Ringba\Model\Schedule28',
        'blockRecordings' => 'bool',
        'id' => 'string',
        'name' => 'string',
        'accountId' => 'string',
        'enabled' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'highRateCPM' => 'int32',
        'instructions' => null,
        'isHighRateTarget' => null,
        'subId' => null,
        'targetCallIncrement' => null,
        'conversionTimerOffset' => 'int32',
        'schedule' => null,
        'blockRecordings' => null,
        'id' => null,
        'name' => null,
        'accountId' => null,
        'enabled' => null,
        'version' => 'int32'
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
        'highRateCPM' => 'highRateCPM',
        'instructions' => 'instructions',
        'isHighRateTarget' => 'isHighRateTarget',
        'subId' => 'subId',
        'targetCallIncrement' => 'targetCallIncrement',
        'conversionTimerOffset' => 'conversionTimerOffset',
        'schedule' => 'schedule',
        'blockRecordings' => 'blockRecordings',
        'id' => 'id',
        'name' => 'name',
        'accountId' => 'accountId',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'highRateCPM' => 'setHighRateCPM',
        'instructions' => 'setInstructions',
        'isHighRateTarget' => 'setIsHighRateTarget',
        'subId' => 'setSubId',
        'targetCallIncrement' => 'setTargetCallIncrement',
        'conversionTimerOffset' => 'setConversionTimerOffset',
        'schedule' => 'setSchedule',
        'blockRecordings' => 'setBlockRecordings',
        'id' => 'setId',
        'name' => 'setName',
        'accountId' => 'setAccountId',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'highRateCPM' => 'getHighRateCPM',
        'instructions' => 'getInstructions',
        'isHighRateTarget' => 'getIsHighRateTarget',
        'subId' => 'getSubId',
        'targetCallIncrement' => 'getTargetCallIncrement',
        'conversionTimerOffset' => 'getConversionTimerOffset',
        'schedule' => 'getSchedule',
        'blockRecordings' => 'getBlockRecordings',
        'id' => 'getId',
        'name' => 'getName',
        'accountId' => 'getAccountId',
        'enabled' => 'getEnabled',
        'version' => 'getVersion'
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
        $this->container['highRateCPM'] = $data['highRateCPM'] ?? null;
        $this->container['instructions'] = $data['instructions'] ?? null;
        $this->container['isHighRateTarget'] = $data['isHighRateTarget'] ?? null;
        $this->container['subId'] = $data['subId'] ?? null;
        $this->container['targetCallIncrement'] = $data['targetCallIncrement'] ?? null;
        $this->container['conversionTimerOffset'] = $data['conversionTimerOffset'] ?? null;
        $this->container['schedule'] = $data['schedule'] ?? null;
        $this->container['blockRecordings'] = $data['blockRecordings'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['highRateCPM'] === null) {
            $invalidProperties[] = "'highRateCPM' can't be null";
        }
        if ($this->container['instructions'] === null) {
            $invalidProperties[] = "'instructions' can't be null";
        }
        if ($this->container['isHighRateTarget'] === null) {
            $invalidProperties[] = "'isHighRateTarget' can't be null";
        }
        if ($this->container['subId'] === null) {
            $invalidProperties[] = "'subId' can't be null";
        }
        if ($this->container['targetCallIncrement'] === null) {
            $invalidProperties[] = "'targetCallIncrement' can't be null";
        }
        if ($this->container['conversionTimerOffset'] === null) {
            $invalidProperties[] = "'conversionTimerOffset' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
        }
        if ($this->container['blockRecordings'] === null) {
            $invalidProperties[] = "'blockRecordings' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets highRateCPM
     *
     * @return int
     */
    public function getHighRateCPM()
    {
        return $this->container['highRateCPM'];
    }

    /**
     * Sets highRateCPM
     *
     * @param int $highRateCPM highRateCPM
     *
     * @return self
     */
    public function setHighRateCPM($highRateCPM)
    {
        $this->container['highRateCPM'] = $highRateCPM;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return \Ringba\Model\Instructions
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param \Ringba\Model\Instructions $instructions instructions
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets isHighRateTarget
     *
     * @return bool
     */
    public function getIsHighRateTarget()
    {
        return $this->container['isHighRateTarget'];
    }

    /**
     * Sets isHighRateTarget
     *
     * @param bool $isHighRateTarget isHighRateTarget
     *
     * @return self
     */
    public function setIsHighRateTarget($isHighRateTarget)
    {
        $this->container['isHighRateTarget'] = $isHighRateTarget;

        return $this;
    }

    /**
     * Gets subId
     *
     * @return string
     */
    public function getSubId()
    {
        return $this->container['subId'];
    }

    /**
     * Sets subId
     *
     * @param string $subId subId
     *
     * @return self
     */
    public function setSubId($subId)
    {
        $this->container['subId'] = $subId;

        return $this;
    }

    /**
     * Gets targetCallIncrement
     *
     * @return string
     */
    public function getTargetCallIncrement()
    {
        return $this->container['targetCallIncrement'];
    }

    /**
     * Sets targetCallIncrement
     *
     * @param string $targetCallIncrement targetCallIncrement
     *
     * @return self
     */
    public function setTargetCallIncrement($targetCallIncrement)
    {
        $this->container['targetCallIncrement'] = $targetCallIncrement;

        return $this;
    }

    /**
     * Gets conversionTimerOffset
     *
     * @return int
     */
    public function getConversionTimerOffset()
    {
        return $this->container['conversionTimerOffset'];
    }

    /**
     * Sets conversionTimerOffset
     *
     * @param int $conversionTimerOffset conversionTimerOffset
     *
     * @return self
     */
    public function setConversionTimerOffset($conversionTimerOffset)
    {
        $this->container['conversionTimerOffset'] = $conversionTimerOffset;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Ringba\Model\Schedule28
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Ringba\Model\Schedule28 $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets blockRecordings
     *
     * @return bool
     */
    public function getBlockRecordings()
    {
        return $this->container['blockRecordings'];
    }

    /**
     * Sets blockRecordings
     *
     * @param bool $blockRecordings blockRecordings
     *
     * @return self
     */
    public function setBlockRecordings($blockRecordings)
    {
        $this->container['blockRecordings'] = $blockRecordings;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId accountId
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

