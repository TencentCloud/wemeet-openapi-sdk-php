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


class V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInner implements ModelInterface, \JsonSerializable
{

    /**
     * 宫格 ID
    * 类型：string
     */
    protected $gridId = null;

    /**
     * 宫格类型： 1-视频画面 2-共享画面
    * 类型：int
     */
    protected $gridType = null;

    /**
     * 宫格中的用户列表 ● 轮询关闭， 只有一个用户 ● 轮询开启后， 可以包含多个用户
    * 类型：\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInnerUserListInner[]
     */
    protected $userList = null;

    /**
     * 视频画面来源 1-演讲者 2-自动填充 3-指定人员，根据user_list的定义显示视频内容（此类型需传递 userid 或 ms_open_id、username 入参，作为视频画面展示；若会中参会成员有外部企业用户，需传递该用户的 ms_open_id；如果 userid、ms_open_id 同时传递则以 ms_open_id 为准）
    * 类型：int
     */
    protected $videoType = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['grid_id'])) {
            $this->gridId = $jsonArray['grid_id'];
        }
        if (isset($jsonArray['grid_type'])) {
            $this->gridType = $jsonArray['grid_type'];
        }
        if (isset($jsonArray['user_list'])) {
            $this->userList = $jsonArray['user_list'];
        }
        if (isset($jsonArray['video_type'])) {
            $this->videoType = $jsonArray['video_type'];
        }
    }

    public function gridId(string $gridId): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInner {
        $this->gridId = $gridId;
        return $this;
    }

    public function getGridId() {
        return $this->gridId;
    }

    public function setGridId(string $gridId) {
        $this->gridId = $gridId;
    }
    public function gridType(int $gridType): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInner {
        $this->gridType = $gridType;
        return $this;
    }

    public function getGridType() {
        return $this->gridType;
    }

    public function setGridType(int $gridType) {
        $this->gridType = $gridType;
    }
    public function userList(array $userList): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInner {
        $this->userList = $userList;
        return $this;
    }

    public function getUserList() {
        return $this->userList;
    }

    public function setUserList(array $userList) {
        $this->userList = $userList;
    }
    public function videoType(int $videoType): V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInner {
        $this->videoType = $videoType;
        return $this;
    }

    public function getVideoType() {
        return $this->videoType;
    }

    public function setVideoType(int $videoType) {
        $this->videoType = $videoType;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'grid_id' => 'string',
        'grid_type' => 'int',
        'user_list' => '\wemeet\openapi\service\layout\model\V1MeetingsMeetingIdAdvancedLayoutsPost200ResponseLayoutListInnerPageListInnerUserSeatListInnerUserListInner[]',
        'video_type' => 'int'
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
        'user_list' => null,
        'video_type' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'grid_id' => false,
        'grid_type' => false,
        'user_list' => false,
        'video_type' => false
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
        'user_list' => 'user_list',
        'video_type' => 'video_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grid_id' => 'setGridId',
        'grid_type' => 'setGridType',
        'user_list' => 'setUserList',
        'video_type' => 'setVideoType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grid_id' => 'getGridId',
        'grid_type' => 'getGridType',
        'user_list' => 'getUserList',
        'video_type' => 'getVideoType'
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
            'user_list' => $this->userList,
            'video_type' => $this->videoType,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

