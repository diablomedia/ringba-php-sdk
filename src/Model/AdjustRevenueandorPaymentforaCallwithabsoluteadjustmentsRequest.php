<?php
/**
 * AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest
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
 * AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inboundCallId' => 'string',
        'reason' => 'string',
        'adjustConversion' => 'bool',
        'adjustPayout' => 'bool',
        'newConversionAmount' => 'float',
        'newPayoutAmount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inboundCallId' => null,
        'reason' => null,
        'adjustConversion' => null,
        'adjustPayout' => null,
        'newConversionAmount' => null,
        'newPayoutAmount' => null
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
        'inboundCallId' => 'inboundCallId',
        'reason' => 'reason',
        'adjustConversion' => 'adjustConversion',
        'adjustPayout' => 'adjustPayout',
        'newConversionAmount' => 'newConversionAmount',
        'newPayoutAmount' => 'newPayoutAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inboundCallId' => 'setInboundCallId',
        'reason' => 'setReason',
        'adjustConversion' => 'setAdjustConversion',
        'adjustPayout' => 'setAdjustPayout',
        'newConversionAmount' => 'setNewConversionAmount',
        'newPayoutAmount' => 'setNewPayoutAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inboundCallId' => 'getInboundCallId',
        'reason' => 'getReason',
        'adjustConversion' => 'getAdjustConversion',
        'adjustPayout' => 'getAdjustPayout',
        'newConversionAmount' => 'getNewConversionAmount',
        'newPayoutAmount' => 'getNewPayoutAmount'
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
        $this->container['inboundCallId'] = $data['inboundCallId'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['adjustConversion'] = $data['adjustConversion'] ?? null;
        $this->container['adjustPayout'] = $data['adjustPayout'] ?? null;
        $this->container['newConversionAmount'] = $data['newConversionAmount'] ?? null;
        $this->container['newPayoutAmount'] = $data['newPayoutAmount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inboundCallId'] === null) {
            $invalidProperties[] = "'inboundCallId' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['adjustConversion'] === null) {
            $invalidProperties[] = "'adjustConversion' can't be null";
        }
        if ($this->container['adjustPayout'] === null) {
            $invalidProperties[] = "'adjustPayout' can't be null";
        }
        if ($this->container['newConversionAmount'] === null) {
            $invalidProperties[] = "'newConversionAmount' can't be null";
        }
        if ($this->container['newPayoutAmount'] === null) {
            $invalidProperties[] = "'newPayoutAmount' can't be null";
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
     * Gets inboundCallId
     *
     * @return string
     */
    public function getInboundCallId()
    {
        return $this->container['inboundCallId'];
    }

    /**
     * Sets inboundCallId
     *
     * @param string $inboundCallId inboundCallId
     *
     * @return self
     */
    public function setInboundCallId($inboundCallId)
    {
        $this->container['inboundCallId'] = $inboundCallId;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets adjustConversion
     *
     * @return bool
     */
    public function getAdjustConversion()
    {
        return $this->container['adjustConversion'];
    }

    /**
     * Sets adjustConversion
     *
     * @param bool $adjustConversion adjustConversion
     *
     * @return self
     */
    public function setAdjustConversion($adjustConversion)
    {
        $this->container['adjustConversion'] = $adjustConversion;

        return $this;
    }

    /**
     * Gets adjustPayout
     *
     * @return bool
     */
    public function getAdjustPayout()
    {
        return $this->container['adjustPayout'];
    }

    /**
     * Sets adjustPayout
     *
     * @param bool $adjustPayout adjustPayout
     *
     * @return self
     */
    public function setAdjustPayout($adjustPayout)
    {
        $this->container['adjustPayout'] = $adjustPayout;

        return $this;
    }

    /**
     * Gets newConversionAmount
     *
     * @return float
     */
    public function getNewConversionAmount()
    {
        return $this->container['newConversionAmount'];
    }

    /**
     * Sets newConversionAmount
     *
     * @param float $newConversionAmount newConversionAmount
     *
     * @return self
     */
    public function setNewConversionAmount($newConversionAmount)
    {
        $this->container['newConversionAmount'] = $newConversionAmount;

        return $this;
    }

    /**
     * Gets newPayoutAmount
     *
     * @return float
     */
    public function getNewPayoutAmount()
    {
        return $this->container['newPayoutAmount'];
    }

    /**
     * Sets newPayoutAmount
     *
     * @param float $newPayoutAmount newPayoutAmount
     *
     * @return self
     */
    public function setNewPayoutAmount($newPayoutAmount)
    {
        $this->container['newPayoutAmount'] = $newPayoutAmount;

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

