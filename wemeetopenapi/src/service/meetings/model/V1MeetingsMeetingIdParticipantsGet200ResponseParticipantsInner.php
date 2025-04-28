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


class V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner implements ModelInterface, \JsonSerializable
{

    /**
     * 用户的客户端版本。当用户在会中时才能返回。
    * 类型：string
     */
    protected $appVersion = null;

    /**
     * 麦克风状态： true：开启 false：关闭
    * 类型：bool
     */
    protected $audioState = null;

    /**
     * 专属字段
    * 类型：string
     */
    protected $customerData = null;

    /**
     * 用户的终端设备类型： 0：PSTN 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序 9：voip、sip 设备（即MRA设备） 10：linux 20：Rooms for Touch Windows 21：Rooms for Touch MacOS 22：Rooms for Touch Android 30：Controller for Touch Windows 32：Controller for Touch Android 33：Controller for Touch iOS/iPadOS
    * 类型：int
     */
    protected $instanceid = null;

    /**
     * 用户的 IP 地址。当用户在会中时才能返回。
    * 类型：string
     */
    protected $ip = null;

    /**
     * 参会者加入会议时间戳（单位秒）。
    * 类型：string
     */
    protected $joinTime = null;

    /**
     * 入会方式： 0：PSTN 普通用户，标准的手机或固话类型 1：普通 VOIP 用户 2：附属投屏 VOIP 3：linux sdk for VOIP 4：附属语音 PSTN 5：附属视频 PSTN 6：linux sdk for PSTN
    * 类型：int
     */
    protected $joinType = null;

    /**
     * 参会者离开会议时间戳（单位秒）。
    * 类型：string
     */
    protected $leftTime = null;

    /**
     * 用户的连接方式：UDP、TCP、未知，当用户在会中时才能返回。
    * 类型：string
     */
    protected $linkType = null;

    /**
     * 用户的地理位置信息。当用户在会中时才能返回。
    * 类型：string
     */
    protected $location = null;

    /**
     * 当场会议的用户临时 ID，可用于会控操作，适用于所有用户。
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * 网络类型：有线、WIFI、2G、3G、4G、未知。当用户在会中时才能返回。
    * 类型：string
     */
    protected $net = null;

    /**
    * 类型：string
     */
    protected $openId = null;

    /**
     * 参会者手机号 hash 值 SHA256（手机号 + \"/\" + secretid）。
    * 类型：string
     */
    protected $phone = null;

    /**
     * 屏幕共享状态： true：开启 false：关闭
    * 类型：bool
     */
    protected $screenSharedState = null;

    /**
     * 入会用户名（base64）。
    * 类型：string
     */
    protected $userName = null;

    /**
     * 用户角色： 0：普通成员角色 1：创建者角色 2：主持人 3：创建者+主持人 4：游客 5：游客+主持人 6：联席主持人 7：创建者+联席主持人
    * 类型：int
     */
    protected $userRole = null;

    /**
     * 参会者用户 ID。 使用企业自建应用鉴权方式（JWT）时，该值为企业唯一用户标识。
    * 类型：string
     */
    protected $userid = null;

    /**
     * 用户的身份 ID，仅适用于单场会议。
    * 类型：string
     */
    protected $uuid = null;

    /**
     * 摄像头状态： true：开启 false：关闭
    * 类型：bool
     */
    protected $videoState = null;

    /**
     * 网络研讨会成员角色： 0：普通参会角色 1：内部嘉宾 2：外部嘉宾 3：邀请链接入会嘉宾 4：观众 5：有音视频权限的研讨会观众
    * 类型：int
     */
    protected $webinarMemberRole = null;

    public function __construct(
        $jsonArray = []
    ) {
        if (isset($jsonArray['app_version'])) {
            $this->appVersion = $jsonArray['app_version'];
        }
        if (isset($jsonArray['audio_state'])) {
            $this->audioState = $jsonArray['audio_state'];
        }
        if (isset($jsonArray['customer_data'])) {
            $this->customerData = $jsonArray['customer_data'];
        }
        if (isset($jsonArray['instanceid'])) {
            $this->instanceid = $jsonArray['instanceid'];
        }
        if (isset($jsonArray['ip'])) {
            $this->ip = $jsonArray['ip'];
        }
        if (isset($jsonArray['join_time'])) {
            $this->joinTime = $jsonArray['join_time'];
        }
        if (isset($jsonArray['join_type'])) {
            $this->joinType = $jsonArray['join_type'];
        }
        if (isset($jsonArray['left_time'])) {
            $this->leftTime = $jsonArray['left_time'];
        }
        if (isset($jsonArray['link_type'])) {
            $this->linkType = $jsonArray['link_type'];
        }
        if (isset($jsonArray['location'])) {
            $this->location = $jsonArray['location'];
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['net'])) {
            $this->net = $jsonArray['net'];
        }
        if (isset($jsonArray['open_id'])) {
            $this->openId = $jsonArray['open_id'];
        }
        if (isset($jsonArray['phone'])) {
            $this->phone = $jsonArray['phone'];
        }
        if (isset($jsonArray['screen_shared_state'])) {
            $this->screenSharedState = $jsonArray['screen_shared_state'];
        }
        if (isset($jsonArray['user_name'])) {
            $this->userName = $jsonArray['user_name'];
        }
        if (isset($jsonArray['user_role'])) {
            $this->userRole = $jsonArray['user_role'];
        }
        if (isset($jsonArray['userid'])) {
            $this->userid = $jsonArray['userid'];
        }
        if (isset($jsonArray['uuid'])) {
            $this->uuid = $jsonArray['uuid'];
        }
        if (isset($jsonArray['video_state'])) {
            $this->videoState = $jsonArray['video_state'];
        }
        if (isset($jsonArray['webinar_member_role'])) {
            $this->webinarMemberRole = $jsonArray['webinar_member_role'];
        }
    }

    public function appVersion(string $appVersion): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion() {
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion) {
        $this->appVersion = $appVersion;
    }
    public function audioState(bool $audioState): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->audioState = $audioState;
        return $this;
    }

    public function getAudioState() {
        return $this->audioState;
    }

    public function setAudioState(bool $audioState) {
        $this->audioState = $audioState;
    }
    public function customerData(string $customerData): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->customerData = $customerData;
        return $this;
    }

    public function getCustomerData() {
        return $this->customerData;
    }

    public function setCustomerData(string $customerData) {
        $this->customerData = $customerData;
    }
    public function instanceid(int $instanceid): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function ip(string $ip): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->ip = $ip;
        return $this;
    }

    public function getIp() {
        return $this->ip;
    }

    public function setIp(string $ip) {
        $this->ip = $ip;
    }
    public function joinTime(string $joinTime): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->joinTime = $joinTime;
        return $this;
    }

    public function getJoinTime() {
        return $this->joinTime;
    }

    public function setJoinTime(string $joinTime) {
        $this->joinTime = $joinTime;
    }
    public function joinType(int $joinType): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->joinType = $joinType;
        return $this;
    }

    public function getJoinType() {
        return $this->joinType;
    }

    public function setJoinType(int $joinType) {
        $this->joinType = $joinType;
    }
    public function leftTime(string $leftTime): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->leftTime = $leftTime;
        return $this;
    }

    public function getLeftTime() {
        return $this->leftTime;
    }

    public function setLeftTime(string $leftTime) {
        $this->leftTime = $leftTime;
    }
    public function linkType(string $linkType): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->linkType = $linkType;
        return $this;
    }

    public function getLinkType() {
        return $this->linkType;
    }

    public function setLinkType(string $linkType) {
        $this->linkType = $linkType;
    }
    public function location(string $location): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->location = $location;
        return $this;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation(string $location) {
        $this->location = $location;
    }
    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function net(string $net): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->net = $net;
        return $this;
    }

    public function getNet() {
        return $this->net;
    }

    public function setNet(string $net) {
        $this->net = $net;
    }
    public function openId(string $openId): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->openId = $openId;
        return $this;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId(string $openId) {
        $this->openId = $openId;
    }
    public function phone(string $phone): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }
    public function screenSharedState(bool $screenSharedState): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->screenSharedState = $screenSharedState;
        return $this;
    }

    public function getScreenSharedState() {
        return $this->screenSharedState;
    }

    public function setScreenSharedState(bool $screenSharedState) {
        $this->screenSharedState = $screenSharedState;
    }
    public function userName(string $userName): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->userName = $userName;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName(string $userName) {
        $this->userName = $userName;
    }
    public function userRole(int $userRole): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->userRole = $userRole;
        return $this;
    }

    public function getUserRole() {
        return $this->userRole;
    }

    public function setUserRole(int $userRole) {
        $this->userRole = $userRole;
    }
    public function userid(string $userid): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function uuid(string $uuid): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid() {
        return $this->uuid;
    }

    public function setUuid(string $uuid) {
        $this->uuid = $uuid;
    }
    public function videoState(bool $videoState): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->videoState = $videoState;
        return $this;
    }

    public function getVideoState() {
        return $this->videoState;
    }

    public function setVideoState(bool $videoState) {
        $this->videoState = $videoState;
    }
    public function webinarMemberRole(int $webinarMemberRole): V1MeetingsMeetingIdParticipantsGet200ResponseParticipantsInner {
        $this->webinarMemberRole = $webinarMemberRole;
        return $this;
    }

    public function getWebinarMemberRole() {
        return $this->webinarMemberRole;
    }

    public function setWebinarMemberRole(int $webinarMemberRole) {
        $this->webinarMemberRole = $webinarMemberRole;
    }

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_version' => 'string',
        'audio_state' => 'bool',
        'customer_data' => 'string',
        'instanceid' => 'int',
        'ip' => 'string',
        'join_time' => 'string',
        'join_type' => 'int',
        'left_time' => 'string',
        'link_type' => 'string',
        'location' => 'string',
        'ms_open_id' => 'string',
        'net' => 'string',
        'open_id' => 'string',
        'phone' => 'string',
        'screen_shared_state' => 'bool',
        'user_name' => 'string',
        'user_role' => 'int',
        'userid' => 'string',
        'uuid' => 'string',
        'video_state' => 'bool',
        'webinar_member_role' => 'int'
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
        'audio_state' => null,
        'customer_data' => null,
        'instanceid' => 'int64',
        'ip' => null,
        'join_time' => null,
        'join_type' => 'int64',
        'left_time' => null,
        'link_type' => null,
        'location' => null,
        'ms_open_id' => null,
        'net' => null,
        'open_id' => null,
        'phone' => null,
        'screen_shared_state' => null,
        'user_name' => null,
        'user_role' => 'int64',
        'userid' => null,
        'uuid' => null,
        'video_state' => null,
        'webinar_member_role' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_version' => false,
        'audio_state' => false,
        'customer_data' => false,
        'instanceid' => false,
        'ip' => false,
        'join_time' => false,
        'join_type' => false,
        'left_time' => false,
        'link_type' => false,
        'location' => false,
        'ms_open_id' => false,
        'net' => false,
        'open_id' => false,
        'phone' => false,
        'screen_shared_state' => false,
        'user_name' => false,
        'user_role' => false,
        'userid' => false,
        'uuid' => false,
        'video_state' => false,
        'webinar_member_role' => false
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
        'audio_state' => 'audio_state',
        'customer_data' => 'customer_data',
        'instanceid' => 'instanceid',
        'ip' => 'ip',
        'join_time' => 'join_time',
        'join_type' => 'join_type',
        'left_time' => 'left_time',
        'link_type' => 'link_type',
        'location' => 'location',
        'ms_open_id' => 'ms_open_id',
        'net' => 'net',
        'open_id' => 'open_id',
        'phone' => 'phone',
        'screen_shared_state' => 'screen_shared_state',
        'user_name' => 'user_name',
        'user_role' => 'user_role',
        'userid' => 'userid',
        'uuid' => 'uuid',
        'video_state' => 'video_state',
        'webinar_member_role' => 'webinar_member_role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_version' => 'setAppVersion',
        'audio_state' => 'setAudioState',
        'customer_data' => 'setCustomerData',
        'instanceid' => 'setInstanceid',
        'ip' => 'setIp',
        'join_time' => 'setJoinTime',
        'join_type' => 'setJoinType',
        'left_time' => 'setLeftTime',
        'link_type' => 'setLinkType',
        'location' => 'setLocation',
        'ms_open_id' => 'setMsOpenId',
        'net' => 'setNet',
        'open_id' => 'setOpenId',
        'phone' => 'setPhone',
        'screen_shared_state' => 'setScreenSharedState',
        'user_name' => 'setUserName',
        'user_role' => 'setUserRole',
        'userid' => 'setUserid',
        'uuid' => 'setUuid',
        'video_state' => 'setVideoState',
        'webinar_member_role' => 'setWebinarMemberRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_version' => 'getAppVersion',
        'audio_state' => 'getAudioState',
        'customer_data' => 'getCustomerData',
        'instanceid' => 'getInstanceid',
        'ip' => 'getIp',
        'join_time' => 'getJoinTime',
        'join_type' => 'getJoinType',
        'left_time' => 'getLeftTime',
        'link_type' => 'getLinkType',
        'location' => 'getLocation',
        'ms_open_id' => 'getMsOpenId',
        'net' => 'getNet',
        'open_id' => 'getOpenId',
        'phone' => 'getPhone',
        'screen_shared_state' => 'getScreenSharedState',
        'user_name' => 'getUserName',
        'user_role' => 'getUserRole',
        'userid' => 'getUserid',
        'uuid' => 'getUuid',
        'video_state' => 'getVideoState',
        'webinar_member_role' => 'getWebinarMemberRole'
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
            'audio_state' => $this->audioState,
            'customer_data' => $this->customerData,
            'instanceid' => $this->instanceid,
            'ip' => $this->ip,
            'join_time' => $this->joinTime,
            'join_type' => $this->joinType,
            'left_time' => $this->leftTime,
            'link_type' => $this->linkType,
            'location' => $this->location,
            'ms_open_id' => $this->msOpenId,
            'net' => $this->net,
            'open_id' => $this->openId,
            'phone' => $this->phone,
            'screen_shared_state' => $this->screenSharedState,
            'user_name' => $this->userName,
            'user_role' => $this->userRole,
            'userid' => $this->userid,
            'uuid' => $this->uuid,
            'video_state' => $this->videoState,
            'webinar_member_role' => $this->webinarMemberRole,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

