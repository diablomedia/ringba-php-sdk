<?php
/**
 * PingTreeTargetCreateModel
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
 * PingTreeTargetCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PingTreeTargetCreateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PingTreeTargetCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'url' => 'string',
        'sub_id' => 'string',
        'method' => 'string',
        'body' => 'string',
        'headers' => 'map[string,string]',
        'bid_acceptance_settings' => '\Ringba\Model\BidAcceptanceSettings',
        'is_number_dynamic' => 'bool',
        'error_settings' => '\Ringba\Model\PingErrorSettings',
        'revenue_settings' => '\Ringba\Model\PingRevenueSettings',
        'schedule' => '\Ringba\Model\ScheduleAndCapacity',
        'criteria' => '\Ringba\Model\TagRoutableRule[]',
        'instructions' => '\Ringba\Model\CallInstructions',
        'dynamic_bid_amount_parser' => '\Ringba\Model\ParseSettingModel[]',
        'should_accept_call_parser' => '\Ringba\Model\ParseSettingModel[]',
        'dynamic_dial_setting_parser' => '\Ringba\Model\ParseSettingModel[]',
        'dynamic_call_length_setting_parser' => '\Ringba\Model\ParseSettingModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'url' => null,
        'sub_id' => null,
        'method' => null,
        'body' => null,
        'headers' => null,
        'bid_acceptance_settings' => null,
        'is_number_dynamic' => null,
        'error_settings' => null,
        'revenue_settings' => null,
        'schedule' => null,
        'criteria' => null,
        'instructions' => null,
        'dynamic_bid_amount_parser' => null,
        'should_accept_call_parser' => null,
        'dynamic_dial_setting_parser' => null,
        'dynamic_call_length_setting_parser' => null
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
        'name' => 'name',
        'url' => 'url',
        'sub_id' => 'subId',
        'method' => 'method',
        'body' => 'body',
        'headers' => 'headers',
        'bid_acceptance_settings' => 'bidAcceptanceSettings',
        'is_number_dynamic' => 'isNumberDynamic',
        'error_settings' => 'errorSettings',
        'revenue_settings' => 'revenueSettings',
        'schedule' => 'schedule',
        'criteria' => 'criteria',
        'instructions' => 'instructions',
        'dynamic_bid_amount_parser' => 'dynamicBidAmountParser',
        'should_accept_call_parser' => 'shouldAcceptCallParser',
        'dynamic_dial_setting_parser' => 'dynamicDialSettingParser',
        'dynamic_call_length_setting_parser' => 'dynamicCallLengthSettingParser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'url' => 'setUrl',
        'sub_id' => 'setSubId',
        'method' => 'setMethod',
        'body' => 'setBody',
        'headers' => 'setHeaders',
        'bid_acceptance_settings' => 'setBidAcceptanceSettings',
        'is_number_dynamic' => 'setIsNumberDynamic',
        'error_settings' => 'setErrorSettings',
        'revenue_settings' => 'setRevenueSettings',
        'schedule' => 'setSchedule',
        'criteria' => 'setCriteria',
        'instructions' => 'setInstructions',
        'dynamic_bid_amount_parser' => 'setDynamicBidAmountParser',
        'should_accept_call_parser' => 'setShouldAcceptCallParser',
        'dynamic_dial_setting_parser' => 'setDynamicDialSettingParser',
        'dynamic_call_length_setting_parser' => 'setDynamicCallLengthSettingParser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'url' => 'getUrl',
        'sub_id' => 'getSubId',
        'method' => 'getMethod',
        'body' => 'getBody',
        'headers' => 'getHeaders',
        'bid_acceptance_settings' => 'getBidAcceptanceSettings',
        'is_number_dynamic' => 'getIsNumberDynamic',
        'error_settings' => 'getErrorSettings',
        'revenue_settings' => 'getRevenueSettings',
        'schedule' => 'getSchedule',
        'criteria' => 'getCriteria',
        'instructions' => 'getInstructions',
        'dynamic_bid_amount_parser' => 'getDynamicBidAmountParser',
        'should_accept_call_parser' => 'getShouldAcceptCallParser',
        'dynamic_dial_setting_parser' => 'getDynamicDialSettingParser',
        'dynamic_call_length_setting_parser' => 'getDynamicCallLengthSettingParser'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['sub_id'] = isset($data['sub_id']) ? $data['sub_id'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['bid_acceptance_settings'] = isset($data['bid_acceptance_settings']) ? $data['bid_acceptance_settings'] : null;
        $this->container['is_number_dynamic'] = isset($data['is_number_dynamic']) ? $data['is_number_dynamic'] : null;
        $this->container['error_settings'] = isset($data['error_settings']) ? $data['error_settings'] : null;
        $this->container['revenue_settings'] = isset($data['revenue_settings']) ? $data['revenue_settings'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['dynamic_bid_amount_parser'] = isset($data['dynamic_bid_amount_parser']) ? $data['dynamic_bid_amount_parser'] : null;
        $this->container['should_accept_call_parser'] = isset($data['should_accept_call_parser']) ? $data['should_accept_call_parser'] : null;
        $this->container['dynamic_dial_setting_parser'] = isset($data['dynamic_dial_setting_parser']) ? $data['dynamic_dial_setting_parser'] : null;
        $this->container['dynamic_call_length_setting_parser'] = isset($data['dynamic_call_length_setting_parser']) ? $data['dynamic_call_length_setting_parser'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['is_number_dynamic'] === null) {
            $invalidProperties[] = "'is_number_dynamic' can't be null";
        }
        if ($this->container['should_accept_call_parser'] === null) {
            $invalidProperties[] = "'should_accept_call_parser' can't be null";
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets sub_id
     *
     * @return string
     */
    public function getSubId()
    {
        return $this->container['sub_id'];
    }

    /**
     * Sets sub_id
     *
     * @param string $sub_id sub_id
     *
     * @return $this
     */
    public function setSubId($sub_id)
    {
        $this->container['sub_id'] = $sub_id;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return map[string,string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string] $headers headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets bid_acceptance_settings
     *
     * @return \Ringba\Model\BidAcceptanceSettings
     */
    public function getBidAcceptanceSettings()
    {
        return $this->container['bid_acceptance_settings'];
    }

    /**
     * Sets bid_acceptance_settings
     *
     * @param \Ringba\Model\BidAcceptanceSettings $bid_acceptance_settings bid_acceptance_settings
     *
     * @return $this
     */
    public function setBidAcceptanceSettings($bid_acceptance_settings)
    {
        $this->container['bid_acceptance_settings'] = $bid_acceptance_settings;

        return $this;
    }

    /**
     * Gets is_number_dynamic
     *
     * @return bool
     */
    public function getIsNumberDynamic()
    {
        return $this->container['is_number_dynamic'];
    }

    /**
     * Sets is_number_dynamic
     *
     * @param bool $is_number_dynamic is_number_dynamic
     *
     * @return $this
     */
    public function setIsNumberDynamic($is_number_dynamic)
    {
        $this->container['is_number_dynamic'] = $is_number_dynamic;

        return $this;
    }

    /**
     * Gets error_settings
     *
     * @return \Ringba\Model\PingErrorSettings
     */
    public function getErrorSettings()
    {
        return $this->container['error_settings'];
    }

    /**
     * Sets error_settings
     *
     * @param \Ringba\Model\PingErrorSettings $error_settings error_settings
     *
     * @return $this
     */
    public function setErrorSettings($error_settings)
    {
        $this->container['error_settings'] = $error_settings;

        return $this;
    }

    /**
     * Gets revenue_settings
     *
     * @return \Ringba\Model\PingRevenueSettings
     */
    public function getRevenueSettings()
    {
        return $this->container['revenue_settings'];
    }

    /**
     * Sets revenue_settings
     *
     * @param \Ringba\Model\PingRevenueSettings $revenue_settings revenue_settings
     *
     * @return $this
     */
    public function setRevenueSettings($revenue_settings)
    {
        $this->container['revenue_settings'] = $revenue_settings;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Ringba\Model\ScheduleAndCapacity
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Ringba\Model\ScheduleAndCapacity $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

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
     * Gets instructions
     *
     * @return \Ringba\Model\CallInstructions
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param \Ringba\Model\CallInstructions $instructions instructions
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets dynamic_bid_amount_parser
     *
     * @return \Ringba\Model\ParseSettingModel[]
     */
    public function getDynamicBidAmountParser()
    {
        return $this->container['dynamic_bid_amount_parser'];
    }

    /**
     * Sets dynamic_bid_amount_parser
     *
     * @param \Ringba\Model\ParseSettingModel[] $dynamic_bid_amount_parser dynamic_bid_amount_parser
     *
     * @return $this
     */
    public function setDynamicBidAmountParser($dynamic_bid_amount_parser)
    {
        $this->container['dynamic_bid_amount_parser'] = $dynamic_bid_amount_parser;

        return $this;
    }

    /**
     * Gets should_accept_call_parser
     *
     * @return \Ringba\Model\ParseSettingModel[]
     */
    public function getShouldAcceptCallParser()
    {
        return $this->container['should_accept_call_parser'];
    }

    /**
     * Sets should_accept_call_parser
     *
     * @param \Ringba\Model\ParseSettingModel[] $should_accept_call_parser should_accept_call_parser
     *
     * @return $this
     */
    public function setShouldAcceptCallParser($should_accept_call_parser)
    {
        $this->container['should_accept_call_parser'] = $should_accept_call_parser;

        return $this;
    }

    /**
     * Gets dynamic_dial_setting_parser
     *
     * @return \Ringba\Model\ParseSettingModel[]
     */
    public function getDynamicDialSettingParser()
    {
        return $this->container['dynamic_dial_setting_parser'];
    }

    /**
     * Sets dynamic_dial_setting_parser
     *
     * @param \Ringba\Model\ParseSettingModel[] $dynamic_dial_setting_parser dynamic_dial_setting_parser
     *
     * @return $this
     */
    public function setDynamicDialSettingParser($dynamic_dial_setting_parser)
    {
        $this->container['dynamic_dial_setting_parser'] = $dynamic_dial_setting_parser;

        return $this;
    }

    /**
     * Gets dynamic_call_length_setting_parser
     *
     * @return \Ringba\Model\ParseSettingModel[]
     */
    public function getDynamicCallLengthSettingParser()
    {
        return $this->container['dynamic_call_length_setting_parser'];
    }

    /**
     * Sets dynamic_call_length_setting_parser
     *
     * @param \Ringba\Model\ParseSettingModel[] $dynamic_call_length_setting_parser dynamic_call_length_setting_parser
     *
     * @return $this
     */
    public function setDynamicCallLengthSettingParser($dynamic_call_length_setting_parser)
    {
        $this->container['dynamic_call_length_setting_parser'] = $dynamic_call_length_setting_parser;

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


