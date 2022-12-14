<?php
/**
 * ResponseDataSession
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
 * ResponseDataSession Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseDataSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseDataSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_session_id' => 'string',
'date_opened_in_utc' => 'string',
'imsi_id' => 'string',
'usage_in_kb' => 'int',
'rat_type' => 'int',
'private_ip' => 'string',
'public_ip' => 'string',
'apn' => 'string',
'charge_type' => 'string',
'country' => 'string',
'country_iso2_code' => 'string',
'network' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_session_id' => null,
'date_opened_in_utc' => null,
'imsi_id' => null,
'usage_in_kb' => 'int64',
'rat_type' => 'int32',
'private_ip' => null,
'public_ip' => null,
'apn' => null,
'charge_type' => null,
'country' => null,
'country_iso2_code' => null,
'network' => null    ];

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
        'data_session_id' => 'dataSessionId',
'date_opened_in_utc' => 'dateOpenedInUTC',
'imsi_id' => 'imsiId',
'usage_in_kb' => 'usageInKB',
'rat_type' => 'ratType',
'private_ip' => 'privateIp',
'public_ip' => 'publicIp',
'apn' => 'apn',
'charge_type' => 'chargeType',
'country' => 'country',
'country_iso2_code' => 'countryIso2Code',
'network' => 'network'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_session_id' => 'setDataSessionId',
'date_opened_in_utc' => 'setDateOpenedInUtc',
'imsi_id' => 'setImsiId',
'usage_in_kb' => 'setUsageInKb',
'rat_type' => 'setRatType',
'private_ip' => 'setPrivateIp',
'public_ip' => 'setPublicIp',
'apn' => 'setApn',
'charge_type' => 'setChargeType',
'country' => 'setCountry',
'country_iso2_code' => 'setCountryIso2Code',
'network' => 'setNetwork'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_session_id' => 'getDataSessionId',
'date_opened_in_utc' => 'getDateOpenedInUtc',
'imsi_id' => 'getImsiId',
'usage_in_kb' => 'getUsageInKb',
'rat_type' => 'getRatType',
'private_ip' => 'getPrivateIp',
'public_ip' => 'getPublicIp',
'apn' => 'getApn',
'charge_type' => 'getChargeType',
'country' => 'getCountry',
'country_iso2_code' => 'getCountryIso2Code',
'network' => 'getNetwork'    ];

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
        $this->container['data_session_id'] = isset($data['data_session_id']) ? $data['data_session_id'] : null;
        $this->container['date_opened_in_utc'] = isset($data['date_opened_in_utc']) ? $data['date_opened_in_utc'] : null;
        $this->container['imsi_id'] = isset($data['imsi_id']) ? $data['imsi_id'] : null;
        $this->container['usage_in_kb'] = isset($data['usage_in_kb']) ? $data['usage_in_kb'] : null;
        $this->container['rat_type'] = isset($data['rat_type']) ? $data['rat_type'] : null;
        $this->container['private_ip'] = isset($data['private_ip']) ? $data['private_ip'] : null;
        $this->container['public_ip'] = isset($data['public_ip']) ? $data['public_ip'] : null;
        $this->container['apn'] = isset($data['apn']) ? $data['apn'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_iso2_code'] = isset($data['country_iso2_code']) ? $data['country_iso2_code'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
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
     * Gets data_session_id
     *
     * @return string
     */
    public function getDataSessionId()
    {
        return $this->container['data_session_id'];
    }

    /**
     * Sets data_session_id
     *
     * @param string $data_session_id data_session_id
     *
     * @return $this
     */
    public function setDataSessionId($data_session_id)
    {
        $this->container['data_session_id'] = $data_session_id;

        return $this;
    }

    /**
     * Gets date_opened_in_utc
     *
     * @return string
     */
    public function getDateOpenedInUtc()
    {
        return $this->container['date_opened_in_utc'];
    }

    /**
     * Sets date_opened_in_utc
     *
     * @param string $date_opened_in_utc date_opened_in_utc
     *
     * @return $this
     */
    public function setDateOpenedInUtc($date_opened_in_utc)
    {
        $this->container['date_opened_in_utc'] = $date_opened_in_utc;

        return $this;
    }

    /**
     * Gets imsi_id
     *
     * @return string
     */
    public function getImsiId()
    {
        return $this->container['imsi_id'];
    }

    /**
     * Sets imsi_id
     *
     * @param string $imsi_id imsi_id
     *
     * @return $this
     */
    public function setImsiId($imsi_id)
    {
        $this->container['imsi_id'] = $imsi_id;

        return $this;
    }

    /**
     * Gets usage_in_kb
     *
     * @return int
     */
    public function getUsageInKb()
    {
        return $this->container['usage_in_kb'];
    }

    /**
     * Sets usage_in_kb
     *
     * @param int $usage_in_kb usage_in_kb
     *
     * @return $this
     */
    public function setUsageInKb($usage_in_kb)
    {
        $this->container['usage_in_kb'] = $usage_in_kb;

        return $this;
    }

    /**
     * Gets rat_type
     *
     * @return int
     */
    public function getRatType()
    {
        return $this->container['rat_type'];
    }

    /**
     * Sets rat_type
     *
     * @param int $rat_type rat_type
     *
     * @return $this
     */
    public function setRatType($rat_type)
    {
        $this->container['rat_type'] = $rat_type;

        return $this;
    }

    /**
     * Gets private_ip
     *
     * @return string
     */
    public function getPrivateIp()
    {
        return $this->container['private_ip'];
    }

    /**
     * Sets private_ip
     *
     * @param string $private_ip private_ip
     *
     * @return $this
     */
    public function setPrivateIp($private_ip)
    {
        $this->container['private_ip'] = $private_ip;

        return $this;
    }

    /**
     * Gets public_ip
     *
     * @return string
     */
    public function getPublicIp()
    {
        return $this->container['public_ip'];
    }

    /**
     * Sets public_ip
     *
     * @param string $public_ip public_ip
     *
     * @return $this
     */
    public function setPublicIp($public_ip)
    {
        $this->container['public_ip'] = $public_ip;

        return $this;
    }

    /**
     * Gets apn
     *
     * @return string
     */
    public function getApn()
    {
        return $this->container['apn'];
    }

    /**
     * Sets apn
     *
     * @param string $apn apn
     *
     * @return $this
     */
    public function setApn($apn)
    {
        $this->container['apn'] = $apn;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string $charge_type charge_type
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_iso2_code
     *
     * @return string
     */
    public function getCountryIso2Code()
    {
        return $this->container['country_iso2_code'];
    }

    /**
     * Sets country_iso2_code
     *
     * @param string $country_iso2_code country_iso2_code
     *
     * @return $this
     */
    public function setCountryIso2Code($country_iso2_code)
    {
        $this->container['country_iso2_code'] = $country_iso2_code;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

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
