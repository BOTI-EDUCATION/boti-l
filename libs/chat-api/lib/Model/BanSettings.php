<?php
/**
 * BanSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChatApiCom\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Whatsapp API documentation
 *
 * The REST API allows you to receive and send messages through your WhatsApp account.  Parameters in GET queries pass query string. Parameters in POST requests — through the JSON-encoded request body. The authorization token is always passed to query string (?token=xxxxxx).  The WhatsApp API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChatApiCom\Client\Model;

use \ArrayAccess;
use \ChatApiCom\Client\ObjectSerializer;

/**
 * BanSettings Class Doc Comment
 *
 * @category Class
 * @package  ChatApiCom\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BanSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BanSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ban_phone_mask' => 'string',
        'pre_ban_message' => 'string',
        'set' => 'bool'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ban_phone_mask' => null,
        'pre_ban_message' => null,
        'set' => null];

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
        'ban_phone_mask' => 'banPhoneMask',
        'pre_ban_message' => 'preBanMessage',
        'set' => 'set'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ban_phone_mask' => 'setBanPhoneMask',
        'pre_ban_message' => 'setPreBanMessage',
        'set' => 'setSet'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ban_phone_mask' => 'getBanPhoneMask',
        'pre_ban_message' => 'getPreBanMessage',
        'set' => 'getSet'];

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
        $this->container['ban_phone_mask'] = isset($data['ban_phone_mask']) ? $data['ban_phone_mask'] : null;
        $this->container['pre_ban_message'] = isset($data['pre_ban_message']) ? $data['pre_ban_message'] : null;
        $this->container['set'] = isset($data['set']) ? $data['set'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ban_phone_mask'] === null) {
            $invalidProperties[] = "'ban_phone_mask' can't be null";
        }
        if ($this->container['pre_ban_message'] === null) {
            $invalidProperties[] = "'pre_ban_message' can't be null";
        }
        if ($this->container['set'] === null) {
            $invalidProperties[] = "'set' can't be null";
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

        if ($this->container['ban_phone_mask'] === null) {
            return false;
        }
        if ($this->container['pre_ban_message'] === null) {
            return false;
        }
        if ($this->container['set'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ban_phone_mask
     *
     * @return string
     */
    public function getBanPhoneMask()
    {
        return $this->container['ban_phone_mask'];
    }

    /**
     * Sets ban_phone_mask
     *
     * @param string $ban_phone_mask ban_phone_mask
     *
     * @return $this
     */
    public function setBanPhoneMask($ban_phone_mask)
    {
        $this->container['ban_phone_mask'] = $ban_phone_mask;

        return $this;
    }

    /**
     * Gets pre_ban_message
     *
     * @return string
     */
    public function getPreBanMessage()
    {
        return $this->container['pre_ban_message'];
    }

    /**
     * Sets pre_ban_message
     *
     * @param string $pre_ban_message pre_ban_message
     *
     * @return $this
     */
    public function setPreBanMessage($pre_ban_message)
    {
        $this->container['pre_ban_message'] = $pre_ban_message;

        return $this;
    }

    /**
     * Gets set
     *
     * @return bool
     */
    public function getSet()
    {
        return $this->container['set'];
    }

    /**
     * Sets set
     *
     * @param bool $set Flag indicating that the current request has changed ban settings
     *
     * @return $this
     */
    public function setSet($set)
    {
        $this->container['set'] = $set;

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
     * @param mixed $value Value to be set
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
