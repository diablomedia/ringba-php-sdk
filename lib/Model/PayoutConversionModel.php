<?php
/**
 * PayoutConversionModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * api.ringba.com
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ringba\Model;

use \ArrayAccess;
use \Ringba\ObjectSerializer;

/**
 * PayoutConversionModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutConversionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutConversionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'priority' => 'int',
        'is_rev_share' => 'bool',
        'payout_amount' => 'double',
        'rev_share_percentage' => 'double',
        'rev_share_max_payout_amount' => 'double',
        'rev_share_min_payout_amount' => 'double',
        'payout_conversion_type' => 'string',
        'payout_conversion_args' => 'map[string,object]',
        'is_global' => 'bool',
        'all_time_cap' => 'int',
        'monthly_cap' => 'int',
        'daily_cap' => 'int',
        'hourly_cap' => 'int',
        'all_time_sum_cap' => 'double',
        'monthly_sum_cap' => 'double',
        'daily_sum_cap' => 'double',
        'hourly_sum_cap' => 'double',
        'concurrency_cap' => 'int',
        'time_zone_id' => 'string',
        'payout_hours' => '\Ringba\Model\OpenSetting[]',
        'criteria' => '\Ringba\Model\TagRoutableRule[]',
        'de_dupe_setting' => '\Ringba\Model\DuplicateSetting'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'priority' => 'int32',
        'is_rev_share' => null,
        'payout_amount' => 'double',
        'rev_share_percentage' => 'double',
        'rev_share_max_payout_amount' => 'double',
        'rev_share_min_payout_amount' => 'double',
        'payout_conversion_type' => null,
        'payout_conversion_args' => null,
        'is_global' => null,
        'all_time_cap' => 'int32',
        'monthly_cap' => 'int32',
        'daily_cap' => 'int32',
        'hourly_cap' => 'int32',
        'all_time_sum_cap' => 'double',
        'monthly_sum_cap' => 'double',
        'daily_sum_cap' => 'double',
        'hourly_sum_cap' => 'double',
        'concurrency_cap' => 'int32',
        'time_zone_id' => null,
        'payout_hours' => null,
        'criteria' => null,
        'de_dupe_setting' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'priority' => 'priority',
        'is_rev_share' => 'isRevShare',
        'payout_amount' => 'payoutAmount',
        'rev_share_percentage' => 'revSharePercentage',
        'rev_share_max_payout_amount' => 'revShareMaxPayoutAmount',
        'rev_share_min_payout_amount' => 'revShareMinPayoutAmount',
        'payout_conversion_type' => 'payoutConversionType',
        'payout_conversion_args' => 'payoutConversionArgs',
        'is_global' => 'isGlobal',
        'all_time_cap' => 'allTimeCap',
        'monthly_cap' => 'monthlyCap',
        'daily_cap' => 'dailyCap',
        'hourly_cap' => 'hourlyCap',
        'all_time_sum_cap' => 'allTimeSumCap',
        'monthly_sum_cap' => 'monthlySumCap',
        'daily_sum_cap' => 'dailySumCap',
        'hourly_sum_cap' => 'hourlySumCap',
        'concurrency_cap' => 'concurrencyCap',
        'time_zone_id' => 'timeZoneId',
        'payout_hours' => 'payoutHours',
        'criteria' => 'criteria',
        'de_dupe_setting' => 'deDupeSetting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'priority' => 'setPriority',
        'is_rev_share' => 'setIsRevShare',
        'payout_amount' => 'setPayoutAmount',
        'rev_share_percentage' => 'setRevSharePercentage',
        'rev_share_max_payout_amount' => 'setRevShareMaxPayoutAmount',
        'rev_share_min_payout_amount' => 'setRevShareMinPayoutAmount',
        'payout_conversion_type' => 'setPayoutConversionType',
        'payout_conversion_args' => 'setPayoutConversionArgs',
        'is_global' => 'setIsGlobal',
        'all_time_cap' => 'setAllTimeCap',
        'monthly_cap' => 'setMonthlyCap',
        'daily_cap' => 'setDailyCap',
        'hourly_cap' => 'setHourlyCap',
        'all_time_sum_cap' => 'setAllTimeSumCap',
        'monthly_sum_cap' => 'setMonthlySumCap',
        'daily_sum_cap' => 'setDailySumCap',
        'hourly_sum_cap' => 'setHourlySumCap',
        'concurrency_cap' => 'setConcurrencyCap',
        'time_zone_id' => 'setTimeZoneId',
        'payout_hours' => 'setPayoutHours',
        'criteria' => 'setCriteria',
        'de_dupe_setting' => 'setDeDupeSetting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'priority' => 'getPriority',
        'is_rev_share' => 'getIsRevShare',
        'payout_amount' => 'getPayoutAmount',
        'rev_share_percentage' => 'getRevSharePercentage',
        'rev_share_max_payout_amount' => 'getRevShareMaxPayoutAmount',
        'rev_share_min_payout_amount' => 'getRevShareMinPayoutAmount',
        'payout_conversion_type' => 'getPayoutConversionType',
        'payout_conversion_args' => 'getPayoutConversionArgs',
        'is_global' => 'getIsGlobal',
        'all_time_cap' => 'getAllTimeCap',
        'monthly_cap' => 'getMonthlyCap',
        'daily_cap' => 'getDailyCap',
        'hourly_cap' => 'getHourlyCap',
        'all_time_sum_cap' => 'getAllTimeSumCap',
        'monthly_sum_cap' => 'getMonthlySumCap',
        'daily_sum_cap' => 'getDailySumCap',
        'hourly_sum_cap' => 'getHourlySumCap',
        'concurrency_cap' => 'getConcurrencyCap',
        'time_zone_id' => 'getTimeZoneId',
        'payout_hours' => 'getPayoutHours',
        'criteria' => 'getCriteria',
        'de_dupe_setting' => 'getDeDupeSetting'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['is_rev_share'] = isset($data['is_rev_share']) ? $data['is_rev_share'] : null;
        $this->container['payout_amount'] = isset($data['payout_amount']) ? $data['payout_amount'] : null;
        $this->container['rev_share_percentage'] = isset($data['rev_share_percentage']) ? $data['rev_share_percentage'] : null;
        $this->container['rev_share_max_payout_amount'] = isset($data['rev_share_max_payout_amount']) ? $data['rev_share_max_payout_amount'] : null;
        $this->container['rev_share_min_payout_amount'] = isset($data['rev_share_min_payout_amount']) ? $data['rev_share_min_payout_amount'] : null;
        $this->container['payout_conversion_type'] = isset($data['payout_conversion_type']) ? $data['payout_conversion_type'] : null;
        $this->container['payout_conversion_args'] = isset($data['payout_conversion_args']) ? $data['payout_conversion_args'] : null;
        $this->container['is_global'] = isset($data['is_global']) ? $data['is_global'] : null;
        $this->container['all_time_cap'] = isset($data['all_time_cap']) ? $data['all_time_cap'] : null;
        $this->container['monthly_cap'] = isset($data['monthly_cap']) ? $data['monthly_cap'] : null;
        $this->container['daily_cap'] = isset($data['daily_cap']) ? $data['daily_cap'] : null;
        $this->container['hourly_cap'] = isset($data['hourly_cap']) ? $data['hourly_cap'] : null;
        $this->container['all_time_sum_cap'] = isset($data['all_time_sum_cap']) ? $data['all_time_sum_cap'] : null;
        $this->container['monthly_sum_cap'] = isset($data['monthly_sum_cap']) ? $data['monthly_sum_cap'] : null;
        $this->container['daily_sum_cap'] = isset($data['daily_sum_cap']) ? $data['daily_sum_cap'] : null;
        $this->container['hourly_sum_cap'] = isset($data['hourly_sum_cap']) ? $data['hourly_sum_cap'] : null;
        $this->container['concurrency_cap'] = isset($data['concurrency_cap']) ? $data['concurrency_cap'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['payout_hours'] = isset($data['payout_hours']) ? $data['payout_hours'] : null;
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['de_dupe_setting'] = isset($data['de_dupe_setting']) ? $data['de_dupe_setting'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return $this
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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets is_rev_share
     *
     * @return bool
     */
    public function getIsRevShare()
    {
        return $this->container['is_rev_share'];
    }

    /**
     * Sets is_rev_share
     *
     * @param bool $is_rev_share is_rev_share
     *
     * @return $this
     */
    public function setIsRevShare($is_rev_share)
    {
        $this->container['is_rev_share'] = $is_rev_share;

        return $this;
    }

    /**
     * Gets payout_amount
     *
     * @return double
     */
    public function getPayoutAmount()
    {
        return $this->container['payout_amount'];
    }

    /**
     * Sets payout_amount
     *
     * @param double $payout_amount payout_amount
     *
     * @return $this
     */
    public function setPayoutAmount($payout_amount)
    {
        $this->container['payout_amount'] = $payout_amount;

        return $this;
    }

    /**
     * Gets rev_share_percentage
     *
     * @return double
     */
    public function getRevSharePercentage()
    {
        return $this->container['rev_share_percentage'];
    }

    /**
     * Sets rev_share_percentage
     *
     * @param double $rev_share_percentage rev_share_percentage
     *
     * @return $this
     */
    public function setRevSharePercentage($rev_share_percentage)
    {
        $this->container['rev_share_percentage'] = $rev_share_percentage;

        return $this;
    }

    /**
     * Gets rev_share_max_payout_amount
     *
     * @return double
     */
    public function getRevShareMaxPayoutAmount()
    {
        return $this->container['rev_share_max_payout_amount'];
    }

    /**
     * Sets rev_share_max_payout_amount
     *
     * @param double $rev_share_max_payout_amount rev_share_max_payout_amount
     *
     * @return $this
     */
    public function setRevShareMaxPayoutAmount($rev_share_max_payout_amount)
    {
        $this->container['rev_share_max_payout_amount'] = $rev_share_max_payout_amount;

        return $this;
    }

    /**
     * Gets rev_share_min_payout_amount
     *
     * @return double
     */
    public function getRevShareMinPayoutAmount()
    {
        return $this->container['rev_share_min_payout_amount'];
    }

    /**
     * Sets rev_share_min_payout_amount
     *
     * @param double $rev_share_min_payout_amount rev_share_min_payout_amount
     *
     * @return $this
     */
    public function setRevShareMinPayoutAmount($rev_share_min_payout_amount)
    {
        $this->container['rev_share_min_payout_amount'] = $rev_share_min_payout_amount;

        return $this;
    }

    /**
     * Gets payout_conversion_type
     *
     * @return string
     */
    public function getPayoutConversionType()
    {
        return $this->container['payout_conversion_type'];
    }

    /**
     * Sets payout_conversion_type
     *
     * @param string $payout_conversion_type payout_conversion_type
     *
     * @return $this
     */
    public function setPayoutConversionType($payout_conversion_type)
    {
        $this->container['payout_conversion_type'] = $payout_conversion_type;

        return $this;
    }

    /**
     * Gets payout_conversion_args
     *
     * @return map[string,object]
     */
    public function getPayoutConversionArgs()
    {
        return $this->container['payout_conversion_args'];
    }

    /**
     * Sets payout_conversion_args
     *
     * @param map[string,object] $payout_conversion_args payout_conversion_args
     *
     * @return $this
     */
    public function setPayoutConversionArgs($payout_conversion_args)
    {
        $this->container['payout_conversion_args'] = $payout_conversion_args;

        return $this;
    }

    /**
     * Gets is_global
     *
     * @return bool
     */
    public function getIsGlobal()
    {
        return $this->container['is_global'];
    }

    /**
     * Sets is_global
     *
     * @param bool $is_global is_global
     *
     * @return $this
     */
    public function setIsGlobal($is_global)
    {
        $this->container['is_global'] = $is_global;

        return $this;
    }

    /**
     * Gets all_time_cap
     *
     * @return int
     */
    public function getAllTimeCap()
    {
        return $this->container['all_time_cap'];
    }

    /**
     * Sets all_time_cap
     *
     * @param int $all_time_cap all_time_cap
     *
     * @return $this
     */
    public function setAllTimeCap($all_time_cap)
    {
        $this->container['all_time_cap'] = $all_time_cap;

        return $this;
    }

    /**
     * Gets monthly_cap
     *
     * @return int
     */
    public function getMonthlyCap()
    {
        return $this->container['monthly_cap'];
    }

    /**
     * Sets monthly_cap
     *
     * @param int $monthly_cap monthly_cap
     *
     * @return $this
     */
    public function setMonthlyCap($monthly_cap)
    {
        $this->container['monthly_cap'] = $monthly_cap;

        return $this;
    }

    /**
     * Gets daily_cap
     *
     * @return int
     */
    public function getDailyCap()
    {
        return $this->container['daily_cap'];
    }

    /**
     * Sets daily_cap
     *
     * @param int $daily_cap daily_cap
     *
     * @return $this
     */
    public function setDailyCap($daily_cap)
    {
        $this->container['daily_cap'] = $daily_cap;

        return $this;
    }

    /**
     * Gets hourly_cap
     *
     * @return int
     */
    public function getHourlyCap()
    {
        return $this->container['hourly_cap'];
    }

    /**
     * Sets hourly_cap
     *
     * @param int $hourly_cap hourly_cap
     *
     * @return $this
     */
    public function setHourlyCap($hourly_cap)
    {
        $this->container['hourly_cap'] = $hourly_cap;

        return $this;
    }

    /**
     * Gets all_time_sum_cap
     *
     * @return double
     */
    public function getAllTimeSumCap()
    {
        return $this->container['all_time_sum_cap'];
    }

    /**
     * Sets all_time_sum_cap
     *
     * @param double $all_time_sum_cap all_time_sum_cap
     *
     * @return $this
     */
    public function setAllTimeSumCap($all_time_sum_cap)
    {
        $this->container['all_time_sum_cap'] = $all_time_sum_cap;

        return $this;
    }

    /**
     * Gets monthly_sum_cap
     *
     * @return double
     */
    public function getMonthlySumCap()
    {
        return $this->container['monthly_sum_cap'];
    }

    /**
     * Sets monthly_sum_cap
     *
     * @param double $monthly_sum_cap monthly_sum_cap
     *
     * @return $this
     */
    public function setMonthlySumCap($monthly_sum_cap)
    {
        $this->container['monthly_sum_cap'] = $monthly_sum_cap;

        return $this;
    }

    /**
     * Gets daily_sum_cap
     *
     * @return double
     */
    public function getDailySumCap()
    {
        return $this->container['daily_sum_cap'];
    }

    /**
     * Sets daily_sum_cap
     *
     * @param double $daily_sum_cap daily_sum_cap
     *
     * @return $this
     */
    public function setDailySumCap($daily_sum_cap)
    {
        $this->container['daily_sum_cap'] = $daily_sum_cap;

        return $this;
    }

    /**
     * Gets hourly_sum_cap
     *
     * @return double
     */
    public function getHourlySumCap()
    {
        return $this->container['hourly_sum_cap'];
    }

    /**
     * Sets hourly_sum_cap
     *
     * @param double $hourly_sum_cap hourly_sum_cap
     *
     * @return $this
     */
    public function setHourlySumCap($hourly_sum_cap)
    {
        $this->container['hourly_sum_cap'] = $hourly_sum_cap;

        return $this;
    }

    /**
     * Gets concurrency_cap
     *
     * @return int
     */
    public function getConcurrencyCap()
    {
        return $this->container['concurrency_cap'];
    }

    /**
     * Sets concurrency_cap
     *
     * @param int $concurrency_cap concurrency_cap
     *
     * @return $this
     */
    public function setConcurrencyCap($concurrency_cap)
    {
        $this->container['concurrency_cap'] = $concurrency_cap;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string $time_zone_id time_zone_id
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets payout_hours
     *
     * @return \Ringba\Model\OpenSetting[]
     */
    public function getPayoutHours()
    {
        return $this->container['payout_hours'];
    }

    /**
     * Sets payout_hours
     *
     * @param \Ringba\Model\OpenSetting[] $payout_hours payout_hours
     *
     * @return $this
     */
    public function setPayoutHours($payout_hours)
    {
        $this->container['payout_hours'] = $payout_hours;

        return $this;
    }

    /**
     * Gets criteria
     *
     * @return \Ringba\Model\TagRoutableRule[]
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     * @param \Ringba\Model\TagRoutableRule[] $criteria criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;

        return $this;
    }

    /**
     * Gets de_dupe_setting
     *
     * @return \Ringba\Model\DuplicateSetting
     */
    public function getDeDupeSetting()
    {
        return $this->container['de_dupe_setting'];
    }

    /**
     * Sets de_dupe_setting
     *
     * @param \Ringba\Model\DuplicateSetting $de_dupe_setting de_dupe_setting
     *
     * @return $this
     */
    public function setDeDupeSetting($de_dupe_setting)
    {
        $this->container['de_dupe_setting'] = $de_dupe_setting;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

