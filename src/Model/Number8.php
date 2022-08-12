<?php
/**
 * Number8
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
 * Number8 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Number8 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Number8';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phoneNumber' => 'string',
        'displayNumber' => 'string',
        'provider' => 'string',
        'providerAccountId' => 'string',
        'providerId' => 'string',
        'allocationDT' => 'string',
        'lastBillDT' => 'string',
        'nextChargeDT' => 'string',
        'lastChargeDT' => 'string',
        'deAllocationDT' => 'string',
        'autoRenew' => 'bool',
        'renewDOM' => 'int',
        'isTollFree' => 'bool',
        'isActivated' => 'bool',
        'assignmentSettings' => '\Ringba\Model\AssignmentSettings2',
        'tags' => '\Ringba\Model\Tag61[]',
        'deallocFlag' => 'bool',
        'failedRechargeAttempts' => 'int',
        'isCarrierNumber' => 'bool',
        'carrierNumberId' => 'string',
        'affiliate' => '\Ringba\Model\Affiliate3',
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
        'phoneNumber' => null,
        'displayNumber' => null,
        'provider' => null,
        'providerAccountId' => null,
        'providerId' => null,
        'allocationDT' => null,
        'lastBillDT' => null,
        'nextChargeDT' => null,
        'lastChargeDT' => null,
        'deAllocationDT' => null,
        'autoRenew' => null,
        'renewDOM' => 'int32',
        'isTollFree' => null,
        'isActivated' => null,
        'assignmentSettings' => null,
        'tags' => null,
        'deallocFlag' => null,
        'failedRechargeAttempts' => 'int32',
        'isCarrierNumber' => null,
        'carrierNumberId' => null,
        'affiliate' => null,
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
        'phoneNumber' => 'phoneNumber',
        'displayNumber' => 'displayNumber',
        'provider' => 'provider',
        'providerAccountId' => 'providerAccountId',
        'providerId' => 'providerId',
        'allocationDT' => 'allocationDT',
        'lastBillDT' => 'lastBillDT',
        'nextChargeDT' => 'nextChargeDT',
        'lastChargeDT' => 'lastChargeDT',
        'deAllocationDT' => 'deAllocationDT',
        'autoRenew' => 'autoRenew',
        'renewDOM' => 'renewDOM',
        'isTollFree' => 'isTollFree',
        'isActivated' => 'isActivated',
        'assignmentSettings' => 'assignmentSettings',
        'tags' => 'tags',
        'deallocFlag' => 'deallocFlag',
        'failedRechargeAttempts' => 'failedRechargeAttempts',
        'isCarrierNumber' => 'isCarrierNumber',
        'carrierNumberId' => 'carrierNumberId',
        'affiliate' => 'affiliate',
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
        'phoneNumber' => 'setPhoneNumber',
        'displayNumber' => 'setDisplayNumber',
        'provider' => 'setProvider',
        'providerAccountId' => 'setProviderAccountId',
        'providerId' => 'setProviderId',
        'allocationDT' => 'setAllocationDT',
        'lastBillDT' => 'setLastBillDT',
        'nextChargeDT' => 'setNextChargeDT',
        'lastChargeDT' => 'setLastChargeDT',
        'deAllocationDT' => 'setDeAllocationDT',
        'autoRenew' => 'setAutoRenew',
        'renewDOM' => 'setRenewDOM',
        'isTollFree' => 'setIsTollFree',
        'isActivated' => 'setIsActivated',
        'assignmentSettings' => 'setAssignmentSettings',
        'tags' => 'setTags',
        'deallocFlag' => 'setDeallocFlag',
        'failedRechargeAttempts' => 'setFailedRechargeAttempts',
        'isCarrierNumber' => 'setIsCarrierNumber',
        'carrierNumberId' => 'setCarrierNumberId',
        'affiliate' => 'setAffiliate',
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
        'phoneNumber' => 'getPhoneNumber',
        'displayNumber' => 'getDisplayNumber',
        'provider' => 'getProvider',
        'providerAccountId' => 'getProviderAccountId',
        'providerId' => 'getProviderId',
        'allocationDT' => 'getAllocationDT',
        'lastBillDT' => 'getLastBillDT',
        'nextChargeDT' => 'getNextChargeDT',
        'lastChargeDT' => 'getLastChargeDT',
        'deAllocationDT' => 'getDeAllocationDT',
        'autoRenew' => 'getAutoRenew',
        'renewDOM' => 'getRenewDOM',
        'isTollFree' => 'getIsTollFree',
        'isActivated' => 'getIsActivated',
        'assignmentSettings' => 'getAssignmentSettings',
        'tags' => 'getTags',
        'deallocFlag' => 'getDeallocFlag',
        'failedRechargeAttempts' => 'getFailedRechargeAttempts',
        'isCarrierNumber' => 'getIsCarrierNumber',
        'carrierNumberId' => 'getCarrierNumberId',
        'affiliate' => 'getAffiliate',
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
        $this->container['phoneNumber'] = $data['phoneNumber'] ?? null;
        $this->container['displayNumber'] = $data['displayNumber'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['providerAccountId'] = $data['providerAccountId'] ?? null;
        $this->container['providerId'] = $data['providerId'] ?? null;
        $this->container['allocationDT'] = $data['allocationDT'] ?? null;
        $this->container['lastBillDT'] = $data['lastBillDT'] ?? null;
        $this->container['nextChargeDT'] = $data['nextChargeDT'] ?? null;
        $this->container['lastChargeDT'] = $data['lastChargeDT'] ?? null;
        $this->container['deAllocationDT'] = $data['deAllocationDT'] ?? null;
        $this->container['autoRenew'] = $data['autoRenew'] ?? null;
        $this->container['renewDOM'] = $data['renewDOM'] ?? null;
        $this->container['isTollFree'] = $data['isTollFree'] ?? null;
        $this->container['isActivated'] = $data['isActivated'] ?? null;
        $this->container['assignmentSettings'] = $data['assignmentSettings'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['deallocFlag'] = $data['deallocFlag'] ?? null;
        $this->container['failedRechargeAttempts'] = $data['failedRechargeAttempts'] ?? null;
        $this->container['isCarrierNumber'] = $data['isCarrierNumber'] ?? null;
        $this->container['carrierNumberId'] = $data['carrierNumberId'] ?? null;
        $this->container['affiliate'] = $data['affiliate'] ?? null;
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

        if ($this->container['phoneNumber'] === null) {
            $invalidProperties[] = "'phoneNumber' can't be null";
        }
        if ($this->container['displayNumber'] === null) {
            $invalidProperties[] = "'displayNumber' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['providerAccountId'] === null) {
            $invalidProperties[] = "'providerAccountId' can't be null";
        }
        if ($this->container['providerId'] === null) {
            $invalidProperties[] = "'providerId' can't be null";
        }
        if ($this->container['allocationDT'] === null) {
            $invalidProperties[] = "'allocationDT' can't be null";
        }
        if ($this->container['lastBillDT'] === null) {
            $invalidProperties[] = "'lastBillDT' can't be null";
        }
        if ($this->container['nextChargeDT'] === null) {
            $invalidProperties[] = "'nextChargeDT' can't be null";
        }
        if ($this->container['lastChargeDT'] === null) {
            $invalidProperties[] = "'lastChargeDT' can't be null";
        }
        if ($this->container['deAllocationDT'] === null) {
            $invalidProperties[] = "'deAllocationDT' can't be null";
        }
        if ($this->container['autoRenew'] === null) {
            $invalidProperties[] = "'autoRenew' can't be null";
        }
        if ($this->container['renewDOM'] === null) {
            $invalidProperties[] = "'renewDOM' can't be null";
        }
        if ($this->container['isTollFree'] === null) {
            $invalidProperties[] = "'isTollFree' can't be null";
        }
        if ($this->container['isActivated'] === null) {
            $invalidProperties[] = "'isActivated' can't be null";
        }
        if ($this->container['assignmentSettings'] === null) {
            $invalidProperties[] = "'assignmentSettings' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['deallocFlag'] === null) {
            $invalidProperties[] = "'deallocFlag' can't be null";
        }
        if ($this->container['failedRechargeAttempts'] === null) {
            $invalidProperties[] = "'failedRechargeAttempts' can't be null";
        }
        if ($this->container['isCarrierNumber'] === null) {
            $invalidProperties[] = "'isCarrierNumber' can't be null";
        }
        if ($this->container['carrierNumberId'] === null) {
            $invalidProperties[] = "'carrierNumberId' can't be null";
        }
        if ($this->container['affiliate'] === null) {
            $invalidProperties[] = "'affiliate' can't be null";
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
     * Gets phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string $phoneNumber phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets displayNumber
     *
     * @return string
     */
    public function getDisplayNumber()
    {
        return $this->container['displayNumber'];
    }

    /**
     * Sets displayNumber
     *
     * @param string $displayNumber displayNumber
     *
     * @return self
     */
    public function setDisplayNumber($displayNumber)
    {
        $this->container['displayNumber'] = $displayNumber;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider provider
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets providerAccountId
     *
     * @return string
     */
    public function getProviderAccountId()
    {
        return $this->container['providerAccountId'];
    }

    /**
     * Sets providerAccountId
     *
     * @param string $providerAccountId providerAccountId
     *
     * @return self
     */
    public function setProviderAccountId($providerAccountId)
    {
        $this->container['providerAccountId'] = $providerAccountId;

        return $this;
    }

    /**
     * Gets providerId
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     *
     * @param string $providerId providerId
     *
     * @return self
     */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;

        return $this;
    }

    /**
     * Gets allocationDT
     *
     * @return string
     */
    public function getAllocationDT()
    {
        return $this->container['allocationDT'];
    }

    /**
     * Sets allocationDT
     *
     * @param string $allocationDT allocationDT
     *
     * @return self
     */
    public function setAllocationDT($allocationDT)
    {
        $this->container['allocationDT'] = $allocationDT;

        return $this;
    }

    /**
     * Gets lastBillDT
     *
     * @return string
     */
    public function getLastBillDT()
    {
        return $this->container['lastBillDT'];
    }

    /**
     * Sets lastBillDT
     *
     * @param string $lastBillDT lastBillDT
     *
     * @return self
     */
    public function setLastBillDT($lastBillDT)
    {
        $this->container['lastBillDT'] = $lastBillDT;

        return $this;
    }

    /**
     * Gets nextChargeDT
     *
     * @return string
     */
    public function getNextChargeDT()
    {
        return $this->container['nextChargeDT'];
    }

    /**
     * Sets nextChargeDT
     *
     * @param string $nextChargeDT nextChargeDT
     *
     * @return self
     */
    public function setNextChargeDT($nextChargeDT)
    {
        $this->container['nextChargeDT'] = $nextChargeDT;

        return $this;
    }

    /**
     * Gets lastChargeDT
     *
     * @return string
     */
    public function getLastChargeDT()
    {
        return $this->container['lastChargeDT'];
    }

    /**
     * Sets lastChargeDT
     *
     * @param string $lastChargeDT lastChargeDT
     *
     * @return self
     */
    public function setLastChargeDT($lastChargeDT)
    {
        $this->container['lastChargeDT'] = $lastChargeDT;

        return $this;
    }

    /**
     * Gets deAllocationDT
     *
     * @return string
     */
    public function getDeAllocationDT()
    {
        return $this->container['deAllocationDT'];
    }

    /**
     * Sets deAllocationDT
     *
     * @param string $deAllocationDT deAllocationDT
     *
     * @return self
     */
    public function setDeAllocationDT($deAllocationDT)
    {
        $this->container['deAllocationDT'] = $deAllocationDT;

        return $this;
    }

    /**
     * Gets autoRenew
     *
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->container['autoRenew'];
    }

    /**
     * Sets autoRenew
     *
     * @param bool $autoRenew autoRenew
     *
     * @return self
     */
    public function setAutoRenew($autoRenew)
    {
        $this->container['autoRenew'] = $autoRenew;

        return $this;
    }

    /**
     * Gets renewDOM
     *
     * @return int
     */
    public function getRenewDOM()
    {
        return $this->container['renewDOM'];
    }

    /**
     * Sets renewDOM
     *
     * @param int $renewDOM renewDOM
     *
     * @return self
     */
    public function setRenewDOM($renewDOM)
    {
        $this->container['renewDOM'] = $renewDOM;

        return $this;
    }

    /**
     * Gets isTollFree
     *
     * @return bool
     */
    public function getIsTollFree()
    {
        return $this->container['isTollFree'];
    }

    /**
     * Sets isTollFree
     *
     * @param bool $isTollFree isTollFree
     *
     * @return self
     */
    public function setIsTollFree($isTollFree)
    {
        $this->container['isTollFree'] = $isTollFree;

        return $this;
    }

    /**
     * Gets isActivated
     *
     * @return bool
     */
    public function getIsActivated()
    {
        return $this->container['isActivated'];
    }

    /**
     * Sets isActivated
     *
     * @param bool $isActivated isActivated
     *
     * @return self
     */
    public function setIsActivated($isActivated)
    {
        $this->container['isActivated'] = $isActivated;

        return $this;
    }

    /**
     * Gets assignmentSettings
     *
     * @return \Ringba\Model\AssignmentSettings2
     */
    public function getAssignmentSettings()
    {
        return $this->container['assignmentSettings'];
    }

    /**
     * Sets assignmentSettings
     *
     * @param \Ringba\Model\AssignmentSettings2 $assignmentSettings assignmentSettings
     *
     * @return self
     */
    public function setAssignmentSettings($assignmentSettings)
    {
        $this->container['assignmentSettings'] = $assignmentSettings;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Ringba\Model\Tag61[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Ringba\Model\Tag61[] $tags 
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets deallocFlag
     *
     * @return bool
     */
    public function getDeallocFlag()
    {
        return $this->container['deallocFlag'];
    }

    /**
     * Sets deallocFlag
     *
     * @param bool $deallocFlag deallocFlag
     *
     * @return self
     */
    public function setDeallocFlag($deallocFlag)
    {
        $this->container['deallocFlag'] = $deallocFlag;

        return $this;
    }

    /**
     * Gets failedRechargeAttempts
     *
     * @return int
     */
    public function getFailedRechargeAttempts()
    {
        return $this->container['failedRechargeAttempts'];
    }

    /**
     * Sets failedRechargeAttempts
     *
     * @param int $failedRechargeAttempts failedRechargeAttempts
     *
     * @return self
     */
    public function setFailedRechargeAttempts($failedRechargeAttempts)
    {
        $this->container['failedRechargeAttempts'] = $failedRechargeAttempts;

        return $this;
    }

    /**
     * Gets isCarrierNumber
     *
     * @return bool
     */
    public function getIsCarrierNumber()
    {
        return $this->container['isCarrierNumber'];
    }

    /**
     * Sets isCarrierNumber
     *
     * @param bool $isCarrierNumber isCarrierNumber
     *
     * @return self
     */
    public function setIsCarrierNumber($isCarrierNumber)
    {
        $this->container['isCarrierNumber'] = $isCarrierNumber;

        return $this;
    }

    /**
     * Gets carrierNumberId
     *
     * @return string
     */
    public function getCarrierNumberId()
    {
        return $this->container['carrierNumberId'];
    }

    /**
     * Sets carrierNumberId
     *
     * @param string $carrierNumberId carrierNumberId
     *
     * @return self
     */
    public function setCarrierNumberId($carrierNumberId)
    {
        $this->container['carrierNumberId'] = $carrierNumberId;

        return $this;
    }

    /**
     * Gets affiliate
     *
     * @return \Ringba\Model\Affiliate3
     */
    public function getAffiliate()
    {
        return $this->container['affiliate'];
    }

    /**
     * Sets affiliate
     *
     * @param \Ringba\Model\Affiliate3 $affiliate affiliate
     *
     * @return self
     */
    public function setAffiliate($affiliate)
    {
        $this->container['affiliate'] = $affiliate;

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


