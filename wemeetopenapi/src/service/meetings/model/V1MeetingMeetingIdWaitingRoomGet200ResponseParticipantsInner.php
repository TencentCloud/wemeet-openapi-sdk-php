<?php

/**
 * 腾讯会议OpenAPI
 *
 * SAAS版RESTFUL风格API
 *
 * The version of the OpenAPI document: v1.0.2
 */
namespace wemeet\openapi\service\meetings\model;

use wemeet\openapi\core\xhttp\ModelInterface;


class V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 应用版本
    * 类型：string
     */
    protected $appVersion = null;

    /**
     * 专属链接进入等候室的昵称
    * 类型：string
     */
    protected $customerData = null;

    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS
    * 类型：string
     */
    protected $instanceid = null;

    /**
     * 加入时间（单位：毫秒）
    * 类型：int
     */
    protected $joinTime = null;

    /**
     * 离开时间（单位：毫秒）
    * 类型：int
     */
    protected $leftTime = null;

    /**
     * 当场会议的用户临时 ID，可用于会控操作，适用于所有用户。
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * OAuth2.0 鉴权用户的ID。
    * 类型：string
     */
    protected $openId = null;

    /**
     * 入会用户名（base64）
    * 类型：string
     */
    protected $userName = null;

    /**
     * 成员用户 ID
    * 类型：string
     */
    protected $userid = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['app_version'])) {
            $this->appVersion = $jsonArray['app_version'];
        }
        if (isset($jsonArray['customer_data'])) {
            $this->customerData = $jsonArray['customer_data'];
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        }
        if (isset($jsonArray['join_time'])) {
            $this->joinTime = $jsonArray['join_time'];
        }
        if (isset($jsonArray['left_time'])) {
            $this->leftTime = $jsonArray['left_time'];
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['open_id'])) {
            $this->openId = $jsonArray['open_id'];
        }
        if (isset($jsonArray['user_name'])) {
            $this->userName = $jsonArray['user_name'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
    }

    public function appVersion(string $appVersion): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion() {
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion) {
        $this->appVersion = $appVersion;
    }
    public function customerData(string $customerData): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->customerData = $customerData;
        return $this;
    }

    public function getCustomerData() {
        return $this->customerData;
    }

    public function setCustomerData(string $customerData) {
        $this->customerData = $customerData;
    }
    public function instanceid(string $instanceid): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(string $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function joinTime(int $joinTime): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->joinTime = $joinTime;
        return $this;
    }

    public function getJoinTime() {
        return $this->joinTime;
    }

    public function setJoinTime(int $joinTime) {
        $this->joinTime = $joinTime;
    }
    public function leftTime(int $leftTime): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->leftTime = $leftTime;
        return $this;
    }

    public function getLeftTime() {
        return $this->leftTime;
    }

    public function setLeftTime(int $leftTime) {
        $this->leftTime = $leftTime;
    }
    public function msOpenId(string $msOpenId): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function openId(string $openId): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->openId = $openId;
        return $this;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId(string $openId) {
        $this->openId = $openId;
    }
    public function userName(string $userName): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->userName = $userName;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName(string $userName) {
        $this->userName = $userName;
    }
    public function userid(string $userid): V1MeetingMeetingIdWaitingRoomGet200ResponseParticipantsInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_version' => 'string',
        'customer_data' => 'string',
        'instanceid' => 'string',
        'join_time' => 'int',
        'left_time' => 'int',
        'ms_open_id' => 'string',
        'open_id' => 'string',
        'user_name' => 'string',
        'userid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_version' => null,
        'customer_data' => null,
        'instanceid' => null,
        'join_time' => 'int64',
        'left_time' => 'int64',
        'ms_open_id' => null,
        'open_id' => null,
        'user_name' => null,
        'userid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_version' => false,
        'customer_data' => false,
        'instanceid' => false,
        'join_time' => false,
        'left_time' => false,
        'ms_open_id' => false,
        'open_id' => false,
        'user_name' => false,
        'userid' => false
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
        'app_version' => 'app_version',
        'customer_data' => 'customer_data',
        'instanceid' => 'instanceid',
        'join_time' => 'join_time',
        'left_time' => 'left_time',
        'ms_open_id' => 'ms_open_id',
        'open_id' => 'open_id',
        'user_name' => 'user_name',
        'userid' => 'userid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_version' => 'setAppVersion',
        'customer_data' => 'setCustomerData',
        'instanceid' => 'setInstanceid',
        'join_time' => 'setJoinTime',
        'left_time' => 'setLeftTime',
        'ms_open_id' => 'setMsOpenId',
        'open_id' => 'setOpenId',
        'user_name' => 'setUserName',
        'userid' => 'setUserid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_version' => 'getAppVersion',
        'customer_data' => 'getCustomerData',
        'instanceid' => 'getInstanceid',
        'join_time' => 'getJoinTime',
        'left_time' => 'getLeftTime',
        'ms_open_id' => 'getMsOpenId',
        'open_id' => 'getOpenId',
        'user_name' => 'getUserName',
        'userid' => 'getUserid'
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
            'app_version' => $this->appVersion,
            'customer_data' => $this->customerData,
            'instanceid' => $this->instanceid,
            'join_time' => $this->joinTime,
            'left_time' => $this->leftTime,
            'ms_open_id' => $this->msOpenId,
            'open_id' => $this->openId,
            'user_name' => $this->userName,
            'userid' => $this->userid,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

