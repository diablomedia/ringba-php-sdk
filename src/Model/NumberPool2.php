<?php
/**
 * NumberPool2
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
 * NumberPool2 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NumberPool2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NumberPool2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'holdNumberOutOfPoolInSeconds' => 'int',
        'poolSize' => 'int',
        'sortByGeo' => 'bool',
        'totalTimeForNumberOutOfPoolInSeconds' => 'int',
        'assignmentSettings' => '\Ringba\Model\AssignmentSettings2',
        'autoRotateNumbers' => 'bool',
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
        'holdNumberOutOfPoolInSeconds' => 'int32',
        'poolSize' => 'int32',
        'sortByGeo' => null,
        'totalTimeForNumberOutOfPoolInSeconds' => 'int32',
        'assignmentSettings' => null,
        'autoRotateNumbers' => null,
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
        'holdNumberOutOfPoolInSeconds' => 'holdNumberOutOfPoolInSeconds',
        'poolSize' => 'poolSize',
        'sortByGeo' => 'sortByGeo',
        'totalTimeForNumberOutOfPoolInSeconds' => 'totalTimeForNumberOutOfPoolInSeconds',
        'assignmentSettings' => 'assignmentSettings',
        'autoRotateNumbers' => 'autoRotateNumbers',
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
        'holdNumberOutOfPoolInSeconds' => 'setHoldNumberOutOfPoolInSeconds',
        'poolSize' => 'setPoolSize',
        'sortByGeo' => 'setSortByGeo',
        'totalTimeForNumberOutOfPoolInSeconds' => 'setTotalTimeForNumberOutOfPoolInSeconds',
        'assignmentSettings' => 'setAssignmentSettings',
        'autoRotateNumbers' => 'setAutoRotateNumbers',
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
        'holdNumberOutOfPoolInSeconds' => 'getHoldNumberOutOfPoolInSeconds',
        'poolSize' => 'getPoolSize',
        'sortByGeo' => 'getSortByGeo',
        'totalTimeForNumberOutOfPoolInSeconds' => 'getTotalTimeForNumberOutOfPoolInSeconds',
        'assignmentSettings' => 'getAssignmentSettings',
        'autoRotateNumbers' => 'getAutoRotateNumbers',
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
        $this->container['holdNumberOutOfPoolInSeconds'] = $data['holdNumberOutOfPoolInSeconds'] ?? null;
        $this->container['poolSize'] = $data['poolSize'] ?? null;
        $this->container['sortByGeo'] = $data['sortByGeo'] ?? null;
        $this->container['totalTimeForNumberOutOfPoolInSeconds'] = $data['totalTimeForNumberOutOfPoolInSeconds'] ?? null;
        $this->container['assignmentSettings'] = $data['assignmentSettings'] ?? null;
        $this->container['autoRotateNumbers'] = $data['autoRotateNumbers'] ?? null;
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
        if ($this->container['holdNumberOutOfPoolInSeconds'] === null) {
            $invalidProperties[] = "'holdNumberOutOfPoolInSeconds' can't be null";
        }
        if ($this->container['poolSize'] === null) {
            $invalidProperties[] = "'poolSize' can't be null";
        }
        if ($this->container['sortByGeo'] === null) {
            $invalidProperties[] = "'sortByGeo' can't be null";
        }
        if ($this->container['totalTimeForNumberOutOfPoolInSeconds'] === null) {
            $invalidProperties[] = "'totalTimeForNumberOutOfPoolInSeconds' can't be null";
        }
        if ($this->container['assignmentSettings'] === null) {
            $invalidProperties[] = "'assignmentSettings' can't be null";
        }
        if ($this->container['autoRotateNumbers'] === null) {
            $invalidProperties[] = "'autoRotateNumbers' can't be null";
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
     * Gets holdNumberOutOfPoolInSeconds
     *
     * @return int
     */
    public function getHoldNumberOutOfPoolInSeconds()
    {
        return $this->container['holdNumberOutOfPoolInSeconds'];
    }

    /**
     * Sets holdNumberOutOfPoolInSeconds
     *
     * @param int $holdNumberOutOfPoolInSeconds holdNumberOutOfPoolInSeconds
     *
     * @return self
     */
    public function setHoldNumberOutOfPoolInSeconds($holdNumberOutOfPoolInSeconds)
    {
        $this->container['holdNumberOutOfPoolInSeconds'] = $holdNumberOutOfPoolInSeconds;

        return $this;
    }

    /**
     * Gets poolSize
     *
     * @return int
     */
    public function getPoolSize()
    {
        return $this->container['poolSize'];
    }

    /**
     * Sets poolSize
     *
     * @param int $poolSize poolSize
     *
     * @return self
     */
    public function setPoolSize($poolSize)
    {
        $this->container['poolSize'] = $poolSize;

        return $this;
    }

    /**
     * Gets sortByGeo
     *
     * @return bool
     */
    public function getSortByGeo()
    {
        return $this->container['sortByGeo'];
    }

    /**
     * Sets sortByGeo
     *
     * @param bool $sortByGeo sortByGeo
     *
     * @return self
     */
    public function setSortByGeo($sortByGeo)
    {
        $this->container['sortByGeo'] = $sortByGeo;

        return $this;
    }

    /**
     * Gets totalTimeForNumberOutOfPoolInSeconds
     *
     * @return int
     */
    public function getTotalTimeForNumberOutOfPoolInSeconds()
    {
        return $this->container['totalTimeForNumberOutOfPoolInSeconds'];
    }

    /**
     * Sets totalTimeForNumberOutOfPoolInSeconds
     *
     * @param int $totalTimeForNumberOutOfPoolInSeconds totalTimeForNumberOutOfPoolInSeconds
     *
     * @return self
     */
    public function setTotalTimeForNumberOutOfPoolInSeconds($totalTimeForNumberOutOfPoolInSeconds)
    {
        $this->container['totalTimeForNumberOutOfPoolInSeconds'] = $totalTimeForNumberOutOfPoolInSeconds;

        return $this;
    }

    /**
     * Gets assignmentSettings
     *
     * @return \Ringba\Model\AssignmentSettings2
     */
    public function getAssignmentSettings()
    {
        return $this->container['assignmentSettings'];
    }

    /**
     * Sets assignmentSettings
     *
     * @param \Ringba\Model\AssignmentSettings2 $assignmentSettings assignmentSettings
     *
     * @return self
     */
    public function setAssignmentSettings($assignmentSettings)
    {
        $this->container['assignmentSettings'] = $assignmentSettings;

        return $this;
    }

    /**
     * Gets autoRotateNumbers
     *
     * @return bool
     */
    public function getAutoRotateNumbers()
    {
        return $this->container['autoRotateNumbers'];
    }

    /**
     * Sets autoRotateNumbers
     *
     * @param bool $autoRotateNumbers autoRotateNumbers
     *
     * @return self
     */
    public function setAutoRotateNumbers($autoRotateNumbers)
    {
        $this->container['autoRotateNumbers'] = $autoRotateNumbers;

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


