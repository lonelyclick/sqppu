<?php
/**
 * ResponseRateEntryALegSms
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
 * ResponseRateEntryALegSms Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseRateEntryALegSms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseRateEntryALegSms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rate_entry_id' => 'string',
'country_id' => 'string',
'country_iso2' => 'string',
'country_iso3' => 'string',
'country_name' => 'string',
'network_id' => 'int',
'network_name' => 'string',
'imsi_profile_id' => 'int',
'mo_rate' => 'float',
'mt_rate' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rate_entry_id' => null,
'country_id' => null,
'country_iso2' => null,
'country_iso3' => null,
'country_name' => null,
'network_id' => 'int32',
'network_name' => null,
'imsi_profile_id' => 'int32',
'mo_rate' => null,
'mt_rate' => null    ];

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
        'rate_entry_id' => 'rateEntryId',
'country_id' => 'countryId',
'country_iso2' => 'countryIso2',
'country_iso3' => 'countryIso3',
'country_name' => 'countryName',
'network_id' => 'networkId',
'network_name' => 'networkName',
'imsi_profile_id' => 'imsiProfileId',
'mo_rate' => 'moRate',
'mt_rate' => 'mtRate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_entry_id' => 'setRateEntryId',
'country_id' => 'setCountryId',
'country_iso2' => 'setCountryIso2',
'country_iso3' => 'setCountryIso3',
'country_name' => 'setCountryName',
'network_id' => 'setNetworkId',
'network_name' => 'setNetworkName',
'imsi_profile_id' => 'setImsiProfileId',
'mo_rate' => 'setMoRate',
'mt_rate' => 'setMtRate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_entry_id' => 'getRateEntryId',
'country_id' => 'getCountryId',
'country_iso2' => 'getCountryIso2',
'country_iso3' => 'getCountryIso3',
'country_name' => 'getCountryName',
'network_id' => 'getNetworkId',
'network_name' => 'getNetworkName',
'imsi_profile_id' => 'getImsiProfileId',
'mo_rate' => 'getMoRate',
'mt_rate' => 'getMtRate'    ];

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
        $this->container['rate_entry_id'] = isset($data['rate_entry_id']) ? $data['rate_entry_id'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['country_iso2'] = isset($data['country_iso2']) ? $data['country_iso2'] : null;
        $this->container['country_iso3'] = isset($data['country_iso3']) ? $data['country_iso3'] : null;
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['network_name'] = isset($data['network_name']) ? $data['network_name'] : null;
        $this->container['imsi_profile_id'] = isset($data['imsi_profile_id']) ? $data['imsi_profile_id'] : null;
        $this->container['mo_rate'] = isset($data['mo_rate']) ? $data['mo_rate'] : null;
        $this->container['mt_rate'] = isset($data['mt_rate']) ? $data['mt_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rate_entry_id'] === null) {
            $invalidProperties[] = "'rate_entry_id' can't be null";
        }
        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if ($this->container['country_iso2'] === null) {
            $invalidProperties[] = "'country_iso2' can't be null";
        }
        if ($this->container['country_iso3'] === null) {
            $invalidProperties[] = "'country_iso3' can't be null";
        }
        if ($this->container['country_name'] === null) {
            $invalidProperties[] = "'country_name' can't be null";
        }
        if ($this->container['network_id'] === null) {
            $invalidProperties[] = "'network_id' can't be null";
        }
        if ($this->container['network_name'] === null) {
            $invalidProperties[] = "'network_name' can't be null";
        }
        if ($this->container['imsi_profile_id'] === null) {
            $invalidProperties[] = "'imsi_profile_id' can't be null";
        }
        if ($this->container['mo_rate'] === null) {
            $invalidProperties[] = "'mo_rate' can't be null";
        }
        if ($this->container['mt_rate'] === null) {
            $invalidProperties[] = "'mt_rate' can't be null";
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
     * Gets rate_entry_id
     *
     * @return string
     */
    public function getRateEntryId()
    {
        return $this->container['rate_entry_id'];
    }

    /**
     * Sets rate_entry_id
     *
     * @param string $rate_entry_id The unique identifier of an entry
     *
     * @return $this
     */
    public function setRateEntryId($rate_entry_id)
    {
        $this->container['rate_entry_id'] = $rate_entry_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id The unique identifier of a group
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets country_iso2
     *
     * @return string
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso2'];
    }

    /**
     * Sets country_iso2
     *
     * @param string $country_iso2 The unique identifier of a country in ISO 3166-2
     *
     * @return $this
     */
    public function setCountryIso2($country_iso2)
    {
        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets country_iso3
     *
     * @return string
     */
    public function getCountryIso3()
    {
        return $this->container['country_iso3'];
    }

    /**
     * Sets country_iso3
     *
     * @param string $country_iso3 The unique identifier of a country in ISO 3166-3
     *
     * @return $this
     */
    public function setCountryIso3($country_iso3)
    {
        $this->container['country_iso3'] = $country_iso3;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string $country_name The country name
     *
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets network_id
     *
     * @return int
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     *
     * @param int $network_id The unique identifier of a network
     *
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets network_name
     *
     * @return string
     */
    public function getNetworkName()
    {
        return $this->container['network_name'];
    }

    /**
     * Sets network_name
     *
     * @param string $network_name The name of a network
     *
     * @return $this
     */
    public function setNetworkName($network_name)
    {
        $this->container['network_name'] = $network_name;

        return $this;
    }

    /**
     * Gets imsi_profile_id
     *
     * @return int
     */
    public function getImsiProfileId()
    {
        return $this->container['imsi_profile_id'];
    }

    /**
     * Sets imsi_profile_id
     *
     * @param int $imsi_profile_id The IMSI profile ID
     *
     * @return $this
     */
    public function setImsiProfileId($imsi_profile_id)
    {
        $this->container['imsi_profile_id'] = $imsi_profile_id;

        return $this;
    }

    /**
     * Gets mo_rate
     *
     * @return float
     */
    public function getMoRate()
    {
        return $this->container['mo_rate'];
    }

    /**
     * Sets mo_rate
     *
     * @param float $mo_rate The rate charged for the originating party
     *
     * @return $this
     */
    public function setMoRate($mo_rate)
    {
        $this->container['mo_rate'] = $mo_rate;

        return $this;
    }

    /**
     * Gets mt_rate
     *
     * @return float
     */
    public function getMtRate()
    {
        return $this->container['mt_rate'];
    }

    /**
     * Sets mt_rate
     *
     * @param float $mt_rate The rate charged for the termination party
     *
     * @return $this
     */
    public function setMtRate($mt_rate)
    {
        $this->container['mt_rate'] = $mt_rate;

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
