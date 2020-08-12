<?php
/**
 * FuturesAccount
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * FuturesAccount Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class FuturesAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'string',
        'unrealised_pnl' => 'string',
        'position_margin' => 'string',
        'order_margin' => 'string',
        'available' => 'string',
        'point' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total' => null,
        'unrealised_pnl' => null,
        'position_margin' => null,
        'order_margin' => null,
        'available' => null,
        'point' => null,
        'currency' => null
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
        'total' => 'total',
        'unrealised_pnl' => 'unrealised_pnl',
        'position_margin' => 'position_margin',
        'order_margin' => 'order_margin',
        'available' => 'available',
        'point' => 'point',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'position_margin' => 'setPositionMargin',
        'order_margin' => 'setOrderMargin',
        'available' => 'setAvailable',
        'point' => 'setPoint',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'position_margin' => 'getPositionMargin',
        'order_margin' => 'getOrderMargin',
        'available' => 'getAvailable',
        'point' => 'getPoint',
        'currency' => 'getCurrency'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['position_margin'] = isset($data['position_margin']) ? $data['position_margin'] : null;
        $this->container['order_margin'] = isset($data['order_margin']) ? $data['order_margin'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total Total assets, total = position_margin + order_margin + available
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return string|null
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param string|null $unrealised_pnl Unrealized PNL
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets position_margin
     *
     * @return string|null
     */
    public function getPositionMargin()
    {
        return $this->container['position_margin'];
    }

    /**
     * Sets position_margin
     *
     * @param string|null $position_margin Position margin
     *
     * @return $this
     */
    public function setPositionMargin($position_margin)
    {
        $this->container['position_margin'] = $position_margin;

        return $this;
    }

    /**
     * Gets order_margin
     *
     * @return string|null
     */
    public function getOrderMargin()
    {
        return $this->container['order_margin'];
    }

    /**
     * Sets order_margin
     *
     * @param string|null $order_margin Order margin of unfinished orders
     *
     * @return $this
     */
    public function setOrderMargin($order_margin)
    {
        $this->container['order_margin'] = $order_margin;

        return $this;
    }

    /**
     * Gets available
     *
     * @return string|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param string|null $available Available balance to transfer out or trade
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets point
     *
     * @return string|null
     */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
     * Sets point
     *
     * @param string|null $point POINT amount
     *
     * @return $this
     */
    public function setPoint($point)
    {
        $this->container['point'] = $point;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Settle currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


