<?php
/**
 * BidAcceptanceSettings
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
 * BidAcceptanceSettings Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidAcceptanceSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BidAcceptanceSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'required' => 'bool',
        'bid_id_required' => 'bool',
        'number_required' => 'bool',
        'bid_id_parse_settings' => '\Ringba\Model\ParseSetting[]',
        'url' => 'string',
        'method' => 'string',
        'body' => 'string',
        'content_type' => 'string',
        'headers' => 'map[string,string]',
        'ping_timeout_in_ms' => 'int',
        'parse_settings' => 'map[string,\Ringba\Model\ParseSetting[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'required' => null,
        'bid_id_required' => null,
        'number_required' => null,
        'bid_id_parse_settings' => null,
        'url' => null,
        'method' => null,
        'body' => null,
        'content_type' => null,
        'headers' => null,
        'ping_timeout_in_ms' => 'int32',
        'parse_settings' => null
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
        'enabled' => 'enabled',
        'required' => 'required',
        'bid_id_required' => 'bidIDRequired',
        'number_required' => 'numberRequired',
        'bid_id_parse_settings' => 'bidIDParseSettings',
        'url' => 'url',
        'method' => 'method',
        'body' => 'body',
        'content_type' => 'contentType',
        'headers' => 'headers',
        'ping_timeout_in_ms' => 'pingTimeoutInMS',
        'parse_settings' => 'parseSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'required' => 'setRequired',
        'bid_id_required' => 'setBidIdRequired',
        'number_required' => 'setNumberRequired',
        'bid_id_parse_settings' => 'setBidIdParseSettings',
        'url' => 'setUrl',
        'method' => 'setMethod',
        'body' => 'setBody',
        'content_type' => 'setContentType',
        'headers' => 'setHeaders',
        'ping_timeout_in_ms' => 'setPingTimeoutInMs',
        'parse_settings' => 'setParseSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'required' => 'getRequired',
        'bid_id_required' => 'getBidIdRequired',
        'number_required' => 'getNumberRequired',
        'bid_id_parse_settings' => 'getBidIdParseSettings',
        'url' => 'getUrl',
        'method' => 'getMethod',
        'body' => 'getBody',
        'content_type' => 'getContentType',
        'headers' => 'getHeaders',
        'ping_timeout_in_ms' => 'getPingTimeoutInMs',
        'parse_settings' => 'getParseSettings'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['bid_id_required'] = isset($data['bid_id_required']) ? $data['bid_id_required'] : null;
        $this->container['number_required'] = isset($data['number_required']) ? $data['number_required'] : null;
        $this->container['bid_id_parse_settings'] = isset($data['bid_id_parse_settings']) ? $data['bid_id_parse_settings'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['ping_timeout_in_ms'] = isset($data['ping_timeout_in_ms']) ? $data['ping_timeout_in_ms'] : null;
        $this->container['parse_settings'] = isset($data['parse_settings']) ? $data['parse_settings'] : null;
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
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets bid_id_required
     *
     * @return bool
     */
    public function getBidIdRequired()
    {
        return $this->container['bid_id_required'];
    }

    /**
     * Sets bid_id_required
     *
     * @param bool $bid_id_required bid_id_required
     *
     * @return $this
     */
    public function setBidIdRequired($bid_id_required)
    {
        $this->container['bid_id_required'] = $bid_id_required;

        return $this;
    }

    /**
     * Gets number_required
     *
     * @return bool
     */
    public function getNumberRequired()
    {
        return $this->container['number_required'];
    }

    /**
     * Sets number_required
     *
     * @param bool $number_required number_required
     *
     * @return $this
     */
    public function setNumberRequired($number_required)
    {
        $this->container['number_required'] = $number_required;

        return $this;
    }

    /**
     * Gets bid_id_parse_settings
     *
     * @return \Ringba\Model\ParseSetting[]
     */
    public function getBidIdParseSettings()
    {
        return $this->container['bid_id_parse_settings'];
    }

    /**
     * Sets bid_id_parse_settings
     *
     * @param \Ringba\Model\ParseSetting[] $bid_id_parse_settings bid_id_parse_settings
     *
     * @return $this
     */
    public function setBidIdParseSettings($bid_id_parse_settings)
    {
        $this->container['bid_id_parse_settings'] = $bid_id_parse_settings;

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
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

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
     * Gets ping_timeout_in_ms
     *
     * @return int
     */
    public function getPingTimeoutInMs()
    {
        return $this->container['ping_timeout_in_ms'];
    }

    /**
     * Sets ping_timeout_in_ms
     *
     * @param int $ping_timeout_in_ms ping_timeout_in_ms
     *
     * @return $this
     */
    public function setPingTimeoutInMs($ping_timeout_in_ms)
    {
        $this->container['ping_timeout_in_ms'] = $ping_timeout_in_ms;

        return $this;
    }

    /**
     * Gets parse_settings
     *
     * @return map[string,\Ringba\Model\ParseSetting[]]
     */
    public function getParseSettings()
    {
        return $this->container['parse_settings'];
    }

    /**
     * Sets parse_settings
     *
     * @param map[string,\Ringba\Model\ParseSetting[]] $parse_settings parse_settings
     *
     * @return $this
     */
    public function setParseSettings($parse_settings)
    {
        $this->container['parse_settings'] = $parse_settings;

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


