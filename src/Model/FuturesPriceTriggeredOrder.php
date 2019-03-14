<?php
/**
 * FuturesPriceTriggeredOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * OpenAPI spec version: 4.5.2
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * FuturesPriceTriggeredOrder Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FuturesPriceTriggeredOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesPriceTriggeredOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'initial' => '\GateApi\Model\FuturesInitialOrder',
        'trigger' => '\GateApi\Model\FuturesPriceTrigger',
        'id' => 'int',
        'user' => 'int',
        'create_time' => 'float',
        'finish_time' => 'float',
        'trade_id' => 'int',
        'status' => 'string',
        'finish_as' => 'string',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'initial' => null,
        'trigger' => null,
        'id' => 'int64',
        'user' => 'int32',
        'create_time' => null,
        'finish_time' => null,
        'trade_id' => 'int64',
        'status' => null,
        'finish_as' => null,
        'reason' => null
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
        'initial' => 'initial',
        'trigger' => 'trigger',
        'id' => 'id',
        'user' => 'user',
        'create_time' => 'create_time',
        'finish_time' => 'finish_time',
        'trade_id' => 'trade_id',
        'status' => 'status',
        'finish_as' => 'finish_as',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'initial' => 'setInitial',
        'trigger' => 'setTrigger',
        'id' => 'setId',
        'user' => 'setUser',
        'create_time' => 'setCreateTime',
        'finish_time' => 'setFinishTime',
        'trade_id' => 'setTradeId',
        'status' => 'setStatus',
        'finish_as' => 'setFinishAs',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'initial' => 'getInitial',
        'trigger' => 'getTrigger',
        'id' => 'getId',
        'user' => 'getUser',
        'create_time' => 'getCreateTime',
        'finish_time' => 'getFinishTime',
        'trade_id' => 'getTradeId',
        'status' => 'getStatus',
        'finish_as' => 'getFinishAs',
        'reason' => 'getReason'
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

    const STATUS_OPEN = 'open';
    const STATUS_FINISHED = 'finished';
    const FINISH_AS_CANCELLED = 'cancelled';
    const FINISH_AS_SUCCEEDED = 'succeeded';
    const FINISH_AS_FAILED = 'failed';
    const FINISH_AS_EXPIRED = 'expired';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_FINISHED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFinishAsAllowableValues()
    {
        return [
            self::FINISH_AS_CANCELLED,
            self::FINISH_AS_SUCCEEDED,
            self::FINISH_AS_FAILED,
            self::FINISH_AS_EXPIRED,
        ];
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
        $this->container['initial'] = isset($data['initial']) ? $data['initial'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
        $this->container['trade_id'] = isset($data['trade_id']) ? $data['trade_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['finish_as'] = isset($data['finish_as']) ? $data['finish_as'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['initial'] === null) {
            $invalidProperties[] = "'initial' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFinishAsAllowableValues();
        if (!is_null($this->container['finish_as']) && !in_array($this->container['finish_as'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'finish_as', must be one of '%s'",
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
     * Gets initial
     *
     * @return \GateApi\Model\FuturesInitialOrder
     */
    public function getInitial()
    {
        return $this->container['initial'];
    }

    /**
     * Sets initial
     *
     * @param \GateApi\Model\FuturesInitialOrder $initial initial
     *
     * @return $this
     */
    public function setInitial($initial)
    {
        $this->container['initial'] = $initial;

        return $this;
    }

    /**
     * Gets trigger
     *
     * @return \GateApi\Model\FuturesPriceTrigger
     */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
     * Sets trigger
     *
     * @param \GateApi\Model\FuturesPriceTrigger $trigger trigger
     *
     * @return $this
     */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Auto order ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return int|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int|null $user User ID
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return float|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param float|null $create_time Creation time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return float|null
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param float|null $finish_time Finished time
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

        return $this;
    }

    /**
     * Gets trade_id
     *
     * @return int|null
     */
    public function getTradeId()
    {
        return $this->container['trade_id'];
    }

    /**
     * Sets trade_id
     *
     * @param int|null $trade_id ID of the newly created order on condition triggered
     *
     * @return $this
     */
    public function setTradeId($trade_id)
    {
        $this->container['trade_id'] = $trade_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Order status.
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
     * Gets finish_as
     *
     * @return string|null
     */
    public function getFinishAs()
    {
        return $this->container['finish_as'];
    }

    /**
     * Sets finish_as
     *
     * @param string|null $finish_as How order is finished
     *
     * @return $this
     */
    public function setFinishAs($finish_as)
    {
        $allowedValues = $this->getFinishAsAllowableValues();
        if (!is_null($finish_as) && !in_array($finish_as, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'finish_as', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['finish_as'] = $finish_as;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Extra messages of how order is finished
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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
}


