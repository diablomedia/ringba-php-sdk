<?php
/**
 * Settings2
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
 * Settings2 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Settings2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'menuPrompt' => '\Ringba\Model\MenuPrompt',
        'menuTagName' => 'string',
        'menuItems' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'menuPrompt' => null,
        'menuTagName' => null,
        'menuItems' => null
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
        'menuPrompt' => 'menuPrompt',
        'menuTagName' => 'menuTagName',
        'menuItems' => 'menuItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menuPrompt' => 'setMenuPrompt',
        'menuTagName' => 'setMenuTagName',
        'menuItems' => 'setMenuItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menuPrompt' => 'getMenuPrompt',
        'menuTagName' => 'getMenuTagName',
        'menuItems' => 'getMenuItems'
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
        $this->container['menuPrompt'] = $data['menuPrompt'] ?? null;
        $this->container['menuTagName'] = $data['menuTagName'] ?? null;
        $this->container['menuItems'] = $data['menuItems'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['menuPrompt'] === null) {
            $invalidProperties[] = "'menuPrompt' can't be null";
        }
        if ($this->container['menuTagName'] === null) {
            $invalidProperties[] = "'menuTagName' can't be null";
        }
        if ($this->container['menuItems'] === null) {
            $invalidProperties[] = "'menuItems' can't be null";
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
     * Gets menuPrompt
     *
     * @return \Ringba\Model\MenuPrompt
     */
    public function getMenuPrompt()
    {
        return $this->container['menuPrompt'];
    }

    /**
     * Sets menuPrompt
     *
     * @param \Ringba\Model\MenuPrompt $menuPrompt menuPrompt
     *
     * @return self
     */
    public function setMenuPrompt($menuPrompt)
    {
        $this->container['menuPrompt'] = $menuPrompt;

        return $this;
    }

    /**
     * Gets menuTagName
     *
     * @return string
     */
    public function getMenuTagName()
    {
        return $this->container['menuTagName'];
    }

    /**
     * Sets menuTagName
     *
     * @param string $menuTagName menuTagName
     *
     * @return self
     */
    public function setMenuTagName($menuTagName)
    {
        $this->container['menuTagName'] = $menuTagName;

        return $this;
    }

    /**
     * Gets menuItems
     *
     * @return string
     */
    public function getMenuItems()
    {
        return $this->container['menuItems'];
    }

    /**
     * Sets menuItems
     *
     * @param string $menuItems menuItems
     *
     * @return self
     */
    public function setMenuItems($menuItems)
    {
        $this->container['menuItems'] = $menuItems;

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


