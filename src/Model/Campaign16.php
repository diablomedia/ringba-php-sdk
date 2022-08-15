<?php
/**
 * Campaign16
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
 * Campaign16 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Campaign16 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Campaign16';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defaultPayout' => '\Ringba\Model\DefaultPayout',
        'defaultPayouts' => '\Ringba\Model\DefaultPayout[]',
        'ivrEnabled' => 'bool',
        'userCampaignId' => 'string',
        'countryCode' => 'string',
        'completed' => 'bool',
        'distributionSetting' => 'string',
        'evalAnonymDuplication' => 'bool',
        'payoutDupesGlobal' => 'bool',
        'affiliateNumbers' => '\Ringba\Model\AffiliateNumber11[]',
        'deDupeSettings' => '\Ringba\Model\DeDupeSettings',
        'routes' => '\Ringba\Model\Route9[]',
        'duplicateSettings' => '\Ringba\Model\DuplicateSettings',
        'dialSettings' => '\Ringba\Model\DialSettings',
        'recordSetting' => '\Ringba\Model\RecordSetting',
        'affiliates' => '\Ringba\Model\Affiliate2[]',
        'id' => 'string',
        'name' => 'string',
        'accountId' => 'string',
        'enabled' => 'bool',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'defaultPayout' => null,
        'defaultPayouts' => null,
        'ivrEnabled' => null,
        'userCampaignId' => null,
        'countryCode' => null,
        'completed' => null,
        'distributionSetting' => null,
        'evalAnonymDuplication' => null,
        'payoutDupesGlobal' => null,
        'affiliateNumbers' => null,
        'deDupeSettings' => null,
        'routes' => null,
        'duplicateSettings' => null,
        'dialSettings' => null,
        'recordSetting' => null,
        'affiliates' => null,
        'id' => null,
        'name' => null,
        'accountId' => null,
        'enabled' => null,
        'version' => 'int32'
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
        'defaultPayout' => 'defaultPayout',
        'defaultPayouts' => 'defaultPayouts',
        'ivrEnabled' => 'ivrEnabled',
        'userCampaignId' => 'userCampaignId',
        'countryCode' => 'countryCode',
        'completed' => 'completed',
        'distributionSetting' => 'distributionSetting',
        'evalAnonymDuplication' => 'evalAnonymDuplication',
        'payoutDupesGlobal' => 'payoutDupesGlobal',
        'affiliateNumbers' => 'affiliateNumbers',
        'deDupeSettings' => 'deDupeSettings',
        'routes' => 'routes',
        'duplicateSettings' => 'duplicateSettings',
        'dialSettings' => 'dialSettings',
        'recordSetting' => 'recordSetting',
        'affiliates' => 'affiliates',
        'id' => 'id',
        'name' => 'name',
        'accountId' => 'accountId',
        'enabled' => 'enabled',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultPayout' => 'setDefaultPayout',
        'defaultPayouts' => 'setDefaultPayouts',
        'ivrEnabled' => 'setIvrEnabled',
        'userCampaignId' => 'setUserCampaignId',
        'countryCode' => 'setCountryCode',
        'completed' => 'setCompleted',
        'distributionSetting' => 'setDistributionSetting',
        'evalAnonymDuplication' => 'setEvalAnonymDuplication',
        'payoutDupesGlobal' => 'setPayoutDupesGlobal',
        'affiliateNumbers' => 'setAffiliateNumbers',
        'deDupeSettings' => 'setDeDupeSettings',
        'routes' => 'setRoutes',
        'duplicateSettings' => 'setDuplicateSettings',
        'dialSettings' => 'setDialSettings',
        'recordSetting' => 'setRecordSetting',
        'affiliates' => 'setAffiliates',
        'id' => 'setId',
        'name' => 'setName',
        'accountId' => 'setAccountId',
        'enabled' => 'setEnabled',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultPayout' => 'getDefaultPayout',
        'defaultPayouts' => 'getDefaultPayouts',
        'ivrEnabled' => 'getIvrEnabled',
        'userCampaignId' => 'getUserCampaignId',
        'countryCode' => 'getCountryCode',
        'completed' => 'getCompleted',
        'distributionSetting' => 'getDistributionSetting',
        'evalAnonymDuplication' => 'getEvalAnonymDuplication',
        'payoutDupesGlobal' => 'getPayoutDupesGlobal',
        'affiliateNumbers' => 'getAffiliateNumbers',
        'deDupeSettings' => 'getDeDupeSettings',
        'routes' => 'getRoutes',
        'duplicateSettings' => 'getDuplicateSettings',
        'dialSettings' => 'getDialSettings',
        'recordSetting' => 'getRecordSetting',
        'affiliates' => 'getAffiliates',
        'id' => 'getId',
        'name' => 'getName',
        'accountId' => 'getAccountId',
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
        $this->container['defaultPayout'] = $data['defaultPayout'] ?? null;
        $this->container['defaultPayouts'] = $data['defaultPayouts'] ?? null;
        $this->container['ivrEnabled'] = $data['ivrEnabled'] ?? null;
        $this->container['userCampaignId'] = $data['userCampaignId'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['completed'] = $data['completed'] ?? null;
        $this->container['distributionSetting'] = $data['distributionSetting'] ?? null;
        $this->container['evalAnonymDuplication'] = $data['evalAnonymDuplication'] ?? null;
        $this->container['payoutDupesGlobal'] = $data['payoutDupesGlobal'] ?? null;
        $this->container['affiliateNumbers'] = $data['affiliateNumbers'] ?? null;
        $this->container['deDupeSettings'] = $data['deDupeSettings'] ?? null;
        $this->container['routes'] = $data['routes'] ?? null;
        $this->container['duplicateSettings'] = $data['duplicateSettings'] ?? null;
        $this->container['dialSettings'] = $data['dialSettings'] ?? null;
        $this->container['recordSetting'] = $data['recordSetting'] ?? null;
        $this->container['affiliates'] = $data['affiliates'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['defaultPayout'] === null) {
            $invalidProperties[] = "'defaultPayout' can't be null";
        }
        if ($this->container['defaultPayouts'] === null) {
            $invalidProperties[] = "'defaultPayouts' can't be null";
        }
        if ($this->container['ivrEnabled'] === null) {
            $invalidProperties[] = "'ivrEnabled' can't be null";
        }
        if ($this->container['userCampaignId'] === null) {
            $invalidProperties[] = "'userCampaignId' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ($this->container['completed'] === null) {
            $invalidProperties[] = "'completed' can't be null";
        }
        if ($this->container['distributionSetting'] === null) {
            $invalidProperties[] = "'distributionSetting' can't be null";
        }
        if ($this->container['evalAnonymDuplication'] === null) {
            $invalidProperties[] = "'evalAnonymDuplication' can't be null";
        }
        if ($this->container['payoutDupesGlobal'] === null) {
            $invalidProperties[] = "'payoutDupesGlobal' can't be null";
        }
        if ($this->container['affiliateNumbers'] === null) {
            $invalidProperties[] = "'affiliateNumbers' can't be null";
        }
        if ($this->container['deDupeSettings'] === null) {
            $invalidProperties[] = "'deDupeSettings' can't be null";
        }
        if ($this->container['routes'] === null) {
            $invalidProperties[] = "'routes' can't be null";
        }
        if ($this->container['duplicateSettings'] === null) {
            $invalidProperties[] = "'duplicateSettings' can't be null";
        }
        if ($this->container['dialSettings'] === null) {
            $invalidProperties[] = "'dialSettings' can't be null";
        }
        if ($this->container['recordSetting'] === null) {
            $invalidProperties[] = "'recordSetting' can't be null";
        }
        if ($this->container['affiliates'] === null) {
            $invalidProperties[] = "'affiliates' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets defaultPayout
     *
     * @return \Ringba\Model\DefaultPayout
     */
    public function getDefaultPayout()
    {
        return $this->container['defaultPayout'];
    }

    /**
     * Sets defaultPayout
     *
     * @param \Ringba\Model\DefaultPayout $defaultPayout defaultPayout
     *
     * @return self
     */
    public function setDefaultPayout($defaultPayout)
    {
        $this->container['defaultPayout'] = $defaultPayout;

        return $this;
    }

    /**
     * Gets defaultPayouts
     *
     * @return \Ringba\Model\DefaultPayout[]
     */
    public function getDefaultPayouts()
    {
        return $this->container['defaultPayouts'];
    }

    /**
     * Sets defaultPayouts
     *
     * @param \Ringba\Model\DefaultPayout[] $defaultPayouts 
     *
     * @return self
     */
    public function setDefaultPayouts($defaultPayouts)
    {
        $this->container['defaultPayouts'] = $defaultPayouts;

        return $this;
    }

    /**
     * Gets ivrEnabled
     *
     * @return bool
     */
    public function getIvrEnabled()
    {
        return $this->container['ivrEnabled'];
    }

    /**
     * Sets ivrEnabled
     *
     * @param bool $ivrEnabled ivrEnabled
     *
     * @return self
     */
    public function setIvrEnabled($ivrEnabled)
    {
        $this->container['ivrEnabled'] = $ivrEnabled;

        return $this;
    }

    /**
     * Gets userCampaignId
     *
     * @return string
     */
    public function getUserCampaignId()
    {
        return $this->container['userCampaignId'];
    }

    /**
     * Sets userCampaignId
     *
     * @param string $userCampaignId userCampaignId
     *
     * @return self
     */
    public function setUserCampaignId($userCampaignId)
    {
        $this->container['userCampaignId'] = $userCampaignId;

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
     * Gets completed
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool $completed completed
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets distributionSetting
     *
     * @return string
     */
    public function getDistributionSetting()
    {
        return $this->container['distributionSetting'];
    }

    /**
     * Sets distributionSetting
     *
     * @param string $distributionSetting distributionSetting
     *
     * @return self
     */
    public function setDistributionSetting($distributionSetting)
    {
        $this->container['distributionSetting'] = $distributionSetting;

        return $this;
    }

    /**
     * Gets evalAnonymDuplication
     *
     * @return bool
     */
    public function getEvalAnonymDuplication()
    {
        return $this->container['evalAnonymDuplication'];
    }

    /**
     * Sets evalAnonymDuplication
     *
     * @param bool $evalAnonymDuplication evalAnonymDuplication
     *
     * @return self
     */
    public function setEvalAnonymDuplication($evalAnonymDuplication)
    {
        $this->container['evalAnonymDuplication'] = $evalAnonymDuplication;

        return $this;
    }

    /**
     * Gets payoutDupesGlobal
     *
     * @return bool
     */
    public function getPayoutDupesGlobal()
    {
        return $this->container['payoutDupesGlobal'];
    }

    /**
     * Sets payoutDupesGlobal
     *
     * @param bool $payoutDupesGlobal payoutDupesGlobal
     *
     * @return self
     */
    public function setPayoutDupesGlobal($payoutDupesGlobal)
    {
        $this->container['payoutDupesGlobal'] = $payoutDupesGlobal;

        return $this;
    }

    /**
     * Gets affiliateNumbers
     *
     * @return \Ringba\Model\AffiliateNumber11[]
     */
    public function getAffiliateNumbers()
    {
        return $this->container['affiliateNumbers'];
    }

    /**
     * Sets affiliateNumbers
     *
     * @param \Ringba\Model\AffiliateNumber11[] $affiliateNumbers 
     *
     * @return self
     */
    public function setAffiliateNumbers($affiliateNumbers)
    {
        $this->container['affiliateNumbers'] = $affiliateNumbers;

        return $this;
    }

    /**
     * Gets deDupeSettings
     *
     * @return \Ringba\Model\DeDupeSettings
     */
    public function getDeDupeSettings()
    {
        return $this->container['deDupeSettings'];
    }

    /**
     * Sets deDupeSettings
     *
     * @param \Ringba\Model\DeDupeSettings $deDupeSettings deDupeSettings
     *
     * @return self
     */
    public function setDeDupeSettings($deDupeSettings)
    {
        $this->container['deDupeSettings'] = $deDupeSettings;

        return $this;
    }

    /**
     * Gets routes
     *
     * @return \Ringba\Model\Route9[]
     */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
     * Sets routes
     *
     * @param \Ringba\Model\Route9[] $routes 
     *
     * @return self
     */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;

        return $this;
    }

    /**
     * Gets duplicateSettings
     *
     * @return \Ringba\Model\DuplicateSettings
     */
    public function getDuplicateSettings()
    {
        return $this->container['duplicateSettings'];
    }

    /**
     * Sets duplicateSettings
     *
     * @param \Ringba\Model\DuplicateSettings $duplicateSettings duplicateSettings
     *
     * @return self
     */
    public function setDuplicateSettings($duplicateSettings)
    {
        $this->container['duplicateSettings'] = $duplicateSettings;

        return $this;
    }

    /**
     * Gets dialSettings
     *
     * @return \Ringba\Model\DialSettings
     */
    public function getDialSettings()
    {
        return $this->container['dialSettings'];
    }

    /**
     * Sets dialSettings
     *
     * @param \Ringba\Model\DialSettings $dialSettings dialSettings
     *
     * @return self
     */
    public function setDialSettings($dialSettings)
    {
        $this->container['dialSettings'] = $dialSettings;

        return $this;
    }

    /**
     * Gets recordSetting
     *
     * @return \Ringba\Model\RecordSetting
     */
    public function getRecordSetting()
    {
        return $this->container['recordSetting'];
    }

    /**
     * Sets recordSetting
     *
     * @param \Ringba\Model\RecordSetting $recordSetting recordSetting
     *
     * @return self
     */
    public function setRecordSetting($recordSetting)
    {
        $this->container['recordSetting'] = $recordSetting;

        return $this;
    }

    /**
     * Gets affiliates
     *
     * @return \Ringba\Model\Affiliate2[]
     */
    public function getAffiliates()
    {
        return $this->container['affiliates'];
    }

    /**
     * Sets affiliates
     *
     * @param \Ringba\Model\Affiliate2[] $affiliates 
     *
     * @return self
     */
    public function setAffiliates($affiliates)
    {
        $this->container['affiliates'] = $affiliates;

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
     * @return self
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
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId accountId
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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
     * @return self
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


