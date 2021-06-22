<?php
/**
 * TransferDetail
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eBay Finances API
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: 1.8.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TransferDetail Class Doc Comment
 *
 * @category Class
 * @description This type is used by the transferDetail container, which provides more details about the transfer and the charge(s) associated with the transfer.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransferDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance_adjustment' => '\OpenAPI\Client\Model\BalanceAdjustment',
        'charges' => '\OpenAPI\Client\Model\Charge[]',
        'total_charge_net_amount' => '\OpenAPI\Client\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance_adjustment' => null,
        'charges' => null,
        'total_charge_net_amount' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'balance_adjustment' => 'balanceAdjustment',
        'charges' => 'charges',
        'total_charge_net_amount' => 'totalChargeNetAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance_adjustment' => 'setBalanceAdjustment',
        'charges' => 'setCharges',
        'total_charge_net_amount' => 'setTotalChargeNetAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance_adjustment' => 'getBalanceAdjustment',
        'charges' => 'getCharges',
        'total_charge_net_amount' => 'getTotalChargeNetAmount'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['balance_adjustment'] = $data['balance_adjustment'] ?? null;
        $this->container['charges'] = $data['charges'] ?? null;
        $this->container['total_charge_net_amount'] = $data['total_charge_net_amount'] ?? null;
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
     * Gets balance_adjustment
     *
     * @return \OpenAPI\Client\Model\BalanceAdjustment|null
     */
    public function getBalanceAdjustment()
    {
        return $this->container['balance_adjustment'];
    }

    /**
     * Sets balance_adjustment
     *
     * @param \OpenAPI\Client\Model\BalanceAdjustment|null $balance_adjustment balance_adjustment
     *
     * @return self
     */
    public function setBalanceAdjustment($balance_adjustment)
    {
        $this->container['balance_adjustment'] = $balance_adjustment;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return \OpenAPI\Client\Model\Charge[]|null
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \OpenAPI\Client\Model\Charge[]|null $charges This container is an array of one or more charges related to the transfer. Charges can be related to an order cancellation, order return, case, payment dispute, etc.
     *
     * @return self
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets total_charge_net_amount
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getTotalChargeNetAmount()
    {
        return $this->container['total_charge_net_amount'];
    }

    /**
     * Sets total_charge_net_amount
     *
     * @param \OpenAPI\Client\Model\Amount|null $total_charge_net_amount total_charge_net_amount
     *
     * @return self
     */
    public function setTotalChargeNetAmount($total_charge_net_amount)
    {
        $this->container['total_charge_net_amount'] = $total_charge_net_amount;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


