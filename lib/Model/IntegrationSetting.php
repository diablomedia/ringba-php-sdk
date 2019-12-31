<?php
/**
 * IntegrationSetting
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
 * IntegrationSetting Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'integration' => '\Ringba\Model\Integration',
        'number_id' => 'string',
        'js_tag_id' => 'string',
        'configuration' => 'map[string,string]',
        'event_code' => 'string',
        'caller_id_only_conversion' => 'bool',
        'conversion_set' => '\Ringba\Model\IntegrationConversionSet',
        'is_enabled' => 'bool',
        'id' => 'string',
        'name' => 'string',
        'account_id' => 'string',
        'enabled' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'integration' => null,
        'number_id' => null,
        'js_tag_id' => null,
        'configuration' => null,
        'event_code' => null,
        'caller_id_only_conversion' => null,
        'conversion_set' => null,
        'is_enabled' => null,
        'id' => null,
        'name' => null,
        'account_id' => null,
        'enabled' => null,
        'version' => 'int32'
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
        'integration' => 'integration',
        'number_id' => 'numberId',
        'js_tag_id' => 'jsTagId',
        'configuration' => 'configuration',
        'event_code' => 'eventCode',
        'caller_id_only_conversion' => 'callerIdOnlyConversion',
        'conversion_set' => 'conversionSet',
        'is_enabled' => 'isEnabled',
        'id' => 'id',
        'name' => 'name',
        'account_id' => 'accountId',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration' => 'setIntegration',
        'number_id' => 'setNumberId',
        'js_tag_id' => 'setJsTagId',
        'configuration' => 'setConfiguration',
        'event_code' => 'setEventCode',
        'caller_id_only_conversion' => 'setCallerIdOnlyConversion',
        'conversion_set' => 'setConversionSet',
        'is_enabled' => 'setIsEnabled',
        'id' => 'setId',
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration' => 'getIntegration',
        'number_id' => 'getNumberId',
        'js_tag_id' => 'getJsTagId',
        'configuration' => 'getConfiguration',
        'event_code' => 'getEventCode',
        'caller_id_only_conversion' => 'getCallerIdOnlyConversion',
        'conversion_set' => 'getConversionSet',
        'is_enabled' => 'getIsEnabled',
        'id' => 'getId',
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'enabled' => 'getEnabled',
        'version' => 'getVersion'
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
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['number_id'] = isset($data['number_id']) ? $data['number_id'] : null;
        $this->container['js_tag_id'] = isset($data['js_tag_id']) ? $data['js_tag_id'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['event_code'] = isset($data['event_code']) ? $data['event_code'] : null;
        $this->container['caller_id_only_conversion'] = isset($data['caller_id_only_conversion']) ? $data['caller_id_only_conversion'] : null;
        $this->container['conversion_set'] = isset($data['conversion_set']) ? $data['conversion_set'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * Gets integration
     *
     * @return \Ringba\Model\Integration
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \Ringba\Model\Integration $integration integration
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets number_id
     *
     * @return string
     */
    public function getNumberId()
    {
        return $this->container['number_id'];
    }

    /**
     * Sets number_id
     *
     * @param string $number_id number_id
     *
     * @return $this
     */
    public function setNumberId($number_id)
    {
        $this->container['number_id'] = $number_id;

        return $this;
    }

    /**
     * Gets js_tag_id
     *
     * @return string
     */
    public function getJsTagId()
    {
        return $this->container['js_tag_id'];
    }

    /**
     * Sets js_tag_id
     *
     * @param string $js_tag_id js_tag_id
     *
     * @return $this
     */
    public function setJsTagId($js_tag_id)
    {
        $this->container['js_tag_id'] = $js_tag_id;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return map[string,string]
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param map[string,string] $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets event_code
     *
     * @return string
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param string $event_code event_code
     *
     * @return $this
     */
    public function setEventCode($event_code)
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets caller_id_only_conversion
     *
     * @return bool
     */
    public function getCallerIdOnlyConversion()
    {
        return $this->container['caller_id_only_conversion'];
    }

    /**
     * Sets caller_id_only_conversion
     *
     * @param bool $caller_id_only_conversion caller_id_only_conversion
     *
     * @return $this
     */
    public function setCallerIdOnlyConversion($caller_id_only_conversion)
    {
        $this->container['caller_id_only_conversion'] = $caller_id_only_conversion;

        return $this;
    }

    /**
     * Gets conversion_set
     *
     * @return \Ringba\Model\IntegrationConversionSet
     */
    public function getConversionSet()
    {
        return $this->container['conversion_set'];
    }

    /**
     * Sets conversion_set
     *
     * @param \Ringba\Model\IntegrationConversionSet $conversion_set conversion_set
     *
     * @return $this
     */
    public function setConversionSet($conversion_set)
    {
        $this->container['conversion_set'] = $conversion_set;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled is_enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @return $this
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
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


