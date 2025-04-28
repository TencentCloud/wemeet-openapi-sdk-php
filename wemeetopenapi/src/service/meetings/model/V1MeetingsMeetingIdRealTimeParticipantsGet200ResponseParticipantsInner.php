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


class V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner implements ModelInterface, \JsonSerializable
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
    * 类型：string
     */
    protected $customerData = null;

    /**
     * 用户的终端设备类型： 0:pstn或mra 1：PC 2：Mac 3：Android 4：iOS 5：Web 6：iPad 7：Android Pad 8：小程序
    * 类型：int
     */
    protected $instanceid = null;

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
     * 当场会议的用户临时 ID，可用于会控操作，适用于所有用户。
    * 类型：string
     */
    protected $msOpenId = null;

    /**
     * OAuth2.0 鉴权用户请使用 open_id
    * 类型：string
     */
    protected $openId = null;

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
     * 同企业内部请使用企业唯一用户标识； 其他企业，个人，小程序没有
    * 类型：string
     */
    protected $userid = null;

    /**
     * 摄像头状态： true：开启 false：关闭
    * 类型：bool
     */
    protected $videoState = null;

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
        if (isset($jsonArray['join_time'])) {
            $this->joinTime = $jsonArray['join_time'];
        }
        if (isset($jsonArray['join_type'])) {
            $this->joinType = $jsonArray['join_type'];
        }
        if (isset($jsonArray['ms_open_id'])) {
            $this->msOpenId = $jsonArray['ms_open_id'];
        }
        if (isset($jsonArray['open_id'])) {
            $this->openId = $jsonArray['open_id'];
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
        if (isset($jsonArray['video_state'])) {
            $this->videoState = $jsonArray['video_state'];
        }
    }

    public function appVersion(string $appVersion): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion() {
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion) {
        $this->appVersion = $appVersion;
    }
    public function audioState(bool $audioState): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->audioState = $audioState;
        return $this;
    }

    public function getAudioState() {
        return $this->audioState;
    }

    public function setAudioState(bool $audioState) {
        $this->audioState = $audioState;
    }
    public function customerData(string $customerData): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->customerData = $customerData;
        return $this;
    }

    public function getCustomerData() {
        return $this->customerData;
    }

    public function setCustomerData(string $customerData) {
        $this->customerData = $customerData;
    }
    public function instanceid(int $instanceid): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->instanceid = $instanceid;
        return $this;
    }

    public function getInstanceid() {
        return $this->instanceid;
    }

    public function setInstanceid(int $instanceid) {
        $this->instanceid = $instanceid;
    }
    public function joinTime(string $joinTime): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->joinTime = $joinTime;
        return $this;
    }

    public function getJoinTime() {
        return $this->joinTime;
    }

    public function setJoinTime(string $joinTime) {
        $this->joinTime = $joinTime;
    }
    public function joinType(int $joinType): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->joinType = $joinType;
        return $this;
    }

    public function getJoinType() {
        return $this->joinType;
    }

    public function setJoinType(int $joinType) {
        $this->joinType = $joinType;
    }
    public function msOpenId(string $msOpenId): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->msOpenId = $msOpenId;
        return $this;
    }

    public function getMsOpenId() {
        return $this->msOpenId;
    }

    public function setMsOpenId(string $msOpenId) {
        $this->msOpenId = $msOpenId;
    }
    public function openId(string $openId): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->openId = $openId;
        return $this;
    }

    public function getOpenId() {
        return $this->openId;
    }

    public function setOpenId(string $openId) {
        $this->openId = $openId;
    }
    public function screenSharedState(bool $screenSharedState): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->screenSharedState = $screenSharedState;
        return $this;
    }

    public function getScreenSharedState() {
        return $this->screenSharedState;
    }

    public function setScreenSharedState(bool $screenSharedState) {
        $this->screenSharedState = $screenSharedState;
    }
    public function userName(string $userName): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->userName = $userName;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName(string $userName) {
        $this->userName = $userName;
    }
    public function userRole(int $userRole): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->userRole = $userRole;
        return $this;
    }

    public function getUserRole() {
        return $this->userRole;
    }

    public function setUserRole(int $userRole) {
        $this->userRole = $userRole;
    }
    public function userid(string $userid): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->userid = $userid;
        return $this;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid(string $userid) {
        $this->userid = $userid;
    }
    public function videoState(bool $videoState): V1MeetingsMeetingIdRealTimeParticipantsGet200ResponseParticipantsInner {
        $this->videoState = $videoState;
        return $this;
    }

    public function getVideoState() {
        return $this->videoState;
    }

    public function setVideoState(bool $videoState) {
        $this->videoState = $videoState;
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
        'join_time' => 'string',
        'join_type' => 'int',
        'ms_open_id' => 'string',
        'open_id' => 'string',
        'screen_shared_state' => 'bool',
        'user_name' => 'string',
        'user_role' => 'int',
        'userid' => 'string',
        'video_state' => 'bool'
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
        'join_time' => null,
        'join_type' => 'int64',
        'ms_open_id' => null,
        'open_id' => null,
        'screen_shared_state' => null,
        'user_name' => null,
        'user_role' => 'int64',
        'userid' => null,
        'video_state' => null
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
        'join_time' => false,
        'join_type' => false,
        'ms_open_id' => false,
        'open_id' => false,
        'screen_shared_state' => false,
        'user_name' => false,
        'user_role' => false,
        'userid' => false,
        'video_state' => false
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
        'join_time' => 'join_time',
        'join_type' => 'join_type',
        'ms_open_id' => 'ms_open_id',
        'open_id' => 'open_id',
        'screen_shared_state' => 'screen_shared_state',
        'user_name' => 'user_name',
        'user_role' => 'user_role',
        'userid' => 'userid',
        'video_state' => 'video_state'
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
        'join_time' => 'setJoinTime',
        'join_type' => 'setJoinType',
        'ms_open_id' => 'setMsOpenId',
        'open_id' => 'setOpenId',
        'screen_shared_state' => 'setScreenSharedState',
        'user_name' => 'setUserName',
        'user_role' => 'setUserRole',
        'userid' => 'setUserid',
        'video_state' => 'setVideoState'
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
        'join_time' => 'getJoinTime',
        'join_type' => 'getJoinType',
        'ms_open_id' => 'getMsOpenId',
        'open_id' => 'getOpenId',
        'screen_shared_state' => 'getScreenSharedState',
        'user_name' => 'getUserName',
        'user_role' => 'getUserRole',
        'userid' => 'getUserid',
        'video_state' => 'getVideoState'
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
            'join_time' => $this->joinTime,
            'join_type' => $this->joinType,
            'ms_open_id' => $this->msOpenId,
            'open_id' => $this->openId,
            'screen_shared_state' => $this->screenSharedState,
            'user_name' => $this->userName,
            'user_role' => $this->userRole,
            'userid' => $this->userid,
            'video_state' => $this->videoState,
        ];
        return array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    }
}

