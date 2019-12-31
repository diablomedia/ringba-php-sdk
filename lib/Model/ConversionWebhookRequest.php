<?php
/**
 * ConversionWebhookRequest
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
 * ConversionWebhookRequest Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionWebhookRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversionWebhookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'incoming_call_id_query_string_parameter' => 'string',
        'conversion_amount_query_string_parameter' => 'string',
        'conversion_criteria_parameter_match' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'incoming_call_id_query_string_parameter' => null,
        'conversion_amount_query_string_parameter' => null,
        'conversion_criteria_parameter_match' => null
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
        'incoming_call_id_query_string_parameter' => 'incomingCallIdQueryStringParameter',
        'conversion_amount_query_string_parameter' => 'conversionAmountQueryStringParameter',
        'conversion_criteria_parameter_match' => 'conversionCriteriaParameterMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'incoming_call_id_query_string_parameter' => 'setIncomingCallIdQueryStringParameter',
        'conversion_amount_query_string_parameter' => 'setConversionAmountQueryStringParameter',
        'conversion_criteria_parameter_match' => 'setConversionCriteriaParameterMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'incoming_call_id_query_string_parameter' => 'getIncomingCallIdQueryStringParameter',
        'conversion_amount_query_string_parameter' => 'getConversionAmountQueryStringParameter',
        'conversion_criteria_parameter_match' => 'getConversionCriteriaParameterMatch'
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
        $this->container['incoming_call_id_query_string_parameter'] = isset($data['incoming_call_id_query_string_parameter']) ? $data['incoming_call_id_query_string_parameter'] : null;
        $this->container['conversion_amount_query_string_parameter'] = isset($data['conversion_amount_query_string_parameter']) ? $data['conversion_amount_query_string_parameter'] : null;
        $this->container['conversion_criteria_parameter_match'] = isset($data['conversion_criteria_parameter_match']) ? $data['conversion_criteria_parameter_match'] : null;
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
        if ($this->container['incoming_call_id_query_string_parameter'] === null) {
            $invalidProperties[] = "'incoming_call_id_query_string_parameter' can't be null";
        }
        if ($this->container['conversion_amount_query_string_parameter'] === null) {
            $invalidProperties[] = "'conversion_amount_query_string_parameter' can't be null";
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
     * Gets incoming_call_id_query_string_parameter
     *
     * @return string
     */
    public function getIncomingCallIdQueryStringParameter()
    {
        return $this->container['incoming_call_id_query_string_parameter'];
    }

    /**
     * Sets incoming_call_id_query_string_parameter
     *
     * @param string $incoming_call_id_query_string_parameter incoming_call_id_query_string_parameter
     *
     * @return $this
     */
    public function setIncomingCallIdQueryStringParameter($incoming_call_id_query_string_parameter)
    {
        $this->container['incoming_call_id_query_string_parameter'] = $incoming_call_id_query_string_parameter;

        return $this;
    }

    /**
     * Gets conversion_amount_query_string_parameter
     *
     * @return string
     */
    public function getConversionAmountQueryStringParameter()
    {
        return $this->container['conversion_amount_query_string_parameter'];
    }

    /**
     * Sets conversion_amount_query_string_parameter
     *
     * @param string $conversion_amount_query_string_parameter conversion_amount_query_string_parameter
     *
     * @return $this
     */
    public function setConversionAmountQueryStringParameter($conversion_amount_query_string_parameter)
    {
        $this->container['conversion_amount_query_string_parameter'] = $conversion_amount_query_string_parameter;

        return $this;
    }

    /**
     * Gets conversion_criteria_parameter_match
     *
     * @return string
     */
    public function getConversionCriteriaParameterMatch()
    {
        return $this->container['conversion_criteria_parameter_match'];
    }

    /**
     * Sets conversion_criteria_parameter_match
     *
     * @param string $conversion_criteria_parameter_match conversion_criteria_parameter_match
     *
     * @return $this
     */
    public function setConversionCriteriaParameterMatch($conversion_criteria_parameter_match)
    {
        $this->container['conversion_criteria_parameter_match'] = $conversion_criteria_parameter_match;

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

