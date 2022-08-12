<?php
/**
 * GetAddressesbyCountry
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
 * GetAddressesbyCountry Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetAddressesbyCountry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAddressesbyCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addressRequirementFullfilledForTollFreeNumbers' => 'bool',
        'addressRequirementFullfilledForLocalNumbers' => 'bool',
        'name' => 'string',
        'countryCode' => 'string',
        'hasTollFreeNumbers' => 'bool',
        'hasMobileNumbers' => 'bool',
        'hasLocalNumbers' => 'bool',
        'addressRequirementForTollFreeNumbers' => 'string',
        'addressRequirementForLocalNumbers' => 'string',
        'addressProofRequirementForTollFreeNumbers' => 'bool',
        'addressProofRequirementForLocalNumbers' => 'bool',
        'identityRequirementForTollFreeNumbers' => 'string',
        'identityRequirementForLocalNumbers' => 'string',
        'identityProofRequirementForTollFreeNumbers' => 'bool',
        'identityProofRequirementForLocalNumbers' => 'bool',
        'canSearchByZipCode' => 'bool',
        'canSearchByRegion' => 'bool',
        'canSearchByPrefix' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addressRequirementFullfilledForTollFreeNumbers' => null,
        'addressRequirementFullfilledForLocalNumbers' => null,
        'name' => null,
        'countryCode' => null,
        'hasTollFreeNumbers' => null,
        'hasMobileNumbers' => null,
        'hasLocalNumbers' => null,
        'addressRequirementForTollFreeNumbers' => null,
        'addressRequirementForLocalNumbers' => null,
        'addressProofRequirementForTollFreeNumbers' => null,
        'addressProofRequirementForLocalNumbers' => null,
        'identityRequirementForTollFreeNumbers' => null,
        'identityRequirementForLocalNumbers' => null,
        'identityProofRequirementForTollFreeNumbers' => null,
        'identityProofRequirementForLocalNumbers' => null,
        'canSearchByZipCode' => null,
        'canSearchByRegion' => null,
        'canSearchByPrefix' => null
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
        'addressRequirementFullfilledForTollFreeNumbers' => 'addressRequirementFullfilledForTollFreeNumbers',
        'addressRequirementFullfilledForLocalNumbers' => 'addressRequirementFullfilledForLocalNumbers',
        'name' => 'name',
        'countryCode' => 'countryCode',
        'hasTollFreeNumbers' => 'hasTollFreeNumbers',
        'hasMobileNumbers' => 'hasMobileNumbers',
        'hasLocalNumbers' => 'hasLocalNumbers',
        'addressRequirementForTollFreeNumbers' => 'addressRequirementForTollFreeNumbers',
        'addressRequirementForLocalNumbers' => 'addressRequirementForLocalNumbers',
        'addressProofRequirementForTollFreeNumbers' => 'addressProofRequirementForTollFreeNumbers',
        'addressProofRequirementForLocalNumbers' => 'addressProofRequirementForLocalNumbers',
        'identityRequirementForTollFreeNumbers' => 'identityRequirementForTollFreeNumbers',
        'identityRequirementForLocalNumbers' => 'identityRequirementForLocalNumbers',
        'identityProofRequirementForTollFreeNumbers' => 'identityProofRequirementForTollFreeNumbers',
        'identityProofRequirementForLocalNumbers' => 'identityProofRequirementForLocalNumbers',
        'canSearchByZipCode' => 'canSearchByZipCode',
        'canSearchByRegion' => 'canSearchByRegion',
        'canSearchByPrefix' => 'canSearchByPrefix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressRequirementFullfilledForTollFreeNumbers' => 'setAddressRequirementFullfilledForTollFreeNumbers',
        'addressRequirementFullfilledForLocalNumbers' => 'setAddressRequirementFullfilledForLocalNumbers',
        'name' => 'setName',
        'countryCode' => 'setCountryCode',
        'hasTollFreeNumbers' => 'setHasTollFreeNumbers',
        'hasMobileNumbers' => 'setHasMobileNumbers',
        'hasLocalNumbers' => 'setHasLocalNumbers',
        'addressRequirementForTollFreeNumbers' => 'setAddressRequirementForTollFreeNumbers',
        'addressRequirementForLocalNumbers' => 'setAddressRequirementForLocalNumbers',
        'addressProofRequirementForTollFreeNumbers' => 'setAddressProofRequirementForTollFreeNumbers',
        'addressProofRequirementForLocalNumbers' => 'setAddressProofRequirementForLocalNumbers',
        'identityRequirementForTollFreeNumbers' => 'setIdentityRequirementForTollFreeNumbers',
        'identityRequirementForLocalNumbers' => 'setIdentityRequirementForLocalNumbers',
        'identityProofRequirementForTollFreeNumbers' => 'setIdentityProofRequirementForTollFreeNumbers',
        'identityProofRequirementForLocalNumbers' => 'setIdentityProofRequirementForLocalNumbers',
        'canSearchByZipCode' => 'setCanSearchByZipCode',
        'canSearchByRegion' => 'setCanSearchByRegion',
        'canSearchByPrefix' => 'setCanSearchByPrefix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressRequirementFullfilledForTollFreeNumbers' => 'getAddressRequirementFullfilledForTollFreeNumbers',
        'addressRequirementFullfilledForLocalNumbers' => 'getAddressRequirementFullfilledForLocalNumbers',
        'name' => 'getName',
        'countryCode' => 'getCountryCode',
        'hasTollFreeNumbers' => 'getHasTollFreeNumbers',
        'hasMobileNumbers' => 'getHasMobileNumbers',
        'hasLocalNumbers' => 'getHasLocalNumbers',
        'addressRequirementForTollFreeNumbers' => 'getAddressRequirementForTollFreeNumbers',
        'addressRequirementForLocalNumbers' => 'getAddressRequirementForLocalNumbers',
        'addressProofRequirementForTollFreeNumbers' => 'getAddressProofRequirementForTollFreeNumbers',
        'addressProofRequirementForLocalNumbers' => 'getAddressProofRequirementForLocalNumbers',
        'identityRequirementForTollFreeNumbers' => 'getIdentityRequirementForTollFreeNumbers',
        'identityRequirementForLocalNumbers' => 'getIdentityRequirementForLocalNumbers',
        'identityProofRequirementForTollFreeNumbers' => 'getIdentityProofRequirementForTollFreeNumbers',
        'identityProofRequirementForLocalNumbers' => 'getIdentityProofRequirementForLocalNumbers',
        'canSearchByZipCode' => 'getCanSearchByZipCode',
        'canSearchByRegion' => 'getCanSearchByRegion',
        'canSearchByPrefix' => 'getCanSearchByPrefix'
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
        $this->container['addressRequirementFullfilledForTollFreeNumbers'] = $data['addressRequirementFullfilledForTollFreeNumbers'] ?? null;
        $this->container['addressRequirementFullfilledForLocalNumbers'] = $data['addressRequirementFullfilledForLocalNumbers'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['hasTollFreeNumbers'] = $data['hasTollFreeNumbers'] ?? null;
        $this->container['hasMobileNumbers'] = $data['hasMobileNumbers'] ?? null;
        $this->container['hasLocalNumbers'] = $data['hasLocalNumbers'] ?? null;
        $this->container['addressRequirementForTollFreeNumbers'] = $data['addressRequirementForTollFreeNumbers'] ?? null;
        $this->container['addressRequirementForLocalNumbers'] = $data['addressRequirementForLocalNumbers'] ?? null;
        $this->container['addressProofRequirementForTollFreeNumbers'] = $data['addressProofRequirementForTollFreeNumbers'] ?? null;
        $this->container['addressProofRequirementForLocalNumbers'] = $data['addressProofRequirementForLocalNumbers'] ?? null;
        $this->container['identityRequirementForTollFreeNumbers'] = $data['identityRequirementForTollFreeNumbers'] ?? null;
        $this->container['identityRequirementForLocalNumbers'] = $data['identityRequirementForLocalNumbers'] ?? null;
        $this->container['identityProofRequirementForTollFreeNumbers'] = $data['identityProofRequirementForTollFreeNumbers'] ?? null;
        $this->container['identityProofRequirementForLocalNumbers'] = $data['identityProofRequirementForLocalNumbers'] ?? null;
        $this->container['canSearchByZipCode'] = $data['canSearchByZipCode'] ?? null;
        $this->container['canSearchByRegion'] = $data['canSearchByRegion'] ?? null;
        $this->container['canSearchByPrefix'] = $data['canSearchByPrefix'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['addressRequirementFullfilledForLocalNumbers'] === null) {
            $invalidProperties[] = "'addressRequirementFullfilledForLocalNumbers' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ($this->container['hasTollFreeNumbers'] === null) {
            $invalidProperties[] = "'hasTollFreeNumbers' can't be null";
        }
        if ($this->container['hasMobileNumbers'] === null) {
            $invalidProperties[] = "'hasMobileNumbers' can't be null";
        }
        if ($this->container['hasLocalNumbers'] === null) {
            $invalidProperties[] = "'hasLocalNumbers' can't be null";
        }
        if ($this->container['addressRequirementForLocalNumbers'] === null) {
            $invalidProperties[] = "'addressRequirementForLocalNumbers' can't be null";
        }
        if ($this->container['addressProofRequirementForLocalNumbers'] === null) {
            $invalidProperties[] = "'addressProofRequirementForLocalNumbers' can't be null";
        }
        if ($this->container['identityRequirementForLocalNumbers'] === null) {
            $invalidProperties[] = "'identityRequirementForLocalNumbers' can't be null";
        }
        if ($this->container['identityProofRequirementForLocalNumbers'] === null) {
            $invalidProperties[] = "'identityProofRequirementForLocalNumbers' can't be null";
        }
        if ($this->container['canSearchByZipCode'] === null) {
            $invalidProperties[] = "'canSearchByZipCode' can't be null";
        }
        if ($this->container['canSearchByRegion'] === null) {
            $invalidProperties[] = "'canSearchByRegion' can't be null";
        }
        if ($this->container['canSearchByPrefix'] === null) {
            $invalidProperties[] = "'canSearchByPrefix' can't be null";
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
     * Gets addressRequirementFullfilledForTollFreeNumbers
     *
     * @return bool|null
     */
    public function getAddressRequirementFullfilledForTollFreeNumbers()
    {
        return $this->container['addressRequirementFullfilledForTollFreeNumbers'];
    }

    /**
     * Sets addressRequirementFullfilledForTollFreeNumbers
     *
     * @param bool|null $addressRequirementFullfilledForTollFreeNumbers addressRequirementFullfilledForTollFreeNumbers
     *
     * @return self
     */
    public function setAddressRequirementFullfilledForTollFreeNumbers($addressRequirementFullfilledForTollFreeNumbers)
    {
        $this->container['addressRequirementFullfilledForTollFreeNumbers'] = $addressRequirementFullfilledForTollFreeNumbers;

        return $this;
    }

    /**
     * Gets addressRequirementFullfilledForLocalNumbers
     *
     * @return bool
     */
    public function getAddressRequirementFullfilledForLocalNumbers()
    {
        return $this->container['addressRequirementFullfilledForLocalNumbers'];
    }

    /**
     * Sets addressRequirementFullfilledForLocalNumbers
     *
     * @param bool $addressRequirementFullfilledForLocalNumbers addressRequirementFullfilledForLocalNumbers
     *
     * @return self
     */
    public function setAddressRequirementFullfilledForLocalNumbers($addressRequirementFullfilledForLocalNumbers)
    {
        $this->container['addressRequirementFullfilledForLocalNumbers'] = $addressRequirementFullfilledForLocalNumbers;

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
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets hasTollFreeNumbers
     *
     * @return bool
     */
    public function getHasTollFreeNumbers()
    {
        return $this->container['hasTollFreeNumbers'];
    }

    /**
     * Sets hasTollFreeNumbers
     *
     * @param bool $hasTollFreeNumbers hasTollFreeNumbers
     *
     * @return self
     */
    public function setHasTollFreeNumbers($hasTollFreeNumbers)
    {
        $this->container['hasTollFreeNumbers'] = $hasTollFreeNumbers;

        return $this;
    }

    /**
     * Gets hasMobileNumbers
     *
     * @return bool
     */
    public function getHasMobileNumbers()
    {
        return $this->container['hasMobileNumbers'];
    }

    /**
     * Sets hasMobileNumbers
     *
     * @param bool $hasMobileNumbers hasMobileNumbers
     *
     * @return self
     */
    public function setHasMobileNumbers($hasMobileNumbers)
    {
        $this->container['hasMobileNumbers'] = $hasMobileNumbers;

        return $this;
    }

    /**
     * Gets hasLocalNumbers
     *
     * @return bool
     */
    public function getHasLocalNumbers()
    {
        return $this->container['hasLocalNumbers'];
    }

    /**
     * Sets hasLocalNumbers
     *
     * @param bool $hasLocalNumbers hasLocalNumbers
     *
     * @return self
     */
    public function setHasLocalNumbers($hasLocalNumbers)
    {
        $this->container['hasLocalNumbers'] = $hasLocalNumbers;

        return $this;
    }

    /**
     * Gets addressRequirementForTollFreeNumbers
     *
     * @return string|null
     */
    public function getAddressRequirementForTollFreeNumbers()
    {
        return $this->container['addressRequirementForTollFreeNumbers'];
    }

    /**
     * Sets addressRequirementForTollFreeNumbers
     *
     * @param string|null $addressRequirementForTollFreeNumbers addressRequirementForTollFreeNumbers
     *
     * @return self
     */
    public function setAddressRequirementForTollFreeNumbers($addressRequirementForTollFreeNumbers)
    {
        $this->container['addressRequirementForTollFreeNumbers'] = $addressRequirementForTollFreeNumbers;

        return $this;
    }

    /**
     * Gets addressRequirementForLocalNumbers
     *
     * @return string
     */
    public function getAddressRequirementForLocalNumbers()
    {
        return $this->container['addressRequirementForLocalNumbers'];
    }

    /**
     * Sets addressRequirementForLocalNumbers
     *
     * @param string $addressRequirementForLocalNumbers addressRequirementForLocalNumbers
     *
     * @return self
     */
    public function setAddressRequirementForLocalNumbers($addressRequirementForLocalNumbers)
    {
        $this->container['addressRequirementForLocalNumbers'] = $addressRequirementForLocalNumbers;

        return $this;
    }

    /**
     * Gets addressProofRequirementForTollFreeNumbers
     *
     * @return bool|null
     */
    public function getAddressProofRequirementForTollFreeNumbers()
    {
        return $this->container['addressProofRequirementForTollFreeNumbers'];
    }

    /**
     * Sets addressProofRequirementForTollFreeNumbers
     *
     * @param bool|null $addressProofRequirementForTollFreeNumbers addressProofRequirementForTollFreeNumbers
     *
     * @return self
     */
    public function setAddressProofRequirementForTollFreeNumbers($addressProofRequirementForTollFreeNumbers)
    {
        $this->container['addressProofRequirementForTollFreeNumbers'] = $addressProofRequirementForTollFreeNumbers;

        return $this;
    }

    /**
     * Gets addressProofRequirementForLocalNumbers
     *
     * @return bool
     */
    public function getAddressProofRequirementForLocalNumbers()
    {
        return $this->container['addressProofRequirementForLocalNumbers'];
    }

    /**
     * Sets addressProofRequirementForLocalNumbers
     *
     * @param bool $addressProofRequirementForLocalNumbers addressProofRequirementForLocalNumbers
     *
     * @return self
     */
    public function setAddressProofRequirementForLocalNumbers($addressProofRequirementForLocalNumbers)
    {
        $this->container['addressProofRequirementForLocalNumbers'] = $addressProofRequirementForLocalNumbers;

        return $this;
    }

    /**
     * Gets identityRequirementForTollFreeNumbers
     *
     * @return string|null
     */
    public function getIdentityRequirementForTollFreeNumbers()
    {
        return $this->container['identityRequirementForTollFreeNumbers'];
    }

    /**
     * Sets identityRequirementForTollFreeNumbers
     *
     * @param string|null $identityRequirementForTollFreeNumbers identityRequirementForTollFreeNumbers
     *
     * @return self
     */
    public function setIdentityRequirementForTollFreeNumbers($identityRequirementForTollFreeNumbers)
    {
        $this->container['identityRequirementForTollFreeNumbers'] = $identityRequirementForTollFreeNumbers;

        return $this;
    }

    /**
     * Gets identityRequirementForLocalNumbers
     *
     * @return string
     */
    public function getIdentityRequirementForLocalNumbers()
    {
        return $this->container['identityRequirementForLocalNumbers'];
    }

    /**
     * Sets identityRequirementForLocalNumbers
     *
     * @param string $identityRequirementForLocalNumbers identityRequirementForLocalNumbers
     *
     * @return self
     */
    public function setIdentityRequirementForLocalNumbers($identityRequirementForLocalNumbers)
    {
        $this->container['identityRequirementForLocalNumbers'] = $identityRequirementForLocalNumbers;

        return $this;
    }

    /**
     * Gets identityProofRequirementForTollFreeNumbers
     *
     * @return bool|null
     */
    public function getIdentityProofRequirementForTollFreeNumbers()
    {
        return $this->container['identityProofRequirementForTollFreeNumbers'];
    }

    /**
     * Sets identityProofRequirementForTollFreeNumbers
     *
     * @param bool|null $identityProofRequirementForTollFreeNumbers identityProofRequirementForTollFreeNumbers
     *
     * @return self
     */
    public function setIdentityProofRequirementForTollFreeNumbers($identityProofRequirementForTollFreeNumbers)
    {
        $this->container['identityProofRequirementForTollFreeNumbers'] = $identityProofRequirementForTollFreeNumbers;

        return $this;
    }

    /**
     * Gets identityProofRequirementForLocalNumbers
     *
     * @return bool
     */
    public function getIdentityProofRequirementForLocalNumbers()
    {
        return $this->container['identityProofRequirementForLocalNumbers'];
    }

    /**
     * Sets identityProofRequirementForLocalNumbers
     *
     * @param bool $identityProofRequirementForLocalNumbers identityProofRequirementForLocalNumbers
     *
     * @return self
     */
    public function setIdentityProofRequirementForLocalNumbers($identityProofRequirementForLocalNumbers)
    {
        $this->container['identityProofRequirementForLocalNumbers'] = $identityProofRequirementForLocalNumbers;

        return $this;
    }

    /**
     * Gets canSearchByZipCode
     *
     * @return bool
     */
    public function getCanSearchByZipCode()
    {
        return $this->container['canSearchByZipCode'];
    }

    /**
     * Sets canSearchByZipCode
     *
     * @param bool $canSearchByZipCode canSearchByZipCode
     *
     * @return self
     */
    public function setCanSearchByZipCode($canSearchByZipCode)
    {
        $this->container['canSearchByZipCode'] = $canSearchByZipCode;

        return $this;
    }

    /**
     * Gets canSearchByRegion
     *
     * @return bool
     */
    public function getCanSearchByRegion()
    {
        return $this->container['canSearchByRegion'];
    }

    /**
     * Sets canSearchByRegion
     *
     * @param bool $canSearchByRegion canSearchByRegion
     *
     * @return self
     */
    public function setCanSearchByRegion($canSearchByRegion)
    {
        $this->container['canSearchByRegion'] = $canSearchByRegion;

        return $this;
    }

    /**
     * Gets canSearchByPrefix
     *
     * @return bool
     */
    public function getCanSearchByPrefix()
    {
        return $this->container['canSearchByPrefix'];
    }

    /**
     * Sets canSearchByPrefix
     *
     * @param bool $canSearchByPrefix canSearchByPrefix
     *
     * @return self
     */
    public function setCanSearchByPrefix($canSearchByPrefix)
    {
        $this->container['canSearchByPrefix'] = $canSearchByPrefix;

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


