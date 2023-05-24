<?php
/**
 * Settings
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
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  ChatApiCom\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Settings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Settings';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'webhook_url' => 'string',
        'ack_notifications_on' => 'bool',
        'chat_update_on' => 'bool',
        'video_upload_on' => 'bool',
        'proxy' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'webhook_url' => null,
        'ack_notifications_on' => null,
        'chat_update_on' => null,
        'video_upload_on' => null,
        'proxy' => null];

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
        'webhook_url' => 'webhookUrl',
        'ack_notifications_on' => 'ackNotificationsOn',
        'chat_update_on' => 'chatUpdateOn',
        'video_upload_on' => 'videoUploadOn',
        'proxy' => 'proxy'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook_url' => 'setWebhookUrl',
        'ack_notifications_on' => 'setAckNotificationsOn',
        'chat_update_on' => 'setChatUpdateOn',
        'video_upload_on' => 'setVideoUploadOn',
        'proxy' => 'setProxy'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook_url' => 'getWebhookUrl',
        'ack_notifications_on' => 'getAckNotificationsOn',
        'chat_update_on' => 'getChatUpdateOn',
        'video_upload_on' => 'getVideoUploadOn',
        'proxy' => 'getProxy'];

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
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
        $this->container['ack_notifications_on'] = isset($data['ack_notifications_on']) ? $data['ack_notifications_on'] : null;
        $this->container['chat_update_on'] = isset($data['chat_update_on']) ? $data['chat_update_on'] : null;
        $this->container['video_upload_on'] = isset($data['video_upload_on']) ? $data['video_upload_on'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
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

        return true;
    }


    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url webhook_url
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets ack_notifications_on
     *
     * @return bool
     */
    public function getAckNotificationsOn()
    {
        return $this->container['ack_notifications_on'];
    }

    /**
     * Sets ack_notifications_on
     *
     * @param bool $ack_notifications_on ack_notifications_on
     *
     * @return $this
     */
    public function setAckNotificationsOn($ack_notifications_on)
    {
        $this->container['ack_notifications_on'] = $ack_notifications_on;

        return $this;
    }

    /**
     * Gets chat_update_on
     *
     * @return bool
     */
    public function getChatUpdateOn()
    {
        return $this->container['chat_update_on'];
    }

    /**
     * Sets chat_update_on
     *
     * @param bool $chat_update_on chat_update_on
     *
     * @return $this
     */
    public function setChatUpdateOn($chat_update_on)
    {
        $this->container['chat_update_on'] = $chat_update_on;

        return $this;
    }

    /**
     * Gets video_upload_on
     *
     * @return bool
     */
    public function getVideoUploadOn()
    {
        return $this->container['video_upload_on'];
    }

    /**
     * Sets video_upload_on
     *
     * @param bool $video_upload_on video_upload_on
     *
     * @return $this
     */
    public function setVideoUploadOn($video_upload_on)
    {
        $this->container['video_upload_on'] = $video_upload_on;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return string
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param string $proxy proxy
     *
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

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
