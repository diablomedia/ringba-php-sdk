<?php
/**
 * Rtb19
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
 * Rtb19 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Rtb19 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rtb19';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignId' => 'string',
        'enabled' => 'bool',
        'sipOnly' => 'bool',
        'icp' => 'string',
        'customIntegrations' => '\Ringba\Model\CustomIntegrations',
        'callerIdRequired' => 'bool',
        'bidExpirationPolicy' => '\Ringba\Model\BidExpirationPolicy',
        'rateLimit' => '\Ringba\Model\RateLimit',
        'bidAdjustments' => 'string[]',
        'bidSettings' => '\Ringba\Model\BidSettings',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaignId' => null,
        'enabled' => null,
        'sipOnly' => null,
        'icp' => null,
        'customIntegrations' => null,
        'callerIdRequired' => null,
        'bidExpirationPolicy' => null,
        'rateLimit' => null,
        'bidAdjustments' => null,
        'bidSettings' => null,
        'tags' => null
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
        'campaignId' => 'campaignId',
        'enabled' => 'enabled',
        'sipOnly' => 'sipOnly',
        'icp' => 'icp',
        'customIntegrations' => 'customIntegrations',
        'callerIdRequired' => 'callerIdRequired',
        'bidExpirationPolicy' => 'bidExpirationPolicy',
        'rateLimit' => 'rateLimit',
        'bidAdjustments' => 'bidAdjustments',
        'bidSettings' => 'bidSettings',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'enabled' => 'setEnabled',
        'sipOnly' => 'setSipOnly',
        'icp' => 'setIcp',
        'customIntegrations' => 'setCustomIntegrations',
        'callerIdRequired' => 'setCallerIdRequired',
        'bidExpirationPolicy' => 'setBidExpirationPolicy',
        'rateLimit' => 'setRateLimit',
        'bidAdjustments' => 'setBidAdjustments',
        'bidSettings' => 'setBidSettings',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'enabled' => 'getEnabled',
        'sipOnly' => 'getSipOnly',
        'icp' => 'getIcp',
        'customIntegrations' => 'getCustomIntegrations',
        'callerIdRequired' => 'getCallerIdRequired',
        'bidExpirationPolicy' => 'getBidExpirationPolicy',
        'rateLimit' => 'getRateLimit',
        'bidAdjustments' => 'getBidAdjustments',
        'bidSettings' => 'getBidSettings',
        'tags' => 'getTags'
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
        $this->container['campaignId'] = $data['campaignId'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['sipOnly'] = $data['sipOnly'] ?? null;
        $this->container['icp'] = $data['icp'] ?? null;
        $this->container['customIntegrations'] = $data['customIntegrations'] ?? null;
        $this->container['callerIdRequired'] = $data['callerIdRequired'] ?? null;
        $this->container['bidExpirationPolicy'] = $data['bidExpirationPolicy'] ?? null;
        $this->container['rateLimit'] = $data['rateLimit'] ?? null;
        $this->container['bidAdjustments'] = $data['bidAdjustments'] ?? null;
        $this->container['bidSettings'] = $data['bidSettings'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['sipOnly'] === null) {
            $invalidProperties[] = "'sipOnly' can't be null";
        }
        if ($this->container['icp'] === null) {
            $invalidProperties[] = "'icp' can't be null";
        }
        if ($this->container['customIntegrations'] === null) {
            $invalidProperties[] = "'customIntegrations' can't be null";
        }
        if ($this->container['callerIdRequired'] === null) {
            $invalidProperties[] = "'callerIdRequired' can't be null";
        }
        if ($this->container['bidExpirationPolicy'] === null) {
            $invalidProperties[] = "'bidExpirationPolicy' can't be null";
        }
        if ($this->container['rateLimit'] === null) {
            $invalidProperties[] = "'rateLimit' can't be null";
        }
        if ($this->container['bidAdjustments'] === null) {
            $invalidProperties[] = "'bidAdjustments' can't be null";
        }
        if ($this->container['bidSettings'] === null) {
            $invalidProperties[] = "'bidSettings' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
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
     * Gets campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param string $campaignId campaignId
     *
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

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
     * Gets sipOnly
     *
     * @return bool
     */
    public function getSipOnly()
    {
        return $this->container['sipOnly'];
    }

    /**
     * Sets sipOnly
     *
     * @param bool $sipOnly sipOnly
     *
     * @return self
     */
    public function setSipOnly($sipOnly)
    {
        $this->container['sipOnly'] = $sipOnly;

        return $this;
    }

    /**
     * Gets icp
     *
     * @return string
     */
    public function getIcp()
    {
        return $this->container['icp'];
    }

    /**
     * Sets icp
     *
     * @param string $icp icp
     *
     * @return self
     */
    public function setIcp($icp)
    {
        $this->container['icp'] = $icp;

        return $this;
    }

    /**
     * Gets customIntegrations
     *
     * @return \Ringba\Model\CustomIntegrations
     */
    public function getCustomIntegrations()
    {
        return $this->container['customIntegrations'];
    }

    /**
     * Sets customIntegrations
     *
     * @param \Ringba\Model\CustomIntegrations $customIntegrations customIntegrations
     *
     * @return self
     */
    public function setCustomIntegrations($customIntegrations)
    {
        $this->container['customIntegrations'] = $customIntegrations;

        return $this;
    }

    /**
     * Gets callerIdRequired
     *
     * @return bool
     */
    public function getCallerIdRequired()
    {
        return $this->container['callerIdRequired'];
    }

    /**
     * Sets callerIdRequired
     *
     * @param bool $callerIdRequired callerIdRequired
     *
     * @return self
     */
    public function setCallerIdRequired($callerIdRequired)
    {
        $this->container['callerIdRequired'] = $callerIdRequired;

        return $this;
    }

    /**
     * Gets bidExpirationPolicy
     *
     * @return \Ringba\Model\BidExpirationPolicy
     */
    public function getBidExpirationPolicy()
    {
        return $this->container['bidExpirationPolicy'];
    }

    /**
     * Sets bidExpirationPolicy
     *
     * @param \Ringba\Model\BidExpirationPolicy $bidExpirationPolicy bidExpirationPolicy
     *
     * @return self
     */
    public function setBidExpirationPolicy($bidExpirationPolicy)
    {
        $this->container['bidExpirationPolicy'] = $bidExpirationPolicy;

        return $this;
    }

    /**
     * Gets rateLimit
     *
     * @return \Ringba\Model\RateLimit
     */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
     * Sets rateLimit
     *
     * @param \Ringba\Model\RateLimit $rateLimit rateLimit
     *
     * @return self
     */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;

        return $this;
    }

    /**
     * Gets bidAdjustments
     *
     * @return string[]
     */
    public function getBidAdjustments()
    {
        return $this->container['bidAdjustments'];
    }

    /**
     * Sets bidAdjustments
     *
     * @param string[] $bidAdjustments 
     *
     * @return self
     */
    public function setBidAdjustments($bidAdjustments)
    {
        $this->container['bidAdjustments'] = $bidAdjustments;

        return $this;
    }

    /**
     * Gets bidSettings
     *
     * @return \Ringba\Model\BidSettings
     */
    public function getBidSettings()
    {
        return $this->container['bidSettings'];
    }

    /**
     * Sets bidSettings
     *
     * @param \Ringba\Model\BidSettings $bidSettings bidSettings
     *
     * @return self
     */
    public function setBidSettings($bidSettings)
    {
        $this->container['bidSettings'] = $bidSettings;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags 
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


