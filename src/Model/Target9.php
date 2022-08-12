<?php
/**
 * Target9
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
 * Target9 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Target9 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Target9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'targetGroupId' => 'string',
        'instructions' => '\Ringba\Model\Instructions',
        'isHighRateTarget' => 'bool',
        'targetCallIncrement' => 'string',
        'conversionTimerOffset' => 'int',
        'schedule' => '\Ringba\Model\Schedule',
        'blockRecordings' => 'bool',
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
        'id' => null,
        'targetGroupId' => null,
        'instructions' => null,
        'isHighRateTarget' => null,
        'targetCallIncrement' => null,
        'conversionTimerOffset' => 'int32',
        'schedule' => null,
        'blockRecordings' => null,
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
        'id' => 'id',
        'targetGroupId' => 'targetGroupId',
        'instructions' => 'instructions',
        'isHighRateTarget' => 'isHighRateTarget',
        'targetCallIncrement' => 'targetCallIncrement',
        'conversionTimerOffset' => 'conversionTimerOffset',
        'schedule' => 'schedule',
        'blockRecordings' => 'blockRecordings',
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
        'id' => 'setId',
        'targetGroupId' => 'setTargetGroupId',
        'instructions' => 'setInstructions',
        'isHighRateTarget' => 'setIsHighRateTarget',
        'targetCallIncrement' => 'setTargetCallIncrement',
        'conversionTimerOffset' => 'setConversionTimerOffset',
        'schedule' => 'setSchedule',
        'blockRecordings' => 'setBlockRecordings',
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
        'id' => 'getId',
        'targetGroupId' => 'getTargetGroupId',
        'instructions' => 'getInstructions',
        'isHighRateTarget' => 'getIsHighRateTarget',
        'targetCallIncrement' => 'getTargetCallIncrement',
        'conversionTimerOffset' => 'getConversionTimerOffset',
        'schedule' => 'getSchedule',
        'blockRecordings' => 'getBlockRecordings',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['targetGroupId'] = $data['targetGroupId'] ?? null;
        $this->container['instructions'] = $data['instructions'] ?? null;
        $this->container['isHighRateTarget'] = $data['isHighRateTarget'] ?? null;
        $this->container['targetCallIncrement'] = $data['targetCallIncrement'] ?? null;
        $this->container['conversionTimerOffset'] = $data['conversionTimerOffset'] ?? null;
        $this->container['schedule'] = $data['schedule'] ?? null;
        $this->container['blockRecordings'] = $data['blockRecordings'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['targetGroupId'] === null) {
            $invalidProperties[] = "'targetGroupId' can't be null";
        }
        if ($this->container['instructions'] === null) {
            $invalidProperties[] = "'instructions' can't be null";
        }
        if ($this->container['isHighRateTarget'] === null) {
            $invalidProperties[] = "'isHighRateTarget' can't be null";
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
     * Gets targetGroupId
     *
     * @return string
     */
    public function getTargetGroupId()
    {
        return $this->container['targetGroupId'];
    }

    /**
     * Sets targetGroupId
     *
     * @param string $targetGroupId targetGroupId
     *
     * @return self
     */
    public function setTargetGroupId($targetGroupId)
    {
        $this->container['targetGroupId'] = $targetGroupId;

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
     * @return \Ringba\Model\Schedule
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Ringba\Model\Schedule $schedule schedule
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


