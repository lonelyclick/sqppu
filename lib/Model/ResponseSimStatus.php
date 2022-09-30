<?php
/**
 * ResponseSimStatus
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
 * ResponseSimStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseSimStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseSimStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
'sim_data_service_status' => 'string',
'sim_voice_service_status' => 'string',
'sim_sms_service_status' => 'string',
'status_of_sim' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
'sim_data_service_status' => null,
'sim_voice_service_status' => null,
'sim_sms_service_status' => null,
'status_of_sim' => null    ];

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
        'status' => 'status',
'sim_data_service_status' => 'simDataServiceStatus',
'sim_voice_service_status' => 'simVoiceServiceStatus',
'sim_sms_service_status' => 'simSmsServiceStatus',
'status_of_sim' => 'statusOfSim'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
'sim_data_service_status' => 'setSimDataServiceStatus',
'sim_voice_service_status' => 'setSimVoiceServiceStatus',
'sim_sms_service_status' => 'setSimSmsServiceStatus',
'status_of_sim' => 'setStatusOfSim'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
'sim_data_service_status' => 'getSimDataServiceStatus',
'sim_voice_service_status' => 'getSimVoiceServiceStatus',
'sim_sms_service_status' => 'getSimSmsServiceStatus',
'status_of_sim' => 'getStatusOfSim'    ];

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

    const STATUS_ACTIVE = 'ACTIVE';
const STATUS_SUSPENDED = 'SUSPENDED';
const SIM_DATA_SERVICE_STATUS_ENABLED = 'ENABLED';
const SIM_DATA_SERVICE_STATUS_DISABLED = 'DISABLED';
const SIM_VOICE_SERVICE_STATUS_ENABLED = 'ENABLED';
const SIM_VOICE_SERVICE_STATUS_DISABLED = 'DISABLED';
const SIM_SMS_SERVICE_STATUS_ENABLED = 'ENABLED';
const SIM_SMS_SERVICE_STATUS_DISABLED = 'DISABLED';
const STATUS_OF_SIM_PRE_SERVICE = 'Pre-Service';
const STATUS_OF_SIM_IN_SERVICE = 'In-Service';
const STATUS_OF_SIM_TERMINATED = 'Terminated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
self::STATUS_SUSPENDED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSimDataServiceStatusAllowableValues()
    {
        return [
            self::SIM_DATA_SERVICE_STATUS_ENABLED,
self::SIM_DATA_SERVICE_STATUS_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSimVoiceServiceStatusAllowableValues()
    {
        return [
            self::SIM_VOICE_SERVICE_STATUS_ENABLED,
self::SIM_VOICE_SERVICE_STATUS_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSimSmsServiceStatusAllowableValues()
    {
        return [
            self::SIM_SMS_SERVICE_STATUS_ENABLED,
self::SIM_SMS_SERVICE_STATUS_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusOfSimAllowableValues()
    {
        return [
            self::STATUS_OF_SIM_PRE_SERVICE,
self::STATUS_OF_SIM_IN_SERVICE,
self::STATUS_OF_SIM_TERMINATED,        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sim_data_service_status'] = isset($data['sim_data_service_status']) ? $data['sim_data_service_status'] : null;
        $this->container['sim_voice_service_status'] = isset($data['sim_voice_service_status']) ? $data['sim_voice_service_status'] : null;
        $this->container['sim_sms_service_status'] = isset($data['sim_sms_service_status']) ? $data['sim_sms_service_status'] : null;
        $this->container['status_of_sim'] = isset($data['status_of_sim']) ? $data['status_of_sim'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sim_data_service_status'] === null) {
            $invalidProperties[] = "'sim_data_service_status' can't be null";
        }
        $allowedValues = $this->getSimDataServiceStatusAllowableValues();
        if (!is_null($this->container['sim_data_service_status']) && !in_array($this->container['sim_data_service_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sim_data_service_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sim_voice_service_status'] === null) {
            $invalidProperties[] = "'sim_voice_service_status' can't be null";
        }
        $allowedValues = $this->getSimVoiceServiceStatusAllowableValues();
        if (!is_null($this->container['sim_voice_service_status']) && !in_array($this->container['sim_voice_service_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sim_voice_service_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sim_sms_service_status'] === null) {
            $invalidProperties[] = "'sim_sms_service_status' can't be null";
        }
        $allowedValues = $this->getSimSmsServiceStatusAllowableValues();
        if (!is_null($this->container['sim_sms_service_status']) && !in_array($this->container['sim_sms_service_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sim_sms_service_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status_of_sim'] === null) {
            $invalidProperties[] = "'status_of_sim' can't be null";
        }
        $allowedValues = $this->getStatusOfSimAllowableValues();
        if (!is_null($this->container['status_of_sim']) && !in_array($this->container['status_of_sim'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_of_sim', must be one of '%s'",
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
     * @param string $status [DEPRECATED] The status of a SIM
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sim_data_service_status
     *
     * @return string
     */
    public function getSimDataServiceStatus()
    {
        return $this->container['sim_data_service_status'];
    }

    /**
     * Sets sim_data_service_status
     *
     * @param string $sim_data_service_status The status of a SIM data service
     *
     * @return $this
     */
    public function setSimDataServiceStatus($sim_data_service_status)
    {
        $allowedValues = $this->getSimDataServiceStatusAllowableValues();
        if (!in_array($sim_data_service_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sim_data_service_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sim_data_service_status'] = $sim_data_service_status;

        return $this;
    }

    /**
     * Gets sim_voice_service_status
     *
     * @return string
     */
    public function getSimVoiceServiceStatus()
    {
        return $this->container['sim_voice_service_status'];
    }

    /**
     * Sets sim_voice_service_status
     *
     * @param string $sim_voice_service_status The status of a SIM voice service
     *
     * @return $this
     */
    public function setSimVoiceServiceStatus($sim_voice_service_status)
    {
        $allowedValues = $this->getSimVoiceServiceStatusAllowableValues();
        if (!in_array($sim_voice_service_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sim_voice_service_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sim_voice_service_status'] = $sim_voice_service_status;

        return $this;
    }

    /**
     * Gets sim_sms_service_status
     *
     * @return string
     */
    public function getSimSmsServiceStatus()
    {
        return $this->container['sim_sms_service_status'];
    }

    /**
     * Sets sim_sms_service_status
     *
     * @param string $sim_sms_service_status The status of a SIM SMS service
     *
     * @return $this
     */
    public function setSimSmsServiceStatus($sim_sms_service_status)
    {
        $allowedValues = $this->getSimSmsServiceStatusAllowableValues();
        if (!in_array($sim_sms_service_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sim_sms_service_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sim_sms_service_status'] = $sim_sms_service_status;

        return $this;
    }

    /**
     * Gets status_of_sim
     *
     * @return string
     */
    public function getStatusOfSim()
    {
        return $this->container['status_of_sim'];
    }

    /**
     * Sets status_of_sim
     *
     * @param string $status_of_sim Overall status of the SIM
     *
     * @return $this
     */
    public function setStatusOfSim($status_of_sim)
    {
        $allowedValues = $this->getStatusOfSimAllowableValues();
        if (!in_array($status_of_sim, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_of_sim', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_of_sim'] = $status_of_sim;

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