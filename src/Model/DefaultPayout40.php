<?php
/**
 * DefaultPayout40
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
 * DefaultPayout40 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DefaultPayout40 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DefaultPayout40';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'priority' => 'int',
        'isRevShare' => 'bool',
        'payoutAmount' => 'int',
        'revSharePercentage' => 'int',
        'revShareMaxPayoutAmount' => 'int',
        'revShareMinPayoutAmount' => 'int',
        'payoutConversionType' => 'string',
        'isGlobal' => 'bool',
        'allTimeCap' => 'int',
        'monthlyCap' => 'int',
        'dailyCap' => 'int',
        'hourlyCap' => 'int',
        'allTimeSumCap' => 'int',
        'monthlySumCap' => 'int',
        'dailySumCap' => 'int',
        'hourlySumCap' => 'int',
        'concurrencyCap' => 'int',
        'timeZoneId' => 'string',
        'payoutHours' => '\Ringba\Model\PayoutHour[]',
        'deDupeSetting' => '\Ringba\Model\DeDupeSetting'
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
        'priority' => 'int32',
        'isRevShare' => null,
        'payoutAmount' => 'int32',
        'revSharePercentage' => 'int32',
        'revShareMaxPayoutAmount' => 'int32',
        'revShareMinPayoutAmount' => 'int32',
        'payoutConversionType' => null,
        'isGlobal' => null,
        'allTimeCap' => 'int32',
        'monthlyCap' => 'int32',
        'dailyCap' => 'int32',
        'hourlyCap' => 'int32',
        'allTimeSumCap' => 'int32',
        'monthlySumCap' => 'int32',
        'dailySumCap' => 'int32',
        'hourlySumCap' => 'int32',
        'concurrencyCap' => 'int32',
        'timeZoneId' => null,
        'payoutHours' => null,
        'deDupeSetting' => null
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
        'priority' => 'priority',
        'isRevShare' => 'isRevShare',
        'payoutAmount' => 'payoutAmount',
        'revSharePercentage' => 'revSharePercentage',
        'revShareMaxPayoutAmount' => 'revShareMaxPayoutAmount',
        'revShareMinPayoutAmount' => 'revShareMinPayoutAmount',
        'payoutConversionType' => 'payoutConversionType',
        'isGlobal' => 'isGlobal',
        'allTimeCap' => 'allTimeCap',
        'monthlyCap' => 'monthlyCap',
        'dailyCap' => 'dailyCap',
        'hourlyCap' => 'hourlyCap',
        'allTimeSumCap' => 'allTimeSumCap',
        'monthlySumCap' => 'monthlySumCap',
        'dailySumCap' => 'dailySumCap',
        'hourlySumCap' => 'hourlySumCap',
        'concurrencyCap' => 'concurrencyCap',
        'timeZoneId' => 'timeZoneId',
        'payoutHours' => 'payoutHours',
        'deDupeSetting' => 'deDupeSetting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'priority' => 'setPriority',
        'isRevShare' => 'setIsRevShare',
        'payoutAmount' => 'setPayoutAmount',
        'revSharePercentage' => 'setRevSharePercentage',
        'revShareMaxPayoutAmount' => 'setRevShareMaxPayoutAmount',
        'revShareMinPayoutAmount' => 'setRevShareMinPayoutAmount',
        'payoutConversionType' => 'setPayoutConversionType',
        'isGlobal' => 'setIsGlobal',
        'allTimeCap' => 'setAllTimeCap',
        'monthlyCap' => 'setMonthlyCap',
        'dailyCap' => 'setDailyCap',
        'hourlyCap' => 'setHourlyCap',
        'allTimeSumCap' => 'setAllTimeSumCap',
        'monthlySumCap' => 'setMonthlySumCap',
        'dailySumCap' => 'setDailySumCap',
        'hourlySumCap' => 'setHourlySumCap',
        'concurrencyCap' => 'setConcurrencyCap',
        'timeZoneId' => 'setTimeZoneId',
        'payoutHours' => 'setPayoutHours',
        'deDupeSetting' => 'setDeDupeSetting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'priority' => 'getPriority',
        'isRevShare' => 'getIsRevShare',
        'payoutAmount' => 'getPayoutAmount',
        'revSharePercentage' => 'getRevSharePercentage',
        'revShareMaxPayoutAmount' => 'getRevShareMaxPayoutAmount',
        'revShareMinPayoutAmount' => 'getRevShareMinPayoutAmount',
        'payoutConversionType' => 'getPayoutConversionType',
        'isGlobal' => 'getIsGlobal',
        'allTimeCap' => 'getAllTimeCap',
        'monthlyCap' => 'getMonthlyCap',
        'dailyCap' => 'getDailyCap',
        'hourlyCap' => 'getHourlyCap',
        'allTimeSumCap' => 'getAllTimeSumCap',
        'monthlySumCap' => 'getMonthlySumCap',
        'dailySumCap' => 'getDailySumCap',
        'hourlySumCap' => 'getHourlySumCap',
        'concurrencyCap' => 'getConcurrencyCap',
        'timeZoneId' => 'getTimeZoneId',
        'payoutHours' => 'getPayoutHours',
        'deDupeSetting' => 'getDeDupeSetting'
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
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['isRevShare'] = $data['isRevShare'] ?? null;
        $this->container['payoutAmount'] = $data['payoutAmount'] ?? null;
        $this->container['revSharePercentage'] = $data['revSharePercentage'] ?? null;
        $this->container['revShareMaxPayoutAmount'] = $data['revShareMaxPayoutAmount'] ?? null;
        $this->container['revShareMinPayoutAmount'] = $data['revShareMinPayoutAmount'] ?? null;
        $this->container['payoutConversionType'] = $data['payoutConversionType'] ?? null;
        $this->container['isGlobal'] = $data['isGlobal'] ?? null;
        $this->container['allTimeCap'] = $data['allTimeCap'] ?? null;
        $this->container['monthlyCap'] = $data['monthlyCap'] ?? null;
        $this->container['dailyCap'] = $data['dailyCap'] ?? null;
        $this->container['hourlyCap'] = $data['hourlyCap'] ?? null;
        $this->container['allTimeSumCap'] = $data['allTimeSumCap'] ?? null;
        $this->container['monthlySumCap'] = $data['monthlySumCap'] ?? null;
        $this->container['dailySumCap'] = $data['dailySumCap'] ?? null;
        $this->container['hourlySumCap'] = $data['hourlySumCap'] ?? null;
        $this->container['concurrencyCap'] = $data['concurrencyCap'] ?? null;
        $this->container['timeZoneId'] = $data['timeZoneId'] ?? null;
        $this->container['payoutHours'] = $data['payoutHours'] ?? null;
        $this->container['deDupeSetting'] = $data['deDupeSetting'] ?? null;
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
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['isRevShare'] === null) {
            $invalidProperties[] = "'isRevShare' can't be null";
        }
        if ($this->container['payoutAmount'] === null) {
            $invalidProperties[] = "'payoutAmount' can't be null";
        }
        if ($this->container['revSharePercentage'] === null) {
            $invalidProperties[] = "'revSharePercentage' can't be null";
        }
        if ($this->container['revShareMaxPayoutAmount'] === null) {
            $invalidProperties[] = "'revShareMaxPayoutAmount' can't be null";
        }
        if ($this->container['revShareMinPayoutAmount'] === null) {
            $invalidProperties[] = "'revShareMinPayoutAmount' can't be null";
        }
        if ($this->container['payoutConversionType'] === null) {
            $invalidProperties[] = "'payoutConversionType' can't be null";
        }
        if ($this->container['isGlobal'] === null) {
            $invalidProperties[] = "'isGlobal' can't be null";
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
        if ($this->container['concurrencyCap'] === null) {
            $invalidProperties[] = "'concurrencyCap' can't be null";
        }
        if ($this->container['timeZoneId'] === null) {
            $invalidProperties[] = "'timeZoneId' can't be null";
        }
        if ($this->container['payoutHours'] === null) {
            $invalidProperties[] = "'payoutHours' can't be null";
        }
        if ($this->container['deDupeSetting'] === null) {
            $invalidProperties[] = "'deDupeSetting' can't be null";
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
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets isRevShare
     *
     * @return bool
     */
    public function getIsRevShare()
    {
        return $this->container['isRevShare'];
    }

    /**
     * Sets isRevShare
     *
     * @param bool $isRevShare isRevShare
     *
     * @return self
     */
    public function setIsRevShare($isRevShare)
    {
        $this->container['isRevShare'] = $isRevShare;

        return $this;
    }

    /**
     * Gets payoutAmount
     *
     * @return int
     */
    public function getPayoutAmount()
    {
        return $this->container['payoutAmount'];
    }

    /**
     * Sets payoutAmount
     *
     * @param int $payoutAmount payoutAmount
     *
     * @return self
     */
    public function setPayoutAmount($payoutAmount)
    {
        $this->container['payoutAmount'] = $payoutAmount;

        return $this;
    }

    /**
     * Gets revSharePercentage
     *
     * @return int
     */
    public function getRevSharePercentage()
    {
        return $this->container['revSharePercentage'];
    }

    /**
     * Sets revSharePercentage
     *
     * @param int $revSharePercentage revSharePercentage
     *
     * @return self
     */
    public function setRevSharePercentage($revSharePercentage)
    {
        $this->container['revSharePercentage'] = $revSharePercentage;

        return $this;
    }

    /**
     * Gets revShareMaxPayoutAmount
     *
     * @return int
     */
    public function getRevShareMaxPayoutAmount()
    {
        return $this->container['revShareMaxPayoutAmount'];
    }

    /**
     * Sets revShareMaxPayoutAmount
     *
     * @param int $revShareMaxPayoutAmount revShareMaxPayoutAmount
     *
     * @return self
     */
    public function setRevShareMaxPayoutAmount($revShareMaxPayoutAmount)
    {
        $this->container['revShareMaxPayoutAmount'] = $revShareMaxPayoutAmount;

        return $this;
    }

    /**
     * Gets revShareMinPayoutAmount
     *
     * @return int
     */
    public function getRevShareMinPayoutAmount()
    {
        return $this->container['revShareMinPayoutAmount'];
    }

    /**
     * Sets revShareMinPayoutAmount
     *
     * @param int $revShareMinPayoutAmount revShareMinPayoutAmount
     *
     * @return self
     */
    public function setRevShareMinPayoutAmount($revShareMinPayoutAmount)
    {
        $this->container['revShareMinPayoutAmount'] = $revShareMinPayoutAmount;

        return $this;
    }

    /**
     * Gets payoutConversionType
     *
     * @return string
     */
    public function getPayoutConversionType()
    {
        return $this->container['payoutConversionType'];
    }

    /**
     * Sets payoutConversionType
     *
     * @param string $payoutConversionType payoutConversionType
     *
     * @return self
     */
    public function setPayoutConversionType($payoutConversionType)
    {
        $this->container['payoutConversionType'] = $payoutConversionType;

        return $this;
    }

    /**
     * Gets isGlobal
     *
     * @return bool
     */
    public function getIsGlobal()
    {
        return $this->container['isGlobal'];
    }

    /**
     * Sets isGlobal
     *
     * @param bool $isGlobal isGlobal
     *
     * @return self
     */
    public function setIsGlobal($isGlobal)
    {
        $this->container['isGlobal'] = $isGlobal;

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
     * Gets allTimeSumCap
     *
     * @return int
     */
    public function getAllTimeSumCap()
    {
        return $this->container['allTimeSumCap'];
    }

    /**
     * Sets allTimeSumCap
     *
     * @param int $allTimeSumCap allTimeSumCap
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
     * @return int
     */
    public function getMonthlySumCap()
    {
        return $this->container['monthlySumCap'];
    }

    /**
     * Sets monthlySumCap
     *
     * @param int $monthlySumCap monthlySumCap
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
     * @return int
     */
    public function getDailySumCap()
    {
        return $this->container['dailySumCap'];
    }

    /**
     * Sets dailySumCap
     *
     * @param int $dailySumCap dailySumCap
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
     * @return int
     */
    public function getHourlySumCap()
    {
        return $this->container['hourlySumCap'];
    }

    /**
     * Sets hourlySumCap
     *
     * @param int $hourlySumCap hourlySumCap
     *
     * @return self
     */
    public function setHourlySumCap($hourlySumCap)
    {
        $this->container['hourlySumCap'] = $hourlySumCap;

        return $this;
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
     * Gets payoutHours
     *
     * @return \Ringba\Model\PayoutHour[]
     */
    public function getPayoutHours()
    {
        return $this->container['payoutHours'];
    }

    /**
     * Sets payoutHours
     *
     * @param \Ringba\Model\PayoutHour[] $payoutHours 
     *
     * @return self
     */
    public function setPayoutHours($payoutHours)
    {
        $this->container['payoutHours'] = $payoutHours;

        return $this;
    }

    /**
     * Gets deDupeSetting
     *
     * @return \Ringba\Model\DeDupeSetting
     */
    public function getDeDupeSetting()
    {
        return $this->container['deDupeSetting'];
    }

    /**
     * Sets deDupeSetting
     *
     * @param \Ringba\Model\DeDupeSetting $deDupeSetting deDupeSetting
     *
     * @return self
     */
    public function setDeDupeSetting($deDupeSetting)
    {
        $this->container['deDupeSetting'] = $deDupeSetting;

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

