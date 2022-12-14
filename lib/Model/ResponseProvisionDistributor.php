<?php
/**
 * ResponseProvisionDistributor
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Distributor PPU Service
 *
 * © KnowRoaming LTD 2017
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ResponseProvisionDistributor Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseProvisionDistributor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseProvisionDistributor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distributor_id' => 'int',
'distributor_name' => 'string',
'distributor_note' => 'string',
'parent_distributor_id' => 'int',
'login_username' => 'string',
'login_password' => 'string',
'login_email' => 'string',
'api_key' => 'string',
'inventory_id' => 'int',
'parent_inventory_id' => 'int',
'inventory_name' => 'string',
'inventory_type' => 'string',
'date_created_epoch' => 'int',
'status' => 'string',
'date_deactivated' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'distributor_id' => 'int32',
'distributor_name' => null,
'distributor_note' => null,
'parent_distributor_id' => 'int32',
'login_username' => null,
'login_password' => null,
'login_email' => null,
'api_key' => null,
'inventory_id' => 'int32',
'parent_inventory_id' => 'int32',
'inventory_name' => null,
'inventory_type' => null,
'date_created_epoch' => 'int64',
'status' => null,
'date_deactivated' => 'int64'    ];

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
        'distributor_id' => 'distributorId',
'distributor_name' => 'distributorName',
'distributor_note' => 'distributorNote',
'parent_distributor_id' => 'parentDistributorId',
'login_username' => 'loginUsername',
'login_password' => 'loginPassword',
'login_email' => 'loginEmail',
'api_key' => 'apiKey',
'inventory_id' => 'inventoryId',
'parent_inventory_id' => 'parentInventoryId',
'inventory_name' => 'inventoryName',
'inventory_type' => 'inventoryType',
'date_created_epoch' => 'dateCreatedEpoch',
'status' => 'status',
'date_deactivated' => 'dateDeactivated'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distributor_id' => 'setDistributorId',
'distributor_name' => 'setDistributorName',
'distributor_note' => 'setDistributorNote',
'parent_distributor_id' => 'setParentDistributorId',
'login_username' => 'setLoginUsername',
'login_password' => 'setLoginPassword',
'login_email' => 'setLoginEmail',
'api_key' => 'setApiKey',
'inventory_id' => 'setInventoryId',
'parent_inventory_id' => 'setParentInventoryId',
'inventory_name' => 'setInventoryName',
'inventory_type' => 'setInventoryType',
'date_created_epoch' => 'setDateCreatedEpoch',
'status' => 'setStatus',
'date_deactivated' => 'setDateDeactivated'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distributor_id' => 'getDistributorId',
'distributor_name' => 'getDistributorName',
'distributor_note' => 'getDistributorNote',
'parent_distributor_id' => 'getParentDistributorId',
'login_username' => 'getLoginUsername',
'login_password' => 'getLoginPassword',
'login_email' => 'getLoginEmail',
'api_key' => 'getApiKey',
'inventory_id' => 'getInventoryId',
'parent_inventory_id' => 'getParentInventoryId',
'inventory_name' => 'getInventoryName',
'inventory_type' => 'getInventoryType',
'date_created_epoch' => 'getDateCreatedEpoch',
'status' => 'getStatus',
'date_deactivated' => 'getDateDeactivated'    ];

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

    const INVENTORY_TYPE_WHOLESALE = 'WHOLESALE';
const INVENTORY_TYPE_T4_T = 'T4T';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInventoryTypeAllowableValues()
    {
        return [
            self::INVENTORY_TYPE_WHOLESALE,
self::INVENTORY_TYPE_T4_T,        ];
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
        $this->container['distributor_id'] = isset($data['distributor_id']) ? $data['distributor_id'] : null;
        $this->container['distributor_name'] = isset($data['distributor_name']) ? $data['distributor_name'] : null;
        $this->container['distributor_note'] = isset($data['distributor_note']) ? $data['distributor_note'] : null;
        $this->container['parent_distributor_id'] = isset($data['parent_distributor_id']) ? $data['parent_distributor_id'] : null;
        $this->container['login_username'] = isset($data['login_username']) ? $data['login_username'] : null;
        $this->container['login_password'] = isset($data['login_password']) ? $data['login_password'] : null;
        $this->container['login_email'] = isset($data['login_email']) ? $data['login_email'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['parent_inventory_id'] = isset($data['parent_inventory_id']) ? $data['parent_inventory_id'] : null;
        $this->container['inventory_name'] = isset($data['inventory_name']) ? $data['inventory_name'] : null;
        $this->container['inventory_type'] = isset($data['inventory_type']) ? $data['inventory_type'] : null;
        $this->container['date_created_epoch'] = isset($data['date_created_epoch']) ? $data['date_created_epoch'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date_deactivated'] = isset($data['date_deactivated']) ? $data['date_deactivated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['distributor_id'] === null) {
            $invalidProperties[] = "'distributor_id' can't be null";
        }
        if ($this->container['distributor_name'] === null) {
            $invalidProperties[] = "'distributor_name' can't be null";
        }
        if ($this->container['distributor_note'] === null) {
            $invalidProperties[] = "'distributor_note' can't be null";
        }
        if ($this->container['parent_distributor_id'] === null) {
            $invalidProperties[] = "'parent_distributor_id' can't be null";
        }
        if ($this->container['login_username'] === null) {
            $invalidProperties[] = "'login_username' can't be null";
        }
        if ($this->container['login_password'] === null) {
            $invalidProperties[] = "'login_password' can't be null";
        }
        if ($this->container['login_email'] === null) {
            $invalidProperties[] = "'login_email' can't be null";
        }
        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ($this->container['inventory_id'] === null) {
            $invalidProperties[] = "'inventory_id' can't be null";
        }
        if ($this->container['parent_inventory_id'] === null) {
            $invalidProperties[] = "'parent_inventory_id' can't be null";
        }
        if ($this->container['inventory_name'] === null) {
            $invalidProperties[] = "'inventory_name' can't be null";
        }
        $allowedValues = $this->getInventoryTypeAllowableValues();
        if (!is_null($this->container['inventory_type']) && !in_array($this->container['inventory_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inventory_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date_created_epoch'] === null) {
            $invalidProperties[] = "'date_created_epoch' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['date_deactivated'] === null) {
            $invalidProperties[] = "'date_deactivated' can't be null";
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
     * Gets distributor_id
     *
     * @return int
     */
    public function getDistributorId()
    {
        return $this->container['distributor_id'];
    }

    /**
     * Sets distributor_id
     *
     * @param int $distributor_id The unique identifier of a distributor
     *
     * @return $this
     */
    public function setDistributorId($distributor_id)
    {
        $this->container['distributor_id'] = $distributor_id;

        return $this;
    }

    /**
     * Gets distributor_name
     *
     * @return string
     */
    public function getDistributorName()
    {
        return $this->container['distributor_name'];
    }

    /**
     * Sets distributor_name
     *
     * @param string $distributor_name The name of a distributor
     *
     * @return $this
     */
    public function setDistributorName($distributor_name)
    {
        $this->container['distributor_name'] = $distributor_name;

        return $this;
    }

    /**
     * Gets distributor_note
     *
     * @return string
     */
    public function getDistributorNote()
    {
        return $this->container['distributor_note'];
    }

    /**
     * Sets distributor_note
     *
     * @param string $distributor_note The note of a distributor
     *
     * @return $this
     */
    public function setDistributorNote($distributor_note)
    {
        $this->container['distributor_note'] = $distributor_note;

        return $this;
    }

    /**
     * Gets parent_distributor_id
     *
     * @return int
     */
    public function getParentDistributorId()
    {
        return $this->container['parent_distributor_id'];
    }

    /**
     * Sets parent_distributor_id
     *
     * @param int $parent_distributor_id The unique identifier of a parent distributor
     *
     * @return $this
     */
    public function setParentDistributorId($parent_distributor_id)
    {
        $this->container['parent_distributor_id'] = $parent_distributor_id;

        return $this;
    }

    /**
     * Gets login_username
     *
     * @return string
     */
    public function getLoginUsername()
    {
        return $this->container['login_username'];
    }

    /**
     * Sets login_username
     *
     * @param string $login_username The username of a distributor login
     *
     * @return $this
     */
    public function setLoginUsername($login_username)
    {
        $this->container['login_username'] = $login_username;

        return $this;
    }

    /**
     * Gets login_password
     *
     * @return string
     */
    public function getLoginPassword()
    {
        return $this->container['login_password'];
    }

    /**
     * Sets login_password
     *
     * @param string $login_password The password of a distributor login
     *
     * @return $this
     */
    public function setLoginPassword($login_password)
    {
        $this->container['login_password'] = $login_password;

        return $this;
    }

    /**
     * Gets login_email
     *
     * @return string
     */
    public function getLoginEmail()
    {
        return $this->container['login_email'];
    }

    /**
     * Sets login_email
     *
     * @param string $login_email The email of a distributor login
     *
     * @return $this
     */
    public function setLoginEmail($login_email)
    {
        $this->container['login_email'] = $login_email;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key The API key of a distributor
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets inventory_id
     *
     * @return int
     */
    public function getInventoryId()
    {
        return $this->container['inventory_id'];
    }

    /**
     * Sets inventory_id
     *
     * @param int $inventory_id The unique identifier of an inventory under a distributor
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

        return $this;
    }

    /**
     * Gets parent_inventory_id
     *
     * @return int
     */
    public function getParentInventoryId()
    {
        return $this->container['parent_inventory_id'];
    }

    /**
     * Sets parent_inventory_id
     *
     * @param int $parent_inventory_id The unique identifier of a parent's inventory distributor
     *
     * @return $this
     */
    public function setParentInventoryId($parent_inventory_id)
    {
        $this->container['parent_inventory_id'] = $parent_inventory_id;

        return $this;
    }

    /**
     * Gets inventory_name
     *
     * @return string
     */
    public function getInventoryName()
    {
        return $this->container['inventory_name'];
    }

    /**
     * Sets inventory_name
     *
     * @param string $inventory_name The name of an inventory under a distributor
     *
     * @return $this
     */
    public function setInventoryName($inventory_name)
    {
        $this->container['inventory_name'] = $inventory_name;

        return $this;
    }

    /**
     * Gets inventory_type
     *
     * @return string
     */
    public function getInventoryType()
    {
        return $this->container['inventory_type'];
    }

    /**
     * Sets inventory_type
     *
     * @param string $inventory_type The inventory type this inventory has. Cannot be changed. Defaults to WHOLESALE
     *
     * @return $this
     */
    public function setInventoryType($inventory_type)
    {
        $allowedValues = $this->getInventoryTypeAllowableValues();
        if (!is_null($inventory_type) && !in_array($inventory_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inventory_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inventory_type'] = $inventory_type;

        return $this;
    }

    /**
     * Gets date_created_epoch
     *
     * @return int
     */
    public function getDateCreatedEpoch()
    {
        return $this->container['date_created_epoch'];
    }

    /**
     * Sets date_created_epoch
     *
     * @param int $date_created_epoch The created date of an inventory in epoch
     *
     * @return $this
     */
    public function setDateCreatedEpoch($date_created_epoch)
    {
        $this->container['date_created_epoch'] = $date_created_epoch;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the distributor
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date_deactivated
     *
     * @return int
     */
    public function getDateDeactivated()
    {
        return $this->container['date_deactivated'];
    }

    /**
     * Sets date_deactivated
     *
     * @param int $date_deactivated The date when the distributor is deActivated
     *
     * @return $this
     */
    public function setDateDeactivated($date_deactivated)
    {
        $this->container['date_deactivated'] = $date_deactivated;

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
