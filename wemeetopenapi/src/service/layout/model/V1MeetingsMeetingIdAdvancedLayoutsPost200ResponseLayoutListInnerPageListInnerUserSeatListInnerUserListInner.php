<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.4
 */
namespace wemeet\openapi\service\layout\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInnerUserListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 用户当前会议临时身份 ID，单场会议唯一
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 用户 ID
    * 类型：string
     */
    protected $userid = null;

    /**
     * 用户昵称，base64编码
    * 类型：string
     */
    protected $username = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
        if (isset($jsonArray['username'])) {
            $this->username = $jsonArray['username'];
        }
    }

    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInnerUserListInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function userid(string $userid): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInnerUserListInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function username(string $username): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInnerUserListInner {
        $this->username = $username;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ms_open_id' => 'string',
        'userid' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ms_open_id' => null,
        'userid' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ms_open_id' => false,
        'userid' => false,
        'username' => false
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
        'ms_open_id' => 'ms_open_id',
        'userid' => 'userid',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ms_open_id' => 'setMsOpenId',
        'userid' => 'setUserid',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ms_open_id' => 'getMsOpenId',
        'userid' => 'getUserid',
        'username' => 'getUsername'
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
            'ms_open_id' => $this->msOpenId,
            'userid' => $this->userid,
            'username' => $this->username,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

