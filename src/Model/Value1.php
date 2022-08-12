<?php
/**
 * Value1
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
 * Value1 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Value1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Value1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'messageName' => 'string',
        'messageType' => 'string',
        'isWarning' => 'bool',
        'values' => 'int[]',
        'sum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'messageName' => null,
        'messageType' => null,
        'isWarning' => null,
        'values' => 'int32',
        'sum' => 'int32'
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
        'messageName' => 'messageName',
        'messageType' => 'messageType',
        'isWarning' => 'isWarning',
        'values' => 'values',
        'sum' => 'sum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messageName' => 'setMessageName',
        'messageType' => 'setMessageType',
        'isWarning' => 'setIsWarning',
        'values' => 'setValues',
        'sum' => 'setSum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messageName' => 'getMessageName',
        'messageType' => 'getMessageType',
        'isWarning' => 'getIsWarning',
        'values' => 'getValues',
        'sum' => 'getSum'
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
        $this->container['messageName'] = $data['messageName'] ?? null;
        $this->container['messageType'] = $data['messageType'] ?? null;
        $this->container['isWarning'] = $data['isWarning'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
        $this->container['sum'] = $data['sum'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['messageName'] === null) {
            $invalidProperties[] = "'messageName' can't be null";
        }
        if ($this->container['messageType'] === null) {
            $invalidProperties[] = "'messageType' can't be null";
        }
        if ($this->container['isWarning'] === null) {
            $invalidProperties[] = "'isWarning' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['sum'] === null) {
            $invalidProperties[] = "'sum' can't be null";
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
     * Gets messageName
     *
     * @return string
     */
    public function getMessageName()
    {
        return $this->container['messageName'];
    }

    /**
     * Sets messageName
     *
     * @param string $messageName messageName
     *
     * @return self
     */
    public function setMessageName($messageName)
    {
        $this->container['messageName'] = $messageName;

        return $this;
    }

    /**
     * Gets messageType
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
     * Sets messageType
     *
     * @param string $messageType messageType
     *
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;

        return $this;
    }

    /**
     * Gets isWarning
     *
     * @return bool
     */
    public function getIsWarning()
    {
        return $this->container['isWarning'];
    }

    /**
     * Sets isWarning
     *
     * @param bool $isWarning isWarning
     *
     * @return self
     */
    public function setIsWarning($isWarning)
    {
        $this->container['isWarning'] = $isWarning;

        return $this;
    }

    /**
     * Gets values
     *
     * @return int[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param int[] $values 
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return int
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param int $sum sum
     *
     * @return self
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;

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


