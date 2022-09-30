<?php
/**
 * RequestUpdateNetworkAccessEntry
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
 * RequestUpdateNetworkAccessEntry Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestUpdateNetworkAccessEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequestUpdateNetworkAccessEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_iso3' => 'string',
'imsi_id' => 'int',
'network_id' => 'int',
'voice_status' => 'string',
'sms_status' => 'string',
'data_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_iso3' => null,
'imsi_id' => 'int32',
'network_id' => 'int32',
'voice_status' => null,
'sms_status' => null,
'data_status' => null    ];

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
        'country_iso3' => 'countryIso3',
'imsi_id' => 'imsiId',
'network_id' => 'networkId',
'voice_status' => 'voiceStatus',
'sms_status' => 'smsStatus',
'data_status' => 'dataStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_iso3' => 'setCountryIso3',
'imsi_id' => 'setImsiId',
'network_id' => 'setNetworkId',
'voice_status' => 'setVoiceStatus',
'sms_status' => 'setSmsStatus',
'data_status' => 'setDataStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_iso3' => 'getCountryIso3',
'imsi_id' => 'getImsiId',
'network_id' => 'getNetworkId',
'voice_status' => 'getVoiceStatus',
'sms_status' => 'getSmsStatus',
'data_status' => 'getDataStatus'    ];

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

    const VOICE_STATUS_DIRECT = 'DIRECT';
const VOICE_STATUS_CALLBACK = 'CALLBACK';
const VOICE_STATUS_PILOT = 'PILOT';
const VOICE_STATUS_BLOCKED = 'BLOCKED';
const SMS_STATUS_ALLOWED = 'ALLOWED';
const SMS_STATUS_BLOCKED = 'BLOCKED';
const DATA_STATUS_ALLOWED = 'ALLOWED';
const DATA_STATUS_BLOCKED = 'BLOCKED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoiceStatusAllowableValues()
    {
        return [
            self::VOICE_STATUS_DIRECT,
self::VOICE_STATUS_CALLBACK,
self::VOICE_STATUS_PILOT,
self::VOICE_STATUS_BLOCKED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSmsStatusAllowableValues()
    {
        return [
            self::SMS_STATUS_ALLOWED,
self::SMS_STATUS_BLOCKED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataStatusAllowableValues()
    {
        return [
            self::DATA_STATUS_ALLOWED,
self::DATA_STATUS_BLOCKED,        ];
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
        $this->container['country_iso3'] = isset($data['country_iso3']) ? $data['country_iso3'] : null;
        $this->container['imsi_id'] = isset($data['imsi_id']) ? $data['imsi_id'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['voice_status'] = isset($data['voice_status']) ? $data['voice_status'] : null;
        $this->container['sms_status'] = isset($data['sms_status']) ? $data['sms_status'] : null;
        $this->container['data_status'] = isset($data['data_status']) ? $data['data_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country_iso3'] === null) {
            $invalidProperties[] = "'country_iso3' can't be null";
        }
        if ($this->container['imsi_id'] === null) {
            $invalidProperties[] = "'imsi_id' can't be null";
        }
        if ($this->container['network_id'] === null) {
            $invalidProperties[] = "'network_id' can't be null";
        }
        $allowedValues = $this->getVoiceStatusAllowableValues();
        if (!is_null($this->container['voice_status']) && !in_array($this->container['voice_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voice_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSmsStatusAllowableValues();
        if (!is_null($this->container['sms_status']) && !in_array($this->container['sms_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sms_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDataStatusAllowableValues();
        if (!is_null($this->container['data_status']) && !in_array($this->container['data_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'data_status', must be one of '%s'",
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
     * @param string $country_iso3 The country iso3
     *
     * @return $this
     */
    public function setCountryIso3($country_iso3)
    {
        $this->container['country_iso3'] = $country_iso3;

        return $this;
    }

    /**
     * Gets imsi_id
     *
     * @return int
     */
    public function getImsiId()
    {
        return $this->container['imsi_id'];
    }

    /**
     * Sets imsi_id
     *
     * @param int $imsi_id The sponsored IMSI id
     *
     * @return $this
     */
    public function setImsiId($imsi_id)
    {
        $this->container['imsi_id'] = $imsi_id;

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
     * @param int $network_id The network id
     *
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets voice_status
     *
     * @return string
     */
    public function getVoiceStatus()
    {
        return $this->container['voice_status'];
    }

    /**
     * Sets voice_status
     *
     * @param string $voice_status The new voice status
     *
     * @return $this
     */
    public function setVoiceStatus($voice_status)
    {
        $allowedValues = $this->getVoiceStatusAllowableValues();
        if (!is_null($voice_status) && !in_array($voice_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voice_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voice_status'] = $voice_status;

        return $this;
    }

    /**
     * Gets sms_status
     *
     * @return string
     */
    public function getSmsStatus()
    {
        return $this->container['sms_status'];
    }

    /**
     * Sets sms_status
     *
     * @param string $sms_status The new sms status
     *
     * @return $this
     */
    public function setSmsStatus($sms_status)
    {
        $allowedValues = $this->getSmsStatusAllowableValues();
        if (!is_null($sms_status) && !in_array($sms_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sms_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sms_status'] = $sms_status;

        return $this;
    }

    /**
     * Gets data_status
     *
     * @return string
     */
    public function getDataStatus()
    {
        return $this->container['data_status'];
    }

    /**
     * Sets data_status
     *
     * @param string $data_status The new data status
     *
     * @return $this
     */
    public function setDataStatus($data_status)
    {
        $allowedValues = $this->getDataStatusAllowableValues();
        if (!is_null($data_status) && !in_array($data_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'data_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_status'] = $data_status;

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
