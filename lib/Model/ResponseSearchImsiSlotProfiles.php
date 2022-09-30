<?php
/**
 * ResponseSearchImsiSlotProfiles
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
 * ResponseSearchImsiSlotProfiles Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseSearchImsiSlotProfiles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseSearchImsiSlotProfiles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imsi_slot_profile_id' => 'string',
'imsi_slot_profile_name' => 'string',
'date_created_epoch' => 'int',
'total_imsi_slot_profile_mappings' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imsi_slot_profile_id' => null,
'imsi_slot_profile_name' => null,
'date_created_epoch' => 'int64',
'total_imsi_slot_profile_mappings' => 'int32'    ];

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
        'imsi_slot_profile_id' => 'imsi_slot_profile_id',
'imsi_slot_profile_name' => 'imsi_slot_profile_name',
'date_created_epoch' => 'date_created_epoch',
'total_imsi_slot_profile_mappings' => 'total_imsi_slot_profile_mappings'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imsi_slot_profile_id' => 'setImsiSlotProfileId',
'imsi_slot_profile_name' => 'setImsiSlotProfileName',
'date_created_epoch' => 'setDateCreatedEpoch',
'total_imsi_slot_profile_mappings' => 'setTotalImsiSlotProfileMappings'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imsi_slot_profile_id' => 'getImsiSlotProfileId',
'imsi_slot_profile_name' => 'getImsiSlotProfileName',
'date_created_epoch' => 'getDateCreatedEpoch',
'total_imsi_slot_profile_mappings' => 'getTotalImsiSlotProfileMappings'    ];

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
        $this->container['imsi_slot_profile_id'] = isset($data['imsi_slot_profile_id']) ? $data['imsi_slot_profile_id'] : null;
        $this->container['imsi_slot_profile_name'] = isset($data['imsi_slot_profile_name']) ? $data['imsi_slot_profile_name'] : null;
        $this->container['date_created_epoch'] = isset($data['date_created_epoch']) ? $data['date_created_epoch'] : null;
        $this->container['total_imsi_slot_profile_mappings'] = isset($data['total_imsi_slot_profile_mappings']) ? $data['total_imsi_slot_profile_mappings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['imsi_slot_profile_id'] === null) {
            $invalidProperties[] = "'imsi_slot_profile_id' can't be null";
        }
        if ($this->container['imsi_slot_profile_name'] === null) {
            $invalidProperties[] = "'imsi_slot_profile_name' can't be null";
        }
        if ($this->container['date_created_epoch'] === null) {
            $invalidProperties[] = "'date_created_epoch' can't be null";
        }
        if ($this->container['total_imsi_slot_profile_mappings'] === null) {
            $invalidProperties[] = "'total_imsi_slot_profile_mappings' can't be null";
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
     * Gets imsi_slot_profile_id
     *
     * @return string
     */
    public function getImsiSlotProfileId()
    {
        return $this->container['imsi_slot_profile_id'];
    }

    /**
     * Sets imsi_slot_profile_id
     *
     * @param string $imsi_slot_profile_id The unique identifier of IMSI Slot Profile
     *
     * @return $this
     */
    public function setImsiSlotProfileId($imsi_slot_profile_id)
    {
        $this->container['imsi_slot_profile_id'] = $imsi_slot_profile_id;

        return $this;
    }

    /**
     * Gets imsi_slot_profile_name
     *
     * @return string
     */
    public function getImsiSlotProfileName()
    {
        return $this->container['imsi_slot_profile_name'];
    }

    /**
     * Sets imsi_slot_profile_name
     *
     * @param string $imsi_slot_profile_name The IMSI Slot Profile Name
     *
     * @return $this
     */
    public function setImsiSlotProfileName($imsi_slot_profile_name)
    {
        $this->container['imsi_slot_profile_name'] = $imsi_slot_profile_name;

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
     * @param int $date_created_epoch The epoch timestamp of IMSI Slot Profile creation
     *
     * @return $this
     */
    public function setDateCreatedEpoch($date_created_epoch)
    {
        $this->container['date_created_epoch'] = $date_created_epoch;

        return $this;
    }

    /**
     * Gets total_imsi_slot_profile_mappings
     *
     * @return int
     */
    public function getTotalImsiSlotProfileMappings()
    {
        return $this->container['total_imsi_slot_profile_mappings'];
    }

    /**
     * Sets total_imsi_slot_profile_mappings
     *
     * @param int $total_imsi_slot_profile_mappings The number of IMSI-Slot mappings associated with current IMSI Slot Profile.
     *
     * @return $this
     */
    public function setTotalImsiSlotProfileMappings($total_imsi_slot_profile_mappings)
    {
        $this->container['total_imsi_slot_profile_mappings'] = $total_imsi_slot_profile_mappings;

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
