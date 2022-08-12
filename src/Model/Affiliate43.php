<?php
/**
 * Affiliate43
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
 * Affiliate43 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Affiliate43 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Affiliate43';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payoutConversionSettings' => '\Ringba\Model\Affiliate43PayoutConversionSettingsInner[]',
        'createNumbers' => 'bool',
        'isSelf' => 'bool',
        'id' => 'string',
        'name' => 'string',
        'accountId' => 'string',
        'enabled' => 'bool',
        'version' => 'int',
        'payoutConversionSetting' => '\Ringba\Model\PayoutConversionSetting23',
        'subId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payoutConversionSettings' => null,
        'createNumbers' => null,
        'isSelf' => null,
        'id' => null,
        'name' => null,
        'accountId' => null,
        'enabled' => null,
        'version' => 'int32',
        'payoutConversionSetting' => null,
        'subId' => null
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
        'payoutConversionSettings' => 'payoutConversionSettings',
        'createNumbers' => 'createNumbers',
        'isSelf' => 'isSelf',
        'id' => 'id',
        'name' => 'name',
        'accountId' => 'accountId',
        'enabled' => 'enabled',
        'version' => 'version',
        'payoutConversionSetting' => 'payoutConversionSetting',
        'subId' => 'subId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payoutConversionSettings' => 'setPayoutConversionSettings',
        'createNumbers' => 'setCreateNumbers',
        'isSelf' => 'setIsSelf',
        'id' => 'setId',
        'name' => 'setName',
        'accountId' => 'setAccountId',
        'enabled' => 'setEnabled',
        'version' => 'setVersion',
        'payoutConversionSetting' => 'setPayoutConversionSetting',
        'subId' => 'setSubId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payoutConversionSettings' => 'getPayoutConversionSettings',
        'createNumbers' => 'getCreateNumbers',
        'isSelf' => 'getIsSelf',
        'id' => 'getId',
        'name' => 'getName',
        'accountId' => 'getAccountId',
        'enabled' => 'getEnabled',
        'version' => 'getVersion',
        'payoutConversionSetting' => 'getPayoutConversionSetting',
        'subId' => 'getSubId'
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
        $this->container['payoutConversionSettings'] = $data['payoutConversionSettings'] ?? null;
        $this->container['createNumbers'] = $data['createNumbers'] ?? null;
        $this->container['isSelf'] = $data['isSelf'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['payoutConversionSetting'] = $data['payoutConversionSetting'] ?? null;
        $this->container['subId'] = $data['subId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payoutConversionSettings'] === null) {
            $invalidProperties[] = "'payoutConversionSettings' can't be null";
        }
        if ($this->container['createNumbers'] === null) {
            $invalidProperties[] = "'createNumbers' can't be null";
        }
        if ($this->container['isSelf'] === null) {
            $invalidProperties[] = "'isSelf' can't be null";
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
     * Gets payoutConversionSettings
     *
     * @return \Ringba\Model\Affiliate43PayoutConversionSettingsInner[]
     */
    public function getPayoutConversionSettings()
    {
        return $this->container['payoutConversionSettings'];
    }

    /**
     * Sets payoutConversionSettings
     *
     * @param \Ringba\Model\Affiliate43PayoutConversionSettingsInner[] $payoutConversionSettings 
     *
     * @return self
     */
    public function setPayoutConversionSettings($payoutConversionSettings)
    {
        $this->container['payoutConversionSettings'] = $payoutConversionSettings;

        return $this;
    }

    /**
     * Gets createNumbers
     *
     * @return bool
     */
    public function getCreateNumbers()
    {
        return $this->container['createNumbers'];
    }

    /**
     * Sets createNumbers
     *
     * @param bool $createNumbers createNumbers
     *
     * @return self
     */
    public function setCreateNumbers($createNumbers)
    {
        $this->container['createNumbers'] = $createNumbers;

        return $this;
    }

    /**
     * Gets isSelf
     *
     * @return bool
     */
    public function getIsSelf()
    {
        return $this->container['isSelf'];
    }

    /**
     * Sets isSelf
     *
     * @param bool $isSelf isSelf
     *
     * @return self
     */
    public function setIsSelf($isSelf)
    {
        $this->container['isSelf'] = $isSelf;

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
     * Gets payoutConversionSetting
     *
     * @return \Ringba\Model\PayoutConversionSetting23|null
     */
    public function getPayoutConversionSetting()
    {
        return $this->container['payoutConversionSetting'];
    }

    /**
     * Sets payoutConversionSetting
     *
     * @param \Ringba\Model\PayoutConversionSetting23|null $payoutConversionSetting payoutConversionSetting
     *
     * @return self
     */
    public function setPayoutConversionSetting($payoutConversionSetting)
    {
        $this->container['payoutConversionSetting'] = $payoutConversionSetting;

        return $this;
    }

    /**
     * Gets subId
     *
     * @return string|null
     */
    public function getSubId()
    {
        return $this->container['subId'];
    }

    /**
     * Sets subId
     *
     * @param string|null $subId subId
     *
     * @return self
     */
    public function setSubId($subId)
    {
        $this->container['subId'] = $subId;

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


