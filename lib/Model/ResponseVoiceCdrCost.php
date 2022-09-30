<?php
/**
 * ResponseVoiceCdrCost
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
 * ResponseVoiceCdrCost Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseVoiceCdrCost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseVoiceCdrCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payer_type' => 'string',
'payer_id' => 'string',
'payer_name' => 'string',
'is_account_owner' => 'bool',
'package_duration_second' => 'int',
'rate_cent_per_min' => 'float',
'charge_cent' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payer_type' => null,
'payer_id' => null,
'payer_name' => null,
'is_account_owner' => null,
'package_duration_second' => 'int64',
'rate_cent_per_min' => null,
'charge_cent' => null    ];

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
        'payer_type' => 'payerType',
'payer_id' => 'payerId',
'payer_name' => 'payerName',
'is_account_owner' => 'isAccountOwner',
'package_duration_second' => 'packageDurationSecond',
'rate_cent_per_min' => 'rateCentPerMin',
'charge_cent' => 'chargeCent'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payer_type' => 'setPayerType',
'payer_id' => 'setPayerId',
'payer_name' => 'setPayerName',
'is_account_owner' => 'setIsAccountOwner',
'package_duration_second' => 'setPackageDurationSecond',
'rate_cent_per_min' => 'setRateCentPerMin',
'charge_cent' => 'setChargeCent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payer_type' => 'getPayerType',
'payer_id' => 'getPayerId',
'payer_name' => 'getPayerName',
'is_account_owner' => 'getIsAccountOwner',
'package_duration_second' => 'getPackageDurationSecond',
'rate_cent_per_min' => 'getRateCentPerMin',
'charge_cent' => 'getChargeCent'    ];

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
        $this->container['payer_type'] = isset($data['payer_type']) ? $data['payer_type'] : null;
        $this->container['payer_id'] = isset($data['payer_id']) ? $data['payer_id'] : null;
        $this->container['payer_name'] = isset($data['payer_name']) ? $data['payer_name'] : null;
        $this->container['is_account_owner'] = isset($data['is_account_owner']) ? $data['is_account_owner'] : false;
        $this->container['package_duration_second'] = isset($data['package_duration_second']) ? $data['package_duration_second'] : null;
        $this->container['rate_cent_per_min'] = isset($data['rate_cent_per_min']) ? $data['rate_cent_per_min'] : null;
        $this->container['charge_cent'] = isset($data['charge_cent']) ? $data['charge_cent'] : null;
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
     * Gets payer_type
     *
     * @return string
     */
    public function getPayerType()
    {
        return $this->container['payer_type'];
    }

    /**
     * Sets payer_type
     *
     * @param string $payer_type payer_type
     *
     * @return $this
     */
    public function setPayerType($payer_type)
    {
        $this->container['payer_type'] = $payer_type;

        return $this;
    }

    /**
     * Gets payer_id
     *
     * @return string
     */
    public function getPayerId()
    {
        return $this->container['payer_id'];
    }

    /**
     * Sets payer_id
     *
     * @param string $payer_id payer_id
     *
     * @return $this
     */
    public function setPayerId($payer_id)
    {
        $this->container['payer_id'] = $payer_id;

        return $this;
    }

    /**
     * Gets payer_name
     *
     * @return string
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name
     *
     * @param string $payer_name payer_name
     *
     * @return $this
     */
    public function setPayerName($payer_name)
    {
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets is_account_owner
     *
     * @return bool
     */
    public function getIsAccountOwner()
    {
        return $this->container['is_account_owner'];
    }

    /**
     * Sets is_account_owner
     *
     * @param bool $is_account_owner is_account_owner
     *
     * @return $this
     */
    public function setIsAccountOwner($is_account_owner)
    {
        $this->container['is_account_owner'] = $is_account_owner;

        return $this;
    }

    /**
     * Gets package_duration_second
     *
     * @return int
     */
    public function getPackageDurationSecond()
    {
        return $this->container['package_duration_second'];
    }

    /**
     * Sets package_duration_second
     *
     * @param int $package_duration_second package_duration_second
     *
     * @return $this
     */
    public function setPackageDurationSecond($package_duration_second)
    {
        $this->container['package_duration_second'] = $package_duration_second;

        return $this;
    }

    /**
     * Gets rate_cent_per_min
     *
     * @return float
     */
    public function getRateCentPerMin()
    {
        return $this->container['rate_cent_per_min'];
    }

    /**
     * Sets rate_cent_per_min
     *
     * @param float $rate_cent_per_min rate_cent_per_min
     *
     * @return $this
     */
    public function setRateCentPerMin($rate_cent_per_min)
    {
        $this->container['rate_cent_per_min'] = $rate_cent_per_min;

        return $this;
    }

    /**
     * Gets charge_cent
     *
     * @return float
     */
    public function getChargeCent()
    {
        return $this->container['charge_cent'];
    }

    /**
     * Sets charge_cent
     *
     * @param float $charge_cent charge_cent
     *
     * @return $this
     */
    public function setChargeCent($charge_cent)
    {
        $this->container['charge_cent'] = $charge_cent;

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
