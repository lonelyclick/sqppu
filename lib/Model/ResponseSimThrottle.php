<?php
/**
 * ResponseSimThrottle
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
 * ResponseSimThrottle Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseSimThrottle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseSimThrottle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sim_throttle_speed' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sim_throttle_speed' => null    ];

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
        'sim_throttle_speed' => 'simThrottleSpeed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sim_throttle_speed' => 'setSimThrottleSpeed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sim_throttle_speed' => 'getSimThrottleSpeed'    ];

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

    const SIM_THROTTLE_SPEED_NO_LIMIT = 'NO_LIMIT';
const SIM_THROTTLE_SPEED_SPEED_100_KBPS = 'SPEED_100_KBPS';
const SIM_THROTTLE_SPEED_SPEED_200_KBPS = 'SPEED_200_KBPS';
const SIM_THROTTLE_SPEED_SPEED_300_KBPS = 'SPEED_300_KBPS';
const SIM_THROTTLE_SPEED_SPEED_400_KBPS = 'SPEED_400_KBPS';
const SIM_THROTTLE_SPEED_SPEED_500_KBPS = 'SPEED_500_KBPS';
const SIM_THROTTLE_SPEED_SPEED_600_KBPS = 'SPEED_600_KBPS';
const SIM_THROTTLE_SPEED_SPEED_700_KBPS = 'SPEED_700_KBPS';
const SIM_THROTTLE_SPEED_SPEED_800_KBPS = 'SPEED_800_KBPS';
const SIM_THROTTLE_SPEED_SPEED_900_KBPS = 'SPEED_900_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1000_KBPS = 'SPEED_1000_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1100_KBPS = 'SPEED_1100_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1200_KBPS = 'SPEED_1200_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1300_KBPS = 'SPEED_1300_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1400_KBPS = 'SPEED_1400_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1500_KBPS = 'SPEED_1500_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1600_KBPS = 'SPEED_1600_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1700_KBPS = 'SPEED_1700_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1800_KBPS = 'SPEED_1800_KBPS';
const SIM_THROTTLE_SPEED_SPEED_1900_KBPS = 'SPEED_1900_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2000_KBPS = 'SPEED_2000_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2100_KBPS = 'SPEED_2100_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2200_KBPS = 'SPEED_2200_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2300_KBPS = 'SPEED_2300_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2400_KBPS = 'SPEED_2400_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2500_KBPS = 'SPEED_2500_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2600_KBPS = 'SPEED_2600_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2700_KBPS = 'SPEED_2700_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2800_KBPS = 'SPEED_2800_KBPS';
const SIM_THROTTLE_SPEED_SPEED_2900_KBPS = 'SPEED_2900_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3000_KBPS = 'SPEED_3000_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3100_KBPS = 'SPEED_3100_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3200_KBPS = 'SPEED_3200_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3300_KBPS = 'SPEED_3300_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3400_KBPS = 'SPEED_3400_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3500_KBPS = 'SPEED_3500_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3600_KBPS = 'SPEED_3600_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3700_KBPS = 'SPEED_3700_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3800_KBPS = 'SPEED_3800_KBPS';
const SIM_THROTTLE_SPEED_SPEED_3900_KBPS = 'SPEED_3900_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4000_KBPS = 'SPEED_4000_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4100_KBPS = 'SPEED_4100_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4200_KBPS = 'SPEED_4200_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4300_KBPS = 'SPEED_4300_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4400_KBPS = 'SPEED_4400_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4500_KBPS = 'SPEED_4500_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4600_KBPS = 'SPEED_4600_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4700_KBPS = 'SPEED_4700_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4800_KBPS = 'SPEED_4800_KBPS';
const SIM_THROTTLE_SPEED_SPEED_4900_KBPS = 'SPEED_4900_KBPS';
const SIM_THROTTLE_SPEED_SPEED_5000_KBPS = 'SPEED_5000_KBPS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSimThrottleSpeedAllowableValues()
    {
        return [
            self::SIM_THROTTLE_SPEED_NO_LIMIT,
self::SIM_THROTTLE_SPEED_SPEED_100_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_200_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_300_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_400_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_500_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_600_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_700_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_800_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_900_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1000_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1100_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1200_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1300_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1400_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1500_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1600_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1700_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1800_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_1900_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2000_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2100_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2200_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2300_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2400_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2500_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2600_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2700_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2800_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_2900_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3000_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3100_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3200_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3300_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3400_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3500_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3600_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3700_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3800_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_3900_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4000_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4100_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4200_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4300_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4400_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4500_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4600_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4700_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4800_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_4900_KBPS,
self::SIM_THROTTLE_SPEED_SPEED_5000_KBPS,        ];
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
        $this->container['sim_throttle_speed'] = isset($data['sim_throttle_speed']) ? $data['sim_throttle_speed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sim_throttle_speed'] === null) {
            $invalidProperties[] = "'sim_throttle_speed' can't be null";
        }
        $allowedValues = $this->getSimThrottleSpeedAllowableValues();
        if (!is_null($this->container['sim_throttle_speed']) && !in_array($this->container['sim_throttle_speed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sim_throttle_speed', must be one of '%s'",
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
     * Gets sim_throttle_speed
     *
     * @return string
     */
    public function getSimThrottleSpeed()
    {
        return $this->container['sim_throttle_speed'];
    }

    /**
     * Sets sim_throttle_speed
     *
     * @param string $sim_throttle_speed The throttle speed of a SIM
     *
     * @return $this
     */
    public function setSimThrottleSpeed($sim_throttle_speed)
    {
        $allowedValues = $this->getSimThrottleSpeedAllowableValues();
        if (!in_array($sim_throttle_speed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sim_throttle_speed', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sim_throttle_speed'] = $sim_throttle_speed;

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
