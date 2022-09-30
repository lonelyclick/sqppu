<?php
/**
 * ResponseInventoryStatus
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
 * ResponseInventoryStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseInventoryStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseInventoryStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_id' => 'int',
'network_access_stage' => 'string',
'rates_stage' => 'string',
'profile_stage' => 'string',
'inventory_profile_stage' => 'string',
'date_created' => 'int',
'date_modified' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_id' => 'int32',
'network_access_stage' => null,
'rates_stage' => null,
'profile_stage' => null,
'inventory_profile_stage' => null,
'date_created' => 'int64',
'date_modified' => 'int64'    ];

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
        'inventory_id' => 'inventoryId',
'network_access_stage' => 'networkAccessStage',
'rates_stage' => 'ratesStage',
'profile_stage' => 'profileStage',
'inventory_profile_stage' => 'inventoryProfileStage',
'date_created' => 'dateCreated',
'date_modified' => 'dateModified'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_id' => 'setInventoryId',
'network_access_stage' => 'setNetworkAccessStage',
'rates_stage' => 'setRatesStage',
'profile_stage' => 'setProfileStage',
'inventory_profile_stage' => 'setInventoryProfileStage',
'date_created' => 'setDateCreated',
'date_modified' => 'setDateModified'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_id' => 'getInventoryId',
'network_access_stage' => 'getNetworkAccessStage',
'rates_stage' => 'getRatesStage',
'profile_stage' => 'getProfileStage',
'inventory_profile_stage' => 'getInventoryProfileStage',
'date_created' => 'getDateCreated',
'date_modified' => 'getDateModified'    ];

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

    const NETWORK_ACCESS_STAGE_INITIALIZATION = 'INITIALIZATION';
const NETWORK_ACCESS_STAGE_UPDATED = 'UPDATED';
const RATES_STAGE_INITIALIZATION = 'INITIALIZATION';
const RATES_STAGE_UPDATED = 'UPDATED';
const PROFILE_STAGE_ACTIVE = 'Active';
const PROFILE_STAGE_NOT_ACTIVATED = 'Not_Activated';
const PROFILE_STAGE_DE_ACTIVATED = 'De_activated';
const INVENTORY_PROFILE_STAGE_INITIALIZATION = 'initialization';
const INVENTORY_PROFILE_STAGE_ACTIVE = 'active';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAccessStageAllowableValues()
    {
        return [
            self::NETWORK_ACCESS_STAGE_INITIALIZATION,
self::NETWORK_ACCESS_STAGE_UPDATED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRatesStageAllowableValues()
    {
        return [
            self::RATES_STAGE_INITIALIZATION,
self::RATES_STAGE_UPDATED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileStageAllowableValues()
    {
        return [
            self::PROFILE_STAGE_ACTIVE,
self::PROFILE_STAGE_NOT_ACTIVATED,
self::PROFILE_STAGE_DE_ACTIVATED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInventoryProfileStageAllowableValues()
    {
        return [
            self::INVENTORY_PROFILE_STAGE_INITIALIZATION,
self::INVENTORY_PROFILE_STAGE_ACTIVE,        ];
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
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['network_access_stage'] = isset($data['network_access_stage']) ? $data['network_access_stage'] : null;
        $this->container['rates_stage'] = isset($data['rates_stage']) ? $data['rates_stage'] : null;
        $this->container['profile_stage'] = isset($data['profile_stage']) ? $data['profile_stage'] : null;
        $this->container['inventory_profile_stage'] = isset($data['inventory_profile_stage']) ? $data['inventory_profile_stage'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_modified'] = isset($data['date_modified']) ? $data['date_modified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNetworkAccessStageAllowableValues();
        if (!is_null($this->container['network_access_stage']) && !in_array($this->container['network_access_stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'network_access_stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRatesStageAllowableValues();
        if (!is_null($this->container['rates_stage']) && !in_array($this->container['rates_stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rates_stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProfileStageAllowableValues();
        if (!is_null($this->container['profile_stage']) && !in_array($this->container['profile_stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profile_stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInventoryProfileStageAllowableValues();
        if (!is_null($this->container['inventory_profile_stage']) && !in_array($this->container['inventory_profile_stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inventory_profile_stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param int $inventory_id inventory_id
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

        return $this;
    }

    /**
     * Gets network_access_stage
     *
     * @return string
     */
    public function getNetworkAccessStage()
    {
        return $this->container['network_access_stage'];
    }

    /**
     * Sets network_access_stage
     *
     * @param string $network_access_stage network_access_stage
     *
     * @return $this
     */
    public function setNetworkAccessStage($network_access_stage)
    {
        $allowedValues = $this->getNetworkAccessStageAllowableValues();
        if (!is_null($network_access_stage) && !in_array($network_access_stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'network_access_stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network_access_stage'] = $network_access_stage;

        return $this;
    }

    /**
     * Gets rates_stage
     *
     * @return string
     */
    public function getRatesStage()
    {
        return $this->container['rates_stage'];
    }

    /**
     * Sets rates_stage
     *
     * @param string $rates_stage rates_stage
     *
     * @return $this
     */
    public function setRatesStage($rates_stage)
    {
        $allowedValues = $this->getRatesStageAllowableValues();
        if (!is_null($rates_stage) && !in_array($rates_stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rates_stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rates_stage'] = $rates_stage;

        return $this;
    }

    /**
     * Gets profile_stage
     *
     * @return string
     */
    public function getProfileStage()
    {
        return $this->container['profile_stage'];
    }

    /**
     * Sets profile_stage
     *
     * @param string $profile_stage profile_stage
     *
     * @return $this
     */
    public function setProfileStage($profile_stage)
    {
        $allowedValues = $this->getProfileStageAllowableValues();
        if (!is_null($profile_stage) && !in_array($profile_stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profile_stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile_stage'] = $profile_stage;

        return $this;
    }

    /**
     * Gets inventory_profile_stage
     *
     * @return string
     */
    public function getInventoryProfileStage()
    {
        return $this->container['inventory_profile_stage'];
    }

    /**
     * Sets inventory_profile_stage
     *
     * @param string $inventory_profile_stage inventory_profile_stage
     *
     * @return $this
     */
    public function setInventoryProfileStage($inventory_profile_stage)
    {
        $allowedValues = $this->getInventoryProfileStageAllowableValues();
        if (!is_null($inventory_profile_stage) && !in_array($inventory_profile_stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inventory_profile_stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inventory_profile_stage'] = $inventory_profile_stage;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return int
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param int $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return int
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param int $date_modified date_modified
     *
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

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