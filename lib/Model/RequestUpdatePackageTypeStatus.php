<?php
/**
 * RequestUpdatePackageTypeStatus
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
 * RequestUpdatePackageTypeStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestUpdatePackageTypeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequestUpdatePackageTypeStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'new_package_type_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'new_package_type_status' => null    ];

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
        'new_package_type_status' => 'newPackageTypeStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'new_package_type_status' => 'setNewPackageTypeStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'new_package_type_status' => 'getNewPackageTypeStatus'    ];

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

    const NEW_PACKAGE_TYPE_STATUS_ACTIVE = 'ACTIVE';
const NEW_PACKAGE_TYPE_STATUS_NOT_ACTIVATED = 'NOT_ACTIVATED';
const NEW_PACKAGE_TYPE_STATUS_DE_ACTIVATED = 'DE_ACTIVATED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNewPackageTypeStatusAllowableValues()
    {
        return [
            self::NEW_PACKAGE_TYPE_STATUS_ACTIVE,
self::NEW_PACKAGE_TYPE_STATUS_NOT_ACTIVATED,
self::NEW_PACKAGE_TYPE_STATUS_DE_ACTIVATED,        ];
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
        $this->container['new_package_type_status'] = isset($data['new_package_type_status']) ? $data['new_package_type_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['new_package_type_status'] === null) {
            $invalidProperties[] = "'new_package_type_status' can't be null";
        }
        $allowedValues = $this->getNewPackageTypeStatusAllowableValues();
        if (!is_null($this->container['new_package_type_status']) && !in_array($this->container['new_package_type_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'new_package_type_status', must be one of '%s'",
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
     * Gets new_package_type_status
     *
     * @return string
     */
    public function getNewPackageTypeStatus()
    {
        return $this->container['new_package_type_status'];
    }

    /**
     * Sets new_package_type_status
     *
     * @param string $new_package_type_status The new status for the PackageType
     *
     * @return $this
     */
    public function setNewPackageTypeStatus($new_package_type_status)
    {
        $allowedValues = $this->getNewPackageTypeStatusAllowableValues();
        if (!in_array($new_package_type_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'new_package_type_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['new_package_type_status'] = $new_package_type_status;

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
