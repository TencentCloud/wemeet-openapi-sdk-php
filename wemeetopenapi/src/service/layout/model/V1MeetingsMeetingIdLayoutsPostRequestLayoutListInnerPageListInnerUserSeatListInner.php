<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\layout\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner implements ModelInterface, \JsonSerializable
{
    /**
     * 宫格ID
    * 类型：
     */
    protected $gridId;
    /**
     * 宫格类型，注意：多次传入同一宫格ID的对象，仅第一次出现的对象生效。 宫格类型： 1. 视频画面（此类型需传递 userid 或 uuid、username 入参，作为视频画面展示；若会中参会成员有外部企业用户，需传递该用户的 uuid；如果 userid、uuid 同时传递则以 uuid 为准）。 2. 共享画面。 3. 拓展应用（目前一页仅可添加一个应用）。 添加的应用需满足以下条件： 与会议绑定。 开启网页服务。 同企业下的仅企业内可见应用或外部企业可见应用。
    * 类型：
     */
    protected $gridType;

    /**
     * 当场会议的用户临时 ID。
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 工具箱id
    * 类型：string
     */
    protected $toolSdkid = null;

    /**
     * 用户ID
    * 类型：string
     */
    protected $userid = null;

    /**
     * 用户昵称
    * 类型：string
     */
    protected $username = null;

    /**
     * 用户身份 ID（腾讯会议颁发的用于开放平台的唯一用户 ID）
    * 类型：string
     */
    protected $uuid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['grid_id'])) {
            $this->gridId = $jsonArray['grid_id'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter grid_id');
        }
        if (isset($jsonArray['grid_type'])) {
            $this->gridType = $jsonArray['grid_type'];
        } else {
            throw new \InvalidArgumentException('Missing required parameter grid_type');
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['tool_sdkid'])) {
            $this->toolSdkid = $jsonArray['tool_sdkid'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
        if (isset($jsonArray['username'])) {
            $this->username = $jsonArray['username'];
        }
        if (isset($jsonArray['uuid'])) {
            $this->uuid = $jsonArray['uuid'];
        }
    }

    public function gridId(string $gridId): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->gridId = $gridId;
        return $this;
    }

    public function getGridId() {
        return $this->gridId;
    }

    public function setGridId(string $gridId) {
        $this->gridId = $gridId;
    }
    public function gridType(int $gridType): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->gridType = $gridType;
        return $this;
    }

    public function getGridType() {
        return $this->gridType;
    }

    public function setGridType(int $gridType) {
        $this->gridType = $gridType;
    }
    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function toolSdkid(string $toolSdkid): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->toolSdkid = $toolSdkid;
        return $this;
    }

    public function getToolSdkid() {
        return $this->toolSdkid;
    }

    public function setToolSdkid(string $toolSdkid) {
        $this->toolSdkid = $toolSdkid;
    }
    public function userid(string $userid): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function username(string $username): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->username = $username;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }
    public function uuid(string $uuid): V1MeetingsMeetingIdLayoutsPostRequestLayoutListInnerPageListInnerUserSeatListInner {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid() {
        return $this->uuid;
    }

    public function setUuid(string $uuid) {
        $this->uuid = $uuid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'grid_id' => 'string',
        'grid_type' => 'int',
        'ms_open_id' => 'string',
        'tool_sdkid' => 'string',
        'userid' => 'string',
        'username' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'grid_id' => null,
        'grid_type' => 'int64',
        'ms_open_id' => null,
        'tool_sdkid' => null,
        'userid' => null,
        'username' => null,
        'uuid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'grid_id' => false,
        'grid_type' => false,
        'ms_open_id' => false,
        'tool_sdkid' => false,
        'userid' => false,
        'username' => false,
        'uuid' => false
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
        'grid_id' => 'grid_id',
        'grid_type' => 'grid_type',
        'ms_open_id' => 'ms_open_id',
        'tool_sdkid' => 'tool_sdkid',
        'userid' => 'userid',
        'username' => 'username',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grid_id' => 'setGridId',
        'grid_type' => 'setGridType',
        'ms_open_id' => 'setMsOpenId',
        'tool_sdkid' => 'setToolSdkid',
        'userid' => 'setUserid',
        'username' => 'setUsername',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grid_id' => 'getGridId',
        'grid_type' => 'getGridType',
        'ms_open_id' => 'getMsOpenId',
        'tool_sdkid' => 'getToolSdkid',
        'userid' => 'getUserid',
        'username' => 'getUsername',
        'uuid' => 'getUuid'
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
            'grid_id' => $this->gridId,
            'grid_type' => $this->gridType,
            'ms_open_id' => $this->msOpenId,
            'tool_sdkid' => $this->toolSdkid,
            'userid' => $this->userid,
            'username' => $this->username,
            'uuid' => $this->uuid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

