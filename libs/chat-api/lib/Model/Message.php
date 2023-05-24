<?php
/**
 * Message
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
 * Message Class Doc Comment
 *
 * @category Class
 * @package  ChatApiCom\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Message';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'string',
        'body' => 'string',
        'type' => 'string',
        'sender_name' => 'string',
        'from_me' => 'bool',
        'author' => 'string',
        'time' => 'int',
        'chat_id' => 'string',
        'message_number' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'body' => null,
        'type' => null,
        'sender_name' => null,
        'from_me' => null,
        'author' => null,
        'time' => 'int32',
        'chat_id' => null,
        'message_number' => 'int32'];

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
        'id' => 'id',
        'body' => 'body',
        'type' => 'type',
        'sender_name' => 'senderName',
        'from_me' => 'fromMe',
        'author' => 'author',
        'time' => 'time',
        'chat_id' => 'chatId',
        'message_number' => 'messageNumber'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'body' => 'setBody',
        'type' => 'setType',
        'sender_name' => 'setSenderName',
        'from_me' => 'setFromMe',
        'author' => 'setAuthor',
        'time' => 'setTime',
        'chat_id' => 'setChatId',
        'message_number' => 'setMessageNumber'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'body' => 'getBody',
        'type' => 'getType',
        'sender_name' => 'getSenderName',
        'from_me' => 'getFromMe',
        'author' => 'getAuthor',
        'time' => 'getTime',
        'chat_id' => 'getChatId',
        'message_number' => 'getMessageNumber'];

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

    const TYPE_CHAT = 'chat';
    const TYPE_IMAGE = 'image';
    const TYPE_PTT = 'ptt';
    const TYPE_DOCUMENT = 'document';
    const TYPE_AUDIO = 'audio';
    const TYPE_VIDEO = 'video';
    const TYPE_LOCATION = 'location';
    const TYPE_CALL_LOG = 'call_log';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHAT,
            self::TYPE_IMAGE,
            self::TYPE_PTT,
            self::TYPE_DOCUMENT,
            self::TYPE_AUDIO,
            self::TYPE_VIDEO,
            self::TYPE_LOCATION,
            self::TYPE_CALL_LOG,];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['from_me'] = isset($data['from_me']) ? $data['from_me'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['chat_id'] = isset($data['chat_id']) ? $data['chat_id'] : null;
        $this->container['message_number'] = isset($data['message_number']) ? $data['message_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id unique id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body text message for type \"chat\", or link to download the file for \"ptt\", \"image\", \"audio\", \"video\" and \"document\", or latitude and longitude for \"location\", or message \"[Call]\" for \"call_log\"
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type of the message
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name Sender name
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets from_me
     *
     * @return bool
     */
    public function getFromMe()
    {
        return $this->container['from_me'];
    }

    /**
     * Sets from_me
     *
     * @param bool $from_me true - outgoing, false - incoming
     *
     * @return $this
     */
    public function setFromMe($from_me)
    {
        $this->container['from_me'] = $from_me;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author Author ID of the message, useful for groups
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int $time send time, unix timestamp
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets chat_id
     *
     * @return string
     */
    public function getChatId()
    {
        return $this->container['chat_id'];
    }

    /**
     * Sets chat_id
     *
     * @param string $chat_id chat ID
     *
     * @return $this
     */
    public function setChatId($chat_id)
    {
        $this->container['chat_id'] = $chat_id;

        return $this;
    }

    /**
     * Gets message_number
     *
     * @return int
     */
    public function getMessageNumber()
    {
        return $this->container['message_number'];
    }

    /**
     * Sets message_number
     *
     * @param int $message_number sequence number of the message in the database
     *
     * @return $this
     */
    public function setMessageNumber($message_number)
    {
        $this->container['message_number'] = $message_number;

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