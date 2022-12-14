<?php
/**
 * ResponseGroupDetails
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
 * ResponseGroupDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseGroupDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseGroupDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_group_id' => 'int',
'name' => 'string',
'parent_group_id' => 'int',
'parent_group_name' => 'string',
'inventory_id' => 'int',
'inventory_name' => 'string',
'ocs_group_id' => 'int',
'distributor_id' => 'int',
'distributor_name' => 'string',
'balance_cent' => 'float',
'balance_currency' => 'string',
'balance_modify_epoch_milli' => 'int',
'overdraft_cent' => 'float',
'overdraft_currency' => 'string',
'overdraft_modify_epoch_milli' => 'int',
'create_epoch_milli' => 'int',
'modify_epoch_milli' => 'int',
'number_of_subgroups' => 'int',
'number_of_sims' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_group_id' => 'int32',
'name' => null,
'parent_group_id' => 'int32',
'parent_group_name' => null,
'inventory_id' => 'int32',
'inventory_name' => null,
'ocs_group_id' => 'int32',
'distributor_id' => 'int32',
'distributor_name' => null,
'balance_cent' => null,
'balance_currency' => null,
'balance_modify_epoch_milli' => 'int64',
'overdraft_cent' => null,
'overdraft_currency' => null,
'overdraft_modify_epoch_milli' => 'int64',
'create_epoch_milli' => 'int64',
'modify_epoch_milli' => 'int64',
'number_of_subgroups' => 'int32',
'number_of_sims' => 'int32'    ];

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
        'billing_group_id' => 'billingGroupId',
'name' => 'name',
'parent_group_id' => 'parentGroupId',
'parent_group_name' => 'parentGroupName',
'inventory_id' => 'inventoryId',
'inventory_name' => 'inventoryName',
'ocs_group_id' => 'ocsGroupId',
'distributor_id' => 'distributorId',
'distributor_name' => 'distributorName',
'balance_cent' => 'balanceCent',
'balance_currency' => 'balanceCurrency',
'balance_modify_epoch_milli' => 'balanceModifyEpochMilli',
'overdraft_cent' => 'overdraftCent',
'overdraft_currency' => 'overdraftCurrency',
'overdraft_modify_epoch_milli' => 'overdraftModifyEpochMilli',
'create_epoch_milli' => 'createEpochMilli',
'modify_epoch_milli' => 'modifyEpochMilli',
'number_of_subgroups' => 'numberOfSubgroups',
'number_of_sims' => 'numberOfSims'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_group_id' => 'setBillingGroupId',
'name' => 'setName',
'parent_group_id' => 'setParentGroupId',
'parent_group_name' => 'setParentGroupName',
'inventory_id' => 'setInventoryId',
'inventory_name' => 'setInventoryName',
'ocs_group_id' => 'setOcsGroupId',
'distributor_id' => 'setDistributorId',
'distributor_name' => 'setDistributorName',
'balance_cent' => 'setBalanceCent',
'balance_currency' => 'setBalanceCurrency',
'balance_modify_epoch_milli' => 'setBalanceModifyEpochMilli',
'overdraft_cent' => 'setOverdraftCent',
'overdraft_currency' => 'setOverdraftCurrency',
'overdraft_modify_epoch_milli' => 'setOverdraftModifyEpochMilli',
'create_epoch_milli' => 'setCreateEpochMilli',
'modify_epoch_milli' => 'setModifyEpochMilli',
'number_of_subgroups' => 'setNumberOfSubgroups',
'number_of_sims' => 'setNumberOfSims'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_group_id' => 'getBillingGroupId',
'name' => 'getName',
'parent_group_id' => 'getParentGroupId',
'parent_group_name' => 'getParentGroupName',
'inventory_id' => 'getInventoryId',
'inventory_name' => 'getInventoryName',
'ocs_group_id' => 'getOcsGroupId',
'distributor_id' => 'getDistributorId',
'distributor_name' => 'getDistributorName',
'balance_cent' => 'getBalanceCent',
'balance_currency' => 'getBalanceCurrency',
'balance_modify_epoch_milli' => 'getBalanceModifyEpochMilli',
'overdraft_cent' => 'getOverdraftCent',
'overdraft_currency' => 'getOverdraftCurrency',
'overdraft_modify_epoch_milli' => 'getOverdraftModifyEpochMilli',
'create_epoch_milli' => 'getCreateEpochMilli',
'modify_epoch_milli' => 'getModifyEpochMilli',
'number_of_subgroups' => 'getNumberOfSubgroups',
'number_of_sims' => 'getNumberOfSims'    ];

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
        $this->container['billing_group_id'] = isset($data['billing_group_id']) ? $data['billing_group_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_group_id'] = isset($data['parent_group_id']) ? $data['parent_group_id'] : null;
        $this->container['parent_group_name'] = isset($data['parent_group_name']) ? $data['parent_group_name'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['inventory_name'] = isset($data['inventory_name']) ? $data['inventory_name'] : null;
        $this->container['ocs_group_id'] = isset($data['ocs_group_id']) ? $data['ocs_group_id'] : null;
        $this->container['distributor_id'] = isset($data['distributor_id']) ? $data['distributor_id'] : null;
        $this->container['distributor_name'] = isset($data['distributor_name']) ? $data['distributor_name'] : null;
        $this->container['balance_cent'] = isset($data['balance_cent']) ? $data['balance_cent'] : null;
        $this->container['balance_currency'] = isset($data['balance_currency']) ? $data['balance_currency'] : null;
        $this->container['balance_modify_epoch_milli'] = isset($data['balance_modify_epoch_milli']) ? $data['balance_modify_epoch_milli'] : null;
        $this->container['overdraft_cent'] = isset($data['overdraft_cent']) ? $data['overdraft_cent'] : null;
        $this->container['overdraft_currency'] = isset($data['overdraft_currency']) ? $data['overdraft_currency'] : null;
        $this->container['overdraft_modify_epoch_milli'] = isset($data['overdraft_modify_epoch_milli']) ? $data['overdraft_modify_epoch_milli'] : null;
        $this->container['create_epoch_milli'] = isset($data['create_epoch_milli']) ? $data['create_epoch_milli'] : null;
        $this->container['modify_epoch_milli'] = isset($data['modify_epoch_milli']) ? $data['modify_epoch_milli'] : null;
        $this->container['number_of_subgroups'] = isset($data['number_of_subgroups']) ? $data['number_of_subgroups'] : null;
        $this->container['number_of_sims'] = isset($data['number_of_sims']) ? $data['number_of_sims'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['billing_group_id'] === null) {
            $invalidProperties[] = "'billing_group_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['parent_group_id'] === null) {
            $invalidProperties[] = "'parent_group_id' can't be null";
        }
        if ($this->container['parent_group_name'] === null) {
            $invalidProperties[] = "'parent_group_name' can't be null";
        }
        if ($this->container['inventory_id'] === null) {
            $invalidProperties[] = "'inventory_id' can't be null";
        }
        if ($this->container['inventory_name'] === null) {
            $invalidProperties[] = "'inventory_name' can't be null";
        }
        if ($this->container['ocs_group_id'] === null) {
            $invalidProperties[] = "'ocs_group_id' can't be null";
        }
        if ($this->container['distributor_id'] === null) {
            $invalidProperties[] = "'distributor_id' can't be null";
        }
        if ($this->container['distributor_name'] === null) {
            $invalidProperties[] = "'distributor_name' can't be null";
        }
        if ($this->container['balance_cent'] === null) {
            $invalidProperties[] = "'balance_cent' can't be null";
        }
        if ($this->container['balance_currency'] === null) {
            $invalidProperties[] = "'balance_currency' can't be null";
        }
        if ($this->container['balance_modify_epoch_milli'] === null) {
            $invalidProperties[] = "'balance_modify_epoch_milli' can't be null";
        }
        if ($this->container['overdraft_cent'] === null) {
            $invalidProperties[] = "'overdraft_cent' can't be null";
        }
        if ($this->container['overdraft_currency'] === null) {
            $invalidProperties[] = "'overdraft_currency' can't be null";
        }
        if ($this->container['overdraft_modify_epoch_milli'] === null) {
            $invalidProperties[] = "'overdraft_modify_epoch_milli' can't be null";
        }
        if ($this->container['create_epoch_milli'] === null) {
            $invalidProperties[] = "'create_epoch_milli' can't be null";
        }
        if ($this->container['modify_epoch_milli'] === null) {
            $invalidProperties[] = "'modify_epoch_milli' can't be null";
        }
        if ($this->container['number_of_subgroups'] === null) {
            $invalidProperties[] = "'number_of_subgroups' can't be null";
        }
        if ($this->container['number_of_sims'] === null) {
            $invalidProperties[] = "'number_of_sims' can't be null";
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
     * Gets billing_group_id
     *
     * @return int
     */
    public function getBillingGroupId()
    {
        return $this->container['billing_group_id'];
    }

    /**
     * Sets billing_group_id
     *
     * @param int $billing_group_id The unique identifier of a group
     *
     * @return $this
     */
    public function setBillingGroupId($billing_group_id)
    {
        $this->container['billing_group_id'] = $billing_group_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The group name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_group_id
     *
     * @return int
     */
    public function getParentGroupId()
    {
        return $this->container['parent_group_id'];
    }

    /**
     * Sets parent_group_id
     *
     * @param int $parent_group_id The unique identifier of a group of the parent group
     *
     * @return $this
     */
    public function setParentGroupId($parent_group_id)
    {
        $this->container['parent_group_id'] = $parent_group_id;

        return $this;
    }

    /**
     * Gets parent_group_name
     *
     * @return string
     */
    public function getParentGroupName()
    {
        return $this->container['parent_group_name'];
    }

    /**
     * Sets parent_group_name
     *
     * @param string $parent_group_name The name of this groups' parent
     *
     * @return $this
     */
    public function setParentGroupName($parent_group_name)
    {
        $this->container['parent_group_name'] = $parent_group_name;

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
     * @param int $inventory_id The inventory ID the group belongs to
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

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
     * @param string $inventory_name The inventory name the group belongs to
     *
     * @return $this
     */
    public function setInventoryName($inventory_name)
    {
        $this->container['inventory_name'] = $inventory_name;

        return $this;
    }

    /**
     * Gets ocs_group_id
     *
     * @return int
     */
    public function getOcsGroupId()
    {
        return $this->container['ocs_group_id'];
    }

    /**
     * Sets ocs_group_id
     *
     * @param int $ocs_group_id The OCS group ID the group maps to
     *
     * @return $this
     */
    public function setOcsGroupId($ocs_group_id)
    {
        $this->container['ocs_group_id'] = $ocs_group_id;

        return $this;
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
     * @param int $distributor_id The distributor ID the group belongs to
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
     * @param string $distributor_name The distributor name the group belongs to
     *
     * @return $this
     */
    public function setDistributorName($distributor_name)
    {
        $this->container['distributor_name'] = $distributor_name;

        return $this;
    }

    /**
     * Gets balance_cent
     *
     * @return float
     */
    public function getBalanceCent()
    {
        return $this->container['balance_cent'];
    }

    /**
     * Sets balance_cent
     *
     * @param float $balance_cent The current balance of the group (in cents)
     *
     * @return $this
     */
    public function setBalanceCent($balance_cent)
    {
        $this->container['balance_cent'] = $balance_cent;

        return $this;
    }

    /**
     * Gets balance_currency
     *
     * @return string
     */
    public function getBalanceCurrency()
    {
        return $this->container['balance_currency'];
    }

    /**
     * Sets balance_currency
     *
     * @param string $balance_currency The currency of the group's balance
     *
     * @return $this
     */
    public function setBalanceCurrency($balance_currency)
    {
        $this->container['balance_currency'] = $balance_currency;

        return $this;
    }

    /**
     * Gets balance_modify_epoch_milli
     *
     * @return int
     */
    public function getBalanceModifyEpochMilli()
    {
        return $this->container['balance_modify_epoch_milli'];
    }

    /**
     * Sets balance_modify_epoch_milli
     *
     * @param int $balance_modify_epoch_milli The timestamp of the last modification to the balance (UTC)
     *
     * @return $this
     */
    public function setBalanceModifyEpochMilli($balance_modify_epoch_milli)
    {
        $this->container['balance_modify_epoch_milli'] = $balance_modify_epoch_milli;

        return $this;
    }

    /**
     * Gets overdraft_cent
     *
     * @return float
     */
    public function getOverdraftCent()
    {
        return $this->container['overdraft_cent'];
    }

    /**
     * Sets overdraft_cent
     *
     * @param float $overdraft_cent The current overdraft of the group (in cents)
     *
     * @return $this
     */
    public function setOverdraftCent($overdraft_cent)
    {
        $this->container['overdraft_cent'] = $overdraft_cent;

        return $this;
    }

    /**
     * Gets overdraft_currency
     *
     * @return string
     */
    public function getOverdraftCurrency()
    {
        return $this->container['overdraft_currency'];
    }

    /**
     * Sets overdraft_currency
     *
     * @param string $overdraft_currency The currency of the group's overdraft
     *
     * @return $this
     */
    public function setOverdraftCurrency($overdraft_currency)
    {
        $this->container['overdraft_currency'] = $overdraft_currency;

        return $this;
    }

    /**
     * Gets overdraft_modify_epoch_milli
     *
     * @return int
     */
    public function getOverdraftModifyEpochMilli()
    {
        return $this->container['overdraft_modify_epoch_milli'];
    }

    /**
     * Sets overdraft_modify_epoch_milli
     *
     * @param int $overdraft_modify_epoch_milli The timestamp of the last modification to the overdraft (UTC)
     *
     * @return $this
     */
    public function setOverdraftModifyEpochMilli($overdraft_modify_epoch_milli)
    {
        $this->container['overdraft_modify_epoch_milli'] = $overdraft_modify_epoch_milli;

        return $this;
    }

    /**
     * Gets create_epoch_milli
     *
     * @return int
     */
    public function getCreateEpochMilli()
    {
        return $this->container['create_epoch_milli'];
    }

    /**
     * Sets create_epoch_milli
     *
     * @param int $create_epoch_milli The timestamp of the last modification to the group (UTC)
     *
     * @return $this
     */
    public function setCreateEpochMilli($create_epoch_milli)
    {
        $this->container['create_epoch_milli'] = $create_epoch_milli;

        return $this;
    }

    /**
     * Gets modify_epoch_milli
     *
     * @return int
     */
    public function getModifyEpochMilli()
    {
        return $this->container['modify_epoch_milli'];
    }

    /**
     * Sets modify_epoch_milli
     *
     * @param int $modify_epoch_milli The timestamp of the last modification to the group (UTC) disregarding balance and overdraft
     *
     * @return $this
     */
    public function setModifyEpochMilli($modify_epoch_milli)
    {
        $this->container['modify_epoch_milli'] = $modify_epoch_milli;

        return $this;
    }

    /**
     * Gets number_of_subgroups
     *
     * @return int
     */
    public function getNumberOfSubgroups()
    {
        return $this->container['number_of_subgroups'];
    }

    /**
     * Sets number_of_subgroups
     *
     * @param int $number_of_subgroups The number of child groups
     *
     * @return $this
     */
    public function setNumberOfSubgroups($number_of_subgroups)
    {
        $this->container['number_of_subgroups'] = $number_of_subgroups;

        return $this;
    }

    /**
     * Gets number_of_sims
     *
     * @return int
     */
    public function getNumberOfSims()
    {
        return $this->container['number_of_sims'];
    }

    /**
     * Sets number_of_sims
     *
     * @param int $number_of_sims The number of Sims under this group
     *
     * @return $this
     */
    public function setNumberOfSims($number_of_sims)
    {
        $this->container['number_of_sims'] = $number_of_sims;

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
