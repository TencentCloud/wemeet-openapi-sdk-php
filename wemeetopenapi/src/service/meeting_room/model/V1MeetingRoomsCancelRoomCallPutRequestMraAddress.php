<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meeting_room\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingRoomsCancelRoomCallPutRequestMraAddress implements ModelInterface, \JsonSerializable
{
    /**
     * 信令地址。 如果是 H.323 类型，输入 IP 地址或 E.164 号码。 如果是 SIP 类型，输入 IP 地址或 URI。
    * 类型：
     */
    protected $dialString;
    /**
     * 信令协议。 1：SIP 2：H.323
    * 类型：
     */
    protected $protocol;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['dial_string'])) {
            $this->dialString = $jsonArray['dial_string'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter dial_string');
        }
        if (isset($jsonArray['protocol'])) {
            $this->protocol = $jsonArray['protocol'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter protocol');
        }
    }

    public function dialString(string $dialString): V1MeetingRoomsCancelRoomCallPutRequestMraAddress {
        $this->dialString = $dialString;
        return $this;
    }

    public function getDialString() {
        return $this->dialString;
    }

    public function setDialString(string $dialString) {
        $this->dialString = $dialString;
    }
    public function protocol(int $protocol): V1MeetingRoomsCancelRoomCallPutRequestMraAddress {
        $this->protocol = $protocol;
        return $this;
    }

    public function getProtocol() {
        return $this->protocol;
    }

    public function setProtocol(int $protocol) {
        $this->protocol = $protocol;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dial_string' => 'string',
        'protocol' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dial_string' => null,
        'protocol' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dial_string' => false,
        'protocol' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dial_string' => 'dial_string',
        'protocol' => 'protocol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dial_string' => 'setDialString',
        'protocol' => 'setProtocol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dial_string' => 'getDialString',
        'protocol' => 'getProtocol'
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

    public function jsonSerialize(): mixed {
        $data = [
            'dial_string' => $this->dialString,
            'protocol' => $this->protocol,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

