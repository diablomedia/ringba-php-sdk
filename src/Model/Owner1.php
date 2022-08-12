<?php
/**
 * Owner1
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
 * Owner1 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Owner1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Owner1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'id' => 'string',
        'userIds' => 'string[]',
        'canPauseTargets' => 'bool',
        'canSetConcurrencyCaps' => 'bool',
        'canDisputeConversions' => 'bool',
        'capacity' => '\Ringba\Model\Capacity',
        'name' => 'string',
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
        'accountId' => null,
        'id' => null,
        'userIds' => null,
        'canPauseTargets' => null,
        'canSetConcurrencyCaps' => null,
        'canDisputeConversions' => null,
        'capacity' => null,
        'name' => null,
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
        'accountId' => 'accountId',
        'id' => 'id',
        'userIds' => 'userIds',
        'canPauseTargets' => 'canPauseTargets',
        'canSetConcurrencyCaps' => 'canSetConcurrencyCaps',
        'canDisputeConversions' => 'canDisputeConversions',
        'capacity' => 'capacity',
        'name' => 'name',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'id' => 'setId',
        'userIds' => 'setUserIds',
        'canPauseTargets' => 'setCanPauseTargets',
        'canSetConcurrencyCaps' => 'setCanSetConcurrencyCaps',
        'canDisputeConversions' => 'setCanDisputeConversions',
        'capacity' => 'setCapacity',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'id' => 'getId',
        'userIds' => 'getUserIds',
        'canPauseTargets' => 'getCanPauseTargets',
        'canSetConcurrencyCaps' => 'getCanSetConcurrencyCaps',
        'canDisputeConversions' => 'getCanDisputeConversions',
        'capacity' => 'getCapacity',
        'name' => 'getName',
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['userIds'] = $data['userIds'] ?? null;
        $this->container['canPauseTargets'] = $data['canPauseTargets'] ?? null;
        $this->container['canSetConcurrencyCaps'] = $data['canSetConcurrencyCaps'] ?? null;
        $this->container['canDisputeConversions'] = $data['canDisputeConversions'] ?? null;
        $this->container['capacity'] = $data['capacity'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
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

        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['userIds'] === null) {
            $invalidProperties[] = "'userIds' can't be null";
        }
        if ($this->container['canPauseTargets'] === null) {
            $invalidProperties[] = "'canPauseTargets' can't be null";
        }
        if ($this->container['canSetConcurrencyCaps'] === null) {
            $invalidProperties[] = "'canSetConcurrencyCaps' can't be null";
        }
        if ($this->container['canDisputeConversions'] === null) {
            $invalidProperties[] = "'canDisputeConversions' can't be null";
        }
        if ($this->container['capacity'] === null) {
            $invalidProperties[] = "'capacity' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets userIds
     *
     * @return string[]
     */
    public function getUserIds()
    {
        return $this->container['userIds'];
    }

    /**
     * Sets userIds
     *
     * @param string[] $userIds 
     *
     * @return self
     */
    public function setUserIds($userIds)
    {
        $this->container['userIds'] = $userIds;

        return $this;
    }

    /**
     * Gets canPauseTargets
     *
     * @return bool
     */
    public function getCanPauseTargets()
    {
        return $this->container['canPauseTargets'];
    }

    /**
     * Sets canPauseTargets
     *
     * @param bool $canPauseTargets canPauseTargets
     *
     * @return self
     */
    public function setCanPauseTargets($canPauseTargets)
    {
        $this->container['canPauseTargets'] = $canPauseTargets;

        return $this;
    }

    /**
     * Gets canSetConcurrencyCaps
     *
     * @return bool
     */
    public function getCanSetConcurrencyCaps()
    {
        return $this->container['canSetConcurrencyCaps'];
    }

    /**
     * Sets canSetConcurrencyCaps
     *
     * @param bool $canSetConcurrencyCaps canSetConcurrencyCaps
     *
     * @return self
     */
    public function setCanSetConcurrencyCaps($canSetConcurrencyCaps)
    {
        $this->container['canSetConcurrencyCaps'] = $canSetConcurrencyCaps;

        return $this;
    }

    /**
     * Gets canDisputeConversions
     *
     * @return bool
     */
    public function getCanDisputeConversions()
    {
        return $this->container['canDisputeConversions'];
    }

    /**
     * Sets canDisputeConversions
     *
     * @param bool $canDisputeConversions canDisputeConversions
     *
     * @return self
     */
    public function setCanDisputeConversions($canDisputeConversions)
    {
        $this->container['canDisputeConversions'] = $canDisputeConversions;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return \Ringba\Model\Capacity
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param \Ringba\Model\Capacity $capacity capacity
     *
     * @return self
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

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


