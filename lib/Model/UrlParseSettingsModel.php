<?php
/**
 * UrlParseSettingsModel
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
 * UrlParseSettingsModel Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UrlParseSettingsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UrlParseSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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


