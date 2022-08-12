<?php
/**
 * Record2
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
 * Record2 Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Record2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Record2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignName' => 'string',
        'publisherName' => 'string',
        'targetName' => 'string',
        'targetNumber' => 'string',
        'campaignId' => 'string',
        'publisherId' => 'string',
        'publisherSubId' => 'string',
        'targetId' => 'string',
        'inboundCallId' => 'string',
        'callDt' => 'int',
        'inboundPhoneNumber' => 'string',
        'number' => 'string',
        'numberId' => 'string',
        'isFromNumberPool' => 'bool',
        'numberPoolId' => 'string',
        'numberPoolName' => 'string',
        'timeToCallInSeconds' => 'int',
        'callCompletedDt' => 'int',
        'callConnectionDt' => 'int',
        'callLengthInSeconds' => 'int',
        'connectedCallLengthInSeconds' => 'int',
        'endCallSource' => 'string',
        'hasConnected' => 'bool',
        'hasPayout' => 'bool',
        'hasPreviouslyConnected' => 'bool',
        'hasRecording' => 'bool',
        'hasConverted' => 'bool',
        'isLive' => 'bool',
        'conversionAmount' => 'int',
        'profitNet' => 'float',
        'profitGross' => 'int',
        'payoutAmount' => 'int',
        'totalCost' => 'float',
        'telcoCost' => 'float',
        'recordingUrl' => 'string',
        'timeToConnectInSeconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaignName' => null,
        'publisherName' => null,
        'targetName' => null,
        'targetNumber' => null,
        'campaignId' => null,
        'publisherId' => null,
        'publisherSubId' => null,
        'targetId' => null,
        'inboundCallId' => null,
        'callDt' => 'int64',
        'inboundPhoneNumber' => null,
        'number' => null,
        'numberId' => null,
        'isFromNumberPool' => null,
        'numberPoolId' => null,
        'numberPoolName' => null,
        'timeToCallInSeconds' => 'int32',
        'callCompletedDt' => 'int64',
        'callConnectionDt' => 'int64',
        'callLengthInSeconds' => 'int32',
        'connectedCallLengthInSeconds' => 'int32',
        'endCallSource' => null,
        'hasConnected' => null,
        'hasPayout' => null,
        'hasPreviouslyConnected' => null,
        'hasRecording' => null,
        'hasConverted' => null,
        'isLive' => null,
        'conversionAmount' => 'int32',
        'profitNet' => null,
        'profitGross' => 'int32',
        'payoutAmount' => 'int32',
        'totalCost' => null,
        'telcoCost' => null,
        'recordingUrl' => null,
        'timeToConnectInSeconds' => 'int32'
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
        'campaignName' => 'campaignName',
        'publisherName' => 'publisherName',
        'targetName' => 'targetName',
        'targetNumber' => 'targetNumber',
        'campaignId' => 'campaignId',
        'publisherId' => 'publisherId',
        'publisherSubId' => 'publisherSubId',
        'targetId' => 'targetId',
        'inboundCallId' => 'inboundCallId',
        'callDt' => 'callDt',
        'inboundPhoneNumber' => 'inboundPhoneNumber',
        'number' => 'number',
        'numberId' => 'numberId',
        'isFromNumberPool' => 'isFromNumberPool',
        'numberPoolId' => 'numberPoolId',
        'numberPoolName' => 'numberPoolName',
        'timeToCallInSeconds' => 'timeToCallInSeconds',
        'callCompletedDt' => 'callCompletedDt',
        'callConnectionDt' => 'callConnectionDt',
        'callLengthInSeconds' => 'callLengthInSeconds',
        'connectedCallLengthInSeconds' => 'connectedCallLengthInSeconds',
        'endCallSource' => 'endCallSource',
        'hasConnected' => 'hasConnected',
        'hasPayout' => 'hasPayout',
        'hasPreviouslyConnected' => 'hasPreviouslyConnected',
        'hasRecording' => 'hasRecording',
        'hasConverted' => 'hasConverted',
        'isLive' => 'isLive',
        'conversionAmount' => 'conversionAmount',
        'profitNet' => 'profitNet',
        'profitGross' => 'profitGross',
        'payoutAmount' => 'payoutAmount',
        'totalCost' => 'totalCost',
        'telcoCost' => 'telcoCost',
        'recordingUrl' => 'recordingUrl',
        'timeToConnectInSeconds' => 'timeToConnectInSeconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignName' => 'setCampaignName',
        'publisherName' => 'setPublisherName',
        'targetName' => 'setTargetName',
        'targetNumber' => 'setTargetNumber',
        'campaignId' => 'setCampaignId',
        'publisherId' => 'setPublisherId',
        'publisherSubId' => 'setPublisherSubId',
        'targetId' => 'setTargetId',
        'inboundCallId' => 'setInboundCallId',
        'callDt' => 'setCallDt',
        'inboundPhoneNumber' => 'setInboundPhoneNumber',
        'number' => 'setNumber',
        'numberId' => 'setNumberId',
        'isFromNumberPool' => 'setIsFromNumberPool',
        'numberPoolId' => 'setNumberPoolId',
        'numberPoolName' => 'setNumberPoolName',
        'timeToCallInSeconds' => 'setTimeToCallInSeconds',
        'callCompletedDt' => 'setCallCompletedDt',
        'callConnectionDt' => 'setCallConnectionDt',
        'callLengthInSeconds' => 'setCallLengthInSeconds',
        'connectedCallLengthInSeconds' => 'setConnectedCallLengthInSeconds',
        'endCallSource' => 'setEndCallSource',
        'hasConnected' => 'setHasConnected',
        'hasPayout' => 'setHasPayout',
        'hasPreviouslyConnected' => 'setHasPreviouslyConnected',
        'hasRecording' => 'setHasRecording',
        'hasConverted' => 'setHasConverted',
        'isLive' => 'setIsLive',
        'conversionAmount' => 'setConversionAmount',
        'profitNet' => 'setProfitNet',
        'profitGross' => 'setProfitGross',
        'payoutAmount' => 'setPayoutAmount',
        'totalCost' => 'setTotalCost',
        'telcoCost' => 'setTelcoCost',
        'recordingUrl' => 'setRecordingUrl',
        'timeToConnectInSeconds' => 'setTimeToConnectInSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignName' => 'getCampaignName',
        'publisherName' => 'getPublisherName',
        'targetName' => 'getTargetName',
        'targetNumber' => 'getTargetNumber',
        'campaignId' => 'getCampaignId',
        'publisherId' => 'getPublisherId',
        'publisherSubId' => 'getPublisherSubId',
        'targetId' => 'getTargetId',
        'inboundCallId' => 'getInboundCallId',
        'callDt' => 'getCallDt',
        'inboundPhoneNumber' => 'getInboundPhoneNumber',
        'number' => 'getNumber',
        'numberId' => 'getNumberId',
        'isFromNumberPool' => 'getIsFromNumberPool',
        'numberPoolId' => 'getNumberPoolId',
        'numberPoolName' => 'getNumberPoolName',
        'timeToCallInSeconds' => 'getTimeToCallInSeconds',
        'callCompletedDt' => 'getCallCompletedDt',
        'callConnectionDt' => 'getCallConnectionDt',
        'callLengthInSeconds' => 'getCallLengthInSeconds',
        'connectedCallLengthInSeconds' => 'getConnectedCallLengthInSeconds',
        'endCallSource' => 'getEndCallSource',
        'hasConnected' => 'getHasConnected',
        'hasPayout' => 'getHasPayout',
        'hasPreviouslyConnected' => 'getHasPreviouslyConnected',
        'hasRecording' => 'getHasRecording',
        'hasConverted' => 'getHasConverted',
        'isLive' => 'getIsLive',
        'conversionAmount' => 'getConversionAmount',
        'profitNet' => 'getProfitNet',
        'profitGross' => 'getProfitGross',
        'payoutAmount' => 'getPayoutAmount',
        'totalCost' => 'getTotalCost',
        'telcoCost' => 'getTelcoCost',
        'recordingUrl' => 'getRecordingUrl',
        'timeToConnectInSeconds' => 'getTimeToConnectInSeconds'
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
        $this->container['campaignName'] = $data['campaignName'] ?? null;
        $this->container['publisherName'] = $data['publisherName'] ?? null;
        $this->container['targetName'] = $data['targetName'] ?? null;
        $this->container['targetNumber'] = $data['targetNumber'] ?? null;
        $this->container['campaignId'] = $data['campaignId'] ?? null;
        $this->container['publisherId'] = $data['publisherId'] ?? null;
        $this->container['publisherSubId'] = $data['publisherSubId'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['inboundCallId'] = $data['inboundCallId'] ?? null;
        $this->container['callDt'] = $data['callDt'] ?? null;
        $this->container['inboundPhoneNumber'] = $data['inboundPhoneNumber'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['numberId'] = $data['numberId'] ?? null;
        $this->container['isFromNumberPool'] = $data['isFromNumberPool'] ?? null;
        $this->container['numberPoolId'] = $data['numberPoolId'] ?? null;
        $this->container['numberPoolName'] = $data['numberPoolName'] ?? null;
        $this->container['timeToCallInSeconds'] = $data['timeToCallInSeconds'] ?? null;
        $this->container['callCompletedDt'] = $data['callCompletedDt'] ?? null;
        $this->container['callConnectionDt'] = $data['callConnectionDt'] ?? null;
        $this->container['callLengthInSeconds'] = $data['callLengthInSeconds'] ?? null;
        $this->container['connectedCallLengthInSeconds'] = $data['connectedCallLengthInSeconds'] ?? null;
        $this->container['endCallSource'] = $data['endCallSource'] ?? null;
        $this->container['hasConnected'] = $data['hasConnected'] ?? null;
        $this->container['hasPayout'] = $data['hasPayout'] ?? null;
        $this->container['hasPreviouslyConnected'] = $data['hasPreviouslyConnected'] ?? null;
        $this->container['hasRecording'] = $data['hasRecording'] ?? null;
        $this->container['hasConverted'] = $data['hasConverted'] ?? null;
        $this->container['isLive'] = $data['isLive'] ?? null;
        $this->container['conversionAmount'] = $data['conversionAmount'] ?? null;
        $this->container['profitNet'] = $data['profitNet'] ?? null;
        $this->container['profitGross'] = $data['profitGross'] ?? null;
        $this->container['payoutAmount'] = $data['payoutAmount'] ?? null;
        $this->container['totalCost'] = $data['totalCost'] ?? null;
        $this->container['telcoCost'] = $data['telcoCost'] ?? null;
        $this->container['recordingUrl'] = $data['recordingUrl'] ?? null;
        $this->container['timeToConnectInSeconds'] = $data['timeToConnectInSeconds'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaignName'] === null) {
            $invalidProperties[] = "'campaignName' can't be null";
        }
        if ($this->container['publisherName'] === null) {
            $invalidProperties[] = "'publisherName' can't be null";
        }
        if ($this->container['targetName'] === null) {
            $invalidProperties[] = "'targetName' can't be null";
        }
        if ($this->container['targetNumber'] === null) {
            $invalidProperties[] = "'targetNumber' can't be null";
        }
        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['publisherId'] === null) {
            $invalidProperties[] = "'publisherId' can't be null";
        }
        if ($this->container['publisherSubId'] === null) {
            $invalidProperties[] = "'publisherSubId' can't be null";
        }
        if ($this->container['targetId'] === null) {
            $invalidProperties[] = "'targetId' can't be null";
        }
        if ($this->container['inboundCallId'] === null) {
            $invalidProperties[] = "'inboundCallId' can't be null";
        }
        if ($this->container['callDt'] === null) {
            $invalidProperties[] = "'callDt' can't be null";
        }
        if ($this->container['inboundPhoneNumber'] === null) {
            $invalidProperties[] = "'inboundPhoneNumber' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['numberId'] === null) {
            $invalidProperties[] = "'numberId' can't be null";
        }
        if ($this->container['isFromNumberPool'] === null) {
            $invalidProperties[] = "'isFromNumberPool' can't be null";
        }
        if ($this->container['numberPoolId'] === null) {
            $invalidProperties[] = "'numberPoolId' can't be null";
        }
        if ($this->container['numberPoolName'] === null) {
            $invalidProperties[] = "'numberPoolName' can't be null";
        }
        if ($this->container['timeToCallInSeconds'] === null) {
            $invalidProperties[] = "'timeToCallInSeconds' can't be null";
        }
        if ($this->container['callCompletedDt'] === null) {
            $invalidProperties[] = "'callCompletedDt' can't be null";
        }
        if ($this->container['callConnectionDt'] === null) {
            $invalidProperties[] = "'callConnectionDt' can't be null";
        }
        if ($this->container['callLengthInSeconds'] === null) {
            $invalidProperties[] = "'callLengthInSeconds' can't be null";
        }
        if ($this->container['connectedCallLengthInSeconds'] === null) {
            $invalidProperties[] = "'connectedCallLengthInSeconds' can't be null";
        }
        if ($this->container['endCallSource'] === null) {
            $invalidProperties[] = "'endCallSource' can't be null";
        }
        if ($this->container['hasConnected'] === null) {
            $invalidProperties[] = "'hasConnected' can't be null";
        }
        if ($this->container['hasPayout'] === null) {
            $invalidProperties[] = "'hasPayout' can't be null";
        }
        if ($this->container['hasPreviouslyConnected'] === null) {
            $invalidProperties[] = "'hasPreviouslyConnected' can't be null";
        }
        if ($this->container['hasRecording'] === null) {
            $invalidProperties[] = "'hasRecording' can't be null";
        }
        if ($this->container['hasConverted'] === null) {
            $invalidProperties[] = "'hasConverted' can't be null";
        }
        if ($this->container['isLive'] === null) {
            $invalidProperties[] = "'isLive' can't be null";
        }
        if ($this->container['conversionAmount'] === null) {
            $invalidProperties[] = "'conversionAmount' can't be null";
        }
        if ($this->container['profitNet'] === null) {
            $invalidProperties[] = "'profitNet' can't be null";
        }
        if ($this->container['profitGross'] === null) {
            $invalidProperties[] = "'profitGross' can't be null";
        }
        if ($this->container['payoutAmount'] === null) {
            $invalidProperties[] = "'payoutAmount' can't be null";
        }
        if ($this->container['totalCost'] === null) {
            $invalidProperties[] = "'totalCost' can't be null";
        }
        if ($this->container['telcoCost'] === null) {
            $invalidProperties[] = "'telcoCost' can't be null";
        }
        if ($this->container['recordingUrl'] === null) {
            $invalidProperties[] = "'recordingUrl' can't be null";
        }
        if ($this->container['timeToConnectInSeconds'] === null) {
            $invalidProperties[] = "'timeToConnectInSeconds' can't be null";
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
     * Gets campaignName
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string $campaignName campaignName
     *
     * @return self
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets publisherName
     *
     * @return string
     */
    public function getPublisherName()
    {
        return $this->container['publisherName'];
    }

    /**
     * Sets publisherName
     *
     * @param string $publisherName publisherName
     *
     * @return self
     */
    public function setPublisherName($publisherName)
    {
        $this->container['publisherName'] = $publisherName;

        return $this;
    }

    /**
     * Gets targetName
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
     * Sets targetName
     *
     * @param string $targetName targetName
     *
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;

        return $this;
    }

    /**
     * Gets targetNumber
     *
     * @return string
     */
    public function getTargetNumber()
    {
        return $this->container['targetNumber'];
    }

    /**
     * Sets targetNumber
     *
     * @param string $targetNumber targetNumber
     *
     * @return self
     */
    public function setTargetNumber($targetNumber)
    {
        $this->container['targetNumber'] = $targetNumber;

        return $this;
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
     * Gets publisherId
     *
     * @return string
     */
    public function getPublisherId()
    {
        return $this->container['publisherId'];
    }

    /**
     * Sets publisherId
     *
     * @param string $publisherId publisherId
     *
     * @return self
     */
    public function setPublisherId($publisherId)
    {
        $this->container['publisherId'] = $publisherId;

        return $this;
    }

    /**
     * Gets publisherSubId
     *
     * @return string
     */
    public function getPublisherSubId()
    {
        return $this->container['publisherSubId'];
    }

    /**
     * Sets publisherSubId
     *
     * @param string $publisherSubId publisherSubId
     *
     * @return self
     */
    public function setPublisherSubId($publisherSubId)
    {
        $this->container['publisherSubId'] = $publisherSubId;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string $targetId targetId
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets inboundCallId
     *
     * @return string
     */
    public function getInboundCallId()
    {
        return $this->container['inboundCallId'];
    }

    /**
     * Sets inboundCallId
     *
     * @param string $inboundCallId inboundCallId
     *
     * @return self
     */
    public function setInboundCallId($inboundCallId)
    {
        $this->container['inboundCallId'] = $inboundCallId;

        return $this;
    }

    /**
     * Gets callDt
     *
     * @return int
     */
    public function getCallDt()
    {
        return $this->container['callDt'];
    }

    /**
     * Sets callDt
     *
     * @param int $callDt callDt
     *
     * @return self
     */
    public function setCallDt($callDt)
    {
        $this->container['callDt'] = $callDt;

        return $this;
    }

    /**
     * Gets inboundPhoneNumber
     *
     * @return string
     */
    public function getInboundPhoneNumber()
    {
        return $this->container['inboundPhoneNumber'];
    }

    /**
     * Sets inboundPhoneNumber
     *
     * @param string $inboundPhoneNumber inboundPhoneNumber
     *
     * @return self
     */
    public function setInboundPhoneNumber($inboundPhoneNumber)
    {
        $this->container['inboundPhoneNumber'] = $inboundPhoneNumber;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets numberId
     *
     * @return string
     */
    public function getNumberId()
    {
        return $this->container['numberId'];
    }

    /**
     * Sets numberId
     *
     * @param string $numberId numberId
     *
     * @return self
     */
    public function setNumberId($numberId)
    {
        $this->container['numberId'] = $numberId;

        return $this;
    }

    /**
     * Gets isFromNumberPool
     *
     * @return bool
     */
    public function getIsFromNumberPool()
    {
        return $this->container['isFromNumberPool'];
    }

    /**
     * Sets isFromNumberPool
     *
     * @param bool $isFromNumberPool isFromNumberPool
     *
     * @return self
     */
    public function setIsFromNumberPool($isFromNumberPool)
    {
        $this->container['isFromNumberPool'] = $isFromNumberPool;

        return $this;
    }

    /**
     * Gets numberPoolId
     *
     * @return string
     */
    public function getNumberPoolId()
    {
        return $this->container['numberPoolId'];
    }

    /**
     * Sets numberPoolId
     *
     * @param string $numberPoolId numberPoolId
     *
     * @return self
     */
    public function setNumberPoolId($numberPoolId)
    {
        $this->container['numberPoolId'] = $numberPoolId;

        return $this;
    }

    /**
     * Gets numberPoolName
     *
     * @return string
     */
    public function getNumberPoolName()
    {
        return $this->container['numberPoolName'];
    }

    /**
     * Sets numberPoolName
     *
     * @param string $numberPoolName numberPoolName
     *
     * @return self
     */
    public function setNumberPoolName($numberPoolName)
    {
        $this->container['numberPoolName'] = $numberPoolName;

        return $this;
    }

    /**
     * Gets timeToCallInSeconds
     *
     * @return int
     */
    public function getTimeToCallInSeconds()
    {
        return $this->container['timeToCallInSeconds'];
    }

    /**
     * Sets timeToCallInSeconds
     *
     * @param int $timeToCallInSeconds timeToCallInSeconds
     *
     * @return self
     */
    public function setTimeToCallInSeconds($timeToCallInSeconds)
    {
        $this->container['timeToCallInSeconds'] = $timeToCallInSeconds;

        return $this;
    }

    /**
     * Gets callCompletedDt
     *
     * @return int
     */
    public function getCallCompletedDt()
    {
        return $this->container['callCompletedDt'];
    }

    /**
     * Sets callCompletedDt
     *
     * @param int $callCompletedDt callCompletedDt
     *
     * @return self
     */
    public function setCallCompletedDt($callCompletedDt)
    {
        $this->container['callCompletedDt'] = $callCompletedDt;

        return $this;
    }

    /**
     * Gets callConnectionDt
     *
     * @return int
     */
    public function getCallConnectionDt()
    {
        return $this->container['callConnectionDt'];
    }

    /**
     * Sets callConnectionDt
     *
     * @param int $callConnectionDt callConnectionDt
     *
     * @return self
     */
    public function setCallConnectionDt($callConnectionDt)
    {
        $this->container['callConnectionDt'] = $callConnectionDt;

        return $this;
    }

    /**
     * Gets callLengthInSeconds
     *
     * @return int
     */
    public function getCallLengthInSeconds()
    {
        return $this->container['callLengthInSeconds'];
    }

    /**
     * Sets callLengthInSeconds
     *
     * @param int $callLengthInSeconds callLengthInSeconds
     *
     * @return self
     */
    public function setCallLengthInSeconds($callLengthInSeconds)
    {
        $this->container['callLengthInSeconds'] = $callLengthInSeconds;

        return $this;
    }

    /**
     * Gets connectedCallLengthInSeconds
     *
     * @return int
     */
    public function getConnectedCallLengthInSeconds()
    {
        return $this->container['connectedCallLengthInSeconds'];
    }

    /**
     * Sets connectedCallLengthInSeconds
     *
     * @param int $connectedCallLengthInSeconds connectedCallLengthInSeconds
     *
     * @return self
     */
    public function setConnectedCallLengthInSeconds($connectedCallLengthInSeconds)
    {
        $this->container['connectedCallLengthInSeconds'] = $connectedCallLengthInSeconds;

        return $this;
    }

    /**
     * Gets endCallSource
     *
     * @return string
     */
    public function getEndCallSource()
    {
        return $this->container['endCallSource'];
    }

    /**
     * Sets endCallSource
     *
     * @param string $endCallSource endCallSource
     *
     * @return self
     */
    public function setEndCallSource($endCallSource)
    {
        $this->container['endCallSource'] = $endCallSource;

        return $this;
    }

    /**
     * Gets hasConnected
     *
     * @return bool
     */
    public function getHasConnected()
    {
        return $this->container['hasConnected'];
    }

    /**
     * Sets hasConnected
     *
     * @param bool $hasConnected hasConnected
     *
     * @return self
     */
    public function setHasConnected($hasConnected)
    {
        $this->container['hasConnected'] = $hasConnected;

        return $this;
    }

    /**
     * Gets hasPayout
     *
     * @return bool
     */
    public function getHasPayout()
    {
        return $this->container['hasPayout'];
    }

    /**
     * Sets hasPayout
     *
     * @param bool $hasPayout hasPayout
     *
     * @return self
     */
    public function setHasPayout($hasPayout)
    {
        $this->container['hasPayout'] = $hasPayout;

        return $this;
    }

    /**
     * Gets hasPreviouslyConnected
     *
     * @return bool
     */
    public function getHasPreviouslyConnected()
    {
        return $this->container['hasPreviouslyConnected'];
    }

    /**
     * Sets hasPreviouslyConnected
     *
     * @param bool $hasPreviouslyConnected hasPreviouslyConnected
     *
     * @return self
     */
    public function setHasPreviouslyConnected($hasPreviouslyConnected)
    {
        $this->container['hasPreviouslyConnected'] = $hasPreviouslyConnected;

        return $this;
    }

    /**
     * Gets hasRecording
     *
     * @return bool
     */
    public function getHasRecording()
    {
        return $this->container['hasRecording'];
    }

    /**
     * Sets hasRecording
     *
     * @param bool $hasRecording hasRecording
     *
     * @return self
     */
    public function setHasRecording($hasRecording)
    {
        $this->container['hasRecording'] = $hasRecording;

        return $this;
    }

    /**
     * Gets hasConverted
     *
     * @return bool
     */
    public function getHasConverted()
    {
        return $this->container['hasConverted'];
    }

    /**
     * Sets hasConverted
     *
     * @param bool $hasConverted hasConverted
     *
     * @return self
     */
    public function setHasConverted($hasConverted)
    {
        $this->container['hasConverted'] = $hasConverted;

        return $this;
    }

    /**
     * Gets isLive
     *
     * @return bool
     */
    public function getIsLive()
    {
        return $this->container['isLive'];
    }

    /**
     * Sets isLive
     *
     * @param bool $isLive isLive
     *
     * @return self
     */
    public function setIsLive($isLive)
    {
        $this->container['isLive'] = $isLive;

        return $this;
    }

    /**
     * Gets conversionAmount
     *
     * @return int
     */
    public function getConversionAmount()
    {
        return $this->container['conversionAmount'];
    }

    /**
     * Sets conversionAmount
     *
     * @param int $conversionAmount conversionAmount
     *
     * @return self
     */
    public function setConversionAmount($conversionAmount)
    {
        $this->container['conversionAmount'] = $conversionAmount;

        return $this;
    }

    /**
     * Gets profitNet
     *
     * @return float
     */
    public function getProfitNet()
    {
        return $this->container['profitNet'];
    }

    /**
     * Sets profitNet
     *
     * @param float $profitNet profitNet
     *
     * @return self
     */
    public function setProfitNet($profitNet)
    {
        $this->container['profitNet'] = $profitNet;

        return $this;
    }

    /**
     * Gets profitGross
     *
     * @return int
     */
    public function getProfitGross()
    {
        return $this->container['profitGross'];
    }

    /**
     * Sets profitGross
     *
     * @param int $profitGross profitGross
     *
     * @return self
     */
    public function setProfitGross($profitGross)
    {
        $this->container['profitGross'] = $profitGross;

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
     * Gets totalCost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return $this->container['totalCost'];
    }

    /**
     * Sets totalCost
     *
     * @param float $totalCost totalCost
     *
     * @return self
     */
    public function setTotalCost($totalCost)
    {
        $this->container['totalCost'] = $totalCost;

        return $this;
    }

    /**
     * Gets telcoCost
     *
     * @return float
     */
    public function getTelcoCost()
    {
        return $this->container['telcoCost'];
    }

    /**
     * Sets telcoCost
     *
     * @param float $telcoCost telcoCost
     *
     * @return self
     */
    public function setTelcoCost($telcoCost)
    {
        $this->container['telcoCost'] = $telcoCost;

        return $this;
    }

    /**
     * Gets recordingUrl
     *
     * @return string
     */
    public function getRecordingUrl()
    {
        return $this->container['recordingUrl'];
    }

    /**
     * Sets recordingUrl
     *
     * @param string $recordingUrl recordingUrl
     *
     * @return self
     */
    public function setRecordingUrl($recordingUrl)
    {
        $this->container['recordingUrl'] = $recordingUrl;

        return $this;
    }

    /**
     * Gets timeToConnectInSeconds
     *
     * @return int
     */
    public function getTimeToConnectInSeconds()
    {
        return $this->container['timeToConnectInSeconds'];
    }

    /**
     * Sets timeToConnectInSeconds
     *
     * @param int $timeToConnectInSeconds timeToConnectInSeconds
     *
     * @return self
     */
    public function setTimeToConnectInSeconds($timeToConnectInSeconds)
    {
        $this->container['timeToConnectInSeconds'] = $timeToConnectInSeconds;

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


