<?php
/**
 * UserInvitation
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
 * UserInvitation Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserInvitation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserInvitation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'email' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'createdDate' => 'string',
        'expirationDate' => 'string',
        'role' => 'string',
        'associatedRoleIds' => 'string[]',
        'isActive' => 'bool',
        'enabled' => 'bool',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'email' => null,
        'firstName' => null,
        'lastName' => null,
        'createdDate' => null,
        'expirationDate' => null,
        'role' => null,
        'associatedRoleIds' => null,
        'isActive' => null,
        'enabled' => null,
        'url' => null
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
        'id' => 'id',
        'email' => 'email',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'createdDate' => 'createdDate',
        'expirationDate' => 'expirationDate',
        'role' => 'role',
        'associatedRoleIds' => 'associatedRoleIds',
        'isActive' => 'isActive',
        'enabled' => 'enabled',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'createdDate' => 'setCreatedDate',
        'expirationDate' => 'setExpirationDate',
        'role' => 'setRole',
        'associatedRoleIds' => 'setAssociatedRoleIds',
        'isActive' => 'setIsActive',
        'enabled' => 'setEnabled',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'createdDate' => 'getCreatedDate',
        'expirationDate' => 'getExpirationDate',
        'role' => 'getRole',
        'associatedRoleIds' => 'getAssociatedRoleIds',
        'isActive' => 'getIsActive',
        'enabled' => 'getEnabled',
        'url' => 'getUrl'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['createdDate'] = $data['createdDate'] ?? null;
        $this->container['expirationDate'] = $data['expirationDate'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['associatedRoleIds'] = $data['associatedRoleIds'] ?? null;
        $this->container['isActive'] = $data['isActive'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ($this->container['createdDate'] === null) {
            $invalidProperties[] = "'createdDate' can't be null";
        }
        if ($this->container['expirationDate'] === null) {
            $invalidProperties[] = "'expirationDate' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['associatedRoleIds'] === null) {
            $invalidProperties[] = "'associatedRoleIds' can't be null";
        }
        if ($this->container['isActive'] === null) {
            $invalidProperties[] = "'isActive' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param string $createdDate createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param string $expirationDate expirationDate
     *
     * @return self
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets associatedRoleIds
     *
     * @return string[]
     */
    public function getAssociatedRoleIds()
    {
        return $this->container['associatedRoleIds'];
    }

    /**
     * Sets associatedRoleIds
     *
     * @param string[] $associatedRoleIds 
     *
     * @return self
     */
    public function setAssociatedRoleIds($associatedRoleIds)
    {
        $this->container['associatedRoleIds'] = $associatedRoleIds;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool $isActive isActive
     *
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

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
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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

